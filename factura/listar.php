<?php
include_once("../config/conexion.php");
$res = $conn->query("CALL sp_factura_select()");
?>

<!DOCTYPE html>
<html>
<body>
<h2>Facturas</h2>
<a href="insertar.php">Nueva Factura</a>

<table border="1">
<tr>
    <th>Usuario</th>
    <th>Fecha</th>
    <th>Total</th>
    <th>Estado</th>
    <th>Acciones</th>
</tr>

<?php while($f = $res->fetch_assoc()){ ?>
<tr>
    <td><?= $f['nombre'] ?></td>
    <td><?= $f['fecha'] ?></td>
    <td><?= $f['total'] ?></td>
    <td><?= $f['estado'] ?></td>
    <td>
        <a href="editar.php?id=<?= $f['id_factura'] ?>">Editar</a>
        <a href="eliminar.php?id=<?= $f['id_factura'] ?>">Eliminar</a>
    </td>
</tr>
<?php } ?>

</table>
</body>
</html>
