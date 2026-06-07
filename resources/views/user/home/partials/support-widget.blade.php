@php
    $supportChannels = [
        [
            'id' => 'zalo',
            'label' => 'Zalo',
            'desc' => 'Phản hồi nhanh trong 30 phút',
            'href' => 'https://zalo.me/0888063366',
            'external' => true,
            'icon' => 'zalo',
            'color' => '#0068ff',
        ],
        [
            'id' => 'messenger',
            'label' => 'Facebook Messenger',
            'desc' => 'Chat trực tiếp với Sora Bridal',
            'href' => 'https://m.me/sorabridal',
            'external' => true,
            'icon' => 'messenger',
            'color' => '#0084ff',
        ],
        [
            'id' => 'facebook',
            'label' => 'Facebook',
            'desc' => 'Theo dõi album & ưu đãi mới',
            'href' => 'https://www.facebook.com/sorabridal',
            'external' => true,
            'icon' => 'facebook',
            'color' => '#1877f2',
        ],
        [
            'id' => 'hotline',
            'label' => 'Gọi hotline',
            'desc' => '088 806 33 66 · 8:00 – 20:00',
            'href' => 'tel:0888063366',
            'external' => false,
            'icon' => 'phone',
            'color' => '#c4456a',
        ],
        [
            'id' => 'booking',
            'label' => 'Đặt lịch tư vấn',
            'desc' => 'Miễn phí · phản hồi trong 2 giờ',
            'href' => route('user.dat-lich'),
            'external' => false,
            'icon' => 'calendar',
            'color' => '#a84362',
        ],
    ];
@endphp

<div class="support-widget" id="supportWidget" aria-hidden="true"@if(!empty($skipAutoOpen)) data-skip-auto-open="true"@endif>
    <div class="support-widget-backdrop" data-support-close></div>

    <div class="support-widget-panel" role="dialog" aria-modal="true" aria-labelledby="supportWidgetTitle">
        <button type="button" class="support-widget-close" data-support-close aria-label="Đóng">
            <i class="fas fa-times"></i>
        </button>

        <div class="support-widget-header">
            <span class="support-widget-badge">Hỗ trợ khách hàng</span>
            <h3 id="supportWidgetTitle">Bạn cần tư vấn gì hôm nay?</h3>
            <p>Chọn kênh liên hệ phù hợp — đội ngũ Sora Bridal luôn sẵn sàng đồng hành cùng bạn.</p>
        </div>

        <ul class="support-widget-channels">
            @foreach ($supportChannels as $channel)
                <li>
                    <a href="{{ $channel['href'] }}"
                        class="support-channel support-channel--{{ $channel['id'] }}"
                        @if ($channel['external']) target="_blank" rel="noopener noreferrer" @endif
                        style="--channel-color: {{ $channel['color'] }}">
                        @include('user.home.partials.support-widget-icon', ['icon' => $channel['icon']])
                        <span class="support-channel-text">
                            <strong>{{ $channel['label'] }}</strong>
                            <small>{{ $channel['desc'] }}</small>
                        </span>
                        <i class="fas fa-chevron-right support-channel-arrow"></i>
                    </a>
                </li>
            @endforeach
        </ul>

        <p class="support-widget-note">
            <i class="fas fa-clock"></i> Giờ làm việc: 8:00 – 20:00 · Tất cả các ngày
        </p>
    </div>

    <button type="button" class="support-widget-fab" id="supportWidgetFab" aria-label="Mở hỗ trợ khách hàng">
        <span class="support-widget-fab-icon support-widget-fab-icon--open"><i class="fas fa-headset"></i></span>
        <span class="support-widget-fab-icon support-widget-fab-icon--close"><i class="fas fa-times"></i></span>
        <span class="support-widget-fab-pulse"></span>
    </button>
</div>
