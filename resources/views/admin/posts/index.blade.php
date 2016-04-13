@extends('template')

@section('content')

	<h2>Blog Admin</h2>

	@if(Session::get('status'))
		{!! Session::get('status') !!}
	@endif

	<table class="table">
		<tr>
			<th>ID</th>
			<th>Title</th>
			<th>Action</th>
		</tr>

		@foreach($posts as $post)
		<tr>
			<td> {{ $post->id }}</td>
			<td> {{ $post->title }}</td>
			<td>
				<a href="{{ route('admin.posts.edit', ['id' => $post->id]) }}" class="btn btn-danger">Edit</a>
				<a href="{{ route('admin.posts.destroy', ['id' => $post->id]) }}" onclick="confirmDelete(this)" class="btn btn-default">Delete </a>
			</td>
		</tr>
		@endforeach
	</table>

	{!! $posts->render() !!}

@stop