<!-- ══════════════════════ BLOG ═══════════════════════════ -->
<section class="home-section">
    <div class="container">
        @include('user.partials.section-head', [
            'tag' => 'Cập nhật',
            'title' => 'Blog cưới &amp; Cảm hứng',
            'animate' => 'fadeInUp',
        ])
        <div class="row g-4">
            <div class="col-lg-4">
            <div class="blog-card sr h-100">
                <div class="blog-img"><img src="{{ asset('/user/demo.jpg') }}?t=420x230/f2e3da/b07d62?text=Bí+quyết"
                        alt="Blog 1">
                </div>
                <div class="blog-body">
                    <span class="blog-cat">Tư vấn cô dâu</span>
                    <h4>5 bí quyết chọn phong cách chụp ảnh cưới phù hợp nhất</h4>
                    <p>Phù hợp với từng dáng người, tính cách và câu chuyện tình yêu của bạn...</p>
                    <a href="#" class="read-more">Đọc tiếp <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            </div>
            <div class="col-lg-4">
            <div class="blog-card sr d2 h-100">
                <div class="blog-img"><img src="{{ asset('/user/demo.jpg') }}?t=420x230/eedfd6/b07d62?text=Xu+hướng"
                        alt="Blog 2">
                </div>
                <div class="blog-body">
                    <span class="blog-cat">Xu hướng 2025</span>
                    <h4>Top 3 concept phim trường được yêu thích nhất năm 2025</h4>
                    <p>Minimalism, vintage và cổ điển châu Âu đang dẫn đầu xu hướng ảnh cưới...</p>
                    <a href="#" class="read-more">Đọc tiếp <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            </div>
            <div class="col-lg-4">
            <div class="blog-card sr d3 h-100">
                <div class="blog-img"><img src="{{ asset('/user/demo.jpg') }}?t=420x230/f3e3db/b07d62?text=Phim+trường"
                        alt="Blog 3"></div>
                <div class="blog-body">
                    <span class="blog-cat">Tin Sora</span>
                    <h4>Ra mắt phim trường "Hoa Sữa" – lãng mạn mùa thu Hà Nội</h4>
                    <p>Không gian mới hoàn toàn dành riêng cho các cặp đôi yêu vẻ đẹp thu Hà Nội...</p>
                    <a href="#" class="read-more">Đọc tiếp <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
