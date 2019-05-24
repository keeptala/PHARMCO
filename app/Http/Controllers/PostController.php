<?php

namespace App\Http\Controllers;
//to use sql use the db library
//use DB
//then call a query like so=DB::select(your select query e.g select * from posts)
use Illuminate\Http\Request;
use App\post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fetch all the posts
       $posts= post::orderby('created_at','desc')->paginate(10);
        //loads the index view from posts folder
        return view('post.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //load up the create view template
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //stores and validate data from a form
        $this->validate(
            $request,[
                    'title'=>'required',
                    'body'=>'required'
            ]
            );
            $post=new Post;
            $post->title=$request->input('title');
            $post->body=$request->input('body');
            $post->save();
            return redirect('/post')->with('success','Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //shows a specific post
        $post= post::find($id);
        return view('post.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post= post::find($id);
        return view('post.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate(
            $request,[
                    'title'=>'required',
                    'body'=>'required'
            ]
            );
            $post=Post::find($id);
            $post->title=$request->input('title');
            $post->body=$request->input('body');
            $post->save();
            return redirect('/post')->with('success','Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=post::find($id);
        $post->delete();
        return redirect('/post')->with('success','Post Removed');
    }
}
