<!-- {{-- ===== FOOTER ===== --}} -->
<footer class="footer" id="contato">
    <div class="container">
        <div class="footer-grid">
            <!-- {{-- Coluna 1: Logo e Descrição --}} -->
            <div>
                <a href="{{ url('/') }}" class="logo">
                    <img src="{{ asset('site/img/logos/logo-horizontal-branco.svg') }}" alt="Logo Ateliê Geane Cliz" class="footer-logo-img">
                </a>
                <p>Peças artesanais feitas com carinho, para lares cheios de vida e histórias.</p>
            </div>

            <!-- {{-- Coluna 2: Navegação --}} -->
            <div>
                <h4>Navegação</h4>
                <ul>
                    <li>
                        <a href="{{ url('/') }}" class="{{ request()->routeIs('site.home') || request()->is('/') ? 'ativo' : '' }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('site.sobre') }}" class="{{ request()->routeIs('site.sobre') ? 'ativo' : '' }}">Sobre</a>
                    </li>
                    <li>
                        <a href="{{ route('site.produtos') }}" class="{{ request()->routeIs('site.produtos') && !request('categoria') ? 'ativo' : '' }}">Produtos</a>
                    </li>
                    <li>
                        <a href="https://wa.me/5511973967073?text={{ urlencode('Olá! Vim pelo site e gostaria de saber mais sobre as peças.') }}" target="_blank" rel="noopener">Contato</a>
                    </li>
                </ul>
            </div>

            <!-- {{-- Coluna 3: Produtos --}} -->
            <div>
                <h4>Produtos</h4>
                <ul>
                    <li>
                        <a href="{{ route('site.produtos', ['categoria' => 'bordados']) }}" class="{{ request()->routeIs('site.produtos') && request('categoria') === 'bordados' ? 'ativo' : '' }}">Bordados</a>
                    </li>
                    <li>
                        <a href="{{ route('site.produtos', ['categoria' => 'tapetes']) }}" class="{{ request()->routeIs('site.produtos') && request('categoria') === 'tapetes' ? 'ativo' : '' }}">Tapetes</a>
                    </li>
                    <li>
                        <a href="{{ route('site.produtos', ['categoria' => 'paninhos']) }}" class="{{ request()->routeIs('site.produtos') && request('categoria') === 'paninhos' ? 'ativo' : '' }}">Paninhos de boca</a>
                    </li>
                    <li>
                        <a href="{{ route('site.produtos', ['categoria' => 'necessaires']) }}" class="{{ request()->routeIs('site.produtos') && request('categoria') === 'necessaires' ? 'ativo' : '' }}">Necessaires</a>
                    </li>
                </ul>
            </div>

            <!-- {{-- Coluna 4: Contato e Redes Sociais --}} -->
            <div>
                <h4>Contato</h4>
                <ul>
                    <li>(11) 97396-7073</li>
                    <li>geanecriz@gmail.com</li>
                    <li>São Paulo, SP</li>
                </ul>
                <div class="socials">
                    <!-- {{-- Instagram --}} -->
                    <a href="https://www.instagram.com/ateliegeanecliz/" aria-label="Instagram" target="_blank" rel="noopener">
                        <i class="ti ti-brand-instagram" aria-hidden="true"></i>
                    </a>

                    <!-- {{-- WhatsApp --}} -->
                    <a href="https://wa.me/5511973967073?text={{ urlencode('Olá! Vim pelo site e gostaria de saber mais sobre as peças.') }}" aria-label="WhatsApp" target="_blank" rel="noopener">
                        <i class="ti ti-brand-whatsapp" aria-hidden="true"></i>
                    </a>

                    <!-- {{-- E-mail --}} -->
                    <a href="mailto:geanecriz@gmail.com" aria-label="E-mail">
                        <i class="ti ti-mail" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copy">© {{ date('Y') }} Geane Cliz Artesanato. Todos os direitos reservados.</div>
</footer>