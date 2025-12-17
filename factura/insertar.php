<?php
include("../config/conexion.php");

/* FUNCIÓN DE ESCAPE (ANTI-XSS)*/
function e($v) {
    return htmlspecialchars($v, ENT_QUOTES, 'UTF-8');
}

$id_usuario = $_GET['id_usuario'] ?? '';
$total = $_GET['total'] ?? 0;

/* Variable para controlar mensaje */
$guardado = false;

if ($_POST) {
    $stmt = $conn->prepare("CALL sp_factura_insert(?,?,?,?,?)");
    $stmt->bind_param(
        "sdssi",
        $_POST['fecha'],
        $_POST['total'],
        $_POST['metodo'],
        $_POST['estado'],
        $_POST['id_usuario']
    );
    $stmt->execute();

    $guardado = true;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Factura</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-5">

<?php if($guardado): ?>

<div class="card p-4 shadow text-center">
    <h3 class="text-success mb-3">✅ Reserva completada</h3>
    <p>Tu reserva y factura se registraron correctamente.</p>

    <a href="../index.php" class="btn btn-primary mt-3">
        Volver al inicio
    </a>
</div>

<?php else: ?>

<div class="card p-4 shadow">
<h3 class="mb-3">Factura</h3>

<form method="post">

<!-- 🔒 CORRECCIÓN: SE ESCAPA $id_usuario -->
<input type="hidden" name="id_usuario" value="<?= e($id_usuario) ?>">

<div class="mb-3">
    <label>Fecha</label>
    <input class="form-control" type="date" name="fecha" required>
</div>

<div class="mb-3">
    <label>Total a pagar</label>
    <!-- 🔒 CORRECCIÓN: SE ESCAPA $total -->
    <input class="form-control" name="total" value="<?= e($total) ?>" readonly>
</div>

<div class="mb-3">
    <input class="form-control" name="metodo" placeholder="Método de pago" required>
</div>

<div class="mb-3">
    <input class="form-control" name="estado" value="PAGADO" readonly>
</div>

<button class="btn btn-success w-100">
    Finalizar pago
</button>

</form>
</div>

<?php endif; ?>

</div>
</body>
</html>
