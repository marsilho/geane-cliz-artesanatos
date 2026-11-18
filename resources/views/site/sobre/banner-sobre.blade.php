@extends('layout.site')

@section('conteudo')

<main class="page-wrapper">
    {{-- Bolhas contínuas que atravessam as seções --}}
    <span class="bubble b1"></span>
    <span class="bubble b2"></span>
    <span class="bubble b3"></span>
    <span class="bubble b4"></span>
    <span class="dots-decoration"></span>

    {{-- ===== 1. MINI-HERO ===== --}}
    <section class="about-hero">
        <div class="container about-hero-grid">
            <div class="about-hero-text" data-aos="fade-right">
                <span class="eyebrow">Nossa História</span>
                <h1>Mais de 15 anos transformando fios, tecidos e afeto em memórias</h1>
                <p>Eu sou a Geane Cliz, e o ateliê nasceu da vontade de criar peças que abraçam quem as recebe. Cada bordado, tapete e naninha sai das minhas mãos pensando em quem vai usar, guardar e presentear.</p>
                <div class="signature">Com carinho, Geane</div>
            </div>

            <div class="about-composition" data-aos="fade-left" data-aos-delay="150">
                <div class="stitch-ring"></div>
                <div class="main-frame">
                    <div class="frame-photo">
                        <img src="{{ asset('site/img/geane-atelie.png') }}" alt="Geane Cliz no ateliê">
                    </div>
                </div>
                <div class="bubble-photo">
                    <img src="{{ asset('site/img/detalhe-bordado.png') }}" alt="Mãos bordando">
                </div>
            </div>
        </div>
    </section>

@endsection