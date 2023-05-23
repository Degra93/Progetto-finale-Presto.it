<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateAnnouncement extends Component
{
    use WithFileUploads;

    public $title;
    public $body;
    public $price;
    public $category;
    public $temporary_images;
    public $images = [];
    public $announcement;

    protected $rules = [
        'title'=>'required|min:4',
        'body'=>'required|min:8',
        'price'=>'required|numeric',
        'category'=>'required',
        'images.*' => 'image|max:1024',
        'temporary_images.*'=>'image|max:1024',
    ];

    protected $messages = [
        // 'required'=>'Richiesto '
        'min'=>'Troppo corto',
        'images.*.image'=>'Deve essere un immagine',
        'temporary_images.*.image'=>'Deve essere un immagine',
    ];


    public function updatedTemporaryImages(){
        if($this->validate([
            'temporary_images.*' => 'image|max:1024',
        ])){
            foreach ($this->temporary_images as $image){
                $this->images[] =$image;
                        }
            }
    }

    public function removeImage($key){
        if (in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }
    }
   
    public function store()
    { 
        $this->validate();
        $category= Category::find($this->category);
        $this->announcement=$category->announcements()->create([
            'title'=> $this->title,
                'body'=> $this->body,
                'price'=>$this->price,
        ]); 
        
        if(count($this->images)){
            foreach ($this->images as $image){
        
                $this->announcement->images()->create(['path'=> $image->store('images','public')]);
            }
        }
        $this->announcement->user()->associate(Auth::user());
        $this->announcement->save();
        // Auth::user()->announcements()->save($announcement);

        // Announcement::create([
            // 'title'=> $this->title,
            // 'body'=> $this->body,
            // 'price'=>$this->price,   w
                
        //     ]);
            $this->cleanForm();
            session()->flash('success','Articolo creato con successo');
    }


    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function cleanForm(){
        $this->title='';
        $this->body='';
        $this->price='';
        $this->images =[];
        
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }
}
