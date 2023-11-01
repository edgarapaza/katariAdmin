<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/index.css">
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/footer.css">
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/foundation.css">

  <script type="text/javascript" src="<?php echo constant('URL'); ?>public/js/estilo.js"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@200;400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  <div class="grid-container-fluid">
    <div class="grid-x">
      <div class="cell">
        <div class="title-bar" data-responsive-toggle="responsive-menu" data-hide-for="medium">
          <button class="menu-icon" type="button" data-toggle="responsive-menu"></button>
          <div class="title-bar-title">Menu</div>
        </div>

        <div class="top-bar" id="responsive-menu">
          <div class="top-bar-left">
            <ul class="dropdown menu" data-dropdown-menu>
              <li class="menu-text">Katari Admin</li>
              <li class="has-submenu">
              <li><a href="<?php echo constant('URL'); ?>dashboard">Inicio</a></li>
              <li><a href="<?php echo constant('URL'); ?>empresa">Datos Empresa</a></li>
              <li class="has-submenu ">
                <a href="#">Usuarios</a>
                <ul class="submenu menu vertical" data-submenu>
                  <li><a href="<?php echo constant('URL'); ?>personal">Nuevo Usuario</a></li>
                  <li><a href="<?php echo constant('URL'); ?>listado">Listado Usuarios</a></li>
                </ul>
              </li>

              </li>
              <li><a href="#0">Blog</a></li>
            </ul>
          </div>
          <div class="top-bar-right">
            <ul class="menu">
              <li><input type="search" placeholder="Search"></li>
              <li><button type="button" class="button">Search</button></li>
              <li><a href="<?php echo constant('URL'); ?>salir/end">Salir</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>


    <div class="grid-x">
      <!-- Navegacion Izquierda -->
      <div class="cell small-12 large-2 lateral">
        <!-- Menu lateral -->
        <div id="menu">
          <div id="left">
            <img src="<?php echo constant('URL'); ?>public/img/katariwhite.png" alt="Logo Katari" class="img-logo" width="80px">
            <span onClick="toggleClick()" class="menu_toggle">
              <i class="fa fa-times" aria-hidden="true"></i>
            </span>
            <ul>
              <li>
                <a href="<?php echo constant('URL'); ?>dashboard">Dashboard</a>
              </li>
              <li><a href="<?php echo constant('URL'); ?>blog">Blog</a></li>
              <li><a href="<?php echo constant('URL'); ?>listado">Usuarios</a></li>
              <li><a>My Account</a></li>
            </ul>
          </div>
          <div id="right">
            <span onClick="toggleClick()" class="menu_toggle">
              <button class="btn pull_tab">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
              </button>
            </span>
          </div>
        </div>
      </div>

      <div class="cell small-12 large-10">
        <!-- cuerpo de la pagina -->