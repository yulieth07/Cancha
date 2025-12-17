<?php
session_start();

if ($_POST) {
    if ($_POST['usuario'] === 'admin' && $_POST['password'] === '1234') {
        $_SESSION['admin'] = true;
        header("Location: index.php");
        exit;
    } else {
        $error = "Credenciales incorrectas";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Login Admin</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-5">
<div class="card p-4 shadow mx-auto" style="max-width:400px">

<h3 class="mb-3 text-center">Login Admin</h3>

<?php if(isset($error)): ?>
<div class="alert alert-danger"><?= $error ?></div>
<?php endif; ?>

<form method="post">
<input class="form-control mb-3" name="usuario" placeholder="Usuario" required>
<input class="form-control mb-3" type="password" name="password" placeholder="Contraseña" required>

<button class="btn btn-dark w-100">Ingresar</button>
</form>

</div>
</div>
</body>
</html>
