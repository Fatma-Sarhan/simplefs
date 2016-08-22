@extends('layout')

@section ('header')
	<h1> Posts page </h1>

@section('content')
    


	<h4> Select from database </h4>

	<ul class="list-group">
        @if (!empty ($posts))
        	<h2> Hello from open source track ^_^ </h2>
        @endif
            @foreach ($posts as $post)
              <li> <h3> Title :<a href="/post/{{$post->id}}"> {{$post->title}} </a>  </h3></li>
              <h4> Content: {{$post->content}}  </h4>
               <a href="/post/delete/{{$post->id}}"> Delete </a>  
             
            @endforeach
    </ul>



    
    {!! Form::open(array('url' => '/post/add')) !!}
      {{ csrf_field() }}
    <!-- Title form input -->
    <div class="form-group col-md-3">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
        @if ($errors->first('title'))
         <div class="alert alert-danger">{{ $errors->first('title') }} </div>
         @endif
    </div>

    <!-- Content form input -->
    <div class="form-group col-md-6">
        {!! Form::label('content', 'Content:') !!}
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
         @if ($errors->first('content'))
         <div class="alert alert-danger">{{ $errors->first('content') }} </div>
         @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::submit('Add' , ['class' => 'btn btn-primary'] )!!}

    </div>

{!! Form::close() !!}



    <!--  <a href="/users/logout"> Logout</a> -->
 
		
	 
@stop