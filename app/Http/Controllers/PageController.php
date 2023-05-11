<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class PageController extends Controller
{
    public function homepage(){

        $announcements = Announcement::orderBy('created_at', 'desc')->take(6)->get();
    // $announcements = Announcement::latest()->take(6)->get();
    // oppure:
    // $announcements = Announcement::orderBy('created_at', 'desc')->take(6)->get();
        return view('homepage',compact('announcements'));
    }

    public function categoryShow(Category $category){
        return view('categoryShow', compact('category'));

    }
}
