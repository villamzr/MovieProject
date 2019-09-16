<div class="box-principal">
<h3 class="titulo">Listado de Películas<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Listado de Películas</h3>
	  </div>
	  <div class="panel-body">
	    <table class="table table-striped table-hover">
		  <thead>
		    <tr>
		      <th>Portada</th>
		      <th>Código</th>
		      <th>Nombre</th>
		      <th>Descrición</th>
		      <th>Registro</th>
		      <th>Acción</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php while($row = mysqli_fetch_array($datos)){ ?>
		  	<tr>
		  			<td><img class="imagen-avatar" src="<?php echo URL; ?>Views/template/imagenes/portadas/<?php echo $row['portada']; ?>"></td>
					<td><a href="<?php echo URL; ?>peliculas/ver/<?php echo $row['id']; ?>"><?php echo $row['codigo']; ?></a></td>
			    	<td><?php echo $row['nombre']; ?></td>
			    	<td><?php echo $row['descripcion']; ?></td>
			    	<td><?php echo $row['fecha']; ?></td>
			    	<td><a class="btn btn-warning" href="<?php echo URL; ?>peliculas/editar/<?php echo $row['id']; ?>">Editar</a>
						<a class="btn btn-danger" href="<?php echo URL; ?>peliculas/eliminar/<?php echo $row['id']; ?>">Eliminar</a>
			    	</td>
			</tr>
			<?php } ?>
		  </tbody>
		</table> 
	  </div>
	</div>
</div>