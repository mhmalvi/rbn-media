<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Admin\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $events = Event::orderBy('created_at', 'desc')->get();

        return view('admin.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([

            'title' => 'required|max:100|unique:events',
            'location' => 'required|max:100',
            'thumbnail' => 'required|mimes:png,jpg,jpeg|dimensions:min_width=125,min_height=125',
            'event_date' => 'required',
            'starting_date' => 'required',
            'ending_date' => 'required'

        ]);

        try {

            if ($request->file('thumbnail')) {
                $file = $request->file('thumbnail');
                $newThumbnailName = 'events' . time() . '.' . $file->getClientOriginalExtension();
                $path = public_path('assets/admin/image/events');
                $file->move($path, $newThumbnailName);
            }


            Event::create([
                'slug' => md5($request->title . time()),
                'title' => $request->title,
                'location' => $request->location,
                'thumbnail' => $newThumbnailName ? $newThumbnailName : '',
                'event_date' => $request->event_date,
                'starting_date' => $request->starting_date,
                'ending_date' => $request->ending_date,

            ]);


            $notification = [
                'message'   =>  'Successfully saved',
                'alert-type'    =>  'success'
            ];

            //return redirect()->back()->with($notification);
            return redirect()->back()->with('success', 'Successfully saved');
        } catch (\Throwable $th) {
            $notification = [
                // 'message'   =>  'oops! Something went wrong',
                'message'   =>  $th->getMessage(),
                'alert-type'    =>  'warning'
            ];



            //return redirect()->back()->with($notification);
            return redirect()->back()->with('failed', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*     public function show($slug)
    {

        $event = Event::where('slug', $slug)->first();

        return view('admin.events.show', compact('event'));
    } */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {

        $event = Event::where('slug', $slug)->first();


        return view('admin.events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([

            'title' => 'required|max:100',
            'location' => 'required|max:100',
            'starting_date' => 'required',
            'event_date' => 'required',
            'ending_date' => 'required'

        ]);

        try {

            //get the event
            $event = Event::where('slug', $slug)->first();

            if ($request->file('thumbnail')) {
                //get the thumbnail image file
                $thumbnail = public_path('assets/admin/image/events' . $event->thumbnail);
                //delete the file from destination folder
                File::delete($thumbnail);

                $file = $request->file('thumbnail');
                $newThumbnailName = 'event' . time() . '.' . $file->getClientOriginalExtension();
                $path = public_path('assets/admin/image/events');
                $file->move($path, $newThumbnailName);
                $event->thumbnail = $newThumbnailName;
            }

            $event->title = $request->title;
            $event->location = $request->location;
            $event->event_date = $request->event_date;
            $event->starting_date = $request->starting_date;
            $event->ending_date = $request->ending_date;


            $event->save();

            $notification = [
                'message'   =>  'Successfully saved',
                'alert-type'    =>  'success'
            ];

            return redirect()->back()->with($notification);
        } catch (\Throwable $th) {
            $notification = [
                // 'message'   =>  'oops! Something went wrong',
                'message'   =>  $th->getMessage(),
                'alert-type'    =>  'warning'
            ];

            return redirect()->back()->with($notification);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        //get the blog instance
        $event = Event::where('slug', $slug)->first();

        //get the thumbnail and author image file
        $thumbnail = public_path('assets/admin/image/events/' . $event->thumbnail);

        //delete the file from destination folder
        File::delete($thumbnail);

        //delete the blog form data base
        $event->delete();

        return response()->json(['status' => 200]);
    }
}
