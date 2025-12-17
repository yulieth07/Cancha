<?php
include_once("../config/conexion.php");

$stmt = $conn->prepare("CALL sp_alquiler_update(?,?,?,?)");
$stmt->bind_param(
    "isid",
    $_POST['id'],
    $_POST['fecha'],
    $_POST['horas'],
    $_POST['precio']
);
$stmt->execute();

header("Location: listar.php");

