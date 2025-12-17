<?php
include_once("../config/conexion.php");
$id = $_GET['id'];
$res = $conn->query("SELECT * FROM factura WHERE id_factura=$id");
$f = $res->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<body>
<h2>Editar Factura</h2>

<form method="post" action="actualizar.php">
<input type="hidden" name="id" value="<?= $f['id_factura'] ?>">
<input name="estado" value="<?= $f['estado'] ?>">
<button>Actualizar</button>
</form>
</body>
</html>

