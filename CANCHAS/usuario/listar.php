<?php
include("../config/conexion.php");
$result = $conn->query("CALL sp_usuario_select()");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Usuarios</title>
</head>
<body>

<h2>Listado de Usuarios</h2>
<a href="insertar.php">Nuevo Usuario</a>

<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Tipo</th>
        <th>Acciones</th>
    </tr>

<?php while($u = $result->fetch_assoc()){ ?>
<tr>
    <td><?= $u['nombre'] ?></td>
    <td><?= $u['correo'] ?></td>
    <td><?= $u['tipo'] ?></td>
    <td>
        <a href="editar.php?id=<?= $u['id_usuario'] ?>">Editar</a>
        <a href="eliminar.php?id=<?= $u['id_usuario'] ?>">Eliminar</a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>
