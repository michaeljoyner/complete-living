@extends('_layouts.master')

@section('body')
<div class="max-w-lg mx-auto px-4 py-20">
    <p class="text-grey-dark mb-2 text-center"> {{ date('F j, Y', $page->published_at) }}</p>
    <h1 class="font-serif text-5xl text-center">{{ $page->title }}</h1>
    <div class="post-content leading-normal text-lg mt-20">
        @yield("content")
    </div>
    </div>  
</div>

@endsection
