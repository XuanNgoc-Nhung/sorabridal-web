<!-- ══════════════════════ FEEDBACK ═══════════════════════ -->
<section class="home-section feedback-section">
    <div class="container">
        @include('user.partials.section-head', [
            'tag' => 'Khách hàng nói gì',
            'title' => 'Phản hồi từ khách hàng',
            'subtitle' => 'Những lời nhắn chân thành từ các cặp đôi đã tin tưởng Sora Bridal – minh chứng cho chất lượng dịch vụ và sự hài lòng của khách hàng.',
            'animate' => 'fadeInUp',
        ])

        @if (!empty($feedbackImages))
            <div class="feedback-slider sr d1" id="feedbackSlider" aria-label="Slider phản hồi khách hàng">
                <button type="button" class="feedback-nav feedback-nav--prev" id="feedbackPrev" aria-label="Phản hồi trước">
                    <i class="fas fa-chevron-left" aria-hidden="true"></i>
                </button>

                <div class="feedback-viewport">
                    <div class="feedback-track" id="feedbackTrack">
                        @foreach ($feedbackImages as $image)
                            <div class="feedback-slide" data-index="{{ $loop->index }}">
                                <figure class="feedback-card">
                                    <button type="button" class="feedback-card__open"
                                        data-index="{{ $loop->index }}"
                                        aria-label="Xem phản hồi {{ $loop->iteration }} toàn màn hình">
                                        <img src="{{ asset($image['src']) }}" alt="{{ $image['alt'] }}" loading="lazy">
                                    </button>
                                </figure>
                            </div>
                        @endforeach
                    </div>
                </div>

                <button type="button" class="feedback-nav feedback-nav--next" id="feedbackNext" aria-label="Phản hồi sau">
                    <i class="fas fa-chevron-right" aria-hidden="true"></i>
                </button>

                <div class="feedback-dots" id="feedbackDots" role="tablist" aria-label="Chọn phản hồi"></div>
            </div>
        @endif
    </div>
</section>

@if (!empty($feedbackImages))
    <div class="feedback-lightbox" id="feedbackLightbox" role="dialog" aria-modal="true" aria-label="Xem phản hồi toàn màn hình" hidden>
        <button type="button" class="feedback-lightbox__close" id="feedbackLightboxClose" aria-label="Đóng">
            <i class="fas fa-times" aria-hidden="true"></i>
        </button>

        <button type="button" class="feedback-lightbox__nav feedback-lightbox__nav--prev" id="feedbackLightboxPrev" aria-label="Ảnh trước">
            <i class="fas fa-chevron-left" aria-hidden="true"></i>
        </button>

        <div class="feedback-lightbox__stage">
            <img id="feedbackLightboxImg" src="" alt="">
        </div>

        <button type="button" class="feedback-lightbox__nav feedback-lightbox__nav--next" id="feedbackLightboxNext" aria-label="Ảnh sau">
            <i class="fas fa-chevron-right" aria-hidden="true"></i>
        </button>

        <span class="feedback-lightbox__counter" id="feedbackLightboxCounter" aria-live="polite"></span>
    </div>
@endif

@push('styles')
<link rel="stylesheet" href="{{ asset('user/css/home-feedback.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('user/js/home-feedback.js') }}"></script>
@endpush
