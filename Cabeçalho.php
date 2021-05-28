<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>


  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Importação do Bootstrap  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <link rel="icon" href="fotos/fav-icon.ico">

  <title>Trilhas - Home</title>


</head>

<body>

  <div class="d-grid gap-3">
    <!-- NAVBAR  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
      <div class="container overflow-visible">

        <a class="navbar-brand" href="TrilhasDeAprendizagem.php">
          <h3>ÁGORA</h3>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#"><strong>HOME</strong></a>
            </li>

            <!-- DROPDOWN SOBRE  -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <strong>SOBRE</strong>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">GEFIL</a></li>
                <li><a class="dropdown-item" href="#">ÁGORA</a></li>
                <li><a class="dropdown-item" href="#">SOBRE NÓS</a></li>
                <li><a class="dropdown-item" href="#">PARCERIAS</a></li>
                <li><a class="dropdown-item" href="#">CONTATOS</a></li>
              </ul>
            </li>

            <!-- DROPDOWN ATIVIDADES  -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <strong>ATIVIDADES</strong>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">SIMULADOS</a></li>
                <li><a class="dropdown-item" href="#">PROVAS</a></li>
                <li><a class="dropdown-item" href="#">ATIVIDADES AVALIATIVAS</a></li>
                <li><a class="dropdown-item active" href="TrilhasDeAprendizagem.php">TRILHAS DE APRENDIZAGEM</a></li>
                <li><a class="dropdown-item" href="#">BIBLIOTECA</a></li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#"><strong>JOGOS</strong></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#"><strong>EVENTOS</strong></a>
            </li>
          </ul>

        </div>

        <div class="d-flex gap-3">
          <?php if (isset($_SESSION["email"])) :
            echo '<p class="text-light">Usuário: ' . $_SESSION["email"] . '</p>
            <a role="button" class="btn btn-outline-light" href="Conta.php"><strong>Conta</strong></a>
            <a role="button" class="btn btn-outline-light" href="Logout.php"><strong>Sair</strong></a>';
          else :
            echo '
            <a role="button" class="btn btn-outline-light" href="FormLogin.php"><strong>Fazer Login</strong></a>';
          endif
          ?>
        </div>

      </div>
    </nav>

    <div class="container">