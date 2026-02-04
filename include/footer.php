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
                    <p><a href="<?=lnk("info/PreguntasFrecuentes.php")?>">Preguntas frecuentes</a></p>
                    <p><a href="<?=lnk("Contacto.php")?>">Contacta con nosotros</a></p>
                    <p><a href="<?=lnk("info/NuestrasSucursales.php")?>">Nuestras sucursales</a></p>
                </div>

                <!-- DERECHA -->
                <div class="col-lg-4 col-md-3 col-6 footer-col">
                    <h4>INFORMACIÓN LEGAL</h4>
                    <p><a href="<?=lnk("info/Informacion_legal.php")?>">Información legal</a></p>
                    <p><a href="<?=lnk("info/PoliticasDaños.php")?>">Política de gestión de daños</a></p>
                    <p><a href="<?=lnk("info/PoliticasDeposito.php")?>">Política de depósito</a></p>
                    <p><a href="<?=lnk("info/PoliticaPrivacidad.php")?>">Política de Privacidad</a></p>
                    <p><a href="<?=lnk("info/TerminosCondiciones.php")?>">Términos y Condiciones</a></p>
                </div>
            </div>
        </div>
        <!-- BARRA INFERIOR -->
           <div class="footer-bottom d-flex flex-wrap justify-content-between align-items-center gap-2">
            <span>© Alquiza 2026</span>
            <span><a href="<?=lnk("info/PoliticaCookies.php")?>">Política de cookies</a> | <a href="<?=lnk("info/MencionesLegales.php")?>">Menciones legales</a> | <a href="<?=lnk("info/SitesMaps.php")?>">Sites maps</a></span>
            <span class="footer-social">
                <i class="fab fa-instagram"></i>
                <i class="fab fa-facebook"></i>
                <i class="fab fa-linkedin"></i>
                <i class="fab fa-x-twitter"></i>
            </span>
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