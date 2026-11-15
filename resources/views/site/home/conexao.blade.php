{{-- ===== EXPERIÊNCIA ===== --}}
<section class="experiencia">
    <div class="container experiencia-grid">
        {{-- Bloco das fotos entrando pela esquerda --}}
        <div class="experiencia-fotos" data-aos="fade-right">
            <div class="experiencia-foto a">
                <img src="{{ asset('site/img/mulher-costurando.png') }}" alt="Ateliê Geane Cliz">
            </div>
            <div class="experiencia-foto b">
                <img src="{{ asset('site/img/naninha-rosa.png') }}" alt="Detalhe do trabalho artesanal">
            </div>
        </div>

        {{-- Bloco de texto entrando pela direita --}}
        <div class="experiencia-texto" data-aos="fade-left" data-aos-delay="150">
            <h2><span>+15 anos</span> de experiência em artesanatos</h2>
            <p>Cada peça é criada artesanalmente com dedicação e carinho, feita sob medida para levar aconchego e beleza para o seu lar e para os momentos mais especiais da sua família.</p>

            {{-- Cartões surgindo em efeito cascata (100ms de diferença entre cada um) --}}
            <div class="diferenciais">
                <div class="diferencial" data-aos="zoom-in" data-aos-delay="250">
                    <i class="ti ti-scissors" aria-hidden="true"></i>
                    <b>Feito à mão</b>
                    <small>Ponto a ponto, com técnica tradicional</small>
                </div>
                <div class="diferencial" data-aos="zoom-in" data-aos-delay="350">
                    <i class="ti ti-ruler" aria-hidden="true"></i>
                    <b>Sob medida</b>
                    <small>Do jeito que o seu lar pede</small>
                </div>
                <div class="diferencial" data-aos="zoom-in" data-aos-delay="450">
                    <i class="ti ti-heart" aria-hidden="true"></i>
                    <b>Atendimento afetivo</b>
                    <small>Carinho do início à entrega</small>
                </div>
            </div>

            {{-- Botões entrando suavemente por último --}}
            <div class="experiencia-acoes" data-aos="fade-up" data-aos-delay="500">
                <a href="#produtos" class="btn btn-primary">Conhecer coleção</a>
                <a href="https://wa.me/5500000000000?text={{ urlencode('Olá! Vim pelo site e gostaria de saber mais sobre as peças.') }}" class="btn btn-outline" target="_blank" rel="noopener">Falar no WhatsApp</a>
            </div>

            <div class="assinatura" data-aos="fade-in" data-aos-delay="600">Com carinho, Ateliê Geane Cliz</div>
        </div>
    </div>
</section>