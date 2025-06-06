@extends('layouts.app')

@section('content')
    @include('frontend.header')
    @include('frontend.partials.slider', ['sliderItems' => $sliderItems])
    @include('frontend.partials.preparation', ['preparations' => $preparations])
    @include('frontend.partials.service', ['services' => $services])
    @include('frontend.partials.about', ['abouts' => $abouts])
    {{-- @include('frontend.partials.contact', ['contact' => $contact]) --}}
    @include('frontend.partials.testimonial', ['testimonials' => $testimonials])
    {{-- @include('frontend.partials.partners', ['partners' => $partners]) --}}
    {{-- @include('frontend.partials.passers', ['passers' => $passers]) --}}
    @include('frontend.partials.blog', ['blogs' => $blogs])
    @include('frontend.footer')
@endsection
