<?php

namespace App\Http\Controllers;

use App\Models\Admin\Blog;
use App\Models\Admin\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    // send home page

    public function index()
    {

        //fetch the latest 3 blogs
        $blogs = Blog::latest()->limit(3)->get();

        //get the date according to ending format
        $today = date('Y-m-d', strtotime(Carbon::now()));

        //get the latest 4 events
        $today = date('Y-m-d', strtotime($today));

        $events = Event::where('ending_date', '>=', $today)->offset(0)->limit(4)->orderBy('created_at', 'desc')->get();

        return view('user.pages.index', compact('blogs', 'events'));
    }
}
