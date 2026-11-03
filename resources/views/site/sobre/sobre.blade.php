<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre - Ateliê Geane Cliz</title>

    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <!-- AOS Animate (scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Link CSS (CSS sempre o último) -->
    <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">

</head>

<body>
    <header class="Topo" data-aos="fade-up"> <!-- Topo -->
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


    <!-- Sobre  -->
    <main>
        <section class="apresentacao-sobre" data-aos="fade-up">
            <div class="site">
                <div>
                    <div>
                        <img src="{{ asset('site/img/imgsobreteste.png') }}" alt="teste Sobre">
                    </div>

                    <div class="TxtSobre">
                        <h1>Sobre o Ateliê</h1>
                        <p>
                            O Ateliê Geane Cliz nasceu do amor pelo artesanato e pela criatividade.
                            Cada peça é feita à mão, com cuidado, dedicação e muita inspiração.
                            Trabalhamos com produtos personalizados, únicos e cheios de encanto.
                            Acreditamos que o feito à mão carrega histórias e sentimentos verdadeiros.
                            Seja bem-vindo ao nosso universo feito com carinho para você!
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fim Sobre  -->

        <!-- MISSÃO, VISÃO E VALORES  -->
        <section class="sessao-valores" data-aos="fade-up">
            <div class="site">
                <div class="missao" data-aos="fade-up">
                    <div class="alinhar-titulo">
                        <img src="{{ asset('site/img/missao.svg') }}" alt="Missão">
                        <h1>Missão</h1>
                    </div>

                    <div class="txt-missao">
                        <h2>Nossa Missão:</h2>
                        <p>
                            Encantar nossos clientes com produtos artesanais feitos com amor, cuidado e dedicação,
                            proporcionando beleza e afeto em cada detalhe.
                        </p>
                    </div>
                </div>

                <div class="visao" data-aos="fade-up">
                    <div class="alinhar-titulo">
                        <img src="{{ asset('site/img/visao.svg') }}" alt="Visão">
                        <h1>Visão</h1>
                    </div>

                    <div class="txt-visao">
                        <h2>Nossa visão:</h2>
                        <p>
                            Ser referência em artesanato personalizado, reconhecida pela qualidade, carinho e
                            criatividade em cada criação.
                        </p>
                    </div>
                </div>

                <div class="valores" data-aos="fade-up">
                    <div class="alinhar-titulo">
                        <img src="{{ asset('site/img/valores.svg') }}" alt="Valores">
                        <h1>Valores</h1>
                    </div>

                    <div class="txt-valores">
                        <h2>Nossos valores:</h2>
                        <p>
                            🧵 Amor em cada ponto <br>

                            🎁 Capricho e qualidade<br>

                            🌟 Encanto e personalidade<br>

                            🤝 Respeito aos clientes<br>

                            💡 Criatividade e inovação<br>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- FIM MISSÃO, VISÃO E VALORES  -->

        <!-- O que nós fazemos? -->
        <section class="servicos-sobre" data-aos="fade-up">
            <div class="site">
                <h1><span class="highlight">O que nós</span> fazemos?</h1>

                <div class="Toalhadebanho-sobre" data-aos="fade-up">
                    <div>
                        <img src="{{ asset('site/img/oquenosfazenmosteste.png') }}" alt="Toalhas de banho">
                    </div>

                    <div class="alinhar-texto">
                        <h2>Toalhas de banho</h2>
                        <p>
                            Nossas toalhas de banho são produzidas com materiais de alta qualidade, garantindo maciez,
                            absorção e durabilidade. Cada peça recebe um toque especial com bordados delicados e
                            personalizados, feitos com amor e capricho para tornar seu momento de cuidado ainda mais
                            especial. Perfeitas para adultos, crianças e também para presentear!
                        </p>
                    </div>

                </div>

                <div class="Bordados-sobre" data-aos="fade-up">
                    <div>
                        <img src="{{ asset('site/img/oquenosfazenmosteste.png') }}" alt="Bordados">
                    </div>
                    <div class="alinhar-texto">
                        <h2>Bordados</h2>
                        <p>
                            No Ateliê Geane Cliz, o bordado é mais do que uma técnica, é uma forma de expressar carinho
                            em cada detalhe. Trabalhamos com bordados personalizados, que transformam peças
                            simples em itens únicos e cheios de significado. Ideal para presentes, enxovais ou para dar
                            um toque especial aos seus momentos do dia a dia.
                        </p>
                    </div>
                </div>

                <div class="naninhas-sobre" data-aos="fade-up">
                    <div>
                        <img src="{{ asset('site/img/oquenosfazenmosteste.png') }}" alt="Naninhas">
                    </div>
                    <div class="alinhar-texto">
                        <h2>Naninhas</h2>
                        <p>
                            As naninhas do Ateliê Geane Cliz são feitas para oferecer conforto, segurança e muito
                            carinho aos pequenos. Confeccionadas com tecidos macios e detalhes delicados, elas
                            acompanham o bebê na hora do sono, ajudando a acalmar e criar uma sensação de aconchego.
                            Podem ser personalizadas com nome e cores, tornando-se companheiras únicas e especiais.
                        </p>
                    </div>
                </div>

                <div class="jogosdecozinha-sobre" data-aos="fade-up">
                    <div>
                        <img src="{{ asset('site/img/oquenosfazenmosteste.png') }}" alt="Jogos de cozinha">
                    </div>
                    <div class="alinhar-texto">
                        <h2>Jogos de cozinha</h2>
                        <p>
                            Nossos jogos de cozinha são pensados para deixar esse cantinho da casa ainda mais acolhedor
                            e cheio de charme. Com bordados delicados, tecidos de qualidade e acabamento caprichado,
                            cada peça combina funcionalidade com beleza. Ideais para presentear ou renovar a decoração
                            da sua cozinha com um toque artesanal e único!
                        </p>
                    </div>
                </div>
                <a href="{{ route('site.produtos') }}" class="botao-servicos">Ver mais produtos >></a>
            </div>
        </section>

        <!-- fim O que nós fazemos? -->


        <!-- Contato whatsapp -->
        <section class="Contato" data-aos="fade-up">
            <div class="site">
                <div class="Container">
                    <h1>Fale conosco e encante-se <br> com o feito a mão!</h1>

                    <div>
                        <ul>
                            <li><a href="https://wa.me/5511973967073" target="_blank">Whatsapp</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Fim Contato whatsapp -->

    <!-- Rodapé -->
    <footer class="Rodape" data-aos="fade-up">
        <div class="site">
            <div class="Departamentos"><!-- departamentos -->
                <div class="MenuRodape">
                    <ul>
                        <li><a href="{{ route('site.home') }}">Home</a></li>
                        <li><a href="{{ route('site.sobre') }}">Sobre</a></li>
                        <li><a href="{{ route('site.produtos') }}">Produtos</a></li>
                        <li><a href="https://wa.me/5511973967073" target="_blank">Contato</a></li>
                    </ul>
                </div>
                <div class="Icones">
                    <div class="Instagram"><!-- Instagram -->
                        <ul>
                            <li>
                                <a href="https://www.instagram.com/ateliegeanecliz?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                    target="_blank" rel="noopener noreferrer">Instagram</a>
                            </li>
                        </ul>
                    </div> <!-- fim instagram -->

                    <div class="Whatsapp"> <!-- Whatsapp-->
                        <ul>
                            <li>
                                <a href="https://wa.me/5511973967073" target="_blank" rel="noopener noreferrer">Whatsapp</a>
                            </li>
                        </ul>
                    </div> <!-- fim whatsapp-->
                </div>
            </div>
        </div>
        
        <div class="Desenvolvidopor"> <!-- Reserva dos direitos-->
            <p>Todos os direitos reservados. {{ date('Y') }}</p>
            <p>Desenvolvido por Marsilho Saldanha</p>
        </div>
    </footer><!-- fim Rodapé -->


    <!-- AOS animate JS (scroll)  -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Inicialização do AOS  -->
    <script>
        AOS.init();
    </script>
</body>

</html>