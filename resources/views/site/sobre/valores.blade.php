@extends('layout.site')

@section('conteudo')

<main class="page-wrapper">
    {{-- Bolhas contínuas que atravessam as seções --}}
    <span class="bubble b1"></span>
    <span class="bubble b2"></span>
    <span class="bubble b3"></span>
    <span class="bubble b4"></span>
    <span class="dots-decoration"></span>

    {{-- ===== 2. ESSÊNCIA E VALORES ===== --}}
    <section class="essence-section">
        <div class="container essence-grid">
            <div class="essence-text" data-aos="fade-up">
                <span class="eyebrow">Nossa essência</span>
                <h2>Peças feitas para ficar na memória</h2>
                <p>O ateliê começou em casa, com uma máquina de costura e muita vontade de fazer diferente. Hoje criamos enxovais, naninhas, jogos de cozinha e itens de decoração que fogem da produção industrial em série.</p>
                <p>Aqui nenhuma peça é igual à outra: cada uma carrega o tempo, o cuidado e a história de quem a pediu.</p>
            </div>

            <div class="pillars-grid">
                <div class="pillar-card" data-aos="fade-up" data-aos-delay="100">
                    <i class="ti ti-heart-handshake" aria-hidden="true"></i>
                    <b>Atendimento afetivo</b>
                    <small>Conversa próxima, do primeiro contato à entrega.</small>
                </div>
                <div class="pillar-card" data-aos="fade-up" data-aos-delay="200">
                    <i class="ti ti-needle-thread" aria-hidden="true"></i>
                    <b>Feito à mão</b>
                    <small>Ponto a ponto, com técnicas tradicionais.</small>
                </div>
                <div class="pillar-card" data-aos="fade-up" data-aos-delay="300">
                    <i class="ti ti-sparkles" aria-hidden="true"></i>
                    <b>Peças exclusivas</b>
                    <small>Cores, temas e nomes sob medida.</small>
                </div>
                <div class="pillar-card" data-aos="fade-up" data-aos-delay="400">
                    <i class="ti ti-package" aria-hidden="true"></i>
                    <b>Pronto para presentear</b>
                    <small>Embalagem preparada com carinho.</small>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection