@extends('_layouts.master')

@include('_layouts.ogmeta', [
        'ogImage' => $page->baseUrl . '/assets/images/sharing_image.png',
        'ogTitle' => 'Recipes | Complete Living',
        'ogDescription' => 'Food is an important part of our lives and should be enjoyed. To me, there is nothing more satisfying than sitting down to a delicious meal that I have prepared with carefully thought out ingredients.',
    ])

@section('body')
@include('_layouts.secondary-header', ['header_text' => 'My Recipes'])
<div class="max-w-lg mx-auto px-4 md:px-12">
@foreach($posts->where('category', 'recipes')->where('published', true)->take(15) as $post)
    @include('_layouts.post-preview', ['post' => $post])
@endforeach
</div>
<div class="text-center mt-8 font-serif">
    <a href="/recipe-archives" class="text-blue-dark underline hover:text-pink-dark">For more recipes, visit the archives &rarr;</a>
</div>


@endsection