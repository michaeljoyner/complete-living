@extends('_layouts.master')

@include('_layouts.ogmeta', [
        'ogImage' => '',
        'ogTitle' => 'Recipe Archives | Complete Living',
        'ogDescription' => 'Archive of recipes that show delicious food can still be healthy and nutritious.',
    ])

@section('body')
@include('_layouts.secondary-header', ['header_text' => 'Recipe Archives'])
<div class="max-w-lg mx-auto px-4 md:px-12">
@foreach($posts->where('category', 'recipes')->where('published', true) as $post)
    @include('_layouts.archive-preview', ['post' => $post])
@endforeach
</div>



@endsection