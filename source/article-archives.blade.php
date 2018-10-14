@extends('_layouts.master')

@include('_layouts.ogmeta', [
        'ogImage' => $page->baseUrl . '/assets/images/sharing_image.png',
        'ogTitle' => 'Article Archives | Complete Living',
        'ogDescription' => 'Archive of articles about all things diet, health and lifestyle',
    ])

@section('body')
@include('_layouts.secondary-header', ['header_text' => 'Article Archives'])
<div class="max-w-lg mx-auto px-4 md:px-12">
@foreach($posts->where('category', 'articles')->where('published', true) as $post)
    @include('_layouts.archive-preview', ['post' => $post])
@endforeach
</div>



@endsection