<!-- ══════════════════════ COLLECTION SLIDER ════════════ -->
<section class="collection-section home-section">
    <div class="container">
        <div class="collection-watermark sr sr-rise d1">Sora Bridal</div>
        @include('user.partials.section-head', [
            'tag' => 'Những thiết kế đẳng cấp',
            'title' => 'Bộ sưu tập váy cưới đa dạng',
            'subtitle' => 'Hàng trăm mẫu váy cưới được cập nhật liên tục, theo xu hướng. đáp ứng được đầy đủ phong cách và cá nhân hóa theo từng cô dâu',
            'animate' => 'fadeInDown',
        ])

        <div class="sr d2">
            <div class="collection-carousel-wrap">
                <div class="collection-carousel-track" id="outerTrack">
                    @foreach ($collectionSliders as $index => $slide)
                        <div class="col-slide">
                            <div class="row align-items-center g-4 g-lg-5">
                                <div class="col-lg-5 order-1">
                                    <div class="collection-num">{{ $slide['number'] }}</div>
                                    <h3 class="collection-title text-pink">{{ $slide['title'] }}</h3>
                                    <p class="collection-desc">{{ $slide['description'] }}</p>
                                    <div class="collection-actions">
                                        <a href="{{ $slide['cta_url'] }}" target="_blank" rel="noopener noreferrer"
                                            class="btn btn-solid collection-cta">
                                            {{ $slide['cta_label'] }} <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-7 order-2">
                                    <div class="inner-wrap" id="iw-{{ $index }}">
                                        <div class="inner-track" id="it-{{ $index }}">
                                            @foreach ($slide['images'] as $image)
                                                <div class="in-slide">
                                                    <img src="{{ asset($image['src']) }}" alt="{{ $image['alt'] }}"
                                                        loading="lazy">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="collection-nav">
                <div class="collection-dots" id="outerDots"></div>
                <div class="collection-nav-btns">
                    <button type="button" class="outer-btn" id="outerPrev" aria-label="Slide trước">❮</button>
                    <button type="button" class="outer-btn" id="outerNext" aria-label="Slide sau">❯</button>
                </div>
            </div>
        </div>
    </div>
</section>
