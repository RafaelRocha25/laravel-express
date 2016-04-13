@extends('template')

@section('title')
	{{ $title }}
@stop
@section('content')

	@foreach($posts as $post)
		<h2>Título{{ $post['title'] }}</h2>
		<p>{!! $post['description'] !!}</p>
		<hr>
	@endforeach

@stop