<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Borcelle | Alquiler de Canchas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap (opcional, no estorba) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Tu CSS -->
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

<nav id="navegador">
    <ul class="menu">
        <li>
            <a href="index.php">
                <img src="img/logo.png" alt="Logo" class="logo-menu">
            </a>
        </li>
        <li class="m-right">
            <a href="#nosotros" class="LM">Nosotros</a>
            <a href="#canchas" class="LM">Canchas</a>
            <a href="auth/registro.php" class="LM">Registro</a>
            <a href="admin/login.php" class="LM">Login</a>
        </li>
    </ul>
</nav>

    <video autoplay muted loop class="VPP">
            <source src="VIDEO/videoFondo.mp4" type="video/mp4">
        </video>

    <section class="benef">
    <div class="beneficios-container"> 
        <ul class="lista-beneficios">
            <li>
                <img src="img/voley.jpeg" alt="Voleibol">
                <p>Trabajo en equipo</p>
            </li>
            <li>
                <img src="img/voley.jpeg" alt="Voleibol">
                <p>Salud Física</p>
            </li>
            <li>
                <img src="img/voley.jpeg" alt="Voleibol">
                <p>Salud mental</p>
            </li>
            <li>
                <img src="img/voley.jpeg" alt="Voleibol">
                <p>Disciplina</p>
            </li>
        </ul>
    </div>
</section>


<section class="info container my-5">
  <h2 class="titulo-seccion">Nuestras Canchas</h2>

  <div class="row g-4">

    <div class="col-md-4">
      <div class="glass-card">
        <img src="img/basket.jpeg">
        <p>
          Cancha de baloncesto diseñada para partidos intensos, con excelente
          iluminación y espacio óptimo para el juego.
        </p>
        <a href="usuario/insertar.php?deporte=Baloncesto" class="btn-dark">Alquiler</a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="glass-card">
        <img src="img/futboll.jpeg">
        <p>
          Vive el fútbol con emoción real. Una cancha pensada para disfrutar
          cada pase, cada jugada y cada gol.
        </p>
        <a href="usuario/insertar.php?deporte=Futbol" class="btn-dark">Alquiler</a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="glass-card">
        <img src="img/volleyball.jpeg">
        <p>
          Espacio ideal para el voleibol competitivo y recreativo,
          cuidando cada detalle del entorno.
        </p>
        <a href="usuario/insertar.php?deporte=Voleibol" class="btn-dark">Alquiler</a>
      </div>
    </div>

  </div>
</section>

<section class="separador-imagen">
    <div class="overlay">
        <h2>Entrena · Compite · Disfruta</h2>
    </div>
    <img src="img/DEPORTES.jpeg">
</section>


<section class="categorias container my-5">
  <h2 class="titulo-seccion">Categorías</h2>

  <div class="row g-4">

    <div class="col-md-3">
      <div class="categoria-card">
        <h3>Niños</h3>
        <p>Espacios seguros y actividades recreativas adaptadas para los más pequeños.</p>
      </div>
    </div>

    <div class="col-md-3">
      <div class="categoria-card">
        <h3>Adolescentes</h3>
        <p>Entrenamiento dinámico enfocado en técnica, disciplina y trabajo en equipo.</p>
      </div>
    </div>

    <div class="col-md-3">
      <div class="categoria-card">
        <h3>Profesional</h3>
        <p>Cancha y ambiente preparados para competencia de alto nivel.</p>
      </div>
    </div>

    <div class="col-md-3">
      <div class="categoria-card">
        <h3>Adultos</h3>
        <p>Actividad física, recreación y deporte para mantenerte activo.</p>
      </div>
    </div>

  </div>
</section>

<footer class="footer">
  <div class="container footer-content">

    <div>
      <h4>Sobre Nosotros</h4>
      <p>Espacios deportivos diseñados para disfrutar, entrenar y competir.</p>
    </div>

    <div>
      <h4>Contacto</h4>
      <p>📞 300 000 0000</p>
      <p>✉️ info@deportes.com</p>
    </div>

    <div>
      <h4>Síguenos</h4>
      <p>Instagram • Facebook • TikTok</p>
    </div>

  </div>

  <div class="footer-bottom">
    © 2025 Todos los derechos reservados
  </div>
</footer>

</body>
</html>