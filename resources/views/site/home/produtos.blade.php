{{-- ===== PRODUTOS ===== --}}
<section class="produtos" id="produtos">
    <div class="curva-topo" aria-hidden="true">
        <svg viewBox="0 0 1440 80" preserveAspectRatio="none">
            <path d="M0,0 L1440,0 L1440,30 C1000,90 450,-10 0,50 Z" />
        </svg>
    </div>

    <div class="container">
        <div class="produtos-cabecalho">
            <span class="eyebrow">Conheça</span>
            <h2>Nossos produtos</h2>
        </div>

        <div class="produtos-grid">
            @php
            $produtosImagens = [
            'boneca-produtos.png',
            'necessaire-produtos.png',
            'toalha-de-banho-produtos.png',
            'jogo-de-cozinha-produtos.png',
            'naninhas-produtos.png',
            'tapete-produtos.png'
            ];
            @endphp

            @foreach ($produtosImagens as $index => $imagem)
            <a href="{{ url('/produtos') }}" class="produto-item">
                <img src="{{ asset('site/img/produtos/' . $imagem) }}" alt="Produto {{ $index + 1 }}">
            </a>
            @endforeach
        </div>

        <div class="produtos-cta">
            <a href="{{ url('/produtos') }}" class="btn btn-outline">Ver mais</a>
        </div>
    </div>

    <div class="curva-baixo" aria-hidden="true">
        <svg viewBox="0 0 1440 80" preserveAspectRatio="none">
            <path d="M0,80 L1440,80 L1440,40 C1000,-10 450,90 0,30 Z" />
        </svg>
    </div>
</section>