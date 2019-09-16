<div class="box-principal">
<h3 class="titulo">Listado de Películas<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Agregar Escenas o Galerías</h3>
	  </div>
	  <div class="panel-body">
	    <table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>Portada</th>
		      <th>Nombre</th>
		      <th>Cantidad de imágenes a agregar</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php while($row = mysqli_fetch_array($datos)){ ?>
		  	<tr>
		  		<td><img class="imagen-avatar" src="<?php echo URL; ?>Views/template/imagenes/portadas/<?php echo $row['portada']; ?>"></td>
			    <td><?php echo $row['nombre']; ?></td>
			 <td>
			 	<input type="text" name="NumGalery">
			 	<input type="text" name="id" value="<?php echo $row['id']?>" hidden>
				<input type="submit" class="btn btn-warning" value="Generar Botones">
			</td>
			</tr>
			<?php } ?>
		  </tbody>
		</table> 
	  </div>
	</div>
</div>