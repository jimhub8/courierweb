<?php

namespace App\Http\Controllers;

use App\models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\User;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::paginate();
        $blogs->transform(function ($blog) {
            // dd($blog->user_id);
            $user = User::find($blog->user_id);
            $blog->posted_by = $user->name;
            return $blog;
        });
        return $blogs;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.blog');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Blog::find($id);
        return view('blog.edit', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        // dd($file = $request->file('image'));

        // return $upload;

        $blog = new Blog;
        $blog->user_id = Auth::id();
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->content = $request->content;
        if ($request->hasFile('image')) {
            $img = $request->image;
            $imagename = Storage::disk('public')->put('blog', $img);
        }

        // dd($imagename);
        $imgArr = explode('/', $imagename);
        $image_name = $imgArr[1];
        $blog->image = '/storage/blog/' . $image_name;
        $blog->save();
        // return $blog;
        // return redirect()->back();
        return redirect('/admin#/blog');
        // $blog->
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Blog::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Blog::find($id)->delete();
    }
}
