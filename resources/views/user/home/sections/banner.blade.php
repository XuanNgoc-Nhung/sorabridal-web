@php
    $homeBanners = [
        [
            'image' => asset('user/matTien.webp'),
            'alt' => 'Mặt tiền Sora Studio Hà Nội',
            'eyebrow' => 'Sora Studio · Hà Nội · Est. 2022',
            'title' => 'Studio ảnh cưới nghệ thuật tại Tây Hồ',
            'desc' => 'Không gian chụp fine art phong cách Hàn Quốc, phim trường độc quyền và dịch vụ trọn gói từ pre-wedding đến ngày cưới.',
            'cta' => 'Nhận tư vấn ngay',
            'url' => route('user.dat-lich'),
        ],
        [
            'image' => asset('user/phimTruong1.webp'),
            'alt' => 'Phim trường Sora Rooftop',
            'eyebrow' => 'Phim trường độc quyền',
            'title' => 'Sora Rooftop & Biệt thự Sora',
            'desc' => 'Hệ thống phim trường 2000m², sức chứa lên tới 30 cặp đôi cùng lúc — concept sân thượng và hoàng hôn lãng mạn.',
            'cta' => 'Khám phá concept',
            'url' => 'https://album.sorawedding.vn/concept/',
        ],
        [
            'image' => asset('user/anhTrangChu.webp'),
            'alt' => 'Ảnh cưới Sora Bridal',
            'eyebrow' => 'Sora Bridal',
            'title' => 'Ghi dấu khoảnh khắc hạnh phúc',
            'desc' => 'Hơn 5000 cặp đôi đã tin tưởng. Tận tâm – Trách nhiệm – Phát triển trong từng khung hình và từng chi tiết dịch vụ.',
            'cta' => 'Đặt lịch chụp',
            'url' => route('user.dat-lich'),
        ],
    ];
@endphp

<!-- ══════════════════════ BANNER SLIDER ═══════════════════ -->
<section class="home-banner" aria-label="Banner studio">
    <div class="home-banner-slider" id="homeBannerSlider">
        <div class="home-banner-track" id="homeBannerTrack">
            @foreach ($homeBanners as $banner)
            <article class="home-banner-slide{{ $loop->first ? ' is-active' : '' }}">
                <div class="home-banner-media">
                    <img src="{{ $banner['image'] }}" alt="{{ $banner['alt'] }}" loading="{{ $loop->first ? 'eager' : 'lazy' }}">
                </div>
                <div class="home-banner-overlay" aria-hidden="true"></div>
                <div class="home-banner-content container">
                    <span class="home-banner-part home-banner-eyebrow" style="--banner-i:0">{{ $banner['eyebrow'] }}</span>
                    <h2 class="home-banner-part home-banner-title" style="--banner-i:1">{{ $banner['title'] }}</h2>
                    <p class="home-banner-part home-banner-desc" style="--banner-i:2">{{ $banner['desc'] }}</p>
                    {{-- <a href="{{ $banner['url'] }}" class="home-banner-part btn btn-solid home-banner-cta" style="--banner-i:3"
                        @if (str_starts_with($banner['url'], 'http')) target="_blank" rel="noopener noreferrer" @endif>
                        {{ $banner['cta'] }} <i class="fas fa-arrow-right" aria-hidden="true"></i>
                    </a> --}}
                </div>
            </article>
            @endforeach
        </div>
        <button type="button" class="home-banner-nav prev" id="homeBannerPrev" aria-label="Banner trước">
            <i class="fas fa-chevron-left" aria-hidden="true"></i>
        </button>
        <button type="button" class="home-banner-nav next" id="homeBannerNext" aria-label="Banner sau">
            <i class="fas fa-chevron-right" aria-hidden="true"></i>
        </button>
        <div class="home-banner-dots" id="homeBannerDots" role="tablist" aria-label="Chọn banner"></div>
    </div>
</section>
