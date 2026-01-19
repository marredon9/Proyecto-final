<?php
function footer() {
    ?>
    <!-- FOOTER -->
    <div class="seccion-azul mt-5">
        <footer class="footer-alquiza">
            <div class="footer-grid">

                <!-- IZQUIERDA: LOGO + MAPA -->
                <div class="footer-col footer-map">
                    <img src="../img/editado.png" class="logo-footer" alt="Logo Alquiza" class="footer-logo">
                    <!-- MAPA NO SE TOCA -->
                    <div id="map" style="height: 25px; width: 100%; border-radius: 15px; margin: 30px 0;"></div>
                </div>

                <!-- Parte del centro -->
                <div class="footer-col">
                    <h4>MÁS INFORMACIÓN</h4>
                    <p>Preguntas frecuentes</p>
                    <p>Contacta con nosotros</p>
                    <p>Nuestras sucursales</p>
                </div>

                <!-- Parte Derecha -->
                <div class="footer-col">
                    <h4>INFORMACIÓN LEGAL</h4>
                    <p>Información legal</p>
                    <p>Política de gestión de daños</p>
                    <p>Política de depósito</p>
                    <p>Política de Privacidad</p>
                    <p>Términos y Condiciones</p>
                </div>

            </div>

            <!-- Barra inferior-->
            <div class="footer-bottom">
                <span>© Alquiza 2026</span>
                <span>Política de cookies | Menciones legales | Sites maps</span>
                <span class="footer-social">
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-linkedin"></i>
                    <i class="fab fa-x-twitter"></i>
                </span>
            </div>
        </footer>
    </div>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <?php
}
?>