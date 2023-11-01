<!doctype html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Katari | Welcome</title>

  <!-- <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css"> -->
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/foundation.css">
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/main.css">
  <!-- If you are using the gem version, you need this only -->

  <!-- Insert this within your head tag and after foundation.css -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@200;400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--   <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css"> -->
</head>

<body>

  <div class="header">
    <nav>
      <ul>
        <li><a href="<?php echo constant('URL'); ?>login">Inicio</a></li>
        <li><a href="<?php echo constant('URL'); ?>salir/end">Salir</a></li>
      </ul>
    </nav>
  </div>


<div class="grid-container">
  <div class="grid-x">
    <div class="cell small-6">
      <div class="thumbnail imagen">
        <img src="<?php echo constant('URL')?>public/img/katari.png" alt="Represa">
      </div>
    </div>
    <div class="cell small-6 gris">

      <h1>Bienvenido</h1>
      <?php echo $this->mensaje; ?>

      <form method="post" action="<?php echo constant('URL') ?>login/user" name="signup-form">
        <div class="">
          <label>Email</label>
          <input type="email" name="email" required value="uno@uno.com" />
        </div>
        <div class="">
          <label>Password</label>
          <input type="password" name="password" required value="123" />
        </div>
        <div class="">
          <label>Recordarme</label>
          <input type="checkbox" name="recordarme"/>
        </div>
        <button type="submit" class="button success large" name="btnIngresar" value="btnIngresar">Ingresar</button>
      </form>
      <p class="text-center">No tienes cuenta? <a href="">Registrate</a></p>
    </div>
  </div>
</div>


<?php require 'views/footer.php'; ?>