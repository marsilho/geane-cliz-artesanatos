<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Ateliê Geane Cliz</title>

    <!-- Link CSS -->
    <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">

    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

</head>

<body>
    <header class="Topo" id="topo"> <!-- Topo -->
        <div class="site">
            <div class="icone-topo">
                <a href="https://www.instagram.com/ateliegeanecliz?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                    target="_blank" rel="noopener noreferrer">
                    <img max-width="35px" height="35px" src="{{ asset('site/img/Logo do instagram.svg') }}" alt="logo instagram">
                </a>

                <a href="https://wa.me/5511973967073" target="_blank" rel="noopener noreferrer">
                    <img max-width="35px" height="35px" src="{{ asset('site/img/Logo do whatsapp 50x50.svg') }}" alt="logo whatsapp">
                </a>
            </div>
            <nav class="Menu">
                <div class="Logo">
                    <img height="100%" width="75%" src="{{ asset('site/img/Logo/LogoatelieMarrom200x200.svg') }}" alt="logo atelie">
                </div>

                <div class="TopoMenu">
                    <ul class="Navegacao">
                        <li><a href="{{ route('site.home') }}">Home</a></li>
                        <li><a href="{{ route('site.sobre') }}">Sobre</a></li>
                        <li class="SubMenu">
                            <a href="{{ route('site.produtos') }}">Produtos</a>
                            <ul>
                                <li><a href="#">Babadores</a></li>
                                <li><a href="#">Bonecas</a></li>
                                <li><a href="#">Bordados</a></li>
                                <li><a href="#">Carteiras</a></li>
                                <li><a href="#">Necessaires</a></li>
                                <li><a href="#">Naninhas</a></li>
                                <li><a href="#">Paninhos de boca</a></li>
                                <li><a href="#">Puxa saco</a></li>
                                <li><a href="#">Toalhas de banho</a></li>
                            </ul>
                        </li>
                        <li><a href="https://wa.me/5511973967073" target="_blank">Contato</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header> <!-- Fim topo --> 

    <main class="fundo-produtos">
        <div class="titulos-produtos">
            <h1><span class="highlight-produtos">Nossos Produtos</span></h1>
            <p>Feitos à mão com amor e capricho, para você, seus pequenos e seu pet.</p>
        </div>

        <div class="primeira-coluna">
            <div class="card-produto"> <!-- TOALHA INFANTIL -->
                <img src="{{ asset('site/img/Toalhas/toalhas de banho/toalha de banho dobrada.webp') }}" alt="Toalha Infantil">
                <h3>Toalhas de banho</h3>
                <p>Envolva-se na maciez e carinho das nossas toalhas artesanais.</p>
                <a href="#">Ver mais</a>
            </div>

            <div class="card-produto"><!-- TOALHA DE MÃO -->
                <img src="{{ asset('site/img/Toalhas/toalha de rosto e mão.jpg') }}" alt="Toalha de mão">
                <h3>Toalha de mão</h3>
                <p>Toalhas que combinam funcionalidade e beleza artesanal em cada ponto.</p>
                <a href="#">Ver mais</a>
            </div>

            <div class="card-produto"><!-- PANO DE BOCA -->
                <img src="{{ asset('site/img/Paninhos de boca/paninho de boca.webp') }}" alt="Paninho de boca">
                <h3>Paninho de boca</h3>
                <p>Com bordado temático e muito charme.</p>
                <a href="#">Ver mais</a>
            </div>
        </div>

        <div class="segunda-coluna">

            <div class="card-produto"><!-- MANTAS -->
                <img src="{{ asset('site/img/Mantas/manta para bebe.webp') }}" alt="Mantas para bebê">
                <h3>Mantas</h3>
                <p>Com bordado temático e muito charme.</p>
                <a href="#">Ver mais</a>
            </div>  

            <div class="card-produto"><!-- BONECAS -->
                <img src="https://via.placeholder.com/400x250?text=Bonecas" alt="Bonecas">
                <h3>Bonecas</h3>
                <p>Feitas à mão, com detalhes encantadores e personalizados.</p>
                <a href="#">Ver mais</a>
            </div>

            <div class="card-produto"><!-- BORDADOS -->
                <img src="{{ asset('site/img/Bordados/bordado avental prof.webp') }}" alt="Bordados">
                <h3>Bordados</h3>
                <p>Personalize com nomes, frases, datas ou temas especiais.</p>
                <a href="#">Ver mais</a>
            </div>
        </div>

        <div class="terceira-coluna">
            <div class="card-produto">
                <img src="https://via.placeholder.com/400x250?text=Babadores" alt="Babadores">
                <h3>Babadores</h3>
                <p>Proteção e estilo para acompanhar seu pequeno no dia a dia.</p>
                <a href="#">Ver mais</a>
            </div>

            <div class="card-produto">
                <img src="https://via.placeholder.com/400x250?text=Puxa+saco" alt="Puxa saco">
                <h3>Puxa saco</h3>
                <p>Perfeitos para deixar seus saquinhos sempre à mão com estilo.</p>
                <a href="#">Ver mais</a>
            </div>

            <div class="card-produto">
                <img src="https://via.placeholder.com/400x250?text=Caderneta+de+Vacinacao" alt="Caderneta de Vacinação">
                <h3>Capinhas para Caderneta de Vacinação</h3>
                <p>Delicada, acolchoada e perfeita para acompanhar seu bebê nas consultas.</p>
                <a href="#">Ver mais</a>
            </div>
        </div>

        <div class="quarta-coluna">
            <div class="card-produto">
                <img src="https://via.placeholder.com/400x250?text=Carteiras" alt="Carteiras">
                <h3>Carteiras</h3>
                <p>Organize seus itens com estilo e um toque artesanal.</p>
                <a href="#">Ver mais</a>
            </div>

            <div class="card-produto">
                <img src="https://via.placeholder.com/400x250?text=Paninho+de+boca" alt="Paninho de boca">
                <h3>Paninho de boca</h3>
                <p>Paninhos macios e delicados, ideais para os primeiros cuidados do bebê.</p>
                <a href="#">Ver mais</a>
            </div>

            <div class="card-produto">
                <img src="https://via.placeholder.com/400x250?text=Necessaires" alt="Necessaires">
                <h3>Necessaires</h3>
                <p>Perfeitas para organizar com estilo no dia a dia ou em viagens.</p>
                <a href="#">Ver mais</a>
            </div>
        </div>

        <div class="quinta-coluna">
            <div class="card-produto">
                <img src="{{ asset('site/img/Panos de cozinha/pano de balcão e de fogão.webp') }}" alt="Jogo de Cozinha">
                <h3>Jogo de Cozinha</h3>
                <p>Deixe sua cozinha mais charmosa com peças bordadas à mão.</p>
                <a href="#">Ver mais</a>
            </div>

            <div class="card-produto">
                <img src="https://via.placeholder.com/400x250?text=Jogo+de+Cozinha" alt="Jogo de Cozinha">
                <h3>Jogo de Cozinha</h3>
                <p>Com bordado temático e muito charme.</p>
                <a href="#">Ver mais</a>
            </div>

            <div class="card-produto"><!-- NANINHAS -->
                <img src="{{ asset('site/img/Naninhas/carneira rosto TR.webp') }}" alt="Naninha para Bebê">
                <h3>Naninha para Bebê</h3>
                <p>Ideal para aconchegar os pequenos. Personalizável!</p>
                <a href="#">Ver mais</a>
            </div>
        </div>

        <section class="personalizados">
            <h2>Produtos Personalizados</h2>
            <p>Escolha nome, cores e temas. Cada peça é única e feita com carinho para você!</p>
            <a href="https://wa.me/5511973967073" target="_blank" class="botao-personalizado">Fale conosco</a>
        </section>

        <div class="cta-final">
            <h2>Gostou de algum produto?</h2>
            <p>Entre em contato pelo WhatsApp ou Instagram e faça sua encomenda!</p>
            <a href="https://wa.me/5511973967073" target="_blank" class="botao-contato">Fazer pedido</a>
        </div>
    </main>

</body>

</html>