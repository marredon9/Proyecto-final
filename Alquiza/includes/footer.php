<?php
function footer()
{
    ?>
    <footer class="footer-alquiza seccion-azul">
        <div class="container">
            <div class="row">
                <!-- IZQUIERDA: LOGO + MAPA -->
                <div class="col-lg-5 col-md-6 col-12 footer-map">
                    <!-- MAPA NO SE TOCA -->
                    <div id="map" style="height: 350px; width: 100%; border-radius: 15px; margin: 30px 0;"></div>
                </div>
                <!-- CENTRO -->
                <div class="col-lg-3 col-md-3 col-6 footer-col">
                    <h4>MÁS INFORMACIÓN</h4>
                    <p><a href="PreguntasFrecuentes.php">Preguntas frecuentes</a></p>
                    <p><a href="Contacto.php">Contacta con nosotros</a></p>
                    <p><a href="NuestrasSucursales.php">Nuestras sucursales</a></p>
                </div>

                <!-- DERECHA -->
                <div class="col-lg-4 col-md-3 col-6 footer-col">
                    <h4>INFORMACIÓN LEGAL</h4>
                    <p><a href="Informacion_legal.php">Información legal</a></p>
                    <p><a href="PoliticasDaños.php">Política de gestión de daños</a></p>
                    <p><a href="PoliticasDeposito.php">Política de depósito</a></p>
                    <p><a href="PoliticaPrivacidad.php">Política de Privacidad</a></p>
                    <p><a href="TerminosCondiciones.php">Términos y Condiciones</a></p>
                </div>
            </div>
        </div>
        <!-- BARRA INFERIOR -->
        <div class="footer-bottom d-flex flex-wrap justify-content-between align-items-center gap-2 fixed-button">
            <p>© Alquiza 2026</p>

            <span class="text-center"><a href="PoliticaCookies.php">Política de cookies</a> | <a
                    href="MencionesLegales.php">Menciones
                    legales</a> | <a href="Sitesmaps.php">Sites maps</a></span>

        </div>
    </footer>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var map = L.map('map').setView([38.9089, 1.4321], 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            L.marker([38.9089, 1.4321]).addTo(map)
                .bindPopup('Alquiza - Tu alquiler en Ibiza')
                .openPopup();
        });
    </script>
    <?php
}
?>