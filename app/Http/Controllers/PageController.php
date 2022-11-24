<?php

namespace App\Http\Controllers;

use App\Models\Admin\Blog;
use App\Models\Admin\Event;
use App\Models\Admin\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function whoWeAre()
    {
        $pageName = 'Who We Are';
        return view('user.pages.whoWeAre', compact('pageName'));
    }
    public function timeline()
    {
        $pageName = 'Who We Are';
        return view('user.pages.timeline', compact('pageName'));
    }
    public function admissionConsultation()
    {
        $pageName = 'Admisssion Consultation';
        return view('user.pages.admissionConsultation', compact('pageName'));
    }
    public function visaExpress()
    {
        $pageName = 'Visa Express';
        return view('user.pages.visaExpress', compact('pageName'));
    }
    public function phdAdmissionService()
    {
        $pageName = 'Phd Admission Service';
        return view('user.pages.phdAdmissionService', compact('pageName'));
    }
    public function scholarshipGuidance()
    {
        $pageName = 'Scholarship Guidance';
        return view('user.pages.scholarshipGuidance', compact('pageName'));
    }
    public function departureBriefing()
    {
        $pageName = 'Pre-Departure Briefing';
        return view('user.pages.departureBriefing', compact('pageName'));
    }
    public function postalCare()
    {
        $pageName = 'Pastoral Care In Abroad';
        return view('user.pages.postalCare', compact('pageName'));
    }
    public function studyInAus()
    {
        $pageName = 'Study In Australia';
        return view('user.pages.studyInAus', compact('pageName'));
    }
    public function studyInCanada()
    {
        $pageName = 'Study In Canada';
        return view('user.pages.studyInCanada', compact('pageName'));
    }
    public function studyInDubai()
    {
        $pageName = 'Study In Dubai';
        return view('user.pages.studyInDubai', compact('pageName'));
    }
    public function studyInEurope()
    {
        $pageName = 'Study In Europe';
        return view('user.pages.studyInGermany', compact('pageName'));
    }
    public function studyInMalyasia()
    {
        $pageName = 'Study In Malyasia';
        return view('user.pages.studyInMalyasia', compact('pageName'));
    }
    public function studyInSwitzerland()
    {
        $pageName = 'Study In Switzerland';
        return view('user.pages.studyInSwitzerland', compact('pageName'));
    }
    public function studyInUk()
    {
        $pageName = 'Study In UK';
        return view('user.pages.studyInUk', compact('pageName'));
    }
    public function studyInUsa()
    {
        $pageName = 'Study In USA';
        return view('user.pages.studyInUsa', compact('pageName'));
    }
    public function scholarship()
    {
        $pageName = 'Scholarship';
        return view('user.pages.scholarship', compact('pageName'));
    }
    public function event(Request $request, $page = 1)
    {
        $pageName = 'Event';
        $today = date('Y-m-d', strtotime(Carbon::now()));

        //get the latest 4 events
        $today = date('Y-m-d', strtotime($today));
        $total_event = Event::where('ending_date', '>=', $today)->count();
        $event_per_page = 10;
        $total_page = ceil($total_event / $event_per_page);
        $offset = ($page - 1) * $event_per_page;
        $events = Event::offset($offset)->limit($event_per_page)->orderBy('id', 'desc')->get();

        return view('user.pages.event', compact('events', 'total_page', 'page', 'pageName'));
    }
    public function blog(Request $request, $page = 1)
    {
        $pageName = 'Blog';
        $total_blog = Blog::count();
        $blog_per_page = 3;
        $total_page = ceil($total_blog / $blog_per_page);
        $offset = ($page - 1) * $blog_per_page;
        $blogs = Blog::offset($offset)->limit($blog_per_page)->orderBy('id', 'desc')->get();
        $recent_blogs = Blog::latest()->limit(4)->get();
        $tags = Tag::all();

        return view('user.pages.blog', compact('blogs', 'recent_blogs', 'tags', 'total_page', 'page', 'pageName'));
    }
    public function blogDetails(Request $request)
    {
        if(!isset($request->id)){
            return redirect()->route('blog');
        }
        //dd($request->id);
        $pageName = 'Blog Details';
        $blogs = Blog::Where('id', $request->id);
        if($blogs==""){
            return redirect()->route('blog');
        }
        $blog = $blogs->first();
        $recent_blogs = Blog::latest()->limit(4)->get();
        //dd($blog);

        return view('user.pages.blogDetails', compact(['pageName', 'blog', 'recent_blogs']));
    }
    public function dhakaOffice()
    {
        $pageName = 'Dhaka Office';
        return view('user.pages.dhakaOffice', compact('pageName'));
    }
    public function sylhetOffice()
    {
        $pageName = 'Sylhet Office';
        return view('user.pages.sylhetOffice', compact('pageName'));
    }

    public function schoolOfEnglish()
    {
        $pageName = 'School Of English';
        return view('user.pages.schoolOfEnglish', compact('pageName'));
    }
}
