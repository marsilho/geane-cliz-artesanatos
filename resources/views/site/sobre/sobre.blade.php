@extends('layout.site')

@push('styles')
<link rel="stylesheet" href="{{ asset('site/css/sobre.css') }}">
@endpush

@section('content')
<main class="page-wrapper">
    <span class="bubble b1"></span>
    <span class="bubble b2"></span>
    <span class="bubble b3"></span>
    <span class="bubble b4"></span>
    <span class="dots-decoration"></span>

    <!-- {{-- Seções modulares na ordem correta --}} -->
    @include('site.sobre.banner-sobre')

    <div class="about-wave" aria-hidden="true">
        <svg viewBox="0 0 1440 240" fill="none" preserveAspectRatio="none">
            <path d="M0,15 C420,95 1060,155 1440,10 L1440,210 C1020,235 420,145 0,230 Z" fill="var(--medio)"></path>
        </svg>
    </div>

    @include('site.sobre.valores')
    @include('site.sobre.processo')
    @include('site.sobre.bastidores')
</main>
@endsection