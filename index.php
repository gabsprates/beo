<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Banco de Oportunidade - Facomp</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href='./assets/ubuntu/stylesheet.css' rel='stylesheet' type='text/css'>
<link href='./bower_components/font-awesome/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
<link href='./bower_components/bulma/css/bulma.min.css' rel='stylesheet' type='text/css'>
<link href='./style.css' rel='stylesheet' type='text/css'>
</head>
<body>

<nav class="nav">
  <div class="container">
    <div class="nav-left">
      <span class="nav-item is-tab">
        BANCO DE OPORTUNIDADES
      </span>
    </div>

    <div class="nav-center">
      <a class="nav-item" href="#">
        FACOMP
      </a>
    </div>

    <button type="button" class="btn-abre button nav-toggle" data-abre="#menu-superior">
      <span></span>
      <span></span>
      <span></span>
    </button>

    <div class="nav-right nav-menu" id="menu-superior">
      <a class="nav-item" href="#">
        Sobre
      </a>
      <span class="nav-item">
        <a class="button is-primary" href="#">
          <span class="icon">
            <i class="fa fa-users"></i>
          </span>
          <span>Candidatos</span>
        </a>
      </span>
      <span class="nav-item is-tab">
        <a class="button is-info" href="#">
          <span class="icon">
            <i class="fa fa-object-group"></i>
          </span>
          <span>Empresas</span>
        </a>
      </span>
      <!-- <span class="nav-item">
        <a class="button is-info" href="#">
          <span class="icon">
            <i class="fa fa-cogs"></i>
          </span>
          <span>Minha Conta</span>
        </a>
      </span>
      <span class="nav-item">
        <a class="button is-info" href="#">
          <span class="icon">
            <i class="fa fa-file-text-o"></i>
          </span>
          <span>Meu Currículo</span>
        </a>
      </span>
      <span class="nav-item">
        <a class="button is-warning" href="#">
          <span class="icon">
            <i class="fa fa-sign-out"></i>
          </span>
          <span>Sair</span>
        </a>
      </span> -->
    </div>
  </div>
</nav>

<section class="bg_padrao">
  <?php

  $URL = isset($_GET['pag']) ? $_GET['pag'] : "home";
  if (file_exists("./includes/{$URL}.php")) {
    require_once "./includes/{$URL}.php";
  }

  ?>
</section>


<footer class="footer">
  <div class="container">
    <div class="columns">
      <div class="column has-text-left">
        <p>&copy; NAD - Núcleo de Apoio ao Discente</p>
        <a href="http://facomp.edu.br" target="_blank">Facomp - Faculdade de Computação de Montes Claros</a>
      </div>

      <div class="column has-text-right">
        <address>
          Rua Corrêa Machado, 816. Centro<br>
          Montes Claros - (MG)<br>
          Fone: (38) 3221-2319
        </address>
      </div>
    </div>

    <!-- <p class="has-text-centered">Desenvolvido por Gabriel Prates</p> -->
  </div>
</footer>


<script src="./bower_components/jquery/dist/jquery.min.js" charset="utf-8"></script>
<script src="./javascript/bulma.js" charset="utf-8"></script>
<script src="./javascript/cadastro.js" charset="utf-8"></script>
</body>
</html>
