<!-- SEÇÃO BANNER PRINCIPAL -->
<section class="banner-hero">
    <div class="container banner-container">

        <!-- Lado Esquerdo: Textos e Botões -->
        <div class="banner-conteudo">
            <span class="tag-destaque">Criando</span>
            <h1 class="titulo-banner">Detalhes que Contam Histórias</h1>
            <p class="descricao-banner">
                Conheça nossa coleção de peças artesanais feitas especialmente para lares cheios de vida.
            </p>

            <div class="banner-botoes">
                <a href="#produtos" class="btn btn-principal btn-animado">
                    <span>Produtos</span>
                    <svg class="icone-seta" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
                <a href="#contato" class="btn btn-secundario">
                    <span>Contate-nos</span>
                    <svg class="icone-seta" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Lado Direito: Composição de Imagens em Bolhas -->
        <div class="banner-imagens">

            <!-- Bolha Principal -->
            <div class="bolha bolha-principal">
                <img src="{{ asset('site/img/banner-principal.svg') }}" alt="Peça artesanal" class="img-hero">
            </div>

            <!-- Bolha Menor (Boneca Antonieta) -->
            <div class="bolha bolha-antonieta">
                <img src="{{ asset('site/img/antonietta-banner.svg') }}" alt="Boneca Antonieta" class="img-hero">
            </div>

            <!-- Bolha Menor (Babadores) -->
            <div class="bolha bolha-babadores">
                <img src="{{ asset('site/img/babadores-banner.svg') }}" alt="Babadores artesanais" class="img-hero">
            </div>

            <!-- Bolha (Manta roxa) -->
            <div class="bolha bolha-manta-roxa">
                <img src="{{ asset('site/img/manta-roxa-banner.svg') }}" alt="Manta roxa" class="img-hero">
            </div>

        </div>
    </div>

    <!-- Transição em Onda para a próxima seção -->
    <div class="banner-onda">
        <svg viewBox="0 0 1440 240" fill="none" preserveAspectRatio="none">
            <!-- Desenha a faixa orgânica com curvatura em cima e embaixo -->
            <path d="M0,15 C420,95 1060,155 1440,10 L1440,210 C1020,235 420,145 0,230 Z" fill="var(--medio)"></path>
        </svg>
    </div>
</section>