<?php
include_once("../config/conexion.php");

$stmt = $conn->prepare("CALL sp_usuario_update(?,?,?,?)");
$stmt->bind_param(
    "isss",
    $_POST['id'],
    $_POST['nombre'],
    $_POST['telefono'],
    $_POST['correo']
);
$stmt->execute();

header("Location: listar.php");

