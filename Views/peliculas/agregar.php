<div class="box-principal">
<h3 class="titulo">Agregar Películas<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Agregar Película</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Código</label>
				        <input class="form-control" name="codigo" type="number" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Nombre</label>
				        <input class="form-control" name="nombre" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Descripción</label>
				        <input class="form-control" name="descripcion" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Portada</label>
				        <input class="form-control" name="portada" id="portada" type="file" required>
				    </div>
				    <div class="panel panel-success">
					  <div class="panel-heading">
					    <h3 class="panel-title">Agregar Galería</h3>
					  </div>
					</div>
				  </div><br>
				    <div class="form-group">
				    	 <button type="submit" class="btn btn-success">Agregar</button>
				        <button type="reset" class="btn btn-warning">Limpiar</button>
				    </div>
				</form>
	  		</div>
	  		<div class="col-md-1"></div>
	  	</div>
	  </div>
	</div>
</div>