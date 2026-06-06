<!-- ══════════════════════ BLOG ═══════════════════════════ -->
<section class="home-section">
    <div class="container">
        @include('user.partials.section-head', [
            'tag' => 'Cập nhật',
            'title' => 'Blog cưới &amp; Cảm hứng',
            'animate' => 'fadeInUp',
        ])
        <div class="row g-4">
            @foreach ($homeBlogs as $blog)
                <div class="col-6 col-lg-3">
                    <div class="blog-card sr{{ $loop->index > 0 ? ' d' . ($loop->index + 1) : '' }} h-100">
                        <div class="blog-img">
                            <img src="{{ asset($blog['image_src']) }}?t={{ $blog['image_placeholder'] }}"
                                alt="{{ $blog['image_alt'] }}" loading="lazy">
                            <span class="blog-cat">{{ $blog['category'] }}</span>
                        </div>
                        <div class="blog-body">
                            <h4>{{ $blog['title'] }}</h4>
                            <p>{{ $blog['excerpt'] }}</p>
                            <a href="{{ $blog['url'] }}" class="read-more">Đọc tiếp <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
