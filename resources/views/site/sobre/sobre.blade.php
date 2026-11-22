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
    @include('site.sobre.valores')
    @include('site.sobre.processo')
    @include('site.sobre.bastidores')
</main>
@endsection