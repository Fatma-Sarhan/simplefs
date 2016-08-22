@extends('layout')

@section ('header')
	<h1> Posts page </h1>

@section('content')
    


	<h4> Select from database </h4>


        	<h2> Single page of post  </h2>
       
               <h2> <b> {{$post->title}} <b>  </h2>
               <h4> Content: {{$post->content}}  </h4>




    <!--  <a href="/users/logout"> Logout</a> -->
 
		
	 
@stop