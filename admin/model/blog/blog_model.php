<?php
class Blog_model{
	
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

	/*Modelo insert*/
	public function crear_blog_model ($arg_titulo_pub , $arg_contenido_pub , $arg_autor_pub , $arg_portada_pub ){
		//echo $arg_titulo_pub."<br>".$arg_contenido_pub."<br>".$arg_autor_pub."<br>".$arg_fecha."<br>".$arg_portada_pub;
		//echo $arg_portada_pub;
		$ruta_acceso_galeria = $arg_portada_pub;
		$conexion = new Blog_model();
		$pdo = $conexion -> obtener_conexion();


		$sql = $pdo->prepare('INSERT INTO blog (titulo_pub , contenido_pub , autor_pub , fecha_pub , portada_pub ) VALUES 

			(:titulo, :contenido , :autor , now() , :portada )');


		$sql->bindParam(':titulo', $arg_titulo_pub);
		$sql->bindParam(':contenido', $arg_contenido_pub);
		$sql->bindParam(':autor', $arg_autor_pub);

		
		$sql->bindParam(':portada', $ruta_acceso_galeria);
		$sql->execute();
		echo "<script>
		window.location.href = '../../view/partes/index.php';
		</script>";
		echo "<script>
		alert('Publicación creada con exito');
		</script>";

	}

	public function crear_blog_model_url ($titulo_pub , $contenido_pub , $autor_pub  , $portada_pub){
		echo $titulo_pub . $contenido_pub . $autor_pub  . $portada_pub;
		//echo $arg_titulo_pub."<br>".$arg_contenido_pub."<br>".$arg_autor_pub."<br>".$arg_fecha."<br>".$arg_portada_pub;
		//echo $arg_portada_pub;
		$tipo = "imagen_externa";
		$conexion = new Blog_model();
		$pdo = $conexion -> obtener_conexion();


		$sql = $pdo->prepare('INSERT INTO blog (titulo_pub , contenido_pub , autor_pub , fecha_pub , portada_pub,tipo_portada) VALUES 

			(:titulo, :contenido , :autor , now()  , :url, :tipo_portada)');


		$sql->bindParam(':titulo', $titulo_pub);
		$sql->bindParam(':contenido', $contenido_pub);
		$sql->bindParam(':autor', $autor_pub);
		$sql->bindParam(':tipo_portada', $tipo);
		$sql->bindParam(':url', $portada_pub);
		
		
		$sql->execute();
		echo "<script>
		alert('Publicación creada con exito');
		</script>";
		echo '<script>
		window.location.href = "../../view/partes/index.php";
		</script>';
	}

	public function subir_archivo_model ($arg_ruta ,$arg_nombre_archivo, $arg_tipo_archivo , $arg_peso_archivo , $arg_archivo){

		if($arg_archivo == 1){
			$archivo_final = "<img src='".$arg_ruta."' class='img-archivo'></img>";
		}
		echo "<br><br>".$arg_ruta."<br><br>".$arg_nombre_archivo."<br><br>".$arg_tipo_archivo."<br><br>".$arg_peso_archivo."<br><br>".$arg_archivo."<br><br>".$archivo_final;
//echo $arg_ruta;
		$procedencia = "imagen_interna";
		
		
		$conexion = new Blog_model();
		$pdo = $conexion -> obtener_conexion();


		$sql = $pdo->prepare('INSERT INTO multimedia (nombre_archivo, tipo_archivo , archivo , peso_archivo , ruta_basica , procedencia) VALUES 

			(:arg_nombre_archivo  ,  :extencion,  :arg_archivo_ruta , :arg_peso_archivo , :arg_ruta_basica , :arg_procedencia )');
		$sql->bindParam(':arg_nombre_archivo', $arg_nombre_archivo);

		$sql->bindParam(':extencion', $arg_tipo_archivo);

		$sql->bindParam(':arg_archivo_ruta', $archivo_final);
		$sql->bindParam(':arg_peso_archivo', $arg_peso_archivo);
		$sql->bindParam(':arg_ruta_basica', $arg_ruta);
		$sql->bindParam(':arg_procedencia', $procedencia);
		

		$sql->execute();
		echo "<script>
		alert('Archivo subido con exito');
		</script>";
		echo '<script>
		window.location.href = "../../view/partes/index.php";
		</script>';
		
		
		
	}

	public function subir_url_model ($arg_nombre_archivo, $arg_url){
		//echo $arg_titulo_pub."<br>".$arg_contenido_pub."<br>".$arg_autor_pub."<br>".$arg_fecha."<br>".$arg_portada_pub;

		$conexion = new Blog_model();
		$pdo = $conexion -> obtener_conexion();

		$archivo_final = "<img src='".$arg_url."' class='img-archivo'></img>";
		$peso= "null";
		$tipo ="null";

		$procedencia = "imagen_externa";

		
		
		
		$sql = $pdo->prepare('INSERT INTO multimedia (nombre_archivo, tipo_archivo , archivo , peso_archivo , ruta_basica , procedencia) VALUES 

			(:arg_nombre_archivo  ,  :tipo,  :arg_archivo_ruta , :arg_peso_archivo , :arg_ruta_basica , :arg_procedencia)');

		$sql->bindParam(':tipo', $tipo);
		$sql->bindParam(':arg_nombre_archivo', $arg_nombre_archivo);
		$sql->bindParam(':arg_archivo_ruta', $archivo_final);
		$sql->bindParam(':arg_peso_archivo', $peso);
		$sql->bindParam(':arg_ruta_basica', $arg_url);
		$sql->bindParam(':arg_procedencia', $procedencia);
		

		echo $sql->execute();
		echo "<script>
		alert('Archivo subido con exito');
		</script>";
		echo '<script>
		window.location.href = "../../view/partes/index.php";
		</script>';
		
		
	}

	public function subir_url_video_model ($arg_nombre_archivo, $arg_url){
		

		$conexion = new Blog_model();
		$pdo = $conexion -> obtener_conexion();

		$archivo_final = $arg_url;
		$peso= "null";
		$tipo ="mp4";
		$procedencia = "video_externo";

		
		
		
		$sql = $pdo->prepare('INSERT INTO multimedia (nombre_archivo, tipo_archivo , archivo , peso_archivo , ruta_basica , procedencia) VALUES 

			(:arg_nombre_archivo  ,  :tipo,  :arg_archivo_ruta , :arg_peso_archivo , :arg_ruta_basica , :arg_procedencia)');

		$sql->bindParam(':tipo', $tipo);
		$sql->bindParam(':arg_nombre_archivo', $arg_nombre_archivo);
		$sql->bindParam(':arg_archivo_ruta', $archivo_final);
		$sql->bindParam(':arg_peso_archivo', $peso);
		$sql->bindParam(':arg_ruta_basica', $arg_url);
		$sql->bindParam(':arg_procedencia', $procedencia);
		

		$sql->execute();
		echo "<script>
		alert('Archivo subido con exito');
		</script>";
		echo '<script>
		window.location.href = "../../view/partes/index.php";
		</script>';
		
		
	}

	public function crear_programa_model($titulo_programa , $contenido_programa , $portada_programa){
		$conexion = new Blog_model();
		$pdo = $conexion -> obtener_conexion();	
		$sql = $pdo->prepare('INSERT INTO programas (titulo_programa, contenido_programa , portada_programa ) VALUES 

			(:titulo ,  :contenido, :portada)');

		$sql->bindParam(':titulo', $titulo_programa);
		$sql->bindParam(':contenido', $contenido_programa);
		
		$sql->bindParam(':portada', $portada_programa);
		$sql->execute();
		echo "<script>
		alert('Programa creado con exito');
		</script>";
		echo '<script>
		window.location.href = "../../view/partes/index.php";
		</script>';
		
	}

	public function listar_programa_model(){
		$conexion = new Blog_model();
		$pdo = $conexion -> obtener_conexion();


		$sql = $pdo->prepare('SELECT * from programas');

		
		$sql->execute();

		$resultado = $sql->fetchAll();

		return $resultado;

	}

	public function crear_talento_model($personal_nombre , $personal_perfil_profesional , $personal_foto , $link_facebook , $link_instagram , $link_twitter){

		$conexion = new Blog_model();
		$pdo = $conexion -> obtener_conexion();	
		$sql = $pdo->prepare('INSERT INTO personal (personal_nombre, personal_perfil ,personal_foto , link_facebook , link_instagram , link_twitter ) VALUES 

			(:talento ,  :perfil, :foto , :facebook , :instagram , :twitter)');

		$sql->bindParam(':talento', $personal_nombre);
		$sql->bindParam(':perfil', $personal_perfil_profesional);
		
		$sql->bindParam(':foto', $personal_foto);
		$sql->bindParam(':facebook', $link_facebook);
		$sql->bindParam(':instagram', $link_instagram);
		$sql->bindParam(':twitter', $link_twitter);
		$sql->execute();
		echo "<script>
		alert('Personal creado con exito');
		</script>";
		echo '<script>
		window.location.href = "../../view/partes/index.php";
		</script>';
	}

	public function listar_talento_model(){
		$conexion = new Blog_model();
		$pdo = $conexion -> obtener_conexion();


		$sql = $pdo->prepare('SELECT * from personal');

		
		$sql->execute();

		$resultado = $sql->fetchAll();

		return $resultado;	
	}

	public function crear_elemento_slider_model($banner_nombre , $banner_imagen){

		$conexion = new Blog_model();
		$pdo = $conexion -> obtener_conexion();	
		$sql = $pdo->prepare('INSERT INTO banners (banner_nombre,banner_imagen) VALUES 

			(:nombre_banner ,  :banner)');

		$sql->bindParam(':nombre_banner', $banner_nombre);
		
		
		$sql->bindParam(':banner',$banner_imagen);
		$sql->execute();
		echo "<script>
		alert('Banner del slider creado con exito');
		</script>";
		echo '<script>
		window.location.href = "../../view/partes/index.php";
		</script>';

	}

	public function crear_album_model($album_titulo , $album_portada_principal){

		$conexion = new Blog_model();
		$pdo = $conexion -> obtener_conexion();	
		$sql = $pdo->prepare('INSERT INTO albumnes (album_titulo, album_portada_principal) VALUES 

			(:titulo ,  :portada)');

		$sql->bindParam(':titulo', $album_titulo);
		
		
		$sql->bindParam(':portada',$album_portada_principal);
		$sql->execute();
		echo "<script>
		alert('Albúm creado con exito');
		</script>";
		echo '<script>
		window.location.href = "../../view/partes/index.php";
		</script>';

	}

	/*Modelo select*/

	public function listar_blog_model (){
		//echo $arg_titulo_pub."<br>".$arg_contenido_pub."<br>".$arg_autor_pub."<br>".$arg_fecha."<br>".$arg_portada_pub;

		$conexion = new Blog_model();
		$pdo = $conexion -> obtener_conexion();


		$sql = $pdo->prepare('SELECT * FROM blog');
		$sql->execute();

		$resultado = $sql->fetchAll();

		return $resultado;
		
		
	}

	public function listar_archivos_model (){
		

		$conexion = new Blog_model();
		$pdo = $conexion -> obtener_conexion();


		$sql = $pdo->prepare('SELECT * FROM multimedia');
		$sql->execute();

		$resultado = $sql->fetchAll();

		return $resultado;
		
		
	}

	public function consultar_archivo_multimedia_model($arg_archivo_multimedia){

		$conexion = new Blog_model();
		$pdo = $conexion -> obtener_conexion();


		$sql = $pdo->prepare('SELECT archivo FROM multimedia WHERE id_archivo = :id');

		$sql->bindParam(':id', $arg_archivo_multimedia);
		$sql->execute();

		$resultado = $sql->fetchAll();

		return $resultado;

	}

	public function listar_elemento_slider_model(){
		$conexion = new Blog_model();
		$pdo = $conexion -> obtener_conexion();


		$sql = $pdo->prepare('SELECT * FROM banners');


		$sql->execute();

		$resultado = $sql->fetchAll();

		return $resultado;
	}

	public function listar_elemento_slider_unico_model($banner_id){
		$conexion = new Blog_model();
		$pdo = $conexion -> obtener_conexion();


		$sql = $pdo->prepare('SELECT * FROM banners WHERE banner_id = :id');
		$sql->bindParam(':id', $banner_id);

		$sql->execute();

		$resultado = $sql->fetchAll();

		return $resultado;
	}


	public function listar_albumnes_model(){
		$conexion = new Blog_model();
		$pdo = $conexion -> obtener_conexion();


		$sql = $pdo->prepare('SELECT * FROM albumnes');


		$sql->execute();

		$resultado = $sql->fetchAll();

		return $resultado;
	}

	public function listar_contenido_album_model($album){
		$conexion = new Blog_model();
		$pdo = $conexion -> obtener_conexion();


		$sql = $pdo->prepare('SELECT * FROM contenido_galeria WHERE album_id = :id');

		$sql->bindParam(':id', $album);
		$sql->execute();

		$resultado = $sql->fetchAll();

		return $resultado;

	}

	public function listar_titulo_album_model($album){
		$conexion = new Blog_model();
		$pdo = $conexion -> obtener_conexion();


		$sql = $pdo->prepare('SELECT album_titulo FROM albumnes WHERE album_id = :id');

		$sql->bindParam(':id', $album);
		$sql->execute();

		$resultado = $sql->fetchAll();

		return $resultado;
	}
	

	public function listar_elementos_galeria_model($contenido_galeria_nombre , $album_id , $contenido_galeria_foto){

		$conexion = new Blog_model();
		$pdo = $conexion -> obtener_conexion();	
		$sql = $pdo->prepare('INSERT INTO contenido_galeria (contenido_galeria_nombre, album_id , contenido_galeria_foto) VALUES 

			(:nombre_elemento,  :album , :elemento)');

		
		
		
		$sql->bindParam(':nombre_elemento',$contenido_galeria_nombre);
		$sql->bindParam(':album',$album_id);
		$sql->bindParam(':elemento',$contenido_galeria_foto);
		$sql->execute();
		echo "<script>
		alert('Elemento creado con exito');
		</script>";
		echo '<script>
		window.location.href = "../../view/partes/index.php";
		</script>';

	}

	/*Modelo_delete*/

	public function borrar_archivos_model($arg_archivo){
		$conexion = new Blog_model();
		$pdo = $conexion -> obtener_conexion();


		$sql = $pdo->prepare('DELETE FROM multimedia  WHERE id_archivo = :id');

		$sql->bindParam(':id', $arg_archivo);
		$sql->execute();
		echo "<script>
		alert('Archivo Eliminado con exito');
		</script>";
		

		$instancia_clase = new Blog_model();

		$consultar_archivo_eliminado = $instancia_clase -> eliminar_archivo_sistema($arg_archivo);
		foreach($consultar_archivo_eliminado as $archivo){
			echo $archivo['archivo'];
		}
		echo '<script>
		$(".david .img-archivo").each(function(){
			var ruta = $(this).attr("src");
			$(".archivo_eliminado").val(ruta);
			$(".borrar").click();
			});
			</script>';

			echo '<form action="../../controller/enrutador/route.php" method="post" style="display:none"><input type="text" name="tipo_peticion" value="17"><input class="archivo_eliminado" name="archivo"></input><input class="borrar" type="submit"></form>';





		}

		public function eliminar_archivo_sistema($arg_archivo){


			$conexion = new Blog_model();
			$pdo = $conexion -> obtener_conexion();


			$sql = $pdo->prepare('SELECT * FROM multimedia where id_archivo = :id');
			$sql->bindParam(':id', $arg_archivo);
			$sql->execute();

			$resultado = $sql->fetchAll();

			return $resultado;
		}

		/*Modelo update*/

		public function cambiar_elemento_slider_model($banner_id , $banner_nombre , $banner_imagen){
			$conexion = new Blog_model();
			$pdo = $conexion -> obtener_conexion();	
			$sql = $pdo->prepare('UPDATE banners SET banner_nombre= :nombre_banner , banner_imagen= :banner WHERE banner_id = :id');
			

			$sql->bindParam(':id',$banner_id);

			$sql->bindParam(':nombre_banner', $banner_nombre);


			$sql->bindParam(':banner',$banner_imagen);
			$sql->execute();
			echo "<script>
			alert('Elemento modificado  con exito');
			</script>";
			echo '<script>
			window.location.href = "../../view/partes/index.php";
			</script>';
		}

		public function eliminar_elemento_slider_model($banner){
			$conexion = new Blog_model();
			$pdo = $conexion -> obtener_conexion();


			$sql = $pdo->prepare('DELETE FROM banners  WHERE banner_id = :id');

			$sql->bindParam(':id', $banner);
			echo $sql->execute();
			echo "<script>
			alert('Elemento eliminado  con exito');
			</script>";
			echo '<script>
			window.location.href = "../../view/partes/index.php";
			</script>';
		}

		public function editar_album_unico_model($album_id){
			$conexion = new Blog_model();
			$pdo = $conexion -> obtener_conexion();


			$sql = $pdo->prepare('SELECT * FROM albumnes where album_id = :id');
			$sql->bindParam(':id', $album_id);
			$sql->execute();

			$resultado = $sql->fetchAll();

			return $resultado;
		}

		public function editar_album_model_unico($album_id , $album_titulo , $album_portada_principal){
			$conexion = new Blog_model();
			$pdo = $conexion -> obtener_conexion();	
			$sql = $pdo->prepare('UPDATE albumnes SET album_titulo= :album_titulo , album_portada_principal= :album_portada_principal WHERE album_id = :id');
			

			$sql->bindParam(':id',$album_id);

			$sql->bindParam(':album_titulo', $album_titulo);


			$sql->bindParam(':album_portada_principal',$album_portada_principal);
			echo $sql->execute();
			echo "<script>
			alert('Elemento editado con exito');
			</script>";
			echo '<script>
			window.location.href = "../../view/partes/index.php";
			</script>';

		}

		public function  consultar_elemento_galeria_model_unico($codigo_galeria_id){
			$conexion = new Blog_model();
			$pdo = $conexion -> obtener_conexion();


			$sql = $pdo->prepare('SELECT * FROM contenido_galeria where contenido_galeria_id = :id');
			$sql->bindParam(':id', $codigo_galeria_id);
			$sql->execute();

			$resultado = $sql->fetchAll();

			return $resultado;
		}

		public function  editar_elemento_galeria_model_unico($codigo_galeria_id , $contenido_galeria_nombre , $album_id , $contenido_galeria_foto){
			$conexion = new Blog_model();
			$pdo = $conexion -> obtener_conexion();	
			$sql = $pdo->prepare('UPDATE contenido_galeria SET contenido_galeria_nombre= :contenido_galeria_nombre , album_id= :album_id , contenido_galeria_foto = :contenido_galeria_foto WHERE contenido_galeria_id = :id');
			

			$sql->bindParam(':id',$codigo_galeria_id);

			$sql->bindParam(':contenido_galeria_nombre', $contenido_galeria_nombre);


			$sql->bindParam(':album_id',$album_id);
			$sql->bindParam(':contenido_galeria_foto',$contenido_galeria_foto);
			$sql->execute();
			echo "<script>
			alert('Elemento modificado con exito');
			</script>";
			echo '<script>
			window.location.href = "../../view/partes/index.php";
			</script>';
		}


		public function eliminar_contenido_album_model($album){
			$conexion = new Blog_model();
			$pdo = $conexion -> obtener_conexion();


			$sql = $pdo->prepare('DELETE FROM contenido_galeria WHERE album_id = :id');

			$sql->bindParam(':id', $album);
			$sql->execute();
			$instancia = new Blog_model();
			$peticion_borrar_album = $instancia -> borrar_album_model($album);

		}

		public function borrar_album_model($album){
			$conexion = new Blog_model();
			$pdo = $conexion -> obtener_conexion();


			$sql = $pdo->prepare('DELETE FROM albumnes WHERE album_id = :id');

			$sql->bindParam(':id', $album);
			$sql->execute();
			echo "<script>
			alert('Elemento eliminado con exito');
			</script>";
			echo '<script>
			window.location.href = "../../view/partes/index.php";
			</script>';
		}

		public function eliminar_elemento_galeria_model($codigo_galeria_id){
			$conexion = new Blog_model();
			$pdo = $conexion -> obtener_conexion();


			$sql = $pdo->prepare('DELETE FROM contenido_galeria WHERE contenido_galeria_id = :id');

			$sql->bindParam(':id', $codigo_galeria_id);
			$sql->execute();
			echo "<script>
			alert('Elemento eliminado con exito');
			</script>";
			echo '<script>
			window.location.href = "../../view/partes/index.php";
			</script>';
		}

		public function consultar_blog_unico_model($blog_id){
			$conexion = new Blog_model();
			$pdo = $conexion -> obtener_conexion();


			$sql = $pdo->prepare('SELECT * FROM blog where blog_id = :id');
			$sql->bindParam(':id', $blog_id);
			$sql->execute();

			$resultado = $sql->fetchAll();

			return $resultado;
		}

		public function editar_blog_model($blog_id,$titulo_pub ,$contenido_pub , $autor_pub , $portada_pub){
			$conexion = new Blog_model();
			$pdo = $conexion -> obtener_conexion();	
			$sql = $pdo->prepare('UPDATE blog SET titulo_pub= :titulo_pub , contenido_pub = :contenido_pub ,  autor_pub= :autor_pub , portada_pub = :portada_pub WHERE blog_id = :id');
			

			$sql->bindParam(':id',$blog_id);

			$sql->bindParam(':titulo_pub', $titulo_pub);


			$sql->bindParam(':contenido_pub',$contenido_pub);
			$sql->bindParam(':autor_pub',$autor_pub);
			$sql->bindParam(':portada_pub',$portada_pub);
			$sql->execute();	
			echo "<script>
			alert('Elemento modificado con exito');
			</script>";
			echo '<script>
			window.location.href = "../../view/partes/index.php";
			</script>';
		}

		public function consultar_programa_unico_model($programa_id){
			$conexion = new Blog_model();
			$pdo = $conexion -> obtener_conexion();


			$sql = $pdo->prepare('SELECT * FROM programas where programa_id = :id');
			$sql->bindParam(':id', $programa_id);
			$sql->execute();

			$resultado = $sql->fetchAll();

			return $resultado;	
		}

		public function editar_programa_unico_model($programa_id , $titulo_programa , $contenido_programa , $portada_programa){
			$conexion = new Blog_model();
			$pdo = $conexion -> obtener_conexion();	
			$sql = $pdo->prepare('UPDATE programas SET titulo_programa= :titulo_programa , contenido_programa = :contenido_programa , portada_programa = :portada_programa WHERE programa_id = :id');
			

			$sql->bindParam(':id',$programa_id);

			$sql->bindParam(':titulo_programa', $titulo_programa);


			$sql->bindParam(':contenido_programa',$contenido_programa);
			
			$sql->bindParam(':portada_programa',$portada_programa);
			$sql->execute();	
			echo "<script>
			alert('Elemento modificado con exito');
			</script>";
			echo '<script>
			window.location.href = "../../view/partes/index.php";
			</script>';
		}

		public function eliminar_programa_model($programa_id){
			$conexion = new Blog_model();
			$pdo = $conexion -> obtener_conexion();


			$sql = $pdo->prepare('DELETE FROM programas WHERE programa_id = :id');

			$sql->bindParam(':id', $programa_id);
			$sql->execute();
			echo "<script>
			alert('Elemento eliminado con exito');
			</script>";
			echo '<script>
			window.location.href = "../../view/partes/index.php";
			</script>';
		}

		public function consultar_personal_unico_model($personal_id){
			$conexion = new Blog_model();
			$pdo = $conexion -> obtener_conexion();


			$sql = $pdo->prepare('SELECT * FROM personal where personal_id = :id');
			$sql->bindParam(':id', $personal_id);
			$sql->execute();

			$resultado = $sql->fetchAll();

			return $resultado;	
		}


		public function editar_talento_model($personal_id , $personal_nombre , $personal_perfil , $personal_foto ,  $link_facebook , $link_instagram , $link_twitter){
			$conexion = new Blog_model();
			$pdo = $conexion -> obtener_conexion();	
			$sql = $pdo->prepare('UPDATE personal SET personal_nombre= :personal_nombre , personal_perfil = :personal_perfil , personal_foto = :personal_foto ,  link_facebook = :link_facebook , link_instagram = :link_instagram , link_twitter = :link_twitter   WHERE personal_id = :id');
			

			$sql->bindParam(':id',$personal_id);

			$sql->bindParam(':personal_nombre', $personal_nombre);


			$sql->bindParam(':personal_perfil',$personal_perfil);
			$sql->bindParam(':personal_foto',$personal_foto);
			
			$sql->bindParam(':link_facebook',$link_facebook);
			$sql->bindParam(':link_instagram',$link_instagram);
			$sql->bindParam(':link_twitter',$link_twitter);
			$sql->execute();
			echo "<script>
			alert('Elemento modificado con exito');
			</script>";
			echo '<script>
			window.location.href = "../../view/partes/index.php";
			</script>';	
		}

		public function borrar_talento_model($talento_id){
			$conexion = new Blog_model();
			$pdo = $conexion -> obtener_conexion();


			$sql = $pdo->prepare('DELETE FROM personal WHERE personal_id = :id');

			$sql->bindParam(':id', $talento_id);
			echo $sql->execute();
			echo "<script>
			alert('Elemento eliminado con exito');
			</script>";
			echo '<script>
			window.location.href = "../../view/partes/index.php";
			</script>';
		}


		public function consultar_usuario_login_model($arg_usuario , $arg_clave){
			$conexion = new Blog_model();
			$pdo = $conexion -> obtener_conexion();


			$sql = $pdo->prepare('SELECT * FROM usuarios_administradores where usuario = :usuario AND clave = :clave ');
			$sql->bindParam(':usuario', $arg_usuario);
			$sql->bindParam(':clave', $arg_clave);
			$sql->execute();

			$resultado = $sql->fetchAll();

			return $resultado;	
		}


		public function crear_registro_contacto_model($usuario_contacto_nombre ,$telefono,$usuario_contacto_correo , $usuario_contacto_mensaje){
			
			$conexion = new Blog_model();
			$pdo = $conexion -> obtener_conexion();


			$sql = $pdo->prepare('INSERT INTO usuario_contacto (usuario_contacto_nombre, telefono, usuario_contacto_correo , usuario_contacto_mensaje) VALUES 

				(:usuario_contacto_nombre, :telefono , :usuario_contacto_correo , :usuario_contacto_mensaje)');


			$sql->bindParam(':usuario_contacto_nombre', $usuario_contacto_nombre);
				$sql->bindParam(':telefono', $telefono);
			$sql->bindParam(':usuario_contacto_correo', $usuario_contacto_correo);
			$sql->bindParam(':usuario_contacto_mensaje', $usuario_contacto_mensaje);


			
			$sql->execute();
			echo "<script>
			alert('Su mensaje ha sido enviado');
			</script>";
			echo '<script>
			window.location.href = "../../../";
			</script>';
		}

		public function eliminar_blog_model($blog){
			$conexion = new Blog_model();
			$pdo = $conexion -> obtener_conexion();


			$sql = $pdo->prepare('DELETE FROM blog WHERE blog_id = :id');

			$sql->bindParam(':id', $blog);
			$sql->execute();
			echo "<script>
			alert('Elemento eliminado con exito');
			</script>";
			echo '<script>
			window.location.href = "../../view/partes/index.php";
			</script>';
		}

		public function listar_contactos_model(){
			$conexion = new Blog_model();
			$pdo = $conexion -> obtener_conexion();


			$sql = $pdo->prepare('SELECT * FROM usuario_contacto');
			
			$sql->execute();

			$resultado = $sql->fetchAll();

			return $resultado;		
		}


	}
	?>