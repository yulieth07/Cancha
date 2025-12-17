<?php
include("../config/conexion.php");

$stmt = $conn->prepare("CALL sp_factura_update(?,?)");
$stmt->bind_param("is", $_POST['id'], $_POST['estado']);
$stmt->execute();

header("Location: listar.php");
