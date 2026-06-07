<span class="support-channel-icon" aria-hidden="true">
    @switch($icon)
        @case('zalo')
            <svg viewBox="0 0 48 48" fill="currentColor"><path d="M24 4C12.954 4 4 11.85 4 21.5c0 5.02 2.66 9.48 6.82 12.36-.3 1.02-1.08 3.7-1.24 4.28-.2.74.27.73.57.53.24-.16 3.82-2.58 5.36-3.62.9.13 1.82.2 2.75.2 11.046 0 20-7.85 20-17.5S35.046 4 24 4z"/></svg>
            @break
        @case('messenger')
            <i class="fab fa-facebook-messenger"></i>
            @break
        @case('facebook')
            <i class="fab fa-facebook-f"></i>
            @break
        @case('phone')
            <i class="fas fa-phone-alt"></i>
            @break
        @case('calendar')
            <i class="fas fa-calendar-check"></i>
            @break
        @default
            <i class="fas fa-comment-dots"></i>
    @endswitch
</span>
