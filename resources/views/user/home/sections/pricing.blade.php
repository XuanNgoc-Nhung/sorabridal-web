<!-- ══════════════════════ PRICING ═══════════════════════ -->
<section class="bg-warm home-section">
    <div class="container">
        @include('user.partials.section-head', [
            'tag' => 'Bảng giá',
            'title' => 'Chi phí hợp lý – Giá trị vượt mong đợi',
            'animate' => 'fadeInUp',
        ])
        <div class="price-intro sr d1">
            <i class="fas fa-gem"></i>
            <h3>Tại sao Sora có mức giá tối ưu?</h3>
            <p>Không chỉ sở hữu phim trường độc quyền mà từ khâu may đo váy tới in ấn ảnh cưới. Sora đều có xưởng sản
                xuất riêng giúp tiết kiệm chi phí trung gian. Đảm bảo dâu rể nhận được trải nghiệm dịch vụ đẳng cấp với
                mức giá cạnh tranh nhất, chất lượng ảnh cao cấp, váy cưới khác biệt.</p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-12">
                <div class="price-css-slider sr" id="priceStackSlider">
                    <input type="radio" name="price-slider" id="price-slide-1" class="price-css-slider__radio">
                    <input type="radio" name="price-slider" id="price-slide-2" class="price-css-slider__radio" checked>
                    <input type="radio" name="price-slider" id="price-slide-3" class="price-css-slider__radio">

                    <div class="row g-4 price-css-slider__holder justify-content-center">
                        <div class="col-10 col-sm-9 col-md-8 col-lg-4 price-css-slider__col">
                            <label for="price-slide-1" class="price-css-slider__item price-css-slider__item--1">
                                <div class="price-card h-100">
                                    <div class="price-name">Gói Dấu yêu</div>
                                    <div class="price-amount"><span class="count-up" data-count="6.3" data-decimals="1">0</span><small>
                                            triệu</small></div>
                                    <div class="price-features">
                                        <div>4 concept tại studio</div>
                                        <div>2 váy – 2 vest cho ngày chụp</div>
                                        <div>1 váy ngày cưới dòng VIP</div>
                                        <div>1 váy ngày cưới dòng VIP</div>
                                        <div>30 ảnh chỉnh sửa</div>
                                    </div>
                                    <span class="btn btn-outline w-100 justify-content-center">Chọn gói này</span>
                                </div>
                            </label>
                        </div>

                        <div class="col-10 col-sm-9 col-md-8 col-lg-4 price-css-slider__col">
                            <label for="price-slide-2" class="price-css-slider__item price-css-slider__item--2">
                                <div class="price-card featured h-100">
                                    <div class="price-name">Gói Cảm xúc</div>
                                    <div class="price-amount"><span class="count-up" data-count="11.9" data-decimals="1">0</span><small>
                                            triệu</small></div>
                                    <div class="price-features">
                                        <div>Chụp 2 điêm ngoại cảnh và studio</div>
                                        <div>Thêm lựa chon concept hoàng hôn/ tối</div>
                                        <div>1 váy cưới dòng luxury nước đầu</div>
                                        <div>Album ảnh cưới 25x35</div>
                                        <div>40 ảnh chỉnh sửa</div>
                                    </div>
                                    <span class="btn btn-solid w-100 justify-content-center">Chọn gói này</span>
                                </div>
                            </label>
                        </div>

                        <div class="col-10 col-sm-9 col-md-8 col-lg-4 price-css-slider__col">
                            <label for="price-slide-3" class="price-css-slider__item price-css-slider__item--3">
                                <div class="price-card h-100">
                                    <div class="price-name">Gói Trọn vẹn</div>
                                    <div class="price-amount"><span class="count-up" data-count="16.8" data-decimals="1">0</span><small>
                                            triệu</small></div>
                                    <div class="price-features">
                                        <div>3 điểm chụp: Nội thành, phim trường, studio</div>
                                        <div>3 váy – 3 vest cho ngày chụp</div>
                                        <div>1 váy cưới limited may đo riêng</div>
                                        <div>71 máy chụp ảnh phóng sự cưới</div>
                                        <div>ảnh in ấn chất lượng MICA HD cao cấp</div>
                                    </div>
                                    <span class="btn btn-outline w-100 justify-content-center">Chọn gói này</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="row justify-content-center d-lg-none">
                        <div class="col-auto">
                            <div class="price-css-slider__bullets" aria-hidden="true">
                                <label for="price-slide-1" class="price-css-slider__bullet price-css-slider__bullet--1"></label>
                                <label for="price-slide-2" class="price-css-slider__bullet price-css-slider__bullet--2"></label>
                                <label for="price-slide-3" class="price-css-slider__bullet price-css-slider__bullet--3"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
