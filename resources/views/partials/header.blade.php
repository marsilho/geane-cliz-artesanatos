<header class="site-header">
    <div class="container header-container">

        <!-- Logo com caixa tracejada -->
        <a href="{{ url('/') }}" class="logo">
            <img src="{{ asset('site/img/logos/logo-horizontal-original.svg') }}" alt="Ateliê Geane Cliz" class="logo-img">
        </a>

        <!-- Botão Menu Mobile -->
        <button class="btn-menu" aria-label="Abrir menu">☰</button>

        <!-- Menu de Navegação -->
        <nav class="nav-menu">
            @if(request()->routeIs('site.sobre'))
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ route('site.sobre') }}" class="ativo">Sobre</a>
            <a href="{{ url('/#produtos') }}">Produtos</a>
            <a href="{{ url('/#contato') }}">Contato</a>
            @else
            <a href="{{ url('/') }}" class="ativo">Home</a>
            <a href="{{ route('site.sobre') }}">Sobre</a>
            <a href="{{ url('/#produtos') }}">Produtos</a>
            <a href="{{ url('/#contato') }}">Contato</a>
            @endif
        </nav>
    </div>
</header>