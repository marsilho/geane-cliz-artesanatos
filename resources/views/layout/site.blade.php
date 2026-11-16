<!DOCTYPE html>
<html lang="pt-BR">

<head>
    @include('partials.head')
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

    @include('partials.script')

</body>

</html>