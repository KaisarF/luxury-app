<div class="faq-section">
    <div class="faq-section-header">
        <h1>Frequently Asked <span>Question</span></h1>
        <p>Vivamus odio enim, vehicula eget nulla eget, gravida auctor nunc facilisi</p>
    </div>
    <div class="faq-section-content">
        <div class="faq-text-content">
            <div class="faq-card" id="card1">
                <h2>
                    Apa Itu Luxury Card
                    <span class="dropdown-icon">▼</span>
                </h2>
                <div class="faq-card-info" id="card1-content" >
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi voluptas nemo ipsam animi quia vel praesentium et voluptatem rerum quos, qui hic fuga explicabo placeat!</p>
                </div>
            </div>
            <div class="faq-card" id="card1">
                <h2>
                    Bagaimana Cara Kerjanya?
                    <span class="dropdown-icon">▼</span>
                </h2>
                <div class="faq-card-info" id="card1-content" >
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi voluptas nemo ipsam animi quia vel praesentium et voluptatem rerum quos, qui hic fuga explicabo placeat!</p>
                </div>
            </div>
            <div class="faq-card" id="card1">
                <h2>
                    Berapa lama saya mendapatkan hasil pengecekan?
                    <span class="dropdown-icon">▼</span>
                </h2>
                <div class="faq-card-info" id="card1-content" >
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi voluptas nemo ipsam animi quia vel praesentium et voluptatem rerum quos, qui hic fuga explicabo placeat!</p>
                </div>
            </div>
            <div class="faq-card" id="card1">
                <h2>
                    Apa yang saya dapat dari hasil pengecekan?
                    <span class="dropdown-icon">▼</span>
                </h2>
                <div class="faq-card-info" id="card1-content" >
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi voluptas nemo ipsam animi quia vel praesentium et voluptatem rerum quos, qui hic fuga explicabo placeat!</p>
                </div>
            </div>
        </div>
        <div class="faq-character">
            <img src="image/faq-chibi.svg" >
        </div>
    </div>
</div>

@push('script')

<script>

$(document).ready(function(){
    $(".faq-card").click(function(){
        $(this).find(".faq-card-info").slideToggle("slow");
        $(this).find(".dropdown-icon").toggleClass("rotated");
        
    });
});
</script>

@endpush