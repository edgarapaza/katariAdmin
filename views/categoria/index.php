<?php require('views/header.php'); ?>
<br>
<div class="grid-container">
  <div class="grid-x">
    <div class="cell small-12 large-12">
      <h3>Nuevas Categorias</h3>
    </div>
  </div>



  <form action="<?php echo constant('URL'); ?>productos/nuevo" method="post" enctype="multipart/form-data">
    <div class="grid-x grid-padding-x">
      <div class="small-3 cell">
        <label for="nombre" class="text-right middle">Nombre de la categoria</label>
      </div>
      <div class="small-9 cell">
        <input type="text" id="nombre" name="nombre" value="Software .." required>
      </div>
    </div>

    <div class="grid-x grid-padding-x">
      <div class="small-3 cell">
        <label for="caracteristicas" class="text-right middle">Descripcion</label>
      </div>
      <div class="small-9 cell">
        <textarea name="caracteristicas" id="caracteristicas" cols="10" rows="3" required>Ejemplo22</textarea>
      </div>
    </div>

    <div class="grid-x grid-padding-x">
      <div class="small-3 cell">
        <label for="meta_title" class="text-right middle">Meta Title</label>
      </div>
      <div class="small-9 cell">
        <input type="text" id="meta_title" name="meta_title" value="meta1" required>
      </div>
    </div>

    <div class="grid-x grid-padding-x">
      <div class="small-3 cell">
        <label for="meta_description" class="text-right middle">Meta Description</label>
      </div>
      <div class="small-9 cell">
        <input type="text" id="meta_description" name="meta_description" value="meta2" required>
      </div>
    </div>

    <div class="grid-x grid-padding-x">
      <div class="small-3 cell">
        <label for="meta_keyword" class="text-right middle">Meta Keyword</label>
      </div>
      <div class="small-9 cell">
        <input type="text" id="meta_keyword" name="meta_keyword" value="meta3" required>
      </div>
    </div>


    <div class="grid-x grid-padding-x">
      <div class="small-3 cell">
      </div>
      <div class="small-3 cell">
        <button type="submit" name="btnGuardar" id="btnGuardar" class="button">Guardar</button>
      </div>
    </div>


  </form>

</div>

<?php require('views/footer.php'); ?>