{{-- Section header chuẩn cho trang chủ (Bootstrap + design system) --}}
<div @class(array_filter([
    'home-section-head',
    'text-center' => $center ?? true,
    'reveal-anim section-head' => !empty($animate),
    'reveal-once' => !empty($revealOnce),
    'sr' => !empty($sr),
    $srClass ?? null,
])) @if(!empty($animate)) data-animate="{{ $animate }}" @endif>
    @if(!empty($tag))
        <span class="sec-tag d-block">{{ $tag }}</span>
    @endif
    @if(!empty($title))
        <h2 @class(['sec-title', 'center' => $center ?? true])>{!! $title !!}</h2>
    @endif
    @if(!empty($subtitle))
        <p @class(['sec-sub', 'center' => $center ?? true, 'mx-auto' => $center ?? true])>{!! $subtitle !!}</p>
    @endif
</div>
