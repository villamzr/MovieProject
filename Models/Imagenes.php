<?php namespace Models;

class Imagenes{

	private $id;
	private $id_pelicula;
	private $img;
	private $ruta;
	private $con;
	
	function __construct(){
		$this->con = new Conexion();
	}

	public function set($contenido, $atributo){
		$this->$atributo = $contenido;
	}

	public function get($atributo){
		return $this->$atributo;
	}

	public function listar(){
		$sql = "SELECT * FROM imagenes";
		$datos = $this->con->consultaRetorno($sql);
		return $datos;
	}

	public function add(){
		$sql = "INSERT INTO imagenes(id, id_pelicula, img, ruta) VALUES (NULL, '$this->id_pelicula', '$this->img', '$this->ruta')";
		$this->con->consultaSimple($sql);
	}

	public function delete(){
		$sql = "DELETE FROM imagenes WHERE id = '$this->id'"; 
		$this->con->consultaSimple($sql);
	}

	public function edit(){
		$sql = "UPDATE imagenes SET id_pelicula = '$this->id_pelicula', img = '$this->img', ruta = '$this->ruta'  WHERE id = '$this->id'";
		$this->con->consultaSimple($sql);
	}

	public function view(){
		$sql = "SELECT * FROM imagenes WHERE id = '$this->id'";
		$datos = $this->con->consultaRetorno($sql);
		$row = mysqli_fetch_assoc($datos);
		return $row;
	}

	public function galeria(){
		$sql = "SELECT ruta, id_pelicula FROM imagenes as m INNER JOIN peliculas as p ON m.id_pelicula = '$this->id_pelicula'";
		$datos = $this->con->consultaRetorno($sql);
		$row = mysqli_fetch_assoc($datos);
		return $row;
	}
}


?>