<?php require 'views/header.php'; ?>
<br>
<div class="grid-container">

  <div class="grid-x">
    <div class="cell small-12 large-12">
      <h1>Nuevo blog</h1>
      <div><?php echo $this->mensaje;?></div>
    </div>
  </div>

  <?php echo "Fecha de creacion: " . date('Y-m-d H:i:s'); ?>
  <form action="<?php echo constant('URL'); ?>blog/new" method="post" enctype="multipart/form-data">
    <div class="grid-x grid-padding-x">
      <div class="small-2 medium-4 large-2 cell">
        <label for="middle-label" class="text-right middle">Titulo del blog</label>
      </div>
      <div class="small-10 medium-8 large-10 cell">
        <input type="text" name="titulo" id="middle-label" placeholder="Titulo">
      </div>

      <div class="small-2 medium-4 large-2 cell">
        <label for="middle-label" class="text-right middle">Descripcion</label>
      </div>
      <div class="small-10 medium-8 large-10 cell">
        <input type="text" name="descripcion" id="middle-label" placeholder="Descripcion">
      </div>

      <div class="small-2 medium-4 large-2 cell">
        <label for="middle-label" class="text-right middle">Imagen del blog</label>
      </div>
      <div class="small-10 medium-8 large-10 cell">
        <input type="file" name="imagen" id="middle-label">
      </div>

      <div class="small-2 medium-4 large-2 cell">
        <label for="middle-label" class="text-right middle">Contenido del blog</label>
      </div>
      <div class="small-10 medium-8 large-10 cell">
        <label>
          <small>Esta sección admite contenido en HTML</small>
          <textarea name="contenido" placeholder="None" rows="20"></textarea>
        </label>
      </div>

      <div class="small-2 medium-4 large-2 cell">
      </div>
      <div class="small-10 medium-8 large-10 cell">
        <button type="submit" class="button" name="btnGuardar">Guardar</button>
      </div>

    </div>
  </form>


</div>

<?php require 'views/footer.php'; ?>
