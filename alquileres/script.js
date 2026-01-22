// script.js — solo mapa (Leaflet) y lógica mínima

document.addEventListener("DOMContentLoaded", function () {
    // Inicializar mapa si existe el elemento
    try {
        if (document.getElementById('map')) {
            var map = L.map('map').setView([38.9089, 1.4321], 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            L.marker([38.9089, 1.4321]).addTo(map)
                .bindPopup('Alquiza - Tu alquiler en Ibiza')
                .openPopup();
        }
    } catch (err) {
        console.warn("Leaflet map init error (puede que no exista #map):", err);
    }
});