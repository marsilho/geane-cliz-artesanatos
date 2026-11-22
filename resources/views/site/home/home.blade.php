@extends('layout.site')

@push('styles')
<link rel="stylesheet" href="{{ asset('site/css/home.css') }}">
@endpush

@section('content')
@include('site.home.banner')
@include('site.home.sobre')
@include('site.home.produtos')
@include('site.home.conexao')
@endsection