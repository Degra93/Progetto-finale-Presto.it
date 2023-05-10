<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;
use App\Models\Annunce;
use Livewire\Component;

class CreateAnnunce extends Component
{
    public $title;
    public $body;
    public $price;


    public function store()
    {

        
        Annunce::create([
                'title'=> $this->title,
                'body'=> $this->body,
                'price'=>$this->price,
            ]);
            session()->flash('success','Articolo creato con successo');
    }

    public function render()
    {
        return view('livewire.create-annunce');
    }

}

