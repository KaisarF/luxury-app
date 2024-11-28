@extends('landing.landing')
@section('title', __('Luxury'))


@section('content')
    @include('components.navbar')

    {{-- hero section --}}
    @section('header', 'Cek Keaslian Barang dengan')
    @section('headerSpan', ' Luxury Checker')
    @section('hero-image', 'image/phone.png')
    @include('components.hero')

    @include('pages.pages-component.home.reason')
    @include('pages.pages-component.home.about')
    @include('pages.pages-component.home.how-it-work')
    @include('pages.pages-component.home.testimoni')
    @include('pages.pages-component.home.faq')
    @include('pages.pages-component.home.contact-us')
    @include('components.footer')
    {{-- @include('pages.pages-component.home.footer') --}}
@endsection

