<?php namespace Controllers;
	
	use Models\Peliculas as Peliculas;
	use Models\Imagenes as Imagenes;

	class peliculasController{

		private $pelicula;
		private $imagen;
		private $galeria;

		public function __construct(){
			$this->pelicula = new Peliculas();
			$this->imagen = new Imagenes(); 
		}

		public function index(){
			$datos = $this->pelicula->listar();
			return $datos;
		}

		public function agregar(){
			if (!$_POST) {
				$datos = $this->imagen->listar();
				return $datos;	
			}else{
				
				$permitidos = array("image/jpeg", "image/png", "image/gif", "image/jpg");
				$limite = 2000;
				if (in_array($_FILES['portada']['type'], $permitidos) && $_FILES['portada']['size'] <= $limite * 1024) {

					$nombre = date('is').$_FILES['portada']['name'];
					$ruta = "Views".DS."template".DS."imagenes".DS."portadas".DS.$nombre;
					$fecha = date('d-m-y');

					move_uploaded_file($_FILES['portada']['tmp_name'], $ruta);

					$this->pelicula->set($_POST['codigo'], "codigo");
					$this->pelicula->set($_POST['nombre'], "nombre");
					$this->pelicula->set($_POST['descripcion'], "descripcion");
					$this->pelicula->set($nombre, "portada");
					$this->pelicula->set($fecha, "fecha");
					$this->pelicula->add();

					header("Location:".URL."peliculas");
				}
			}
		}

		public function editar($id){

			if (!$_POST) {
				$this->pelicula->set($id[0], "id");
				$datos = $this->pelicula->view();
				return $datos;	

			}else{
				
				$this->pelicula->set($_POST['id'], "id");
				$this->pelicula->set($_POST['codigo'], "codigo");
				$this->pelicula->set($_POST['nombre'], "nombre");
				$this->pelicula->set($_POST['descripcion'], "descripcion");
				$this->pelicula->edit();

				$permitidos = array("image/jpeg", "image/png", "image/gif", "image/jpg");
				$limite = 7000;

				if (in_array($_FILES['imagen1']['type'], $permitidos) && $_FILES['imagen1']['size'] <= $limite * 1024) {

					$nombre = date('is').$_FILES['imagen1']['name'];
					$ruta = "Views".DS."template".DS."imagenes".DS."portadas".DS."storages".DS.$nombre;
					$fecha = date('d-m-y');
					

					move_uploaded_file($_FILES['imagen1']['tmp_name'], $ruta);

					$this->imagen->set($_POST['id'], "id_pelicula");
					$this->imagen->set($nombre, "img");
					$this->imagen->set($ruta, "ruta");
					
					$this->imagen->add();
				}

				if (in_array($_FILES['imagen2']['type'], $permitidos) && $_FILES['imagen2']['size'] <= $limite * 1024) {

					$nombre = date('is').$_FILES['imagen2']['name'];
					$ruta = "Views".DS."template".DS."imagenes".DS."portadas".DS."storages".DS.$nombre;
					$fecha = date('d-m-y');
				

					move_uploaded_file($_FILES['imagen2']['tmp_name'], $ruta);

					$this->imagen->set($_POST['id'], "id_pelicula");
					$this->imagen->set($nombre, "img");
					$this->imagen->set($ruta, "ruta");
					
					$this->imagen->add();
				}

				if (in_array($_FILES['imagen3']['type'], $permitidos) && $_FILES['imagen3']['size'] <= $limite * 1024) {

					$nombre = date('is').$_FILES['imagen3']['name'];
					$ruta = "Views".DS."template".DS."imagenes".DS."portadas".DS."storages".DS.$nombre;
					$fecha = date('d-m-y');

					move_uploaded_file($_FILES['imagen3']['tmp_name'], $ruta);

					$this->imagen->set($_POST['id'], "id_pelicula");
					$this->imagen->set($nombre, "img");
					$this->imagen->set($ruta, "ruta");
					
					$this->imagen->add(); 
				}

			}
				header("Location:".URL."peliculas");
				
		}

		public function ver($id){
			$ide = $id[0];
			$this->pelicula->set($ide, "id");
			$this->imagen->set($ide, "id_pelicula");
			$datos= array('peliculas' => $this->pelicula->view(), 'galeria' => $this->imagen->galeria());

			return $datos;
		}

		public function getGaleria(){
			return $this->galeria;
		}

		public function eliminar($id){
			$this->pelicula->set($id[0], "id");
			$this->pelicula->detele();
			header("Location: ".URL."peliculas");
		}
	}

	$peliculas = new peliculasController();
?>

