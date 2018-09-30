@extends('_layouts.master')

@section('head')
    @include('_layouts.ogmeta', [
        'ogImage' => '',
        'ogTitle' => 'Complete Living | Stephanie Joyner',
        'ogDescription' => 'Professional dietician with a passion for holistic health and sports science. I can help you make a positive change in your lifestyle.',
    ])
@endsection

@section('body')

<div class="py-20 flex flex-col justify-center items-center">
        <h1 class="mb-8 font-serif text-very-big md:text-huge text-center">Complete<br class="block lg:hidden">Living</h1>
        <p class="text-xl md:text-3xl py-3 border-t border-b border-pink text-center">Stephanie Joyner. <br class="block md:hidden">Professional Dietician.</p>
</div>
<div class="px-4 md:px-12">
<p class="mt-20 max-w-lg mx-auto text-lg md:text-2xl leading-normal font-serif">
I am a qualified dietician with a Masters degree in Dietetics, with a passionate focus on holistic health. Nutrition is a important piece of the complex puzzle which is our health, happiness and wellness. My priority is to help patients in getting all their puzzle pieces into place. I work within a network of highly qualified and competent colleagues to refer my patients to when needed.</p>

<div class="py-20">
<h3 class="font-serif text-center text-3xl">My Services</h3>
<p class="mt-8 max-w-lg mx-auto text-base md:text-lg leading-normal">I perform a variety of professional dietetic services, from assessment, consultation and analysis for all diet related conditions, to specialised athletic consultations. I sift through nutrition and health research and translate these findings into usable, safe and practical day to day advice and guidelines you can easily implement in your life to achieve positive outcomes.</p>
<p class="mt-8 max-w-lg mx-auto text-base md:text-lg leading-normal">If you have any concerns about your diet, health or well-being, feel free to get in touch and I am sure I can be of service to you.</p>
<div class="text-center mt-8 font-serif">
    <a href="/services" class="text-blue-dark underline hover:text-pink-dark">See full services &rarr;</a>
</div>

</div>
<h3 class="font-serif text-center text-3xl">My Writing</h3>
<p class="mt-8 max-w-lg mx-auto text-base md:text-lg leading-normal">There is so much conflicting health-related information available out there it is easy to become confused. Should you eat wheat or not? Should you be including dairy or excluding it? Should you try this new weight loss miracle fruit? I strive to separate the information from the misinformation with my articles, and to give you take-home information that you can easily implement in your day to day life.</p>
<div class="text-center mt-8 font-serif">
    <a href="/articles" class="text-blue-dark underline hover:text-pink-dark">See recent articles &rarr;</a>
</div>
<p class="mt-8 max-w-lg mx-auto text-base md:text-lg leading-normal">Julia Child said: “The only time to eat diet food is when you are waiting for the steak to cook”. I couldn’t agree more. Food is an important part of our lives and should be enjoyed. To me, there is nothing more satisfying than sitting down to a delicious meal that I have prepared with carefully thought out ingredients, and I assure you that eating healthily or losing weight should not equate to eating boring or bland meals. You can trust me on that</p>
<div class="text-center mt-8 font-serif">
    <a href="/recipes" class="text-blue-dark underline hover:text-pink-dark">See recent recipes &rarr;</a>
</div>
</div>
</div>




@endsection
