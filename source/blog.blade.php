@extends('_layouts.master')

@section('body')

@foreach($posts as $post)
<div>
    <h2><a href="{{ $post->getPath() }}">{{ $post->title }}</a></h2>
</div>
@endforeach
@endsection
