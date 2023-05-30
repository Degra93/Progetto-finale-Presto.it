<?php

namespace App\Http\Livewire;

use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use App\Jobs\RemoveFaces;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\ResizeImage;

use App\Models\Announcement;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class CreateAnnouncement extends Component
{
    use WithFileUploads;

    public $title;
    public $extra;
    public $techiche;
    public $body;
    public $price;
    public $category;
    public $temporary_images;
    public $images = [];
    public $announcement;

    protected $rules = [
        'title' => 'required|min:4',
        'body' => 'required|min:8',
        'price' => 'required|numeric|max:30000',
        'category' => 'required',
        'images.*' => 'image|max:1024',
        'temporary_images.*' => 'image|max:2048',
    ];

    protected $messages = [
        // 'required'=>'Richiesto '
        'min' => 'Troppo corto',
        'images.*.image' => 'Deve essere un immagine',
        'temporary_images.*.image' => 'Deve essere un immagine',
        'temporary_images.*.max' => 'Non deve superare 2MB',
    ];


    public function updatedTemporaryImages()
    {
        if ($this->validate([
            'temporary_images.*' => 'image|max:1024',
        ])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }

    public function store()
    {
        $this->validate();
        $category = Category::find($this->category);
        $this->announcement = $category->announcements()->create([
            'title' => $this->title,
            'body' => $this->body,
            'price' => $this->price,
            'techiche'=>$this->techiche,
            'extra'=> $this->extra,
        ]);

        if (count($this->images)) {
            foreach ($this->images as $image) {

                // $this->announcement->images()->create(['path' => $image->store('images', 'public')]);
                $newFileName = "announcements/{$this->announcement->id}";
                $newImage = $this->announcement->images()->create(['path' => $image->store($newFileName, 'public')]);

                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 1000, 600),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id),
                ])->dispatch($newImage->id);
                // dispatch(new ResizeImage($newImage->path, 1000, 600));
                // dispatch(new GoogleVisionSafeSearch($newImage->id));

                // dispatch(new GoogleVisionLabelImage($newImage->id));


                // RemoveFaces::whithChain([
                //     new ResizeImage($newImage->path, 1000, 600),
                //     new GoogleVisionSafeSearch($newImage->id),
                //     new GoogleVisionLabelImage($newImage->id)
                // ])->dispatch($newImage->id);
            }

            File::deleteDirectory(storage_path('/app/livewire-tmp'));
            
            // Storage::deleteDirectory(storage_path('/app/livewire-tmp'));

        }
        $this->announcement->user()->associate(Auth::user());
        $this->announcement->save();
        // Auth::user()->announcements()->save($announcement);

        // Announcement::create([
        // 'title'=> $this->title,
        // 'body'=> $this->body,
        // 'price'=>$this->price,

        //     ]);
        $this->cleanForm();
        session()->flash('success');
    }


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function cleanForm()
    {
        $this->title = '';
        $this->body = '';
        $this->price = '';
        $this->images = [];
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }
}
