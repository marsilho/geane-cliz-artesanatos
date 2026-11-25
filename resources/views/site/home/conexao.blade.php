<!-- ===== EXPERIÊNCIA ===== -->
<section class="experiencia">
    <div class="container experiencia-grid">
        <!-- Bloco das fotos entrando pela esquerda -->
        <div class="experiencia-fotos" data-aos="fade-right">
            <div class="experiencia-foto a">
                <img src="{{ asset('site/img/mulher-costurando.png') }}" alt="Ateliê Geane Cliz">
            </div>
            <div class="experiencia-foto b">
                <img src="{{ asset('site/img/naninha-rosa.png') }}" alt="Detalhe do trabalho artesanal">
            </div>
        </div>

        <!-- Bloco de texto entrando pela direita -->
        <div class="experiencia-texto" data-aos="fade-left" data-aos-delay="150">
            <h2>
                <span class="destaque-anos">
                    <span class="contador-anos" data-alvo="15" data-prefixo="+">+0</span> anos
                </span>
                de experiência em artesanatos
            </h2>
            <p>Cada peça é criada artesanalmente com dedicação e carinho, feita sob medida para levar aconchego e beleza para o seu lar e para os momentos mais especiais da sua família.</p>

            <!-- Cartões surgindo em bloco com hover livre para subir suavemente -->
            <div class="diferenciais" data-aos="fade-up" data-aos-delay="250">
                <div class="diferencial">
                    <i class="ti ti-scissors" aria-hidden="true"></i>
                    <b>Feito à mão</b>
                    <small>Ponto a ponto, com técnica tradicional</small>
                </div>
                <div class="diferencial">
                    <i class="ti ti-ruler" aria-hidden="true"></i>
                    <b>Sob medida</b>
                    <small>Do jeito que o seu lar pede</small>
                </div>
                <div class="diferencial">
                    <i class="ti ti-heart" aria-hidden="true"></i>
                    <b>Atendimento afetivo</b>
                    <small>Carinho do início à entrega</small>
                </div>
            </div>

            <!-- Botões entrando suavemente por último -->
            <div class="experiencia-acoes" data-aos="fade-up" data-aos-delay="500">
                <a href="#produtos" class="btn btn-principal">Conhecer coleção</a>
                <a href="https://wa.me/5500000000000?text={{ urlencode('Olá! Vim pelo site e gostaria de saber mais sobre as peças.') }}" class="btn btn-secundario" target="_blank" rel="noopener">Falar no WhatsApp</a>
            </div>

            <div class="assinatura" data-aos="fade-in" data-aos-delay="600">Com carinho, Geane Cliz Artesanatos</div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const contadores = document.querySelectorAll('.contador-anos');
        if (!contadores.length) return;

        const reduzirMovimento = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        const animarContador = (el) => {
            if (el.dataset.animado === 'true') return;
            el.dataset.animado = 'true';

            const alvo = parseInt(el.dataset.alvo, 10) || 15;
            const prefixo = el.dataset.prefixo ?? '+';
            const inicioValor = 0;

            if (reduzirMovimento) {
                el.textContent = `${prefixo}${alvo}`;
                return;
            }

            const duracao = 1400;
            const inicioTempo = performance.now();
            el.textContent = `${prefixo}${inicioValor}`;

            const passo = (agora) => {
                const progresso = Math.min((agora - inicioTempo) / duracao, 1);
                const facilidade = 1 - Math.pow(1 - progresso, 2.2);
                const atual = Math.max(
                    inicioValor,
                    Math.min(alvo, Math.round(inicioValor + (alvo - inicioValor) * facilidade))
                );

                el.textContent = `${prefixo}${atual}`;

                if (progresso < 1) {
                    requestAnimationFrame(passo);
                } else {
                    el.textContent = `${prefixo}${alvo}`;
                }
            };

            requestAnimationFrame(passo);
        };

        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        animarContador(entry.target);
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.35
            }
        );

        contadores.forEach((el) => observer.observe(el));
    });
</script>
@endpush