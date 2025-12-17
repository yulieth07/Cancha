<?php
include("../config/conexion.php");

$stmt = $conn->prepare("CALL sp_alquiler_delete(?)");
$stmt->bind_param("i", $_GET['id']);
$stmt->execute();

header("Location: listar.php");
