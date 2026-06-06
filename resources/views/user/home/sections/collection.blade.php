<!-- ══════════════════════ COLLECTION SLIDER ════════════ -->
<section class="collection-section home-section">
    <div class="container">
        <div class="watermark sr sr-rise d1">Sora Bridal</div>
        @include('user.partials.section-head', [
            'tag' => 'Những thiết kế đẳng cấp',
            'title' => 'Bộ sưu tập váy cưới đa dạng',
            'subtitle' => 'Hàng trăm mẫu váy cưới được cập nhật liên tục, theo xu hướng. đáp ứng được đầy đủ phong cách và cá nhân hóa theo từng cô dâu',
            'animate' => 'fadeInDown',
        ])

        <div class="sr d2">
            <div class="outer-track-wrap">
                <div class="outer-track" id="outerTrack">

                    <!-- Collection 1 -->
                    <div class="col-slide">
                        <div class="row align-items-center g-4 g-lg-5 col-layout">
                            <div class="col-lg-5 col-info">
                                <div class="col-num sec-tag">01</div>
                                <h3 class="col-title sec-tag text-pink">Dòng váy VIP</h3>
                                <p class="col-desc">Những thiết kế váy cưới hiện đại, thanh lịch và dễ mặc. Dòng VIP
                                    được SORA BRIDAL chọn lọc kỹ lưỡng để bạn tự tin tỏa sáng trong ngày cưới mà không
                                    cần đắn đo về chi phí.</p>
                                <div class="col-actions">
                                    <a href="https://album.sorawedding.vn/soravaycuoi/vayluxury1/" target="_blank"
                                        class="btn btn-solid" style="font-size:0.84rem;padding:11px 24px">Xem
                                        BST váy <i class="fas fa-arrow-right"></i></a>
                                    {{-- <a href="#" class="link-arr">Tất cả váy <i class="fas fa-arrow-right"></i></a> --}}
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="inner-wrap" id="iw-0">
                                    <div class="inner-track" id="it-0">
                                        <div class="in-slide"><img src="{{ asset('/user/vayVip1.jpg') }}"
                                                style="width: 100%; height: 100%; object-fit: cover;" alt="S1"></div>
                                        <div class="in-slide"><img src="{{ asset('/user/vayVip2.jpg') }}"
                                                style="width: 100%; height: 100%; object-fit: cover;" alt="S2"></div>
                                        <div class="in-slide"><img src="{{ asset('/user/vayVip3.jpg') }}"
                                                style="width: 100%; height: 100%; object-fit: cover;" alt="S3"></div>
                                        {{-- <div class="in-slide"><img src="{{ asset('/user/demo.jpg') }}?t=380x430/f5e8e0/b07d62?text=Shanghai+4"
                                        alt="S4">
                                    </div> --}}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Collection 2 -->
                <div class="col-slide">
                    <div class="row align-items-center g-4 g-lg-5 col-layout">
                        <div class="col-lg-5 col-info">
                            <div class="col-num sec-tag">02</div>
                            {{-- <span class="sec-tag">BST Cao cấp</span> --}}
                            <h3 class="col-title sec-tag text-pink">Váy luxury</h3>
                            <p class="col-desc">Những thiết kế cao cấp với chất liệu sang trọng và đường may tinh xảo.
                                Dòng Luxury không chỉ đẹp trên ảnh mà còn hoàn hảo để bạn mặc trong ngày trọng đại</p>
                            <div class="col-actions">
                                <a href="https://album.sorawedding.vn/soravaycuoi/radiancecouture/" target="_blank"
                                    class="btn btn-solid" style="font-size:0.84rem;padding:11px 24px">Xem
                                    BST váy<i class="fas fa-arrow-right"></i></a>
                                {{-- <a href="#" class="link-arr">Tất cả váy <i class="fas fa-arrow-right"></i></a> --}}
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="inner-wrap" id="iw-1">
                                <div class="inner-track" id="it-1">
                                    <div class="in-slide"><img src="{{ asset('/user/vayLux1.jpg') }}"
                                            style="width: 100%; height: 100%; object-fit: cover;" alt="R1"></div>
                                    <div class="in-slide"><img src="{{ asset('/user/vayLux2.jpg') }}"
                                            style="width: 100%; height: 100%; object-fit: cover;" alt="R2"></div>
                                    <div class="in-slide"><img src="{{ asset('/user/vayLux3.jpg') }}"
                                            style="width: 100%; height: 100%; object-fit: cover;" alt="R3"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Collection 3 -->
                <div class="col-slide">
                    <div class="row align-items-center g-4 g-lg-5 col-layout">
                        <div class="col-lg-5 col-info">
                            <div class="col-num sec-tag">03</div>
                            {{-- <span class="sec-tag">BST Lãng mạn</span> --}}
                            <h3 class="col-title sec-tag text-pink">Váy diamond</h3>
                            <p class="col-desc">Dòng váy cao cấp nhất của SORA BRIDAL. Mỗi chiếc váy Diamond được thiết
                                kế và may đo riêng theo số đo, phong cách và “ước mơ” của bạn. Không có chiếc váy nào
                                giống chiếc váy nào – vì mỗi chiếc đều là độc bản.</p>
                            <div class="col-actions">
                                <a href="https://album.sorawedding.vn/soravaycuoi/symphonycouture/" target="_blank"
                                    class="btn btn-solid" style="font-size:0.84rem;padding:11px 24px">Xem
                                    BST váy <i class="fas fa-arrow-right"></i></a>
                                {{-- <a href="#" class="link-arr">Tất cả váy <i class="fas fa-arrow-right"></i></a> --}}
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="inner-wrap" id="iw-2">
                                <div class="inner-track" id="it-2">
                                    <div class="in-slide"><img src="{{ asset('/user/vaySignature1.jpg') }}"
                                            style="width: 100%; height: 100%; object-fit: cover;" alt="Sy1"></div>
                                    <div class="in-slide"><img src="{{ asset('/user/vaySignature2.jpg') }}"
                                            style="width: 100%; height: 100%; object-fit: cover;" alt="Sy2"></div>
                                    <div class="in-slide"><img src="{{ asset('/user/vaySignature3.jpg') }}"
                                            style="width: 100%; height: 100%; object-fit: cover;" alt="Sy3"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Collection 4 -->
                {{-- <div class="col-slide">
            <div class="col-layout">
              <div class="col-info">
                <div class="col-num">04</div>
                <span class="sec-tag">BST Công chúa</span>
                <h3 class="col-title">Rose Princess</h3>
                <p class="col-desc">Lấy cảm hứng từ những nàng công chúa kiêu sa. Thiết kế xòe bồng, đính kết hoa 3D và ngọc trai tinh xảo, mang đến vẻ đẹp ngọt ngào và lãng mạn.</p>
                <div class="col-actions">
                  <a href="#" class="btn btn-solid" style="font-size:0.84rem;padding:11px 24px">Xem BST <i class="fas fa-arrow-right"></i></a>
                  <a href="#" class="link-arr">Tất cả váy <i class="fas fa-arrow-right"></i></a>
                </div>
              </div>
              <div>
                <div class="inner-wrap" id="iw-3">
                  <div class="inner-track" id="it-3">
                    <div class="in-slide"><img src="{{ asset('/user/demo.jpg') }}?t=380x430/f9efe8/b07d62?text=Rose+1"
                alt="Ro1">
            </div>
            <div class="in-slide"><img src="{{ asset('/user/demo.jpg') }}?t=380x430/f6e9e2/b07d62?text=Rose+2"
                    alt="Ro2"></div>
            <div class="in-slide"><img src="{{ asset('/user/demo.jpg') }}?t=380x430/f3e3db/b07d62?text=Rose+3"
                    alt="Ro3"></div>
            <div class="in-slide"><img src="{{ asset('/user/demo.jpg') }}?t=380x430/f0ddd4/b07d62?text=Rose+4"
                    alt="Ro4"></div>
        </div>

    </div>
    </div>
    </div>
    </div> --}}

    </div><!-- /outer-track -->
    </div>

    <div class="outer-nav">
        <div class="outer-dots" id="outerDots"></div>
        <div class="outer-btns">
            <button class="outer-btn" id="outerPrev">❮</button>
            <button class="outer-btn" id="outerNext">❯</button>
        </div>
    </div>
    </div><!-- /sr -->
</section>
