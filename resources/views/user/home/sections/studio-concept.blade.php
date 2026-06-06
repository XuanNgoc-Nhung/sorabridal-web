<!-- ══════════════════════ STUDIO / CONCEPT TABS ══════════ -->
<section class="bg-warm home-section">
    <div class="container">
        @include('user.partials.section-head', [
            'tag' => 'Không gian chụp ảnh',
            'title' => 'Phim trường &amp; Concept độc quyền',
            'subtitle' => 'Loạt hệ thống phim trường với tổng diện tích 2000m2. Sức chứa lên tới 30 cặp đôi tại cùng 1 thời điểm',
            'animate' => 'fadeInUp',
        ])
        {{-- <div class="sr d1">
            <div class="tabs-pill">
                <button class="tab-btn active" data-tab="tab-studio">📸 Phim trường nổi bật</button>
                <button class="tab-btn" data-tab="tab-concept">🎨 Concept nghệ thuật</button>
            </div>
        </div> --}}

        <div id="tab-studio" class="tab-pane active">
            <div class="row g-4">
                <div class="col-md-6">
                <div class="studio-card sr d2 sr-blur-in h-100"
                    onclick="window.location.href='https://album.sorawedding.vn/concept/'">
                    <div class="studio-card-img"><img src="{{ asset('/user/phimTruong1.webp') }}"
                            alt="Ánh sáng tự nhiên"></div>
                    <div class="studio-card-body">
                        <h4>Sora’s rooftop – tầng 8, 315 bạch mai, Hà Nội</h4>
                        <p>Tầm nhìn panoramic, golden hour, ánh sáng tự nhiên</p>
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                <div class="studio-card sr d2 h-100" onclick="window.location.href='https://album.sorawedding.vn/concept/'">
                    <div class="studio-card-img"><img src="{{ asset('/user/phimTruong2.webp') }}" alt="Biệt Thự Sora">
                    </div>
                    <div class="studio-card-body">
                        <h4>Sora’s mansion – Hoàng mai, Hà Nội</h4>
                        <p>Concept sân vườn, minimalist, không gian giàu cảm xúc</p>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <div id="tab-concept" class="tab-pane">
            <div class="row g-4">
                <div class="col-md-4">
                <div class="studio-card sr h-100">
                    <div class="studio-card-img"><img
                            src="{{ asset('/user/demo.jpg') }}?t=420x250/f2e2d6/b07d62?text=Fine+Art" alt="Fine Art">
                    </div>
                    <div class="studio-card-body">
                        <h4>Fine Art Cinematic</h4>
                        <p>Điêu khắc ánh sáng, đậm chất hội họa điện ảnh</p>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="studio-card sr d2 h-100">
                    <div class="studio-card-img"><img
                            src="{{ asset('/user/demo.jpg') }}?t=420x250/edd9cf/b07d62?text=Boho" alt="Boho"></div>
                    <div class="studio-card-body">
                        <h4>Boho phóng khoáng</h4>
                        <p>Hoa lá, cỏ cây, tự do bay bổng giữa thiên nhiên</p>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="studio-card sr d3 h-100">
                    <div class="studio-card-img"><img
                            src="{{ asset('/user/demo.jpg') }}?t=420x250/f7eae3/b07d62?text=Á+Đông" alt="Á Đông"></div>
                    <div class="studio-card-body">
                        <h4>Cổ điển Á Đông</h4>
                        <p>Áo dài, nón lá, hoa sen – vẻ đẹp thuần Việt tinh tế</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
