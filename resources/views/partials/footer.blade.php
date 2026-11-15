{{-- ===== FOOTER ===== --}}
<footer class="footer" id="contato">
    <div class="container">
        <div class="footer-grid">
            <div>
                <a href="#home" class="logo">
                    <img src="{{ asset('site/img/logos/logo-horizontal-branco.svg') }}" alt="Logo Ateliê Geane Cliz" class="footer-logo-img">
                </a>
                <p>Peças artesanais feitas com carinho, para lares cheios de vida e histórias.</p>
            </div>
            <div>
                <h4>Navegação</h4>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#produtos">Produtos</a></li>
                    <li><a href="#contato">Contato</a></li>
                </ul>
            </div>
            <div>
                <h4>Produtos</h4>
                <ul>
                    <li><a href="{{ url('/produtos') }}">Bordados</a></li>
                    <li><a href="{{ url('/produtos') }}">Tapetes</a></li>
                    <li><a href="{{ url('/produtos') }}">Paninhos de boca</a></li>
                    <li><a href="{{ url('/produtos') }}">Necessaires</a></li>
                </ul>
            </div>
            <div>
                <h4>Contato</h4>
                <ul>
                    <li>(00) 00000-0000</li>
                    <li>contato@geanecliz.com.br</li>
                    <li>São paulo, SP</li>
                </ul>
                <div class="socials">
                    {{-- Instagram --}}
                    <a href="https://instagram.com/seu-usuario" aria-label="Instagram" target="_blank" rel="noopener">
                        <i class="ti ti-brand-instagram" aria-hidden="true"></i>
                    </a>

                    {{-- WhatsApp --}}
                    <a href="https://wa.me/5500000000000?text={{ urlencode('Olá! Vim pelo site e gostaria de saber mais sobre as peças.') }}" aria-label="WhatsApp" target="_blank" rel="noopener">
                        <i class="ti ti-brand-whatsapp" aria-hidden="true"></i>
                    </a>

                    {{-- E-mail --}}
                    <a href="mailto:contato@geanecliz.com.br" aria-label="E-mail">
                        <i class="ti ti-mail" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copy">© {{ date('Y') }} Geane Cliz Artesanato. Todos os direitos reservados.</div>
</footer>