<!-- PAGE: Đặt lịch tư vấn -->
<div class="page-overlay" id="page-dat-lich">
    <div class="page-bar">
        <button class="page-bar-back" onclick="closePage('page-dat-lich')"><i class="fas fa-arrow-left"></i> Trang
            chủ</button>
        <span class="page-bar-title">Đặt lịch tư vấn</span>
    </div>
    <div class="page-content">
        <div class="sp-hero">
            <span class="sec-tag">Liên hệ · Đặt lịch</span>
            <h1>Bắt đầu hành trình<br>cùng Sora Studio</h1>
            <p>Điền form dưới đây để đặt lịch tư vấn miễn phí. Đội ngũ Sora sẽ liên hệ trong vòng 2 giờ làm việc để tư
                vấn chi tiết concept và báo giá phù hợp nhất.</p>
        </div>
        <div class="contact-grid">
            <div>
                <div class="contact-info-item">
                    <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div>
                        <h4>Sora Rooftop</h4>
                        <p>Phố Xuân Diệu, Tây Hồ, Hà Nội<br>View Hồ Tây · Golden Hour</p>
                    </div>
                </div>
                <div class="contact-info-item">
                    <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div>
                        <h4>Biệt Thự Sora</h4>
                        <p>Ngõ 55 Quảng An, Tây Hồ, Hà Nội<br>Colonial Villa · Cổ điển Pháp</p>
                    </div>
                </div>
                <div class="contact-info-item">
                    <div class="contact-icon"><i class="fas fa-phone-alt"></i></div>
                    <div>
                        <h4>Hotline</h4>
                        <p>0909 123 456<br>8:00 – 20:00 · Tất cả các ngày</p>
                    </div>
                </div>
                <div class="contact-info-item">
                    <div class="contact-icon"><i class="fab fa-facebook-messenger"></i></div>
                    <div>
                        <h4>Zalo / Messenger</h4>
                        <p>Phản hồi nhanh trong 30 phút<br>trong giờ làm việc</p>
                    </div>
                </div>
                <div class="contact-info-item">
                    <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                    <div>
                        <h4>Email</h4>
                        <p>hello@sorastudio.vn</p>
                    </div>
                </div>
            </div>
            <div>
                @include('user.partials.booking-form', ['bookingFormContext' => 'home'])
            </div>
        </div>
    </div>
</div>
