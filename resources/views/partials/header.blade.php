<header class="site-header">
    <div class="container header-container">

        <!-- Logo com caixa tracejada -->
        <a href="{{ url('/') }}" class="logo">
            <img src="{{ asset('site/img/logos/logo-horizontal-original.svg') }}" alt="Ateliê Geane Cliz" class="logo-img">
        </a>

        <!-- Botão Menu Mobile -->
        <button type="button" class="btn-menu" aria-label="Abrir menu">☰</button>

        <!-- Menu de Navegação -->
        <nav class="nav-menu" aria-label="Navegação principal">
            <a href="{{ url('/') }}" class="{{ request()->routeIs('site.home') || request()->is('/') ? 'ativo' : '' }}">Home</a>
            <a href="{{ route('site.sobre') }}" class="{{ request()->routeIs('site.sobre') ? 'ativo' : '' }}">Sobre</a>
            <a href="{{ route('site.produtos') }}" class="{{ request()->routeIs('site.produtos') ? 'ativo' : '' }}">Produtos</a>
            <a href="https://wa.me/5511973967073?text={{ urlencode('Olá! Vim pelo site e gostaria de saber mais sobre as peças.') }}" target="_blank" rel="noopener">Contato</a>
        </nav>
    </div>
</header>