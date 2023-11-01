<?php require 'views/header.php'; ?>

<div class="grid-container">
	<div class="grid-x">
		<div class="cell small-12 large-12">

				<h4>Nuevo de personal</h4>
				<div id="mensaje"><?php echo $this->mensaje; ?></div>
				<form action="<?php echo constant('URL');?>personal/create" method="post" enctype="multipart/form-data">
				  <div class="grid-container">
				    <div class="grid-x grid-padding-x">
				      <div class="small-12 medium-6 cell">
				        <label class="msg">Nombre(s)
				          <input type="text" name="nombre" id="nombre" required placeholder="Nombre">
				        </label>
				      </div>
				    </div>
				    <div class="grid-x grid-padding-x">
				      <div class="small-12 medium-6 cell">
				        <label>Apellidos
				          <input type="text" name="apellidos" id="apellidos" required placeholder="Apellidos">
				        </label>
				      </div>
				    </div>

				    <div class="grid-x grid-padding-x">
				      <div class="small-12 medium-4 cell">
				        <label for="">Sexo
				        	<select name="sexo" id="sexo">
				        		<option value="" selected="" disabled="">[Selecciona]</option>
				        		<option value="Masculino">Masculino</option>
				        		<option value="Femenino">Femenino</option>
				        	</select>
				        </label>
				      </div>
				      <div class="small-12 medium-4 cell">
				        <label>Telefono
				          <input type="text" name="telefono" id="telefono" required placeholder="999">
				        </label>
				      </div>
				      <div class="small-12 medium-4 cell">
				        <label>DNI
				          <input type="text" name="dni" id="dni" required placeholder="Numero DNI">
				        </label>
				      </div>
				    </div>

				    <div class="grid-x grid-padding-x">
				      <div class="small-12 medium-4 cell">
				        <label>Fecha de Nacimiento
				          <input type="date" name="fecha_nac" id="fecha_nac" required>
				        </label>
				      </div>
				      <div class="small-12 medium-4 cell">
				        <label>Foto
				          <input type="file" name="foto" id="foto">
				        </label>
				      </div>
				      <div class="small-12 medium-4 cell">
				        <label>Tipo de usuario
				          <select name="nivel" id="nivel">
						    <option disabled="">Seleccione</option>
						    <option value="2">Personal de Planta</option>
						    <option value="1">Administrador</option>
						    <option value="3">Solo Visualiza reportes</option>
						  </select>
				        </label>
				      </div>
				    </div>

				    <div class="grid-x grid-padding-x">
				      <div class="small-12 medium-6 cell">
				        <label>Direccion
				          <input type="text" name="direccion" id="direccion" placeholder="Direccion">
				        </label>
				      </div>
				      <div class="small-12 medium-6 cell">
				        <label>Correo electronico (obligatorio)
				          <input type="email" name="email" id="email" placeholder="Email" required>
				        </label>
				      </div>
				    </div>

				    <div class="grid-x grid-padding-x">
				      <div class="small-12 medium-6 cell">
				        <label>Escriba una contraseña
				          <input type="password" name="passwd1" id="passwd1"  placeholder="***" required>
				        </label>
				      </div>
				      <div class="small-12 medium-6 cell">
				        <label>Repita la contraseña
				          <input type="password" name="passwd2" id="passwd2"  placeholder="***" required>
				        </label>
				      </div>
				    </div>
				    <div class="grid-x grid-padding-x">
				      <div class="small-12 medium-6 cell">
				        <button type="submit" class="button large success" name="btnGuardar" id="btnGuardar">Guardar</button>
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
<script src="<?php echo constant('URL');?>public/js/nuevo.js"></script>