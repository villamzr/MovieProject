<?php namespace Models;

class Peliculas
{
	private $id;
	private $codigo;
	private $nombre;
	private $descripcion;
	private $portada;
	private $fecha;
	
	public function __construct()
	{
		$this->con = new Conexion(); 
	}

	public function set($contenido, $atributo){
		$this->$atributo = $contenido;
	}

	public function get($atributo){
		return $this->$atributo;
	}

	public function listar(){
		$sql = "SELECT *
				FROM peliculas";

		$datos = $this->con->consultaRetorno($sql);
		return $datos;
	}

	public function add(){
		$sql = "INSERT INTO peliculas(id, codigo, nombre, descripcion, portada, fecha) VALUES (NULL, '$this->codigo', '$this->nombre', '$this->descripcion', '$this->portada', '$this->fecha')";

		$this->con->consultaSimple($sql);
	}

	public function detele(){
		$sql = "DELETE FROM peliculas WHERE id = '$this->id'";
		$this->con->consultaSimple($sql);
	}

	public function edit(){
		$sql = "UPDATE peliculas SET codigo = '$this->codigo', nombre = '$this->nombre', descripcion = '$this->descripcion' WHERE id = '$this->id'";
		$this->con->consultaSimple($sql);
	}

	public function view(){
		$sql = "SELECT * FROM peliculas WHERE id = '$this->id'";

		$datos = $this->con->consultaRetorno($sql);
		$row = mysqli_fetch_assoc($datos);
		return $row;
	}


}

?>