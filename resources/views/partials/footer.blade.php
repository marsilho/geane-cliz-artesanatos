{{-- ===== FOOTER ===== --}}
<footer class="footer" id="contato">
    <div class="container">
        <div class="footer-grid">
            <div>
                <a href="#home" class="logo">
                    <div class="logo-mark">GC</div>
                    <div class="logo-text">
                        <strong>Geane Cliz</strong>
                        <span>Artesanato</span>
                    </div>
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
                    <li>Cidade, SP</li>
                </ul>
                <div class="socials">
                    <a href="#" aria-label="Instagram">IG</a>
                    <a href="#" aria-label="WhatsApp">WA</a>
                    <a href="#" aria-label="Facebook">FB</a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copy">© {{ date('Y') }} Geane Cliz Artesanato. Todos os direitos reservados.</div>
</footer>