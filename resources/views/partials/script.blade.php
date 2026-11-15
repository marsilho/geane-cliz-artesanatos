<!-- 1. Carrega o script da biblioteca AOS via CDN -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- 2. O seu script principal que já estava lá -->
<script src="{{ asset('site/js/main.js') }}"></script>

<!-- 3. Inicializa a biblioteca para ativar as animações -->
<script>
    console.log("=== O script.blade.php foi lido pelo navegador! ===");

    document.addEventListener("DOMContentLoaded", function() {
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                once: true,
                offset: 100
            });
            console.log("=== AOS foi inicializado com sucesso! ===");
        } else {
            console.error("=== ERRO: A biblioteca AOS não foi encontrada! ===");
        }
    });
</script>