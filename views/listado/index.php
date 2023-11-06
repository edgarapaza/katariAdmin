<?php require 'views/header.php'; ?>

<div class="grid-container">
  <div class="grid-x">
    <div class="cell small-12 large-12">
      <h4>Listado</h4>
    </div>
  </div>
  <div class="grid-x">
    <table>
      <thead>
        <tr>
          <th>Num</th>
          <th>Nombre</th>
          <th>Apellidos</th>
          <th>Sexo</th>
          <th>Telefono</th>

          <th>Email</th>
          <th>Direccion</th>
          <th>DNI</th>
          <th>Opciones</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include_once "models/personal.php";
        $i = 1;
        foreach ($this->datos as $row) {
          $personal = new Personal();
          $personal = $row;
        ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td> <?php echo $personal->nombre; ?> </td>
            <td> <?php echo $personal->apellidos; ?> </td>
            <td> <?php echo $personal->sexo; ?> </td>
            <td> <?php echo $personal->telefono; ?> </td>

            <td> <?php echo $personal->email; ?> </td>
            <td> <?php echo $personal->direccion; ?> </td>
            <td> <?php echo $personal->dni; ?> </td>

            <td>
              <a href="<?php echo constant('URL') . 'listado/verTrabajador/' . $personal->idpersonal; ?>">Editar</a> |
              <a href="<?php echo constant('URL') . 'listado/delete/' . $personal->idpersonal; ?>">Eliminar</a>
            </td>
          </tr>
        <?php $i++;
        } ?>
      </tbody>
    </table>
  </div>
</div>

<?php require 'views/footer.php'; ?>