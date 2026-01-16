const modal = document.getElementById("miModal");

function abrirModal() {
  modal.style.display = "flex"; 
}

function cerrarModal() {
  modal.style.display = "none"; 
}

window.onclick = function(event) {
  if (event.target == modal) {
    cerrarModal();
  }
}
