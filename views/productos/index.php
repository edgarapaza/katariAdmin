<?php require('views/header.php'); ?>

<div class="grid-container">
  <div class="grid-x">
    <div class="cell small-12 large-12">
      <h3>Insertar nuevo producto</h3>
    </div>
  </div>

  <form action="<?php echo constant('URL'); ?>productos/nuevo" method="post" enctype="multipart/form-data">
    <div class="grid-x grid-padding-x">
      <div class="small-3 cell">
        <label for="nombre" class="text-right middle">Nombre del producto o Software</label>
      </div>
      <div class="small-9 cell">
        <input type="text" id="nombre" name="nombre" value="Software .." required>
      </div>
    </div>

    <div class="grid-x grid-padding-x">
      <div class="small-3 cell">
        <label for="caracteristicas" class="text-right middle">Carateristicas (Escribir en viñetas con HTML ul y li)</label>
      </div>
      <div class="small-9 cell">
        <textarea name="caracteristicas" id="caracteristicas" cols="30" rows="10" required><ul>
            <li>Inicio 1</li>
            <li>Inicio 2</li>
            <li>Inicio 3</li>
            <li>Inicio 4</li>
          </ul></textarea>
      </div>
    </div>


    <div class="grid-x grid-padding-x">
      <div class="small-3 cell">
        <label for="categoria" class="text-right middle">Categoria</label>
      </div>
      <div class="small-9 cell">
        <select name="categoria" id="categoria" required>
          <option value="" selected disabled>[Seleccionar]</option>
          <?php
          include_once "models/categorias.php";

          foreach ($this->datos as $row) {
            $item = new Categorias();
            $item = $row;

          ?>
            <option value="<?php echo $item->idcategoria; ?>"><?php echo $item->categoria; ?></option>
          <?php } ?>
        </select>
      </div>
    </div>


    <div class="grid-x grid-padding-x">
      <div class="small-3 cell">
        <label for="imagen" class="text-right middle">Imagen del producto o Software</label>
      </div>
      <div class="small-9 cell">
        <input type="file" id="imagen" name="imagen" placeholder="" required>
      </div>
    </div>


    <div class="grid-x grid-padding-x">
      <div class="small-3 cell">
        <label for="preciototal" class="text-right middle">Precio total</label>
      </div>
      <div class="small-3 cell">
        <input type="number" id="preciototal" name="preciototal" value="2500.00" min="1" max="9999999" required>
      </div>
    </div>


    <div class="grid-x grid-padding-x">
      <div class="small-3 cell">

        <label for="porcentaje" class="text-right middle">Aplica Descuento?</label>

      </div>
      <div class="small-5 cell">
        <div class="input-group">
          <select class="input-group-field" name="combo1" id="combo1">
            <option value="0">No</option>
            <option value="1">Si</option>
          </select>
          >>
          <input class="input-group-field" type="number" id="porcentaje" name="porcentaje" value="0" disabled="disabled" placeholder="" required>
          <span class="input-group-label">%</span>
          <div class="input-group-button">
            <input type="button" class="button" name="btnCalcular" id="btnCalcular" value="Calcular" disabled="disabled">
          </div>
        </div>
      </div>

    </div>


    <div class="grid-x grid-padding-x">
      <div class="small-3 cell">
        <label for="preciodsto" class="text-right middle">Precio con Descuento</label>
      </div>
      <div class="small-3 cell">
        <input type="number" id="preciodsto" name="preciodsto" value="0" required>
      </div>
    </div>


    <div class="grid-x grid-padding-x">
      <div class="small-3 cell">
        <label for="ahorro" class="text-right middle">Total ahorrado</label>
      </div>
      <div class="small-3 cell">
        <input type="text" id="ahorro" name="ahorro" value="0" required>
      </div>
    </div>


    <div class="grid-x grid-padding-x">
      <div class="small-3 cell">

        <label for="cupondsto" class="text-right middle">tiene cupón?</label>

      </div>
      <div class="small-4 cell">
        <div class="input-group">
          <select class="input-group-field" name="cupon" id="cupon">
            <option value="0">No</option>
            <option value="1">Si</option>
          </select>
          >>
          <input class="input-group-field" type="number" id="cupondsto" name="cupondsto" value="0" disabled>
          <span class="input-group-label">%</span>

        </div>
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
<script src="<?php echo constant('URL'); ?>public/js/productos.js"></script>