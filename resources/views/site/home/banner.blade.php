<!-- SEÇÃO BANNER PRINCIPAL -->
<section class="banner-hero">
    <div class="container banner-container">

        <!-- Lado Esquerdo: Textos e Botões (Entrada em cascata) -->
        <div class="banner-conteudo">
            <span class="tag-destaque" data-aos="fade-down" data-aos-duration="700">Criando</span>

            <h1 class="titulo-banner" data-aos="fade-right" data-aos-delay="150" data-aos-duration="800">
                Detalhes que Contam Histórias
            </h1>

            <p class="descricao-banner" data-aos="fade-right" data-aos-delay="300" data-aos-duration="800">
                Conheça nossa coleção de peças artesanais feitas especialmente para lares cheios de vida.
            </p>

            <div class="banner-botoes" data-aos="fade-up" data-aos-delay="450" data-aos-duration="800">
                <a href="#produtos" class="btn btn-principal btn-animado">
                    <span>Produtos</span>
                </a>
                <a href="#contato" class="btn btn-secundario">
                    <span>Contate-nos</span>
                </a>
            </div>
        </div>

        <!-- Lado Direito: Composição de Imagens em Bolhas (Efeito zoom suave) -->
        <div class="banner-imagens">

            <!-- Bolha Principal -->
            <div class="bolha bolha-principal" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="900">
                <img src="{{ asset('site/img/banner-principal.svg') }}" alt="Peça artesanal" class="img-hero">
            </div>

            <!-- Bolha Menor (Boneca Antonieta) -->
            <div class="bolha bolha-antonieta" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="800">
                <img src="{{ asset('site/img/antonietta-banner.svg') }}" alt="Boneca Antonieta" class="img-hero">
            </div>

            <!-- Bolha Menor (Babadores) -->
            <div class="bolha bolha-babadores" data-aos="zoom-in" data-aos-delay="550" data-aos-duration="800">
                <img src="{{ asset('site/img/babadores-banner.svg') }}" alt="Babadores artesanais" class="img-hero">
            </div>

            <!-- Bolha (Manta roxa) -->
            <div class="bolha bolha-manta-roxa" data-aos="zoom-in" data-aos-delay="700" data-aos-duration="800">
                <img src="{{ asset('site/img/manta-roxa-banner.svg') }}" alt="Manta roxa" class="img-hero">
            </div>

        </div>
    </div>

    <!-- Transição em Onda para a próxima seção (Mantida estática para não quebrar o encaixe visual) -->
    <div class="banner-onda">
        <svg viewBox="0 0 1440 240" fill="none" preserveAspectRatio="none">
            <path d="M0,15 C420,95 1060,155 1440,10 L1440,210 C1020,235 420,145 0,230 Z" fill="var(--medio)"></path>
        </svg>
    </div>
</section>