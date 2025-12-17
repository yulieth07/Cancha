
<?php include("../config/conexion.php");
if($_POST){
 $res=$conn->query("SELECT * FROM usuario WHERE usuario='".$_POST['usuario']."'");
 $u=$res->fetch_assoc();
 if($u && password_verify($_POST['password'],$u['password'])){
   $_SESSION['id']=$u['id_usuario'];
   header("Location: ../index.php");
 }
}
?>
<!DOCTYPE html><html><body>
<h2>Login</h2>
<form method="post">
<input name="usuario">
<input type="password" name="password">
<button>Entrar</button>
</form>
</body></html>
