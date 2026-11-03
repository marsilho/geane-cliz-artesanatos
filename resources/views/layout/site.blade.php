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

  @include('partials.footer')

    {{-- Transição em onda: banner → sobre --}}
    <div class="wave" aria-hidden="true">
        <svg viewBox="0 0 1440 130" preserveAspectRatio="none">
            <path d="M0,20 C360,0 760,110 1440,60 L1440,75 C900,120 400,60 0,95 Z" />
        </svg>
    </div>







    {{-- Transição em onda: experiência → footer --}}
    <div class="wave" aria-hidden="true">
        <svg viewBox="0 0 1440 130" preserveAspectRatio="none">
            <path d="M0,20 C360,0 760,110 1440,60 L1440,75 C900,120 400,60 0,95 Z" />
        </svg>
    </div>
    <div class="footer-wave" aria-hidden="true">
        <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
            <path d="M0,60 C400,0 900,120 1440,40 L1440,120 L0,120 Z" />
        </svg>
    </div>




</body>

</html>