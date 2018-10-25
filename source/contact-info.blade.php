@extends('_layouts.master')

@include('_layouts.ogmeta', [
        'ogImage' => '',
        'ogTitle' => 'Contact Info | Complete Living',
        'ogDescription' => 'Get in contact with a registered dietician about any dietetic, health or lifestyle queries you may have.',
    ])

@section('body')
@include('_layouts.secondary-header', ['header_text' => 'Contact & Info'])
<div class="px-4 md:px-12">
<div class="max-w-lg mx-auto py-12 md:py-20">
    <h3 class="font-serif text-center text-3xl">Get in touch</h3>
    <p class="mt-8 text-base md:text-lg leading-normal">If you would like to get in touch to book a consultation or inquire about my professional services, you are welcome to call me, or send an email.</p>
    <p class="mt-6"><span class="font-serif">Telephone: </span>072 670 3544</p>
    <p class="mt-3"><span class="font-serif">Email: </span><a href="mailto:complete@test.com" class="no-underline hover:text-pink-dark text-black">stephjoyner18@gmail.com</a></p>
</div>

<div class="max-w-lg mx-auto py-12 md:py-20">
    <h3 class="font-serif text-center text-3xl">Where to find me</h3>
    <p class="mt-8 text-base md:text-lg leading-normal">You are welcome to come by my offices to inquire about my professional services or book an appointment. Just be sure to call ahead to make sure someone is there to receive you as I am often out.</p>
    <p class="mt-6 mb-2 font-serif">Mondays to Fridays:</p>
    <p>You can find me at: Eagle Ridge Health Centre, 77 Villiers Drive, Clarendon, Pietermaritzburg</p>
    <div class="mb-8 mt-4 font-serif">
        <a href="https://goo.gl/maps/45unbQ4XoMU2" target="_blank" class="text-blue-dark underline hover:text-pink-dark">View on Google Maps &rarr;</a>
    </div>
    
</div>

<div class="max-w-lg mx-auto py-12 md:py-20">
    <h3 class="font-serif text-center text-3xl">My Rates</h3>
    <p class="mt-8 text-base md:text-lg leading-normal">I am able to submit directly to your medical aid. Alternativley, cash/EFT prices are as follows:</p>
    <div class="max-w-sm mx-auto mt-20">
        <div class="flex justify-between mb-3">
            <span class="font-serif text-lg">Service</span>
            <p class="font-serif text-lg text-right">Rate</p>
        </div>
        <div class="flex justify-between mb-3">
            <span class="mr-4">First consult</span>
            <span class="flex-1 mr-4 border-b border-dashed hidden md:block"></span>
            <p class="text-right">R560</p>
        </div>
        <div class="flex justify-between mb-3">
            <span class="mr-4">First follow up consult</span>
            <span class="flex-1 mr-4 border-b border-dashed hidden md:block"></span>
            <p class="text-right">R340</p>
        </div>
        <div class="flex justify-between mb-3">
            <span class="mr-4">Regular follow up consult</span>
            <span class="flex-1 mr-4 border-b border-dashed hidden md:block"></span>
            <p class="text-right">R240</p>
        </div>
        

    </div>
    
</div>
</div>

@endsection
