<div class="box-principal">
<h3 class="titulo">Película <?php echo $datos['peliculas']['nombre']; ?><hr></h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Detalles de la Película <?php echo $datos['peliculas']['nombre']; ?><b></b></h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-3">
          <img class="img-responsive" src="<?php echo URL;?>Views/template/imagenes/portadas/<?php echo $datos['peliculas']['portada']; ?>">
        </div>
        <div class="col-md-9">
          <ul class="list-group">
            <li class="list-group-item">
              <b>Código: </b><?php echo $datos['peliculas']['codigo']; ?>
            </li>
            <li class="list-group-item">
              <b>Nombre: </b><?php echo $datos['peliculas']['nombre']; ?>
            </li>
            <li class="list-group-item">
              <b>Descripción: </b><?php echo $datos['peliculas']['descripcion']; ?>
            </li>
            <li class="list-group-item">
              <b>Fecha de Registro: </b><?php echo $datos['peliculas']['fecha']; ?>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!--GALERÍA DE IMAGENES-->
<div class="box-principal">
<h3 class="titulo">GALERÍA DE IMAGENES <?php echo $datos['galeria']['ruta']; ?><hr></h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Detalles de la Película<b></b></h3>
    </div>
        <div class="col-md-8">
          <img class="img-responsive" src="<?php echo URL.$datos['galeria']['ruta'];?>">
        </div>

  </div>
</div>