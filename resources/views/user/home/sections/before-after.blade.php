<!-- ══════════════════════ BEFORE / AFTER ════════════════ -->
<section class="ba-section home-section">
    <div class="container">
        @include('user.partials.section-head', [
            'tag' => 'Trước & Sau chỉnh sửa',
            'title' => 'Hậu kì đến khi ưng ý',
            'animate' => 'zoomIn',
            'revealOnce' => true,
        ])

        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="ba-intro sr sr-once d1 text-center">
                    <p>Không chỉ chụp ảnh – Sora Studio đưa mỗi khoảnh khắc lên tầm cao nghệ thuật. Cùng xem sự khác biệt kỳ
                        diệu sau khi qua tay đội ngũ retouch chuyên nghiệp của Sora dưới đây nhé...</p>
                </div>
            </div>
        </div>

        <div class="row g-4 g-lg-4 ba-grid">
            @foreach ($beforeAfterItems as $item)
                <div class="col-12 col-lg-6">
                    <article class="ba-item sr sr-once {{ $loop->index > 0 ? 'd1' : '' }} h-100">
                        <h3 class="ba-card-label">{{ $loop->iteration }}. {{ $item['title'] }}</h3>
                        <div class="ba-slider-wrap" data-ba-start="{{ $item['start'] ?? 50 }}">
                            <div class="ba-img before">
                                <img src="{{ asset($item['before_src']) }}" alt="{{ $item['before_alt'] }}" draggable="false" loading="lazy">
                            </div>
                            <div class="ba-reveal">
                                <div class="ba-img after">
                                    <img src="{{ asset($item['after_src']) }}" alt="{{ $item['after_alt'] }}" draggable="false" loading="lazy">
                                </div>
                            </div>
                            <div class="ba-handle" role="slider" aria-label="So sánh trước và sau" aria-valuemin="2" aria-valuemax="98" aria-valuenow="{{ $item['start'] ?? 50 }}">
                                <div class="ba-handle-circle">
                                    <i class="fas fa-chevron-left" aria-hidden="true"></i>
                                    <i class="fas fa-chevron-right" aria-hidden="true"></i>
                                </div>
                            </div>
                            <span class="ba-label-before">Trước</span>
                            <span class="ba-label-after">Sau</span>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>

@push('scripts')
<script src="{{ asset('user/js/before-after.js') }}"></script>
@endpush
