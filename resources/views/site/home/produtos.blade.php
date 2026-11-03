{{-- ===== PRODUTOS (fundo bege) ===== --}}
<section class="products" id="produtos">
    <div class="curve-top" aria-hidden="true">
        <svg viewBox="0 0 1440 80" preserveAspectRatio="none">
            <path d="M0,0 L1440,0 L1440,30 C1000,90 450,-10 0,50 Z" />
        </svg>
    </div>

    <div class="container">
        <div class="products-head reveal">
            <span class="eyebrow">Nossos produtos</span>
            <h2>Peças que Transformam o Seu Lar</h2>
        </div>

        <div class="prod-grid">
            {{-- Depois, troque este @for por @foreach ($produtos as $produto) vindo do banco --}}
            @for ($i = 1; $i <= 6; $i++)
                <a href="{{ url('/produtos') }}" class="prod-item reveal">
                {{-- <img src="{{ asset('site/img/produtos/produto-'.$i.'.jpg') }}" alt="Produto {{ $i }}"> --}}
                <div class="ph">Produto {{ $i }}</div>
                </a>
                @endfor
        </div>

        <div class="products-cta">
            <a href="{{ url('/produtos') }}" class="btn btn-outline">Ver mais</a>
        </div>
    </div>

    <div class="curve-bottom" aria-hidden="true">
        <svg viewBox="0 0 1440 80" preserveAspectRatio="none">
            <path d="M0,80 L1440,80 L1440,40 C1000,-10 450,90 0,30 Z" />
        </svg>
    </div>
</section>