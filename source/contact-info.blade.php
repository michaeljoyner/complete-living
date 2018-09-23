@extends('_layouts.master')

@include('_layouts.ogmeta', [
        'ogImage' => '',
        'ogTitle' => 'Contact Info | Complete Living',
        'ogDescription' => 'Get in contact with a professional dietician about any dietetic, health or lifestyle queries you may have.',
    ])

@section('body')
@include('_layouts.secondary-header', ['header_text' => 'Contact & Info'])
<div class="px-4 md:px-12">
<div class="max-w-lg mx-auto py-12 md:py-20">
    <h3 class="font-serif text-center text-3xl">Get in touch</h3>
    <p class="mt-8 text-base md:text-lg leading-normal">If you would like to get in touch to book a consultation or inquire about my professional services, you are welcome to call me, or send an email.</p>
    <p class="mt-6"><span class="font-serif">Telephone: </span>012-3456789 or 082-9876554</p>
    <p class="mt-3"><span class="font-serif">Email: </span><a href="mailto:complete@test.com" class="no-underline hover:text-pink-dark text-black">complete@test.com</a></p>
</div>

<div class="max-w-lg mx-auto py-12 md:py-20">
    <h3 class="font-serif text-center text-3xl">Where to find me</h3>
    <p class="mt-8 text-base md:text-lg leading-normal">You are welcome to come by my offices to inquire about my professional services or book an appointment. Just be sure to call ahead to make sure someone is there to receive you as I am often out.</p>
    <p class="mt-6 mb-2 font-serif">Mondays, Tuesdays, Thursdays and Saturdays:</p>
    <p>You can find me at: 77 Villiers Drive, Clarendon, Pietermaritzburg</p>
    <div class="mb-8 mt-4 font-serif">
        <a href="https://goo.gl/maps/45unbQ4XoMU2" target="_blank" class="text-blue-dark underline hover:text-pink-dark">View on Google Maps &rarr;</a>
    </div>
    <p class="mt-6 mb-2 font-serif">Wednesdays and Fridays:</p>
    <p>You can find me at: EAP Active, Village Center, Hilton Avenue, Hilton</p>
    <div class="mb-8 mt-4 font-serif">
        <a href="https://goo.gl/maps/op52YJHjrLJ2" traget="_blank" class="text-blue-dark underline hover:text-pink-dark">View on Google Maps &rarr;</a>
    </div>
</div>
</div>

@endsection
