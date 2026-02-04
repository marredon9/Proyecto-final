<?php

class AlquilerCoche {
    /** @var mysqli */
    private $cn;

    public function __construct(mysqli $cn) {
        $this->cn = $cn;
    }

    public function validateDates(string $desde, string $hasta): void {
        try {
            $d1 = new DateTime($desde);
            $d2 = new DateTime($hasta);
            if ($d2 < $d1) {
                throw new InvalidArgumentException('invalid_dates');
            }
        } catch (Exception $e) {
            throw new InvalidArgumentException('invalid_dates');
        }
    }

    public function calculateDays(string $desde, string $hasta): int {
        $stmt = $this->cn->prepare("SELECT ABS(DATEDIFF(?, ?) - 1) AS dias;");
        $stmt->bind_param("ss", $desde, $hasta);
        $stmt->execute();
        $r = $stmt->get_result()->fetch_assoc();
        return intval($r['dias']);
    }

    public function getPrecioDia(int $vehicleId): int {
        $stmt = $this->cn->prepare("SELECT precioDia FROM vehiculo WHERE id = ? LIMIT 1;");
        $stmt->bind_param("i", $vehicleId);
        $stmt->execute();
        $r = $stmt->get_result()->fetch_assoc();
        if (!$r) {
            throw new RuntimeException('vehicle_not_found');
        }
        return intval($r['precioDia']);
    }

    public function isAvailable(int $vehicleId, string $desde, string $hasta): bool {
        $stmt = $this->cn->prepare("SELECT COUNT(*) AS c FROM alquiler WHERE id_ve = ? AND NOT (hasta < ? OR desde > ?);");
        $stmt->bind_param("iss", $vehicleId, $desde, $hasta);
        $stmt->execute();
        $r = $stmt->get_result()->fetch_assoc();
        return intval($r['c']) === 0;
    }

    public function getPriceDetail(int $vehicleId, string $desde, string $hasta): array {
        $dias = $this->calculateDays($desde, $hasta);
        $precioDia = $this->getPrecioDia($vehicleId);
        $precio = $dias * $precioDia;
        $fianza = round($precio * 0.2, 2);
        return [
            'dias' => $dias,
            'precioDia' => $precioDia,
            'precio' => $precio,
            'fianza' => $fianza,
        ];
    }

    /**
     * Crea un alquiler y devuelve el id insertado.
     * Lanza RuntimeException('not_available') si existe solapamiento.
     */
    public function create(int $userId, int $vehicleId, string $desde, string $hasta, int $idSucursalRec, int $idSucursalDev, string $metodoPago = 'WEB', float $fianzaPct = 0.2): int {
        $this->validateDates($desde, $hasta);

        if (!$this->isAvailable($vehicleId, $desde, $hasta)) {
            throw new RuntimeException('not_available');
        }

        $detail = $this->getPriceDetail($vehicleId, $desde, $hasta);
        $precio = $detail['precio'];
        $fianza = $detail['fianza'];

        $devuelto = 0;

        $stmt = $this->cn->prepare("INSERT INTO alquiler (id_us, id_ve, fianza, metodo_pago, id_suc_rec, id_suc_dev, devuelto, desde, hasta, precio) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
        if (!$stmt) {
            throw new RuntimeException('db_prepare_failed');
        }
        $stmt->bind_param("iidsiiissi", $userId, $vehicleId, $fianza, $metodoPago, $idSucursalRec, $idSucursalDev, $devuelto, $desde, $hasta, $precio);
        $stmt->execute();

        return intval($this->cn->insert_id);
    }

    public function getById(int $id): ?array {
        $stmt = $this->cn->prepare("SELECT * FROM alquiler WHERE id = ? LIMIT 1;");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $r = $stmt->get_result()->fetch_assoc();
        return $r ?: null;
    }
}

?>