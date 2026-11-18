@extends('layout.site')

@section('conteudo')

<main class="page-wrapper">
    {{-- Bolhas contínuas que atravessam as seções --}}
    <span class="bubble b1"></span>
    <span class="bubble b2"></span>
    <span class="bubble b3"></span>
    <span class="bubble b4"></span>
    <span class="dots-decoration"></span>

    
    <section class="process-section">
        <div class="container">
            <div class="process-header" data-aos="fade-up">
                <span class="eyebrow">Como cada peça nasce</span>
                <h2>Um processo sem pressa, do início ao fim</h2>
                <p>Quatro etapas que garantem que cada encomenda seja única e feita com atenção.</p>
            </div>

            <div class="steps-grid">
                <div class="step-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="step-number">01</div>
                    <h3>Escuta e personalização</h3>
                    <p>Escolha de cores, tecidos, temas e nomes bordados sob medida para cada cliente.</p>
                </div>
                <div class="step-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="step-number">02</div>
                    <h3>Seleção de materiais</h3>
                    <p>Tecidos 100% algodão, linhas resistentes e enchimentos antialérgicos escolhidos a dedo.</p>
                </div>
                <div class="step-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="step-number">03</div>
                    <h3>Corte e costura artesanal</h3>
                    <p>Produção lenta, ponto a ponto, unindo bordado, crochê e patchwork.</p>
                </div>
                <div class="step-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="step-number">04</div>
                    <h3>Acabamento e envio afetivo</h3>
                    <p>Revisão minuciosa de cada detalhe e embalagem pronta para presentear.</p>
                </div>
            </div>
        </div>
    </section>
   
</main>

@endsection