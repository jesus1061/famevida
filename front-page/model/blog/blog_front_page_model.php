<?php
class Blog_front_page_model{
	public function obtener_conexion(){
		$dsn = 'mysql:dbname=famevida;charset=utf8;host=127.0.0.1;';
		$usuario = 'root';
		$contrasena = '';

		try {
			$gbd = new PDO($dsn, $usuario, $contrasena);
			return $gbd;

		} catch (PDOException $e) {
			echo 'Falló la conexión: ' . $e->getMessage();
		}
	}
	public function listar_blog_front_page_model(){


		$conexion = new Blog_front_page_model();
		$pdo = $conexion -> obtener_conexion();


		$sql = $pdo->prepare('SELECT * FROM blog');
		$sql->execute();

		$resultado = $sql->fetchAll();

		return $resultado;

	}

	public function listar_programas_front_page_model(){

		$conexion = new Blog_front_page_model();
		$pdo = $conexion -> obtener_conexion();


		$sql = $pdo->prepare('SELECT * FROM programas');

		
		$sql->execute();

		$resultado = $sql->fetchAll();

		return $resultado;
	}

	public function listar_talento_front_page_model(){

		$conexion = new Blog_front_page_model();
		$pdo = $conexion -> obtener_conexion();


		$sql = $pdo->prepare('SELECT * FROM personal');

		
		$sql->execute();

		$resultado = $sql->fetchAll();

		return $resultado;
	}

	public function slider_front_page_model(){
		$conexion = new Blog_front_page_model();
		$pdo = $conexion -> obtener_conexion();


		$sql = $pdo->prepare('SELECT * FROM banners');

		
		$sql->execute();

		$resultado = $sql->fetchAll();

		return $resultado;

	}

	public function mostrar_albumnes_fotograficos_front_page_model(){
		$conexion = new Blog_front_page_model();
		$pdo = $conexion -> obtener_conexion();


		$sql = $pdo->prepare('SELECT * FROM albumnes');

		
		$sql->execute();

		$resultado = $sql->fetchAll();

		return $resultado;
	}


	public function listar_fotos_galeria_album_front_page_model($album_id){
		$conexion = new Blog_front_page_model();
		$pdo = $conexion -> obtener_conexion();


		$sql = $pdo->prepare('SELECT * FROM contenido_galeria WHERE album_id = :id');

		$sql->bindParam(':id', $album_id);

		
		$sql->execute();

		$resultado = $sql->fetchAll();

		return $resultado;
	}

	public function listar_blog_unico_front_page_model($publicacion){
		$conexion = new Blog_front_page_model();
		$pdo = $conexion -> obtener_conexion();


		$sql = $pdo->prepare('SELECT * FROM blog WHERE blog_id = :id');

		$sql->bindParam(':id', $publicacion);

		
		$sql->execute();

		$resultado = $sql->fetchAll();

		return $resultado;	
	}


	public function listar_programa_unico_front_page_model($programa){
		$conexion = new Blog_front_page_model();
		$pdo = $conexion -> obtener_conexion();


		$sql = $pdo->prepare('SELECT * FROM programas WHERE programa_id = :id');

		$sql->bindParam(':id', $programa);

		
		$sql->execute();

		$resultado = $sql->fetchAll();

		return $resultado;		
	}
}
?>