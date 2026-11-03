<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Geane Cliz | Artesanato</title>
    <meta name="description" content="Peças artesanais feitas à mão: bordados, tapetes, paninhos de boca e necessaires.">
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css">
    <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">
</head>
<body>

    {{-- ===== HEADER ===== --}}
    <header class="header">
        <div class="container nav">
            <a href="#home" class="logo">
                <div class="logo-mark">GC</div>
                <div class="logo-text">
                    <strong>Geane Cliz</strong>
                    <span>Artesanato</span>
                </div>
            </a>
            <button class="menu-toggle" aria-label="Abrir menu">☰</button>
            <nav class="menu">
                <a href="#home" class="active">Home</a>
                <a href="#sobre">Sobre</a>
                <a href="#produtos">Produtos</a>
                <a href="#contato">Contato</a>
            </nav>
        </div>
    </header>

    {{-- ===== HERO ===== --}}
    <section class="hero" id="home">
        <span class="blob blob-hero-left"></span>
        <div class="container hero-grid">
            <div class="hero-text reveal">
                <span class="eyebrow">Criando</span>
                <h1>Detalhes que Contam Histórias</h1>
                <p>Conheça nossa coleção de peças artesanais feitas especialmente para lares cheios de vida</p>
                <div class="hero-actions">
                    <a href="#produtos" class="btn btn-primary">Produtos</a>
                    <a href="#contato" class="btn btn-outline">Contate-nos</a>
                </div>
            </div>
            <div class="hero-img reveal">
                {{-- Troque pelo: <img src="{{ asset('site/img/hero.jpg') }}" alt="Peça artesanal"> --}}
                <div class="ph">Foto principal<br>(banner)</div>
            </div>
        </div>
    </section>

    {{-- Transição em onda: banner → sobre --}}
    <div class="wave" aria-hidden="true">
        <svg viewBox="0 0 1440 130" preserveAspectRatio="none">
            <path d="M0,20 C360,0 760,110 1440,60 L1440,75 C900,120 400,60 0,95 Z"/>
        </svg>
    </div>

    {{-- ===== SOBRE ===== --}}
    <section class="about" id="sobre">
        <span class="blob blob-sobre-right"></span>
        <div class="container about-grid">
            <div class="reveal">
                <span class="eyebrow">Sobre nós</span>
                <h2>Feito com as Próprias Mãos,<br>Criado com Afeto para o Seu Lar</h2>
                <p>Cada peça do Ateliê Geane Cliz nasce do cuidado com os detalhes e da paixão pela arte manual tradicional. Criamos bordados, tapetes, paninhos de boca e necessaires que carregam história, textura e carinho em cada ponto.</p>
                <ul class="checks">
                    <li>Materiais selecionados e de alta qualidade</li>
                    <li>Atendimento carinhoso e personalizado</li>
                    <li>Processo 100% artesanal e exclusivo</li>
                    <li>Cuidado em cada ponto e acabamento</li>
                </ul>
            </div>
            <div class="about-photos reveal">
                {{-- Troque por <img src="{{ asset('site/img/sobre-1.jpg') }}" alt="..."> --}}
                <div class="about-photo small"><div class="ph">Foto 1</div></div>
                <div class="about-photo big"><div class="ph">Foto 2</div></div>
            </div>
        </div>
    </section>

    {{-- ===== PRODUTOS (fundo bege) ===== --}}
    <section class="products" id="produtos">
        <div class="curve-top" aria-hidden="true">
            <svg viewBox="0 0 1440 80" preserveAspectRatio="none">
                <path d="M0,0 L1440,0 L1440,30 C1000,90 450,-10 0,50 Z"/>
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
                <path d="M0,80 L1440,80 L1440,40 C1000,-10 450,90 0,30 Z"/>
            </svg>
        </div>
    </section>

    {{-- ===== EXPERIÊNCIA ===== --}}
    <section class="experience">
        <div class="container exp-grid">
            <div class="exp-photos reveal">
                {{-- Troque os .ph por <img> ou use uma das opções de ilustração --}}
                <div class="exp-photo a"><div class="ph">Foto</div></div>
                <div class="exp-photo b"><div class="ph">Foto</div></div>
            </div>

            <div class="exp-text reveal">
                <h2><span>+15 anos</span> de experiência em artesanatos</h2>
                <p>Cada peça é criada artesanalmente com dedicação e carinho, feita sob medida para levar aconchego e beleza para o seu lar e para os momentos mais especiais da sua família.</p>

                <div class="diffs">
                    <div class="diff">
                        <i class="ti ti-scissors" aria-hidden="true"></i>
                        <b>Feito à mão</b>
                        <small>Ponto a ponto, com técnica tradicional</small>
                    </div>
                    <div class="diff">
                        <i class="ti ti-ruler" aria-hidden="true"></i>
                        <b>Sob medida</b>
                        <small>Do jeito que o seu lar pede</small>
                    </div>
                    <div class="diff">
                        <i class="ti ti-heart" aria-hidden="true"></i>
                        <b>Atendimento afetivo</b>
                        <small>Carinho do início à entrega</small>
                    </div>
                </div>

                <div class="exp-actions">
                    <a href="#produtos" class="btn btn-primary">Conhecer coleção</a>
                    {{-- Troque o número (DDI + DDD + telefone, só dígitos) --}}
                    <a href="https://wa.me/5500000000000?text={{ urlencode('Olá! Vim pelo site e gostaria de saber mais sobre as peças.') }}" class="btn btn-outline" target="_blank" rel="noopener">Falar no WhatsApp</a>
                </div>

                <div class="assinatura">Com carinho, Ateliê Geane Cliz</div>
            </div>
        </div>
    </section>

    {{-- Transição em onda: experiência → footer --}}
    <div class="wave" aria-hidden="true">
        <svg viewBox="0 0 1440 130" preserveAspectRatio="none">
            <path d="M0,20 C360,0 760,110 1440,60 L1440,75 C900,120 400,60 0,95 Z"/>
        </svg>
    </div>
    <div class="footer-wave" aria-hidden="true">
        <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
            <path d="M0,60 C400,0 900,120 1440,40 L1440,120 L0,120 Z"/>
        </svg>
    </div>

    {{-- ===== FOOTER ===== --}}
    <footer class="footer" id="contato">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <a href="#home" class="logo">
                        <div class="logo-mark">GC</div>
                        <div class="logo-text">
                            <strong>Geane Cliz</strong>
                            <span>Artesanato</span>
                        </div>
                    </a>
                    <p>Peças artesanais feitas com carinho, para lares cheios de vida e histórias.</p>
                </div>
                <div>
                    <h4>Navegação</h4>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#sobre">Sobre</a></li>
                        <li><a href="#produtos">Produtos</a></li>
                        <li><a href="#contato">Contato</a></li>
                    </ul>
                </div>
                <div>
                    <h4>Produtos</h4>
                    <ul>
                        <li><a href="{{ url('/produtos') }}">Bordados</a></li>
                        <li><a href="{{ url('/produtos') }}">Tapetes</a></li>
                        <li><a href="{{ url('/produtos') }}">Paninhos de boca</a></li>
                        <li><a href="{{ url('/produtos') }}">Necessaires</a></li>
                    </ul>
                </div>
                <div>
                    <h4>Contato</h4>
                    <ul>
                        <li>(00) 00000-0000</li>
                        <li>contato@geanecliz.com.br</li>
                        <li>Cidade, SP</li>
                    </ul>
                    <div class="socials">
                        <a href="#" aria-label="Instagram">IG</a>
                        <a href="#" aria-label="WhatsApp">WA</a>
                        <a href="#" aria-label="Facebook">FB</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copy">© {{ date('Y') }} Geane Cliz Artesanato. Todos os direitos reservados.</div>
    </footer>

    <script src="{{ asset('site/js/main.js') }}"></script>
</body>
</html>