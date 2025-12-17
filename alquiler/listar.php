<?php
include_once("../config/conexion.php");
$res = $conn->query("CALL sp_alquiler_select()");
?>

<!DOCTYPE html>
<html>
<body>
<h2>Alquileres</h2>
<a href="insertar.php">Nuevo Alquiler</a>

<table border="1">
<tr>
    <th>Cliente</th>
    <th>Deporte</th>
    <th>Fecha</th>
    <th>Horas</th>
    <th>Precio</th>
    <th>Acciones</th>
</tr>

<?php while($a = $res->fetch_assoc()){ ?>
<tr>
    <td><?= $a['nombre'] ?></td>
    <td><?= $a['deporte'] ?></td>
    <td><?= $a['fecha'] ?></td>
    <td><?= $a['horas'] ?></td>
    <td><?= $a['precio'] ?></td>
    <td>
        <a href="editar.php?id=<?= $a['id_alquiler'] ?>">Editar</a>
        <a href="eliminar.php?id=<?= $a['id_alquiler'] ?>">Eliminar</a>
    </td>
</tr>
<?php } ?>

</table>
</body>
</html>

