// Carrusel
const vehicles = document.getElementById('vehicles');
const container = document.getElementById('vehiclesWrapper');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

let scrollAmount = 0;
const scrollStep = 220; // ancho del vehículo + margen

prevBtn.onclick = () => {
    if (scrollAmount > 0) {
        scrollAmount -= scrollStep;
        vehicles.style.transform = `translateX(-${scrollAmount}px)`;
    }
};

nextBtn.onclick = () => {
    if (scrollAmount < vehicles.scrollWidth - container.offsetWidth) {
        scrollAmount += scrollStep;
        vehicles.style.transform = `translateX(-${scrollAmount}px)`;
    }
};

// Formulario reserva (opcional, si quieres manejo adicional en JS)
document.getElementById('reservaForm').addEventListener('submit', function (e) {
    e.preventDefault();
    // Puedes agregar validaciones o mensajes aquí
    fetch('reservar.php', {
        method: 'POST',
        body: new FormData(this)
    })
    .then(response => response.text())
    .then(data => {
        alert('¡Reserva enviada! Nos pondremos en contacto contigo.');
        var modal = bootstrap.Modal.getInstance(document.getElementById('reservaModal'));
        modal.hide();
        document.getElementById('reservaForm').reset();
    })
    .catch(error => {
        alert('Error al enviar la reserva.');
        console.error(error);
    });
});