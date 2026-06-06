@php
    $introVideo = asset('videos/gioiThieu.mp4');
@endphp

<!-- ══════════════════════ VIDEO SECTION ════════════════ -->
<section class="video-section">
    <div class="video-inner">
        <div class="video-bg">
            <video
                class="video-bg-el"
                id="videoBg"
                src="{{ $introVideo }}"
                autoplay
                muted
                loop
                playsinline
                preload="metadata"
                aria-hidden="true"
            ></video>
        </div>
        <div class="video-overlay"></div>
        <div class="container video-content">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-9 col-lg-7 col-xl-6">
                    <div class="video-content-box text-center">
                        <span class="video-tag sr sr-fast">Showreel 2025</span>
                        <h2 class="video-title sr d1 sr-flip">Tình yêu được kể<br>bằng hình ảnh điện ảnh</h2>
                        <p class="video-sub sr d2">Hơn 3.800 cặp đôi đã tin tưởng Sora Studio lưu giữ khoảnh khắc trọng đại nhất</p>
                        <div class="sr d2">
                            <button class="play-btn play-btn--compact" id="playBtn" type="button" aria-label="Xem video">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════ VIDEO STATS ROW ════════════════ -->
<section class="video-stats-section">
    <div class="container">
        <div class="row g-3 g-md-4 justify-content-center video-stats sr d3">
            <div class="col-6 col-md-3 text-center">
                <span class="vs-num count-up" data-count="98" data-format="%" data-suffix="%">0</span>
                <div class="vs-label">Khách hàng hài lòng</div>
            </div>
            <div class="col-6 col-md-3 text-center">
                <span class="vs-num count-up" data-count="90" data-format="%" data-suffix="%">0</span>
                <div class="vs-label">Khách hàng giới thiệu lại</div>
            </div>
            <div class="col-6 col-md-3 text-center">
                <span class="vs-num count-up" data-count="10" data-suffix="+">0</span>
                <div class="vs-label">Đối tác đồng hành</div>
            </div>
            <div class="col-6 col-md-3 text-center">
                <span class="vs-num count-up" data-count="10" data-suffix="M+">0</span>
                <div class="vs-label">Lượt xem trên các nền tảng MXH</div>
            </div>
        </div>
    </div>
</section>

<!-- Video fullscreen modal -->
<div class="video-modal" id="videoModal" role="dialog" aria-modal="true" aria-label="Xem video giới thiệu">
    <button class="modal-close" id="modalClose" type="button" aria-label="Đóng video">
        <i class="fas fa-times"></i>
    </button>
    <video
        id="videoPlayer"
        class="video-modal-player"
        src="{{ $introVideo }}"
        controls
        playsinline
        preload="metadata"
    ></video>
</div>
