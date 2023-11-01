<!doctype html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Katari | Welcome</title>

  <!-- <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css"> -->
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/foundation.css">
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/header.css">
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
      <img src="<?php echo constant('URL') ?>public/img/katariwhite.png" alt="Represa" class="logo">
      <ul>
        <li><a href="<?php echo constant('URL'); ?>login">Inicio</a></li>
      </ul>
      <ul class="derecha">
        <li><a href="<?php echo constant('URL'); ?>salir/end">Salir</a></li>
      </ul>
    </nav>
  </div>


  <div class="grid-container-fluid">
    <div class="grid-x login1">
      <div class="cell small-6">
        <img src="<?php echo constant('URL') ?>public/img/katariwhite.png" alt="Katari" id="katarilogo">
      </div>
      <div class="cell small-6">

        <h1>Bienvenido</h1>
        <?php echo $this->mensaje; ?>

        <form method="post" action="<?php echo constant('URL') ?>login/user" name="signup-form">
          <div class="">
            <label>Email</label>
            <input type="text" name="username" id="username" required />
          </div>
          <div class="">
            <label>Password</label>
            <input type="password" name="passwd" id="passwd" required />
          </div>
          <div class="">
            <label>Recordarme
              <input type="checkbox" name="recordarme" />
            </label>
          </div>
          <button type="submit" class="button success large" name="btnIngresar" value="btnIngresar">Ingresar</button>
        </form>
        <p class="text-center">No tienes cuenta? <a href="#0">Registrate</a></p>
      </div>
    </div>
  </div>

  </div>
  </div>
  </div>

  <script src="<?php echo constant('URL'); ?>public/js/core/jquery.min.js"></script>
  <script src="<?php echo constant('URL'); ?>public/js/main.js"></script>
  <script src="<?php echo constant('URL'); ?>public/js/foundation.min.js"></script>

  <script>
    $(document).foundation();
  </script>
</body>

</html>