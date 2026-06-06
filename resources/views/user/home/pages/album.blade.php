<!-- PAGE: Album thực tế -->
<div class="page-overlay" id="page-album">
    <div class="page-bar">
        <button class="page-bar-back" onclick="closePage('page-album')"><i class="fas fa-arrow-left"></i> Trang
            chủ</button>
        <span class="page-bar-title">Album thực tế</span>
    </div>
    <div class="page-content">
        <div class="sp-hero">
            <span class="sec-tag">Khách hàng · Bộ ảnh thực tế</span>
            <h1>Những câu chuyện tình yêu<br>được Sora ghi lại</h1>
            <p>Đây là những bộ ảnh cưới thực tế từ khách hàng – không chỉnh sửa quảng cáo, không sắp đặt giả tạo. Đây là
                sự thật đẹp nhất về những ngày hạnh phúc.</p>
        </div>
        <div class="album-grid">
            <div class="album-card">
                <img src="{{ asset('/user/demo.jpg') }}?t=580x380/f2e2d6/b07d62?text=Minh+Châu+%26+Hoàng+Anh"
                    alt="Album 1">
                <div class="album-card-info">
                    <h4>Minh Châu &amp; Hoàng Anh</h4>
                    <p>Sora Rooftop · Concept Midsummer Dream · Tháng 3/2025</p>
                </div>
            </div>
            <div class="album-card">
                <img src="{{ asset('/user/demo.jpg') }}?t=580x380/ecdacf/b07d62?text=Lan+Phương+%26+Đức+Minh"
                    alt="Album 2">
                <div class="album-card-info">
                    <h4>Lan Phương &amp; Đức Minh</h4>
                    <p>Biệt Thự Sora · Concept Versailles Blanc · Tháng 2/2025</p>
                </div>
            </div>
            <div class="album-card">
                <img src="{{ asset('/user/demo.jpg') }}?t=580x380/f5e8e0/b07d62?text=Thu+Hà+%26+Minh+Quân"
                    alt="Album 3">
                <div class="album-card-info">
                    <h4>Thu Hà &amp; Minh Quân</h4>
                    <p>Both Studios · Concept Rose Princess · Tháng 1/2025</p>
                </div>
            </div>
            <div class="album-card">
                <img src="{{ asset('/user/demo.jpg') }}?t=580x380/f3e7df/b07d62?text=Bảo+Châu+%26+Tiến+Đạt"
                    alt="Album 4">
                <div class="album-card-info">
                    <h4>Bảo Châu &amp; Tiến Đạt</h4>
                    <p>Sora Rooftop · Áo dài truyền thống · Tháng 12/2024</p>
                </div>
            </div>
        </div>
    </div>
</div>
