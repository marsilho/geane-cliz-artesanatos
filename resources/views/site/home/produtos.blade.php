{{-- ===== PRODUTOS ===== --}}
<section class="produtos" id="produtos">
    <div class="container">
        <div class="produtos-cabecalho">
            <span class="eyebrow" data-aos="fade-down" data-aos-duration="700">Conheça</span>
            <h2 data-aos="fade-up" data-aos-delay="150" data-aos-duration="800">Nossos produtos</h2>
        </div>

        <div class="produtos-grid">
            @php
            $produtosData = [
            [
            'imagem' => 'boneca-produtos.png',
            'nome' => 'Boneca Antonieta',
            'preco' => 'R$ 120,00'
            ],
            [
            'imagem' => 'necessaire-produtos.png',
            'nome' => 'Nécessaire Artesanal',
            'preco' => 'R$ 65,00'
            ],
            [
            'imagem' => 'toalha-de-banho-produtos.png',
            'nome' => 'Toalha Bordada',
            'preco' => 'R$ 95,00'
            ],
            [
            'imagem' => 'jogo-de-cozinha-produtos.png',
            'nome' => 'Jogo de Cozinha',
            'preco' => 'R$ 150,00'
            ],
            [
            'imagem' => 'naninhas-produtos.png',
            'nome' => 'Naninha Infantil',
            'preco' => 'R$ 45,00'
            ],
            [
            'imagem' => 'tapete-produtos.png',
            'nome' => 'Tapete de Crochê',
            'preco' => 'R$ 110,00'
            ],
            ];
            @endphp

            @foreach ($produtosData as $index => $produto)
            <a href="{{ url('/produtos') }}"
                class="produto-item"
                data-aos="fade-up"
                data-aos-delay="{{ ($index % 3) * 150 }}"
                data-aos-duration="800">

                <img src="{{ asset('site/img/produtos/' . $produto['imagem']) }}" alt="{{ $produto['nome'] }}">

                {{-- Caixa de informações que desliza no hover --}}
                <div class="produto-info">
                    <span class="produto-nome">{{ $produto['nome'] }}</span>
                    <span class="produto-preco">{{ $produto['preco'] }}</span>
                </div>
            </a>
            @endforeach
        </div>

        <div class="produtos-cta" data-aos="fade-up" data-aos-delay="200" data-aos-duration="700">
            <a href="{{ url('/produtos') }}" class="btn btn-outline">Ver mais</a>
        </div>
    </div>
</section>