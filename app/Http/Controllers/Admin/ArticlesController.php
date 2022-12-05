<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogCreateRequest;
use App\Models\Admin\Articles;
use App\Models\Admin\Tag;
use App\Models\Admin\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        $articles = Articles::orderBy('created_at', 'desc')->get();
        //dd($articles);
        return view('admin.article.index', compact('articles', 'tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();

        return view('admin.article.create', compact('tags'));
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

            'title' => 'required|max:150|unique:articles',
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
                $path = public_path('assets/admin/image/articles');
                $file->move($path, $newThumbnailName);
            }

            if ($request->file('author_image')) {

                $file = $request->file('author_image');
                $newAuthorFileName = time() . '.' . $file->getClientOriginalExtension();
                $path = public_path('assets/admin/image/authors');
                $file->move($path, $newAuthorFileName);
            }

            Articles::create([

                'article_slug' => md5($request->title . time()),
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
            return redirect()->back()->with('success', 'Successfully saved');

//            $notification = [
//                'success'   =>  'Successfully saved',
//                'alert-type'    =>  'success'
//            ];
//
//            return redirect()->back()->with($notification);
        } catch (\Throwable $th) {
            $notification = [
                // 'message'   =>  'oops! Something went wrong',
                'message'   =>  $th->getMessage(),
                'alert-type'    =>  'warning'
            ];

            return redirect()->back()->with('failed', $th->getMessage());
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

        $article = Articles::where('article_slug', $slug)->first();

        return view('admin.article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {

        $article = Articles::where('article_slug', $slug)->first();
        $tags = Tag::all();

        return view('admin.article.edit', compact('article', 'tags'));
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

            $article = Articles::where('article_slug', $slug)->first();

            if ($request->tags) {
                $article->tags = json_encode($request->tags);
            }

            if ($request->file('thumbnail')) {

                //get the thumbnail image file
                $thumbnail = public_path('assets/admin/image/articles/' . $article->thumbnail);
                //delete the file from destination folder
                File::delete($thumbnail);

                $file = $request->file('thumbnail');
                $newThumbnailName = time() . '.' . $file->getClientOriginalExtension();
                $path = public_path('assets/admin/image/articles');
                $file->move($path, $newThumbnailName);
                $article->thumbnail = $newThumbnailName;
            }

            if ($request->file('author_image')) {

                //get the thumbnail and author image file
                $author_image = public_path('assets/admin/image/authors/' . $article->author_image);
                //delete the file from destination folder
                File::delete($author_image);

                $file = $request->file('author_image');
                $newAuthorFileName = time() . '.' . $file->getClientOriginalExtension();
                $path = public_path('assets/admin/image/authors');
                $file->move($path, $newAuthorFileName);
                $article->author_image = $newAuthorFileName;
            }

            $article->title = $request->title;
            $article->intro_details = $request->intro_details;
            $article->details = $request->details;
            $article->author_name = $request->author_name;
            $article->meta_tags = $request->meta_tags;
            $article->meta_keys = $request->meta_keys;
            $article->meta_desc = $request->meta_desc;


            $article->save();

            $notification = [
                'message'   =>  'Successfully saved',
                'alert-type'    =>  'success'
            ];

            return redirect()->back()->with('success', 'Successfully saved');
        } catch (\Throwable $th) {
            $notification = [
                // 'message'   =>  'oops! Something went wrong',
                'message'   =>  $th->getMessage(),
                'alert-type'    =>  'warning'
            ];

            return redirect()->back()->with('failed', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
       // dd($request);

        $slug = $request->slug;
        //get the blog instance
        $article = Articles::where('article_slug', $slug)->first();
        //dd($article);
        if($article ==""){
            return response()->json(['status' => 404]);
        }

        //get the thumbnail and author image file
        $thumbnail = public_path('assets/admin/image/articles/' . $article->thumbnail);
        $author_image = public_path('assets/admin/image/authors/' . $article->author_image);

        //delete the file from destination folder
        File::delete($thumbnail, $author_image);

        //delete the blog form data base
        $article->delete();

        return response()->json(['status' => 200]);
    }
}
