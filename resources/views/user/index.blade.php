@extends('user.layouts.app')

@section('title', 'Sora Studio – Studio Ảnh Cưới Nghệ Thuật Hà Nội')

@section('body_class', 'page-home')

@php
$shouldAutoOpenBookingOverlay = old('booking_form_context') === 'home' || session('booking_form_context') === 'home';
@endphp

@push('styles')
<link rel="stylesheet" href="{{ asset('user/css/home-bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('user/css/home-collection.css') }}">
<link rel="stylesheet" href="{{ asset('user/css/home-index-mobile.css') }}">
<link rel="stylesheet" href="{{ asset('user/css/home-price-slider.css') }}">
<link rel="stylesheet" href="{{ asset('user/css/home-support-widget.css') }}">
<link rel="stylesheet" href="{{ asset('user/css/home-back-to-top.css') }}">
@endpush

@section('content')
<div class="page-home">
    @include('user.home.sections.banner')
    @include('user.home.sections.hero')
    @include('user.home.sections.about')
    @include('user.home.sections.studio-concept')
    @include('user.home.sections.collection')
    @include('user.home.sections.feedback')
    @include('user.home.sections.before-after')
    @include('user.home.sections.video')
    @include('user.home.sections.pricing')
    @include('user.home.sections.cta-band')
    @include('user.home.sections.blog')
</div>

@include('user.home.pages.subpages')

@include('user.home.partials.support-widget', [
    'skipAutoOpen' => $shouldAutoOpenBookingOverlay ?? false,
])

@include('user.home.partials.back-to-top')
@endsection

@push('scripts')
<script src="{{ asset('user/js/home-support-widget.js') }}" defer></script>
<script src="{{ asset('user/js/home-back-to-top.js') }}" defer></script>
@endpush

@if ($shouldAutoOpenBookingOverlay)
@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        if (typeof openPage === 'function') {
            openPage('page-dat-lich');
        }
    });

</script>
@endpush
@endif
