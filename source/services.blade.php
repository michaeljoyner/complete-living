@extends('_layouts.master')

@section('head')
    @include('_layouts.ogmeta', [
        'ogImage' => $page->baseUrl . '/assets/images/sharing_image.png',
        'ogTitle' => 'Services | Complete Living',
        'ogDescription' => 'I offer a range of services from general assessment, consultation and analysis to specialized athlete consultations and lifestle advice.',
    ])
@endsection

@section('body')
@include('_layouts.secondary-header', ['header_text' => 'My Services'])

<div class="mt-8 md:mt-20 py-8 px-4 md:px-12">
    <h3 class="font-serif text-center text-2xl md:text-3xl">Consultations</h3>
    <p class="mt-8 max-w-lg mx-auto text-base md:text-lg leading-normal">Whether you have a specific medical condition or you just want to improve your physique, health and wellness, an individual consult is the place to start. This will involve going over your medical, family and weight history, a clinical assessment as well as a review of your lifestyle, sleeping patterns and physical activity. If necessary blood tests will be discussed and ordered. A body composition analysis will provide a baseline and allow goals to be set. Follow up’s are vital to ensure sustainability of new behaviours. These sessions are generally shorter than the initial consult and are recommended every two to four weeks, depending in the individual’s circumstances. I am also able to do Discovery Vitality assessments.</p>
    <p class="mt-8 max-w-lg mx-auto text-base md:text-lg leading-normal">I am also available for family consults at a reduced rates.</p>
</div>

<div class="py-8 px-4 md:px-12">
    <h3 class="font-serif text-center text-2xl md:text-3xl">Athletes</h3>
    <p class="mt-8 max-w-lg mx-auto text-base md:text-lg leading-normal">From weekend warriors to elite athletes, nutrition is a key part of training and competing. It is vital that athletes have a nutrition strategy in place to ensure they train optimally, compete at their peak and recover efficiently, all without the risk of injury or illness. Achieving a certain lean mass to body fat ratio, depending on what your sport is, can play a large role in how you perform and is largely dependent on the food you eat.
    </p>
</div>
<div class="py-8 px-4 md:px-12">
    <h3 class="font-serif text-center text-2xl md:text-3xl">Corporate Wellness</h3>
    <p class="mt-8 max-w-lg mx-auto text-base md:text-lg leading-normal">Companies lose millions each year due to employee illness and absenteeism. A lot of this is due to lifestyle related illnesses that can be improved or prevented by good nutrition and lifestyle changes. Staff wellness days, where staff are provided with individual consults and group information sessions should be a regular part of your year calendar to ensure necessary changes are implemented and maintained. This also provides the opportunity for companies using Discovery Vitality to obtain points for their staff. A healthy work force is a happy and efficient work-force!
    </p>
</div>
<div class="py-8 px-4 md:px-12">
    <h3 class="font-serif text-center text-2xl md:text-3xl">Eating Disorder Prevention and Treatment</h3>
    <p class="mt-8 max-w-lg mx-auto text-base md:text-lg leading-normal">Eating disorder prevalence is on the rise, especially in high school age females. This is a delicate and complicated condition and the correct intervention and treatment should be provided within 18 months of onset for a better chance of recovery. Parents and teachers alike should be aware of signs to look out for in their child or students and be informed of the correct steps to take when addressing the situation. School counsellors are important role players and should be aware of the latest research on the treatment of eating disorders. Finally, adolescents themselves should be informed on healthy and unhealthy eating behaviours. This condition requires someone with the practical experience needed in successfully managing this type of patient. Having worked with numerous eating disorder patients at various rehabilitation centres, and having a team of experts on hand to assist with these patients, help is at hand. Get in touch to organise group talks with pupils/staff/parents or for individual consults with eating disorder sufferers.
    </p>
</div>


@endsection
