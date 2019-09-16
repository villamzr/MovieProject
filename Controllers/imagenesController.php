<?php namespace Controllers;

	use Models\Imagenes as Imagen;
	use Controllers\peliculasController as Pelicula;

	class imagenesController{

		private $imagenes;
		private $pelicula;

		public function __construct(){
			$this->imagenes = new Imagen();
			$this->pelicula = new Pelicula();
		}

		public function index(){
			if($_POST){

				$datos = $this->imagenes->listar();
				mysqli_close();
				
			}else{

				$datos = $this->pelicula->index();
				mysqli_close();

			}

			return $datos;
			
		}

		public function agregar(){
			if ($_POST) {
				$this->imagenes->set($_POST['nombre'], "nombre");
				$this->imagenes->add();
				mysqli_close();
				header("location: ".URL."imagenes");
			}
		}

		public function editar($id){
			if ($_POST) {
				$this->imagenes->set($_POST['id'], "id");
				$this->imagenes->set($_POST['nombre'], "nombre");
				$this->imagenes->edit();
				mysqli_close();

				header("location: ".URL."imagenes");
			}else{
				$this->imagenes->set($id[0], "id");
				$datos = $this->imagenes->view();
				return $datos;
			}
		}

		public function eliminar($id){
			$this->imagenes->set($id[0], "id");
			$this->imagenes->delete();
			mysqli_close();
			header("location: ".URL."imagenes");

		}

	}
