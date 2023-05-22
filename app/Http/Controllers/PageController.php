<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class PageController extends Controller
{
    public function homepage(){

        $announcements = Announcement::where('is_accepted',true)->orderBy('created_at', 'desc')->take(6)->get();
    // $announcements = Announcement::latest()->take(6)->get();
    // oppure:
    // $announcements = Announcement::orderBy('created_at', 'desc')->take(6)->get();
        return view('homepage',compact('announcements'));
    }

    public function categoryShow(Category $category){
        $announcements = $category->announcements()->where('is_accepted', true)->orderBy('created_at', 'desc')->paginate(5);
        return view('categoryShow', compact('category', 'announcements'));
        
        

    }

    public function searchAnnounces(Request $request){
        $announcements = Announcement::search($request->searched)->where('is_accepted', true)->paginate(10);
        return view('announcement.index', compact('announcements'));
    }

    public function setLocale($lang){
        session()->put('locale',$lang);
        return redirect()->back();
    }
}
