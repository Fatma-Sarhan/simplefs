<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Post;
use App\Http\Requests;
use Carbon\Carbon;


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
            $post->created_at = Carbon::now();
            $post->updated_at = Carbon::now();
	    	$post->save();
	    	
	    	return back();
	    	// return $request->all();
        }   	
    } 

    public function show($id)
        {
            $post = Post::find($id);
            return view ('posts.show',compact('post'));
        } 

    public function delete($id)
        {
            $post = Post::find($id);
            if($post)
            {
                $post->delete();
                return back();
            }
            else
            {
                return view ('posts.index',compact('post'));
            }
            
        }     
}
