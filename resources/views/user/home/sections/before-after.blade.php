<!-- ══════════════════════ BEFORE / AFTER ════════════════ -->
<section class="ba-section home-section">
    <div class="container">
        @include('user.partials.section-head', [
            'tag' => 'Trước & Sau chỉnh sửa',
            'title' => 'Hậu kì đến khi ưng ý',
            'animate' => 'zoomIn',
            'revealOnce' => true,
        ])
        <div class="ba-intro sr sr-once d1">
            <p>Không chỉ chụp ảnh – Sora Studio đưa mỗi khoảnh khắc lên tầm cao nghệ thuật. cùng Xem sự khác biệt kỳ
                diệu sau khi qua tay đội ngũ retouch chuyên nghiệp của sora dưới đây nhé...</p>
        </div>

        <div class="row g-4 ba-grid">

            <!-- Slider 1 -->
            <div class="col-md-6 sr sr-once">
                <div class="ba-card-label">1. Ảnh photoshop mặt cỏ trước & sau</div>
                <div class="ba-slider-wrap" id="ba1">
                    <div class="ba-img before">
                        <img src="{{ asset('/user/anhPtsTruoc1.webp') }}"
                            style="width: 100%; height: 100%; object-fit: cover;" alt="Trước retouch">
                    </div>
                    <div class="ba-img after" id="ba1-after">
                        <img src="{{ asset('/user/anhPtsSau1.webp') }}"
                            style="width: 100%; height: 100%; object-fit: cover;" alt="Sau retouch">
                    </div>
                    <div class="ba-handle" id="ba1-handle">
                        <div class="ba-handle-circle">
                            <i class="fas fa-chevron-left"></i><i class="fas fa-chevron-right"></i>
                        </div>
                    </div>
                    <span class="ba-label-before">Trước</span>
                    <span class="ba-label-after">Sau</span>
                </div>
            </div>

            <!-- Slider 2 -->
            <div class="col-md-6 sr sr-once d1">
                <div class="ba-card-label">2. Ảnh photoshop giả nắng trước & sau</div>
                <div class="ba-slider-wrap" id="ba2">
                    <div class="ba-img before">
                        <img src="{{ asset('/user/anhPtsTruoc2.webp') }}"
                            style="width: 100%; height: 100%; object-fit: cover;" alt="Trước retouch">
                    </div>
                    <div class="ba-img after" id="ba2-after">
                        <img src="{{ asset('/user/anhPtsSau2.webp') }}"
                            style="width: 100%; height: 100%; object-fit: cover;" alt="Sau retouch">
                    </div>
                    <div class="ba-handle" id="ba2-handle">
                        <div class="ba-handle-circle">
                            <i class="fas fa-chevron-left"></i><i class="fas fa-chevron-right"></i>
                        </div>
                    </div>
                    <span class="ba-label-before">Trước</span>
                    <span class="ba-label-after">Sau</span>
                </div>
            </div>

            <!-- Slider 3 -->
            {{-- <div class="sr sr-once">
        <div class="ba-card-label">💎 Váy đính đá – Chỉnh sáng tôn dáng</div>
        <div class="ba-slider-wrap" id="ba3">
          <div class="ba-img before">
            <img src="{{ asset('/user/demo.jpg') }}?t=860x500/bea898/6f4535?text=Trước+-+Nền+tối+mờ" alt="Trước
            retouch">
        </div>
        <div class="ba-img after" id="ba3-after">
            <img src="{{ asset('/user/demo.jpg') }}?t=860x500/f8ede5/b07d62?text=Sau+-+Lung+linh+lấp+lánh"
                alt="Sau retouch">
        </div>
        <div class="ba-handle" id="ba3-handle">
            <div class="ba-handle-circle">
                <i class="fas fa-chevron-left"></i><i class="fas fa-chevron-right"></i>
            </div>
        </div>
        <span class="ba-label-before">Trước</span>
        <span class="ba-label-after">Sau</span>
    </div>
    </div> --}}

    <!-- Slider 4 -->
    {{-- <div class="sr sr-once d1">
        <div class="ba-card-label">🌿 Concept ngoại cảnh – Nâng màu tự nhiên</div>
        <div class="ba-slider-wrap" id="ba4">
          <div class="ba-img before">
            <img src="{{ asset('/user/demo.jpg') }}?t=860x500/c2aa98/7a5540?text=Trước+-+Ánh+sáng+xỉn+màu" alt="Trước
    retouch">
    </div>
    <div class="ba-img after" id="ba4-after">
        <img src="{{ asset('/user/demo.jpg') }}?t=860x500/fdf4ef/b88060?text=Sau+-+Golden+hour+ấm+áp" alt="Sau retouch">
    </div>
    <div class="ba-handle" id="ba4-handle">
        <div class="ba-handle-circle">
            <i class="fas fa-chevron-left"></i><i class="fas fa-chevron-right"></i>
        </div>
    </div>
    <span class="ba-label-before">Trước</span>
    <span class="ba-label-after">Sau</span>
    </div>
    </div> --}}

    </div><!-- /ba-grid -->
    </div>
</section>
