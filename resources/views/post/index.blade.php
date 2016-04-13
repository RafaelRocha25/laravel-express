@extends('template')

@section('title')
	{{ $title }}
@stop
@section('content')

	@foreach($posts as $post)
		<h2>{{ $post->title }}</h2>
		<p> {!! $post->content !!}</p>
			@if( count($post->comments) > 0 )
				<h4>Comentários</h4>
				@foreach($post->comments as $comment)
				<small>
					<b>{{ $comment->name }} - {{ $comment->email }}</b> <br />
					{{ $comment->comment }}
				</small>
				<br />
				@endforeach
			@endif
			@if( count($post->tags) > 0 )
				<h4>Tags</h4>
				@foreach($post->tags as $tag)
					{{ $tag->name }},  
				@endforeach
			@endif
		<hr />		
	@endforeach

	{!! $posts->render() !!}

@stop