<?php
include_once("../config/conexion.php");
$id = $_GET['id'];
$res = $conn->query("SELECT * FROM alquiler WHERE id_alquiler=$id");
$a = $res->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<body>
<h2>Editar Alquiler</h2>

<form method="post" action="actualizar.php">
<input type="hidden" name="id" value="<?= $a['id_alquiler'] ?>">
<input type="date" name="fecha" value="<?= $a['fecha'] ?>">
<input name="horas" value="<?= $a['horas'] ?>">
<input name="precio" value="<?= $a['precio'] ?>">
<button>Actualizar</button>
</form>
</body>
</html>

