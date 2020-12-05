<?php
session_start();
include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="Welliton Moreira">
  <link rel="icon" href="imagens/favicon.ico">

  <title>Login - Cietech Educação</title>

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/signin.css" rel="stylesheet">

  <!-- Eterna -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="js/ie-emulation-modes-warning.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i><a href="mailto:contato@cietech.online">contato@cietech.online</a>
        <i class="icofont-phone"></i><a href="http://wa.me/5517982063830" target="_blank"> 17 98206-3830</a>
      </div>
      <div class="social-links">
        <a href="https://www.facebook.com/cietecheducacao" target="_blank" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://www.instagram.com/cietecheducacao/" target="_blank" class="instagram"><i class="icofont-instagram"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light">
          <a href="index.html">
            <span style="color: #59569f;">Cie</span><span style="color: #6e0a7a;">tech</span>
          </a>
        </h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>

          <li class="drop-down"><a href="#">Sobre</a>
            <ul>
              <li><a href="about.html">Empresa</a></li>
              <li><a href="team.html">Equipe</a></li>
            </ul>
          </li>

          <li class="drop-down">
            <a href="#">Cursos</a>
            <ul>
              <li><a href="ar_condicionado.php">Ar Condicionado</a></li>
              <li><a href="farmacia.php">Farmácia</a></li>
              <li><a href="necropsia.php">Necropsia</a></li>
              <li><a href="veterinaria.php">Veterinária</a></li>
            </ul>
          </li>
          <li><a href="#">Galeria</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="contato.html">Contato</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
      </nav>
      <!-- .nav-menu -->

    </div>
  </header>
  <!-- End Header -->

  <div class="container">
    <br><br>
    <form class="form-signin" method="POST" action="valida.php">
      <h2 class="form-signin-heading">Área Restrita</h2>
      <label for="inputEmail" class="sr-only">Usuário</label>
      <input type="text" name="usuario" id="inputEmail" class="form-control" placeholder="Usuário" required autofocus>
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
      <button type="button" class="btn btn-info form-control" onclick="mostrarSenha()">Mostrar/Ocultar</button>
      <br><br>
      <button class="btn btn-lg btn-dark btn-block form-control" type="submit">Acessar</button>
    </form>
    <p class="text-center text-danger">
      <?php if (isset($_SESSION['loginErro'])) {
        echo $_SESSION['loginErro'];
        unset($_SESSION['loginErro']);
      } ?>
    </p>
    <p class="text-center text-success">
      <?php
      if (isset($_SESSION['logindeslogado'])) {
        echo $_SESSION['logindeslogado'];
        unset($_SESSION['logindeslogado']);
      }
      ?>
    </p>
  </div> <!-- /container -->


  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>  
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
  <script src="js/ie10-viewport-bug-workaround.js"></script>
  <script>
    function mostrarSenha() {
      var tipo = document.getElementById("inputPassword");
      if (tipo.type == "password") {
        tipo.type = "text";
      } else {
        tipo.type = "password";
      }
    }
  </script>
</body>

</html>