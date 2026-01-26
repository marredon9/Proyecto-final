<?php
function footer() {
    ?>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="card shadow-lg border-0 p-4" style="max-width: 500px; width: 100%;">
            <div class="card-body text-center">
                <h2 class="fw-bold mb-3 text-primary">¿Deseas desactivar tu cuenta?</h2>
                <p class="text-muted mb-4">
                    Esta acción desactivará tu cuenta temporalmente.
                    Podrás volver cuando quieras.
                </p>

                <div class="d-flex justify-content-center gap-3">
                    <form action="index.php">
                        <button type="submit" class="btn btn-outline-secondary px-4">
                            Volver atrás
                        </button>
                    </form>

                    <form action="desactivarMiCuenta.php" onsubmit="return confirmarDesactivacion();">
                        <button type="submit" class="btn btn-danger px-4">
                            Estoy segur@
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>