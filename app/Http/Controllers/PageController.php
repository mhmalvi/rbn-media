<?php

namespace App\Http\Controllers;

use App\Models\Admin\Articles;
use App\Models\Admin\Blog;
use App\Models\Admin\Event;
use App\Models\Admin\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function whoWeAre()
    {
        $pageName = 'Who We Are';
        return view('user.pages.whoWeAre', compact('pageName'));
    }
    public function aboutRbnEducation()
    {
        $pageName = 'RBN Education';
        return view('user.pages.aboutRbnEducation', compact('pageName'));
    }
    public function ourValues()
    {
        $pageName = 'Our Values';
        return view('user.pages.ourValues', compact('pageName'));
    }
    public function timeline()
    {
        $pageName = 'Who We Are';
        return view('user.pages.timeline', compact('pageName'));
    }
    public function ourGoals()
    {
        $pageName = 'Our Goals';
        return view('user.pages.ourGoals', compact('pageName'));
    }
    public function renownedScholarships()
    {
        $pageName = 'Renowned Scholarships';
        return view('user.pages.renownedScholarships', compact('pageName'));
    }
    public function admissionConsultation()
    {
        $pageName = 'Admisssion Consultation';
        return view('user.pages.admissionConsultation', compact('pageName'));
    }
    public function studentCounseling()
    {
        $pageName = 'Student Counseling';
        return view('user.pages.studentCounseling', compact('pageName'));
    }
    public function visaExpress()
    {
        $pageName = 'Visa Express';
        return view('user.pages.visaExpress', compact('pageName'));
    }
    public function registrationCenter()
    {
        $pageName = 'IELTS & PTE Registration Center';
        return view('user.pages.registrationCenter', compact('pageName'));
    }
    public function languageScholarship()
    {
        $pageName = 'Scholarship Guidance';
        return view('user.pages.languageScholarship', compact('pageName'));
    }
    public function admissionAssistance()
    {
        $pageName = 'Admission Assistance';
        return view('user.pages.admissionAssistance', compact('pageName'));
    }
    public function visaAssistance()
    {
        $pageName = 'Visa Assistance';
        return view('user.pages.visaAssistance', compact('pageName'));
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
        $pageName = 'Prior Departure Briefing';
        return view('user.pages.departureBriefing', compact('pageName'));
    }
    public function postalCare()
    {
        $pageName = 'Pastoral Care';
        return view('user.pages.postalCare', compact('pageName'));
    }
    public function messageFromCeo()
    {
        $pageName = 'Message From the CEO';
        return view('user.pages.messageFromCeoDetails', compact('pageName'));
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
    // Articles -----

    public function article(Request $request, $page = 1)
    {
        $pageName = 'Articles';
        $total_article = Articles::count();
        $article_per_page = 3;
        $total_page = ceil($total_article / $article_per_page);
        $offset = ($page - 1) * $article_per_page;
        $articles = Articles::offset($offset)->limit($article_per_page)->orderBy('id', 'desc')->get();
        $recent_articles = Articles::latest()->limit(4)->get();
        $tags = Tag::all();

        return view('user.pages.article', compact('articles', 'recent_articles', 'tags', 'total_page', 'page', 'pageName'));
    }

    public function articleDetails(Request $request)
    {
        if(!isset($request->id)){
            return redirect()->route('article');
        }
        //dd($request->id);
        $pageName = 'Article Details';
        $articles = Articles::Where('id', $request->id);
        if($articles==""){
            return redirect()->route('article');
        }
        $article = $articles->first();
        $recent_articles = Articles::latest()->limit(4)->get();
        //dd($blog);

        return view('user.pages.articleDetails', compact(['pageName', 'article', 'recent_articles']));
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
    public function studentRegistration()
    {
        $pageName = 'Student Registration';
        return view('user.pages.studentRegistrationFrom', compact('pageName'));
    }

    public function studentPostRegistration(Request $request)
    {
        $data = $request->all();
        //dd($data);
        $data["to_email"] = "info@rbn.com";
        $data["title"] = "Student Enrolment";
        $data["body"] = "This is Demo";
        Mail::send('user.email.onlineApplication', $data, function ($message) use ($data) {
            $message->to("anntaffs67@gmail.com")
                ->subject($data["title"]);
                //->attachData($pdf->output(), "ApplyOnline.pdf");
        });
        return response()->json(["message" => "mail sent successfully"], 200);
    }

}
