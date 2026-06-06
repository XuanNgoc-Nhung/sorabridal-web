<!-- ══════════════════════ VIDEO SECTION ════════════════ -->
<div class="video-section">
    <div class="video-inner">
        <div class="video-bg">
            <img src="{{ asset('/user/demo.jpg') }}?t=1440x620/2a1f17/b07d62?text=Sora+Wedding+Film"
                alt="Video background">
        </div>
        <div class="video-overlay"></div>
        <div class="video-content">
            <span class="video-tag sr sr-fast">Xem thêm · Showreel 2025</span>
            <h2 class="video-title sr d1 sr-flip">Tình yêu được kể<br>bằng hình ảnh điện ảnh</h2>
            <p class="video-sub sr d2">Hơn 3.800 cặp đôi đã tin tưởng Sora Studio lưu giữ khoảnh khắc trọng đại nhất</p>
            <div class="sr d2">
                <button class="play-btn" id="playBtn" aria-label="Xem video">
                    <i class="fas fa-play" style="margin-left:4px"></i>
                </button>
            </div>
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
    </div>
</div>

<!-- Video modal -->
<div class="video-modal" id="videoModal">
    <div class="video-modal-inner">
        <button class="modal-close" id="modalClose"><i class="fas fa-times"></i></button>
        <iframe id="videoFrame" src="" allowfullscreen allow="autoplay"></iframe>
    </div>
</div>
