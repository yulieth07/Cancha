<?php
include_once("../config/conexion.php");

$stmt = $conn->prepare("CALL sp_usuario_delete(?)");
$stmt->bind_param("i", $_GET['id']);
$stmt->execute();

header("Location: listar.php");

