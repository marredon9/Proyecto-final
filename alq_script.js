const modal = document.getElementById("miModal");

function abrirModal() {
    modal.style.display = "flex";
}

function cerrarModal() {
    modal.style.display = "none";
}

window.onclick = function (event) {
    if (event.target == modal) {
        cerrarModal();
    }
}

// Coordenadas de Ibiza (puedes cambiarlas por la dirección exacta de tu sucursal)
var map = L.map('map').setView([38.9089, 1.4321], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap contributors'
}).addTo(map);

L.marker([38.9089, 1.4321]).addTo(map)
    .bindPopup('Alquiza - Tu alquiler en Ibiza')
    .openPopup();
