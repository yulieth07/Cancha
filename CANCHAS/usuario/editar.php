<?php
include("../config/conexion.php");

$id = $_GET['id'];
$res = $conn->query("SELECT * FROM usuario WHERE id_usuario=$id");
$u = $res->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<body>

<h2>Editar Usuario</h2>

<form method="post" action="actualizar.php">
    <input type="hidden" name="id" value="<?= $u['id_usuario'] ?>">

    <input name="nombre" value="<?= $u['nombre'] ?>">
    <input name="telefono" value="<?= $u['telefono'] ?>">
    <input name="correo" value="<?= $u['correo'] ?>">

    <button>Actualizar</button>
</form>

</body>
</html>
