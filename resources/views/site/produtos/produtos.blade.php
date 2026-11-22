@extends('layout.site')

@push('styles')
<link rel="stylesheet" href="{{ asset('site/css/produtos.css') }}">
@endpush

@section('content')
<main class="page-wrapper products-page">
    {{-- Bolhas contínuas e textura de fundo --}}
    <span class="bubble p1"></span>
    <span class="bubble p2"></span>
    <span class="bubble p3"></span>
    <span class="dots-decoration"></span>

    @include('site.produtos.cabecalho')
    @include('site.produtos.filtros')
    @include('site.produtos.grade')
    @include('site.produtos.encomenda')
</main>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const botoes = document.querySelectorAll('.filtro');
        const cards = [...document.querySelectorAll('.card')];
        const campoBusca = document.getElementById('busca');
        const resultado = document.getElementById('resultado');
        const vazio = document.getElementById('vazio');
        const limparBtn = document.getElementById('limpar');
        let filtroAtual = 'todos';

        if (!botoes.length || !cards.length) return;

        const normaliza = t => t.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, '');

        botoes.forEach(b => {
            const f = b.dataset.filtro;
            const qtdEl = b.querySelector('.qtd');
            if (qtdEl) {
                qtdEl.textContent = f === 'todos' ?
                    cards.length :
                    cards.filter(c => c.dataset.categoria === f).length;
            }
        });

        function aplicar() {
            const termo = normaliza(campoBusca ? campoBusca.value.trim() : '');
            let visiveis = 0;

            cards.forEach(c => {
                const okCat = filtroAtual === 'todos' || c.dataset.categoria === filtroAtual;
                const okBusca = !termo || normaliza(c.dataset.nome || '').includes(termo);
                const mostrar = okCat && okBusca;

                c.classList.toggle('oculto', !mostrar);
                c.classList.remove('entrando');

                if (mostrar) {
                    void c.offsetWidth;
                    c.style.animationDelay = (visiveis % 8) * 50 + 'ms';
                    c.classList.add('entrando');
                    visiveis++;
                }
            });

            if (vazio) {
                vazio.classList.toggle('mostrar', visiveis === 0);
            }

            if (resultado) {
                resultado.textContent = visiveis === 0 ?
                    '' :
                    visiveis + (visiveis === 1 ? ' peça encontrada' : ' peças encontradas');
            }
        }

        function escolher(filtro) {
            filtroAtual = filtro;
            botoes.forEach(b => b.classList.toggle('ativo', b.dataset.filtro === filtro));
            aplicar();
        }

        botoes.forEach(b => b.addEventListener('click', () => escolher(b.dataset.filtro)));

        if (campoBusca) {
            campoBusca.addEventListener('input', aplicar);
        }

        if (limparBtn) {
            limparBtn.addEventListener('click', () => {
                if (campoBusca) campoBusca.value = '';
                escolher('todos');
            });
        }

        const inicial = new URLSearchParams(window.location.search).get('categoria');
        escolher(inicial && [...botoes].some(b => b.dataset.filtro === inicial) ? inicial : 'todos');
    });
</script>
@endpush