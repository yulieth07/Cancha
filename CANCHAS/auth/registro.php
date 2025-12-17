
<?php include("../config/conexion.php");
if($_POST){
 $pass=password_hash($_POST['password'],PASSWORD_BCRYPT);
 $stmt=$conn->prepare("CALL sp_insert_usuario(?,?,?,?)");
 $stmt->bind_param("ssss",$_POST['nombre'],$_POST['correo'],$_POST['usuario'],$pass);
 $stmt->execute();
 header("Location: login.php");
}
?>
<!DOCTYPE html><html><body>
<h2>Registro</h2>
<form method="post">
<input name="nombre">
<input name="correo">
<input name="usuario">
<input type="password" name="password">
<button>Registrar</button>
</form>
</body></html>
