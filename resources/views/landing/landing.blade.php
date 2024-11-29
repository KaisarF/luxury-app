<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title') - luxury app</title>

    @yield('canonical')
    <meta http-equiv="Content-Security-Policy"
        content="upgrade-insecure-requests" />

    {{-- <meta
        content="https://assets-global.website-files.com/63d3804f9332c058e549f90d/63ebbbb976c6763b45d4e1f3_Meta%20Banner%20-%20Overall.png"
        property="og:image">

    <meta
        content="https://assets-global.website-files.com/63d3804f9332c058e549f90d/63ebbbb976c6763b45d4e1f3_Meta%20Banner%20-%20Overall.png"
        property="twitter:image"> --}}

    
    <meta property="og:type"
        content="website">

    <meta content="summary_large_image"
        name="twitter:card">

    {{-- Favicons --}}
    <link href="{{ asset('assets/favicon.png') }}"
        rel="icon">
    <link rel="shortcut icon"
        href="{{ asset('images/favicon.png') }}" />
    <meta property="og:image"
        content="{{ asset('images/logo/logo-og.png') }}">

    {{-- Bootstrap 4 CSS & Icons --}}
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    {{-- Swiper --}}
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
            

    {{-- Animate on Scroll --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css"
        rel="stylesheet">

    {{-- Animate Bounce --}}
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />


    {{-- Main CSS File --}}
    @foreach (File::glob(public_path('build/assets/landing*.css')) as $file)
        <link rel="stylesheet"
            href="{{ asset('build/assets/' . basename($file)) }}" />
    @endforeach
    {{-- @vite(['resources/sass/landing/landing.scss']) --}}


        
    @yield('style')
</head>

<body class="@yield('class-body')">
    @stack('modal')
    @yield('content')

    {{-- Bootstrap 4 JS --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>

    {{-- AOS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    {{-- Swiper --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        const swiper = new Swiper('.swiper', {
  // Optional parameters
    //   direction: 'vertical',
    //   loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});
    </script>

    @stack('script')

</body>

</html>
