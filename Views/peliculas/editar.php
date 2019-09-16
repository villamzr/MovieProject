<div class="box-principal">
<h3 class="titulo">Editar Película <?php echo $datos['nombre']; ?><hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Película: <?php echo $datos['nombre']; ?></h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-3">
	  			<div class="panel panel-default">
				  <div class="panel-body">
				    <img class="img-responsive" src="<?php echo URL;?>Views/template/imagenes/portadas/<?php echo $datos['portada']; ?>">
				  </div>
				</div>
	  		</div>
	  		<div class="col-md-9">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Código</label>
				        <input class="form-control" value="<?php echo $datos['codigo']; ?>" name="codigo" type="number" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Nombre de Película</label>
				        <input class="form-control" value="<?php echo $datos['nombre']; ?>" name="nombre" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Descripción</label>
				        <input class="form-control" value="<?php echo $datos['descripcion']; ?>" name="descripcion" type="text" required>
				    </div>		
				    <input value="<?php echo $datos['id'];?>" name="id" type="hidden" required>
				    <div class="form-group">
				    <div class="panel panel-success">
					  <div class="panel-heading">
					    <h3 class="panel-title">Agregar Galería (max 3 imágenes)</h3>
					  </div>
					</div>
					<div class="form-group">
				      <label for="inputEmail" class="control-label">Imagen 1</label>
				        <input class="form-control" name="imagen1" id="imagen1" type="file" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Imagen 2</label>
				        <input class="form-control" name="imagen2" id="imagen2" type="file" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Imagen 3</label>
				        <input class="form-control" name="imagen3" id="imagen3" type="file" required>
				    </div>
				    	 <button type="submit" class="btn btn-success">Editar</button>
				        <button type="reset" class="btn btn-warning">Restaurar</button>
				    </div>
				</form>
	  		</div>
	  	</div>
	  </div>
	</div>
</div>