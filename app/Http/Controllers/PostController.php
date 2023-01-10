<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allData = Post::latest()->get();
        return view('dashboard', compact('allData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allData = Post::all();
        return view('admin.post.add', compact('allData'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // {{-- Posts [ id, title, author, content,image, date , soft delete ] --}}

        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpg,png,webp|max:2048'
        ]);

        $request_data = $request->except('_token', 'image');

        if ($request->file('image')) {
            $imgName = uniqid() . $request->file('image')->getClientOriginalName();
            //    Image::make($request->file('image'))->save(public_path('uploads/posts/' .  $imgName ));
            $request->file('image')->move(public_path('uploads/posts'), $imgName);
            $request_data['image'] =  $imgName;
        }

        Post::create($request_data);

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.post.edit', compact(['post']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        // $uploadImg = $request->image;
        $request->validate([
            'title' => 'required',
            // 'author' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpg,png,webp|max:2048'
        ]);

        $requested_data = $request->except('_token', 'image');
        if ($request->file('image')) {
            if ($post->image != 'default.png') {
                unlink(public_path('uploads/posts/' . $post->image));
            }

            $imgName = uniqid() . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads/posts'), $imgName);
            $request_data['image'] =  $imgName;
        }

        $post->update($requested_data);

        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        // dd($post);
        // if ($post->image != 'default.png') {
        //     unlink(public_path('uploads/posts/' . $post->image));
        // }

        $post->delete();
        return back();
    }

    public function trashed()
    {
        // // dd($post);
        // if ($post->image != 'default.png') {
        //     unlink(public_path('uploads/posts/' . $post->image));
        // }

        $allData = Post::onlyTrashed()->where('user_id',Auth::user()->id)->get();
        return view('admin.post.archive', compact('allData'));
    }

    public function trashedRestore($id)
    {
        $post = Post::onlyTrashed()->findOrFail($id);
        $post->restore();
        return back();
    }

    public function trashedDelete($id)
    {
        $post = Post::onlyTrashed()->findOrFail($id);
        if ($post->image != 'default.png') {
            unlink(public_path('uploads/posts/' . $post->image));
        }
        $post->forceDelete();
        return back();
    }
}
