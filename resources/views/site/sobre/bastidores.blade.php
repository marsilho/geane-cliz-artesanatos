@extends('layout.site')

@section('conteudo')

<main class="page-wrapper">
    {{-- Bolhas contínuas que atravessam as seções --}}
    <span class="bubble b1"></span>
    <span class="bubble b2"></span>
    <span class="bubble b3"></span>
    <span class="bubble b4"></span>
    <span class="dots-decoration"></span>

    {{-- ===== 4. BASTIDORES + CTA ===== --}}
    <section class="behind-scenes">
        <div class="container">
            <div class="scenes-header" data-aos="fade-up">
                <span class="eyebrow">Bastidores do ateliê</span>
                <h2>Um pedacinho do nosso dia a dia</h2>
            </div>

            <div class="mosaic-grid">
                <div class="mosaic-item large" data-aos="zoom-in">
                    <img src="{{ asset('site/img/bastidores-1.jpg') }}" alt="Máquina de costura">
                </div>
                <div class="mosaic-item" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('site/img/bastidores-2.jpg') }}" alt="Rolos de fita">
                </div>
                <div class="mosaic-item" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('site/img/bastidores-3.jpg') }}" alt="Tecidos dobrados">
                </div>
                <div class="mosaic-item wide" data-aos="zoom-in" data-aos-delay="300">
                    <img src="{{ asset('site/img/bastidores-4.jpg') }}" alt="Detalhe de pontos">
                </div>
            </div>

            <div class="about-cta" data-aos="fade-up">
                <h2>Vamos criar algo único para você?</h2>
                <p>Conheça as peças prontas ou conte o que você imagina que eu faço sob medida.</p>
                <div class="about-cta-buttons">
                    <a href="{{ url('/produtos') }}" class="btn-principal">Ver Produtos</a>
                    <a href="https://wa.me/5500000000000?text=Ol%C3%A1!%20Gostaria%20de%20fazer%20uma%20encomenda." class="btn-secundario" target="_blank" rel="noopener">Encomendar pelo WhatsApp</a>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection