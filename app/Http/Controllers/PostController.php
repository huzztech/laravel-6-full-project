<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Gate;

use Auth;

class PostController extends Controller
{

	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(array('auth', 'verify'))->except('show', 'index');
        //$this->middleware('auth');
    }
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	
    public function store(Request $request)
    {
        //
		
		/******Image Upload**********/
		
		
		if($request->hasFile('thumbnail') && $request->thumbnail->isValid())
		{
			$extension = $request->thumbnail->extension();
			$filename  = time()."_.".$extension;
			$request->thumbnail->move(public_path('images'), $filename);
		}
		else
		{
			$filename = "no-image.png";		
		}
		
		

        $messages = [
            'required'=>'That :attribute is compulsory',
        ];

        $rules = [
                'title'=>'required|max:255|min:5|unique:posts',
                 'body'=>'required',

        ];

        $this->validate($request, $rules , $messages);

        //$success = \App\Post::create($request->all());

        $success =  \App\Post::create([
			"title"=>$request->title,
			"body"=>$request->body,
			"thumbnail"=>$filename,
		]);

        if($success)
        {
			session()->flash('message', 'Posted Post');
            //return redirect(url('posts/create'))->with('message', 'Successfully Posted');
            return redirect(url('posts/create'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {

    //Through Gate

       if(Gate::allows('edit-post', $post))
       {
            $posts = \App\Post::paginate(5);
            return view('posts.index', compact('posts'));
        }
        else
        {
            return redirect('login')->with('message', 'You are not allowed');
        }


        // Through Policies

      /*  if(Auth::user()->can('view', $post))
       {
            $posts = \App\Post::paginate(5);
            return view('posts.index', compact('posts'));
        }
        else
        {
            return redirect('login')->with('message', 'You are not allowed');
        } */
		
		 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
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
        //
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
