@extends('landing.landing')
@section('title', __('Luxury'))


@section('content')
    @include('components.navbar')

    {{-- hero section --}}
    @section('header', 'Ragu Barang Yang Kamu Punya')
    @section('headerSpan', ' Palsu')
    @section('hero-image', 'image/phone-2.svg')
    @include('components.hero')
    
    @include('pages.pages-component.about-us.question')
    @include('pages.pages-component.about-us.why-its-hard')
    @include('pages.pages-component.about-us.fun-fact')

    @include('components.contact-us')
    @include('components.footer')
    
@endsection

