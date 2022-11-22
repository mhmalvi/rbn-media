<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Tag;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;

class TagController extends Controller
{
    /**
     * Default Category Page
     */
    public function index()
    {
        $data = Tag::all();

        return view('admin.tag.index', compact('data'));
    }


    /**
     * store newly created category
     */
    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'tag_slug' => md5($request->name . time())
        ];


        try {

            $store =  Tag::create($data);


            $notification = [
                'message'   =>  $request->tag . ' saved successfully!',
                'alert-type'    =>  'success'
            ];
            return redirect()->back()->with($notification);
        } catch (\Throwable $th) {
            $notification = [
                'message'   =>  'Something went wrong',
                'alert-type'    =>  'warning'
            ];
            return redirect()->back()->with($notification);
        }
    }


    /**
     * Edit Specific item
     */
    public function edit($slug)
    {


        $data = Tag::where('tag_slug', $slug)->first();

        $headers = [
            'Content-Type' => 'application/json'
        ];

        return response()->json($data, 200, $headers);
    }


    /**
     * Update specific item
     */
    public function update(Request $request)
    {
        try {
            $tag = Tag::firstWhere('tag_slug', $request->slug);
            $tag->name = $request->name;
            $tag->save();

            $notification = [
                'message'   =>  'nothing went wrong',
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
     * Delete specific item
     */
    public function destroy($slug)
    {
        $data = Tag::where('tag_slug', $slug)->first();

        $data->delete();

        return response()->json(['status' => 200]);
    }
}
