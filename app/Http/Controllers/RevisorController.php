<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\BecomeRevisor;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index()
    {
        $announceToCheck = Announcement::where('is_accepted', null)->get();
        // $announceToCheck = Announcement::where('is_accepted',null)->first();
        return view('revisore.index', compact('announceToCheck'));
    }


    public function OkAnnuncio(Announcement $announcement)
    {
        $announcement->setAccepted(true);
        return redirect()->back()->with('success', 'Annuncio accettato');
    }

    public function NoAnnuncio(Announcement $announcement)
    {
        $announcement->setAccepted(false);
        return redirect()->back()->with('success', 'Annuncio rifiutato');
    }

    public function askRevisor()
    {
        Mail::to('hr@shopypro.it')->send(new BecomeRevisor(Auth::user()));
        return redirect()->back()->with('messages', 'Hai chiesto di diventare revisori, attendi conferma!');
    }

    public function makeRevisor(User $user)
    {
        Artisan::call('app:make-user-revisor', ['email' => $user->email]);
        return redirect('/')->with('messages', 'Hai reso un utente revisore:');
    }
}
