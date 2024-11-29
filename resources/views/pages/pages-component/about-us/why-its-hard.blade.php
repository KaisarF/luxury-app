<div class="why-its-hard-container">
    <div class="why-its-hard-container-header">
        <h1>Kenapa Sulit Bedakan
            Asli atau Palsu?</h1>
            <p>Di tiap barang banyak sekali hal yang harus di cek, dan setiap barang/brand yang harus di cek itu berbeda, <span>coba kamu lihat ini</span></p>
    </div>
    <div class="why-its-hard-container-content">
        
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide"><img src="{{ asset('image/product-1.svg') }}" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('image/product-2.svg') }}" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('image/product-3.svg') }}" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('image/product-4.svg') }}" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('image/product-5.svg') }}" alt=""></div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
          
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          
            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
          </div>
    </div>
</div>


@push('script')

<script>
        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

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

        });
</script>

@endpush

