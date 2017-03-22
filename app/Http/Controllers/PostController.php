<?php

namespace App\Http\Controllers;

use App\Post;
use Auth;
use Illuminate\Http\Request;
use Redirect;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::paginate(5);
        return view('app.post_list',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('app.post_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->input(),[
           'title'=>'required',
            'tag'=>'required',
            "text"=>'required'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        $user = Auth::user();
        $post = new Post();
        $test = $request->title;
        $post->title = $request->title;
        $post->tag = $request->tag;
        $post->content = $request->text;
        $post->user_id = $user->id;
        $post->save();
        return redirect('/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('app.post_show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $item = Post::find($post->id);
        return view('app.post_edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $validator = \Validator::make($request->input(),[
            'title'=>'required',
            'tag'=>'required',
            "text"=>'required'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        $post->title = $request->title;
        $post->tag = $request->tag;
        $post->content = $request->text;
        $post->save();
        echo ":";
        return redirect('/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
