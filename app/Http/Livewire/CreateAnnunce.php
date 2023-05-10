<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;
use App\Models\Annunce;
use Livewire\Component;
use App\Models\Category;

class CreateAnnunce extends Component
{
    public $title;
    public $body;
    public $price;
    public $category_id;


    public function store()
    {

        
        Annunce::create([
                'title'=> $this->title,
                'body'=> $this->body,
                'price'=>$this->price,
                'category_id'=>$this->category_id,
            ]);
            session()->flash('success','Articolo creato con successo');
    }

    public function render()
    {
        $categories= Category::all();
        
        return view('livewire.create-annunce',compact('categories'));
    }

}

