<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use App\Models\Category;
use Livewire\Component;

class CreateAnnouncement extends Component
{

    public $title;
    public $body;
    public $price;
    public $category;

    protected $rules = [
        'title'=>'required|min:4',
        'body'=>'required|min:8',
        'price'=>'required|numeric',
        'category'=>'required',
    ];

    protected $messages = [
        // 'required'=>'Richiesto '
        'min'=>'Troppo corto',
    ];

    public function store()
    { 
        $category= Category::find($this->category);
        $category->announcements()->create([
            'title'=> $this->title,
                'body'=> $this->body,
                'price'=>$this->price,
        ]); 
        // Announcement::create([
                
                
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
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }
}
