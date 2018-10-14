@extends('_layouts.master')

@include('_layouts.ogmeta', [
        'ogImage' => $page->baseUrl . '/assets/images/sharing_image.png',
        'ogTitle' => 'Articles | Complete Living',
        'ogDescription' => 'Separate the information from the misinformation with articles and take-home information that you can easily implement in your day to day life',
    ])

@section('body')
@include('_layouts.secondary-header', ['header_text' => 'My Articles'])
<div class="max-w-lg mx-auto px-4 md:px-12">
@foreach($posts->where('category', 'articles')->where('published', true)->take(15) as $post)
    @include('_layouts.post-preview', ['post' => $post])
@endforeach
</div>
<div class="text-center mt-8 font-serif">
    <a href="/article-archives" class="text-blue-dark underline hover:text-pink-dark">For more articles, visit the archives &rarr;</a>
</div>


@endsection