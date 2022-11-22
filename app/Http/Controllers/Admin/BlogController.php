<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogCreateRequest;
use App\Models\Admin\Tag;
use App\Models\Admin\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        return view('admin.blogs.index', compact('blogs', 'tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();

        return view('admin.blogs.create', compact('tags'));
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

            'title' => 'required|max:150|unique:blogs',
            'intro_details' => 'required',
            'tags' => 'required',
            'details' => 'required',
            'thumbnail' => 'required|mimes:png,jpg,jpeg,gif|max:2048|dimensions:min_width=720,min_height=450',
            'author_name' => 'required',
            'author_image' => 'required|mimes:png,jpg,jpeg,gif|dimensions:min_width =50,min_height=50',
            'meta_tags' => 'required',
            'meta_keys' => 'required',
            'meta_desc' => 'required',

        ]);


        try {

            if ($request->file('thumbnail')) {

                $file = $request->file('thumbnail');
                $newThumbnailName = time() . '.' . $file->getClientOriginalExtension();
                $path = public_path('assets/admin/image/blogs');
                $file->move($path, $newThumbnailName);
            }

            if ($request->file('author_image')) {

                $file = $request->file('author_image');
                $newAuthorFileName = time() . '.' . $file->getClientOriginalExtension();
                $path = public_path('assets/admin/image/authors');
                $file->move($path, $newAuthorFileName);
            }

            Blog::create([

                'blog_slug' => md5($request->title . time()),
                'title' => $request->title,
                'intro_details' => $request->intro_details,
                'details' => $request->details,
                'thumbnail' => $newThumbnailName ? $newThumbnailName : '',
                'tags' => json_encode($request->tags),
                'author_name' => $request->author_name,
                'author_image' => $newAuthorFileName ? $newAuthorFileName : '',
                'meta_tags' => $request->meta_tags,
                'meta_keys' => $request->meta_keys,
                'meta_desc' => $request->meta_desc,

            ]);


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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

        $blog = Blog::where('blog_slug', $slug)->first();

        return view('admin.blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {

        $blog = Blog::where('blog_slug', $slug)->first();
        $tags = Tag::all();

        return view('admin.blogs.edit', compact('blog', 'tags'));
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

            'title' => 'required|max:150',
            'intro_details' => 'required',
            'details' => 'required',
            'author_name' => 'required',
            'meta_tags' => 'required',
            'meta_keys' => 'required',
            'meta_desc' => 'required',

        ]);

        try {

            $blog = Blog::where('blog_slug', $slug)->first();

            if ($request->tags) {
                $blog->tags = json_encode($request->tags);
            }

            if ($request->file('thumbnail')) {

                //get the thumbnail image file
                $thumbnail = public_path('assets/admin/image/blogs/' . $blog->thumbnail);
                //delete the file from destination folder
                File::delete($thumbnail);

                $file = $request->file('thumbnail');
                $newThumbnailName = time() . '.' . $file->getClientOriginalExtension();
                $path = public_path('assets/admin/image/blogs');
                $file->move($path, $newThumbnailName);
                $blog->thumbnail = $newThumbnailName;
            }

            if ($request->file('author_image')) {

                //get the thumbnail and author image file
                $author_image = public_path('assets/admin/image/authors/' . $blog->author_image);
                //delete the file from destination folder
                File::delete($author_image);

                $file = $request->file('author_image');
                $newAuthorFileName = time() . '.' . $file->getClientOriginalExtension();
                $path = public_path('assets/admin/image/authors');
                $file->move($path, $newAuthorFileName);
                $blog->author_image = $newAuthorFileName;
            }

            $blog->title = $request->title;
            $blog->intro_details = $request->intro_details;
            $blog->details = $request->details;
            $blog->author_name = $request->author_name;
            $blog->meta_tags = $request->meta_tags;
            $blog->meta_keys = $request->meta_keys;
            $blog->meta_desc = $request->meta_desc;


            $blog->save();

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
        $blog = Blog::where('blog_slug', $slug)->first();

        //get the thumbnail and author image file
        $thumbnail = public_path('assets/admin/image/blogs/' . $blog->thumbnail);
        $author_image = public_path('assets/admin/image/authors/' . $blog->author_image);

        //delete the file from destination folder
        File::delete($thumbnail, $author_image);

        //delete the blog form data base
        $blog->delete();

        return response()->json(['status' => 200]);
    }
}
