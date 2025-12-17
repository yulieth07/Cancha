<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
include("../config/conexion.php");

/* Consulta reservas + facturas */
$sql = "
SELECT 
    u.nombre,
    u.correo,
    a.ciudad,
    a.deporte,
    a.fecha AS fecha_alquiler,
    a.horas,
    a.precio,
    (a.horas * a.precio) AS total,
    f.metodo_pago,
    f.estado
FROM alquiler a
INNER JOIN usuario u ON a.id_cliente = u.id_usuario
LEFT JOIN factura f ON f.id_usuario = u.id_usuario
ORDER BY a.fecha DESC
";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Panel Admin</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <nav class="navbar navbar-dark bg-dark mb-4 shadow">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">
      🏟 Panel Administrador
    </span>

    <a href="../index.php" class="btn btn-outline-light">
      Volver al Inicio
    </a>
  </div>
</nav>

<div class="container mt-5">

<h2 class="mb-4">📋 Reservas y Facturas</h2>

<table class="table table-bordered table-striped table-hover">
<thead class="table-dark">
<tr>
    <th>Cliente</th>
    <th>Correo</th>
    <th>Ciudad</th>
    <th>Cancha</th>
    <th>Fecha</th>
    <th>Horas</th>
    <th>Precio/Hora</th>
    <th>Total</th>
    <th>Método Pago</th>
    <th>Estado</th>
</tr>
</thead>

<tbody>
<?php if ($result->num_rows > 0): ?>
<?php while($row = $result->fetch_assoc()): ?>
<tr>
    <td><?= $row['nombre'] ?></td>
    <td><?= $row['correo'] ?></td>
    <td><?= $row['ciudad'] ?></td>
    <td><?= $row['deporte'] ?></td>
    <td><?= $row['fecha_alquiler'] ?></td>
    <td><?= $row['horas'] ?></td>
    <td>$<?= number_format($row['precio']) ?></td>
    <td><strong>$<?= number_format($row['total']) ?></strong></td>
    <td><?= $row['metodo_pago'] ?? '—' ?></td>
    <td><?= $row['estado'] ?? 'Pendiente' ?></td>
</tr>
<?php endwhile; ?>
<?php else: ?>
<tr>
<td colspan="10" class="text-center">No hay registros</td>
</tr>
<?php endif; ?>
</tbody>
</table>

</div>
</body>
</html>
