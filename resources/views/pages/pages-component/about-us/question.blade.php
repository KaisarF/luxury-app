<div class="question-container">
    <div class="question-container-header">
        <p>Coba lihat beberapa foto barang-barang disamping, kamu mungkin tidak bisa membedakan produk yang asli dan palsu.</p>
    </div>
    
    <div class="question-container-content">
        <h2>Mana sepatu vans yang asli?</h2>
        <div class="question-container-content-reason">
            <a href="javascript:void(0);" class="option-link"><img src="image/question-option-a.svg" alt="" class="option-img" id="img1"></a>
            <a href="javascript:void(0);" class="option-link"><img src="image/question-option-b.svg" alt="" class="option-img" id="img2"></a>
            <div class="reason-option d-none">
                <ul>
                    <li>Cek logo sepatu</li>
                    <li>Cek bahan sepatu</li>
                    <li>Cek strip putih sisi kanan dan kiri</li>
                    <li>Cek label hologram bagian dalam</li>
                    <li>Cek bahan tali sepatu</li>
                    <li>Cek kode seri sepatu</li>
                    <li>Cek logo timbul bagian belakang</li>
                </ul>
            </div>
        </div>
    </div>
    
</div>


@push('script')
    <script>
        $(document).ready(function () {
    $('.option-link').on('click', function (e) {
        e.preventDefault();
        const $img = $(this).find('img');  // Menemukan gambar di dalam <a>
        const $reasonOption = $('.reason-option');  // Menyimpan referensi ke elemen yang berisi alasan
        const $h2 = $('h2'); // Referensi ke elemen <h2>

        // Mengecek apakah gambar kiri atau kanan yang diklik
        const isLeftOption = $img.attr('id') === 'img1'; // Memeriksa ID gambar, misalnya 'img1' untuk gambar kiri

        if ($reasonOption.hasClass('d-none')) {
            // Menampilkan alasan dengan animasi fadeIn dan menyembunyikan gambar lain
            $reasonOption.fadeIn(500).removeClass('d-none'); // Fade-in alasan dalam 500ms
            $('.option-img').not($img).fadeOut(500); // Fade-out gambar lain dalam 500ms

            // Mengubah teks <h2> sesuai pilihan dengan efek fadeIn
            if (isLeftOption) {
                $h2.fadeOut(200, function() {
                    $h2.text('Yap benar, ini sepatu vans yang asli').fadeIn(500); // Fade-out dan fade-in teks
                });
            } else {
                $h2.fadeOut(200, function() {
                    $h2.text('Opps salah, ini sepatu vans palsu').fadeIn(500); // Fade-out dan fade-in teks
                });
            }
        } else {
            // Menyembunyikan alasan dan menampilkan gambar dengan animasi fadeIn
            $reasonOption.fadeOut(500, function() {
                $(this).addClass('d-none');
            });
            $('.option-img').fadeIn(500); // Fade-in gambar lagi dalam 500ms

            // Mengembalikan teks <h2> ke teks awal dengan fadeIn
            $h2.fadeOut(200, function() {
                $h2.text('Mana sepatu vans yang asli?').fadeIn(500); // Fade-out dan fade-in teks
            });
        }
    });
});

    </script>
@endpush