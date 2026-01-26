
// Manejar el formulario de reserva
document.getElementById('reservaForm').addEventListener('submit', function (e) {
  e.preventDefault();

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
