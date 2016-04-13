@extends('template')

@section('content')

	<h2>Create new Post</h2>

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
	
	{!! Form::open(['route' => 'admin.posts.store', 'method' => 'post']) !!}

	@include('admin.posts._form')

	<div class='form-group'>
		{!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
	</div>

	{!! Form::close() !!}

@stop