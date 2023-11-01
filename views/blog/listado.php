<?php require 'views/header.php'; ?>
<br>
<div class="grid-container">
	<div class="grid-x">
		<div class="cell small-12 large-12">
			<h4>Listado de Blog</h4>
			<a href="<?php echo constant('URL');?>blog/new" class="button">Nuevo Contendio de Blog</a>
		</div>
	</div>
	<div class="grid-x">
		<table>
			<thead>
				<tr>
					<th>Num</th>
					<th>Titulo</th>
					<th>Descripcion</th>
					<th>Contenido</th>
					<th>Imagen</th>
					<th>Fecha Creacion</th>
					<th>Opciones</th>
				</tr>
			</thead>
			<tbody>
				<?php
		        include_once "models/blogs.php";
		        $i=1;
		        foreach ($this->datos as $row)
		        {
		          $item = new Blogs();
		          $item = $row;
		        ?>
				<tr>
					<td><?php echo $i;?></td>
					<td> <?php echo $item->titulo; ?> </td>
					<td> <?php echo $item->descripcion; ?> </td>
					<td> <?php echo $item->contenido; ?> </td>
					<td>
						<img src="<?php echo constant('URL').$item->imagen; ?>" alt="img">
						 </td>
					<td> <?php echo $item->fecCreate; ?> </td>

					<td>
						<a href="<?php echo constant('URL').'blog/ver/'.$item->idblog; ?>">Editar</a> |
						<a href="<?php echo constant('URL').'blog/delete/'.$item->idblog; ?>">Eliminar</a>
					</td>
				</tr>
				<?php $i++;} ?>
			</tbody>
		</table>
	</div>
</div>

<?php require 'views/footer.php'; ?>