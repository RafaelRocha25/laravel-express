@extends('template')

@section('content')

	<h2>Edit new Post: {{ $post->title }}</h2> 

	@if($errors->any())

		<ul class="alert">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>

	@endif

	@if(Session::get('status'))
		{!! Session::get('status') !!}
	@endif
	
	{!! Form::model($post, ['route' => ['admin.posts.update', $post->id], 'method' => 'post']) !!}

	@include('admin.posts._form')
	
	<div class='form-group'>
		{!! Form::submit('Update Post', ['class' => 'btn btn-primary']) !!}
	</div>

	{!! Form::close() !!}

@stop