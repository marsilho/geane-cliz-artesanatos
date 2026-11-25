<!DOCTYPE html>
<html lang="pt-BR">

<head>
    @include('partials.head')
    @stack('styles')
</head>

<body>

    <div>
        @include('partials.header')
    </div>

    <main>
        @yield('content')
    </main>

    <div class="footer-wave" aria-hidden="true">
        <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
            <path d="M0,60 C400,0 900,120 1440,40 L1440,120 L0,120 Z" />
        </svg>
    </div>

    @include('partials.footer')

    @if (request()->routeIs('site.home', 'site.sobre', 'site.produtos') || request()->is('/'))
    <a
        href="https://wa.me/5511973967073?text={{ urlencode('Olá! Vim pelo site e gostaria de saber mais sobre as peças.') }}"
        class="whatsapp-flutuante"
        target="_blank"
        rel="noopener"
        aria-label="Falar no WhatsApp com o Ateliê Geane Cliz">
        <img
            src="{{ asset('site/img/whatsappverde.svg') }}"
            alt="WhatsApp Ateliê Geane Cliz"
            class="whatsapp-flutuante-img">
    </a>
    @endif

    @include('partials.script')
    @stack('scripts')

</body>

</html>