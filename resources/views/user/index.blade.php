@extends('user.layouts.app')

@section('title', 'Sora Studio – Studio Ảnh Cưới Nghệ Thuật Hà Nội')

@section('body_class', 'page-home')

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('user/css/home-bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('user/css/home-collection.css') }}">
<link rel="stylesheet" href="{{ asset('user/css/home-index-mobile.css') }}">
<link rel="stylesheet" href="{{ asset('user/css/home-price-slider.css') }}">
@endpush

@section('content')
<div class="page-home">
    {{-- @include('user.home.sections.banner')
    @include('user.home.sections.hero')
    @include('user.home.sections.about')
    @include('user.home.sections.studio-concept')
    @include('user.home.sections.collection')
    @include('user.home.sections.before-after') --}}
    @include('user.home.sections.video')
    @include('user.home.sections.pricing')
    @include('user.home.sections.reviews')
    @include('user.home.sections.workflow')
    @include('user.home.sections.cta-band')
    @include('user.home.sections.blog')
</div>

@include('user.home.pages.subpages')
@endsection

@php
$shouldAutoOpenBookingOverlay = old('booking_form_context') === 'home' || session('booking_form_context') === 'home';
@endphp

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
