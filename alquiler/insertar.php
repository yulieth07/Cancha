<?php
include("../config/conexion.php");

$deporte = $_GET['deporte'] ?? '';
$id_cliente = $_GET['id_usuario'] ?? '';

if (!$id_cliente || !$deporte) {
    die("Error: datos incompletos");
}

/* 💰 Precios por cancha */
$precios = [
    'Futbol' => 50000,
    'Baloncesto' => 40000,
    'Voleibol' => 30000
];

$precio = $precios[$deporte] ?? 0;

if ($_POST) {

    $horas = $_POST['horas'];
    $total = $precio * $horas;

    $stmt = $conn->prepare("CALL sp_alquiler_insert(?,?,?,?,?,?,?)");
    $stmt->bind_param(
        "sssidsi",
        $_POST['ciudad'],
        $deporte,
        $_POST['fecha'],
        $horas,
        $precio,
        $_POST['material'],
        $id_cliente
    );
    $stmt->execute();

    header("Location: ../factura/insertar.php?id_usuario=$id_cliente&total=$total");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Reserva Cancha</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <nav class="navbar navbar-dark bg-dark mb-4 shadow">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">
    </span>

    <a href="../index.php" class="btn btn-outline-light">
      Volver al Inicio
    </a>
  </div>
</nav>

<div class="container mt-5">
<div class="card p-4 shadow">

<h3 class="mb-3">Reserva de Cancha</h3>

<form method="post">

<input type="hidden" name="deporte" value="<?= $deporte ?>">

<div class="mb-3">
    <input class="form-control" name="ciudad" placeholder="Ciudad" required>
</div>

<div class="mb-3">
    <label>Cancha</label>
    <input class="form-control" value="<?= $deporte ?>" readonly>
</div>

<div class="mb-3">
    <input class="form-control" type="date" name="fecha" required>
</div>

<div class="mb-3">
    <input class="form-control" name="horas" placeholder="Horas" required>
</div>

<div class="mb-3">
    <label>Precio por hora</label>
    <input class="form-control" value="<?= $precio ?>" readonly>
</div>

<div class="mb-3">
    <input class="form-control" name="material" placeholder="Material (opcional)">
</div>

<button class="btn btn-success w-100">
    Confirmar Reserva
</button>

</form>
</div>
</div>
</body>
</html>
