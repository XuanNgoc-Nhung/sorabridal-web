<!-- ══════════════════════ HERO ══════════════════════════ -->
<section class="hero home-section">
    <div class="container">
        <div class="row align-items-center g-4 g-lg-5">

            <div class="col-lg-6 hero-content order-2 order-lg-1">
                <div class="hero-eyebrow sr">
                    <div class="hero-eyebrow-line"></div>
                    <span>Sora Studio · Hà Nội · Est. 2022</span>
                </div>
                <p class="hero-typed-line sr d1">
                    <span class="typing-text" data-typing-speed="36"
                        data-typing-text="Phong cách Hàn Quốc, tinh tế, tối giản"></span><span class="typing-cursor"
                        aria-hidden="true"></span>
                </p>
                <h1 class="hero-title sr d2">
                    Mỗi chiếc váy cưới là <br>
                    <em>một giấc mơ.</em><br> Mỗi tấm hình là<br> một chuyện tình đẹp.
                </h1>
                <p class="hero-desc sr d3">Theo đuổi phong cách Hàn Quốc tinh tế và nhẹ nhàng, chúng tôi ghi dấu ấn qua
                    những concept sân thượng độc quyền cùng khoảnh khắc hoàng hôn lãng mạn. Mỗi khung hình tại Sora đều
                    mang một dấu ấn riêng, nơi những rung động chân thật nhất được thăng hoa. Với sự tận tâm trong từng
                    chi tiết và dịch vụ chăm sóc chuẩn mực, Sora Bridal cam kết đồng hành cùng bạn kiến tạo nên những kỷ
                    niệm cưới hoàn mỹ và dạt dào cảm xúc.</p>
                <div class="hero-actions sr d4">
                    <a href="{{ route('user.dat-lich') }}" class="btn btn-solid">Nhận tư vấn ngay <i
                            class="fas fa-arrow-right"></i></a>
                    {{-- <a href="#" class="btn btn-outline">Xem bộ sưu tập</a> --}}
                </div>
            </div>

            <div class="col-lg-6 hero-img-wrap sr sr-zoom d2 order-1 order-lg-2">
                <div class="hero-img-main">
                    <img src="{{ asset('/user/anhTrangChu.webp') }}"
                        alt="Sora Studio wedding photography">
                </div>
                <div class="hero-float-img">
                    <img src="{{ asset('/user/matTien.webp') }}"
                        style="width: 100%; height: 100%; object-fit: fill !important;" alt="Studio detail">
                </div>
                {{-- <div class="hero-badge">
          <span class="badge-icon">🏆</span>
          <div>
            <span class="badge-strong">Top Studio 2025</span>
            <span class="badge-sub">Hanoi Wedding Awards</span>
          </div>
        </div> --}}
            </div>

        </div>

        <div class="hero-stats-wrap sr d5">
            <div class="hero-divider"></div>
            <div class="row g-2 g-lg-4 hero-stats justify-content-between">
                <div class="col-3 stat-item text-center">
                    <span class="stat-num count-up" data-count="5" data-suffix="+">0</span>
                    <div class="stat-label">Năm kinh nghiệm</div>
                </div>
                <div class="col-3 stat-item text-center">
                    <span class="stat-num count-up" data-count="5000" data-format="k" data-suffix="+">0</span>
                    <div class="stat-label">Cặp đôi hạnh phúc</div>
                </div>
                <div class="col-3 stat-item text-center">
                    <span class="stat-num count-up" data-count="2">0</span>
                    <div class="stat-label">Phim trường độc quyền</div>
                </div>
                <div class="col-3 stat-item text-center">
                    <span class="stat-num count-up" data-count="200" data-suffix="+">0</span>
                    <div class="stat-label">Concept</div>
                </div>
            </div>
        </div>
    </div>
</section>
