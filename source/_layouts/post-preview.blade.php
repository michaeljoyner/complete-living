<div class="my-12">
    <p class="text-grey-dark mb-2 text-sm md:text-base"> {{ date('F j, Y', $post->published_at) }}</p>
    <h3 class="mb-3"><a href="{{ $post->getPath() }}" class="uppercase text-grey-darkest hover:text-pink-dark text-xl md:text-2xl font-serif no-underline mb-4">{{ $post->title }}</a></h3>
    <p class="leading-normal">{{ $post->description }}</p>
</div>