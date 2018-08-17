@extends('main')

@section('title','| Update post')

@section('content')

	<div class="row">
		
		<div class="col-md-8 col-md-offset-2">
			<h1>Create new post</h1>
			<hr>
			{!! Form::open(['route' =>['posts.update',$post->id],'method'=>'put']) !!}
    		{{Form::label('title',"Title:")}}
    		{{Form::text('title',$post->title,array('class'=>'form-control'))}}

    		{{Form::label('body',"Post body:")}}
    		{{Form::textarea('body',$post->body,array('class'=>'form-control'))}}

    		{{Form::submit('Update post',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;'))}}
			{!! Form::close() !!}
		</div>

	</div>

@endsection