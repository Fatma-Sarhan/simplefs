<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Post;
use App\Http\Requests;


class PostsController extends Controller
{
     public function index()
    {
    	 
    	$posts = Post::all();

   		return view ('posts.index',compact('posts'));
    }

    public function add (Request $request)
    {

    	 $validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:255',
            'content' => 'required',
        ]);


    	if ($validator->fails()) 
    	{
            return redirect('/index')
                        ->withErrors($validator)
                        ->withInput();
        }
        else
        {
        	$post = new Post ;
    	
	    	$post->title = $request->title;
	    	$post->content = $request->content ;
	    	$post->save();
	    	
	    	return back();
	    	// return $request->all();
        }

    	
    }    
}
