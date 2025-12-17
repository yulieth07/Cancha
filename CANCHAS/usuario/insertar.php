<?php
include("../config/conexion.php");

$deporte = $_GET['deporte'] ?? 'Futbol';

if ($_POST) {
    $pass = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $conn->prepare("CALL sp_usuario_insert(?,?,?,?,?,?)");
    $stmt->bind_param(
        "ssssss",
        $_POST['nombre'],
        $_POST['telefono'],
        $_POST['correo'],
        $_POST['usuario'],
        $pass,
        $_POST['tipo']
    );
    $stmt->execute();

    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $id_usuario = $row['id_usuario'];

    header("Location: ../alquiler/insertar.php?deporte=$deporte&id_usuario=$id_usuario");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registro</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
<div class="card p-4 shadow">
<h3>Registro Usuario</h3>
<form method="post">
<input class="form-control mb-2" name="nombre" placeholder="Nombre" required>
<input class="form-control mb-2" name="telefono" placeholder="Teléfono">
<input class="form-control mb-2" name="correo" placeholder="Correo" required>
<input class="form-control mb-2" name="usuario" placeholder="Usuario" required>
<input class="form-control mb-2" type="password" name="password" placeholder="Contraseña" required>

<select class="form-control mb-3" name="tipo">
<option value="CLIENTE">Cliente</option>
</select>

<button class="btn btn-dark w-100">Continuar</button>
</form>
</div>
</div>
</body>
</html>
