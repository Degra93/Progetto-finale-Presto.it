<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnnouncementController extends Controller
{
    public function createAnnouncement(){
        return view('announcement.create');
    }

    public function showAnnouncement(Announcement $announcement){
        return view('announcement.show', compact('announcement'));
    }

    public function indexAnnouncement(){
        // $announcements = Announcement::all();
        $announcements = Announcement::where('is_accepted',true)->paginate(10);
        return view('announcement.index', compact('announcements'));
    }
}
