<?php require 'views/header.php'; ?>
<br>
<div class="grid-container">
  <div class="grid-x">
    <div class="cell small-12 large-12">

      <h4>Detalle</h4>
      <div id="mensaje"></div>
      <form action="<?php echo constant('URL') . "listado/update/" . $this->datos['idpersonal']; ?>" method="post" enctype="multipart/form-data">
        <div class="grid-container">
          <div class="grid-x grid-padding-x">
            <div class="small-12 medium-6 cell">
              <label class="msg">Nombre(s)
                <input type="text" value="<?php echo $this->datos['nombre']; ?>" name="nombre" id="nombre" required>
              </label>
            </div>
          </div>
          <div class="grid-x grid-padding-x">
            <div class="small-12 medium-6 cell">
              <label>Apellidos
                <input type="text" value="<?php echo $this->datos['apellidos']; ?>" name="apellidos" id="apellidos" required>
              </label>
            </div>
          </div>

          <div class="grid-x grid-padding-x">
            <div class="small-12 medium-4 cell">
              <fieldset class="large-5 cell">
                <label for="">Sexo
                  <input type="text" value="<?php echo $this->datos['sexo']; ?>" name="sexo" id="sexo" required>
                </label>
              </fieldset>
            </div>
            <div class="small-12 medium-4 cell">
              <label>Telefono
                <input type="text" value="<?php echo $this->datos['telefono']; ?>" name="telefono" id="telefono" required </label>
            </div>
            <div class="small-12 medium-4 cell">
              <label>DNI
                <input type="text" value="<?php echo $this->datos['dni']; ?>" name="dni" id="dni">
              </label>
            </div>
          </div>

          <div class="grid-x grid-padding-x">
            <div class="small-12 medium-4 cell">
              <label>Fecha de Nacimiento
                <input type="text" name="fechanac" id="fechanac" required value="<?php echo $this->datos['fechanac']; ?>">
              </label>
            </div>
            <div class="small-12 medium-4 cell">
              <label>Foto
                <img src="<?php echo constant('URL') . $this->datos['foto']; ?>" alt="<?php echo $this->datos['nombre']; ?>" width="100px">
              </label>
            </div>
            <div class="small-12 medium-4 cell">
              <label>Tipo de usuario
                <input type="text" value="<?php echo $this->datos['nivusu']; ?>" name="tipoUsuario" id="tipoUsuario">
              </label>
            </div>
          </div>

          <div class="grid-x grid-padding-x">
            <div class="small-12 medium-6 cell">
              <label>Direccion
                <input type="text" value="<?php echo $this->datos['direccion']; ?>" name="direccion" id="direccion">
              </label>
            </div>
            <div class="small-12 medium-6 cell">
              <label>Correo electronico (obligatorio)
                <input type="email" value="<?php echo $this->datos['email']; ?>" name="email" id="email" required>
              </label>
            </div>
          </div>

          <div class="grid-x grid-padding-x">
            <div class="small-12 medium-6 cell">
              <label>Escriba una contraseña
                <input type="password" name="passwd1" id="passwd1" value="">
              </label>
            </div>
            <div class="small-12 medium-6 cell">
              <label>Repita la contraseña
                <input type="password" name="passwd2" id="passwd2" value="">
              </label>
            </div>
          </div>
          <div class="grid-x grid-padding-x">
            <div class="small-12 medium-6 cell">
              <button type="submit" class="button large success" name="btnActualizar" id="btnActualizar">Actualizar</button>
            </div>
            <div class="small-12 medium-6 cell">

            </div>
          </div>
        </div>
      </form>


    </div>

  </div>
</div>


<?php require 'views/footer.php'; ?>
<script src="<?php echo constant('URL'); ?>public/js/nuevo.js"></script>