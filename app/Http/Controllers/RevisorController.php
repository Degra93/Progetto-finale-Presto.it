<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function index(){
        $announceToCheck = Announcement::where('is_accepted',null)->get();
        $annunces = Announcement::all();
        return view('revisore.index',compact('announceToCheck','annunces'));




    }


    public function OkAnnuncio(Announcement $announcement){
        $announcement->setAccepted(true);
        return redirect()->back()->with('message','Annuncio accettato');
    }

    public function NoAnnuncio(Announcement $announcement){
        $announcement->setAccepted(false);
        return redirect()->back()->with('message','Annuncio rifiutato');
    }
}
