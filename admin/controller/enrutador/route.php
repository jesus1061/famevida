<?php
include_once "../blog/blog_controller.php";
session_start();
extract($_POST);
//print_r($_POST);
$peticion = $_POST['tipo_peticion'];
$tipo_portada = "archivo_interno";


/*Peticiones insert*/
if($peticion == 1){
	$instancia = new Blog_controller();
	

	$peticion_controller = $instancia -> crear_blog_controller($titulo_pub , $contenido_pub , $autor_pub , $portada_pub );

}

/*Peticiones select*/

if($peticion == 2){
	$instancia = new Blog_controller();
	$peticion_controller = $instancia -> subir_archivo_controller();

}


if($peticion == 3){
	
	$dir_subida = '../../images/multimedia/';
	$fichero_subido = $dir_subida . basename($_FILES['fileToUpload']['name']);
	


	

	
	if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $fichero_subido)) {
		echo "<script>
		alert('Archivo subido con exito');
		</script>";
		echo '<script>
		window.location.href = "../../view/partes/index.php";
		</script>';
		$_SESSION['foco'] = 1;
		
		
		

		$directorio_imagenes = '../../images/multimedia/';
		if ($directorio = dir($directorio_imagenes))
		{
			while ($fichero = $directorio->read())
			{
				$info_fichero = pathinfo($fichero);

				if (isset($info_fichero['extension']) && $info_fichero['extension']!=strtolower($info_fichero['extension']))
				{
					$info_fichero['basename_we'] = substr($info_fichero['basename'], 0, -(strlen($info_fichero['extension']) + ($info_fichero['extension'] == '' ? 0 : 1)));
					rename(
						$directorio_imagenes . $info_fichero['basename'],
						$directorio_imagenes . $info_fichero['basename_we'] . '.' . strtolower($info_fichero['extension'])
					);
					

				}
			}
		}
		

		$nombreDelArchivo = $fichero_subido;
		$extension = pathinfo($nombreDelArchivo, PATHINFO_EXTENSION);
		$nombre_solo = pathinfo($nombreDelArchivo, PATHINFO_FILENAME);

		$extencion_convertida = strtolower($extension);

		$ruta_final_Archivo = $dir_subida.$nombre_solo.".".$extencion_convertida;

		$nombre_fichero = $ruta_final_Archivo;
		$peso_archivo = filesize($nombre_fichero) . ' bytes';

		

		$instancia = new Blog_controller();
		
		$peticion_controller = $instancia -> subir_archivo_controller($nombre_archivo,$ruta_final_Archivo , $extencion_convertida , $peso_archivo, $archivo);

	} else {
		echo "<script>
		alert('Error al subir el archivo');
		</script>";
	}



	

}


if($peticion == 4){
	$instancia = new Blog_controller();
	$peticion_controller = $instancia -> listar_archivos_controller();

}

if($peticion == 5){
	$instancia = new Blog_controller();
	$peticion_controller = $instancia -> borrar_archivos_controller($archivo);


	

}

if($peticion == 6){
	$instancia = new Blog_controller();
	
	$peticion_controller = $instancia -> subir_url_controller($nombre_archivo , $ruta_archivo);

}

if($peticion == 7){
	$instancia = new Blog_controller();


	$peticion_controller = $instancia -> crear_blog_controller_url($titulo_pub , $contenido_pub , $autor_pub  , $portada_pub );

}

if($peticion == 8){

	

	$instancia = new Blog_controller();


	$peticion_controller = $instancia -> subir_url_controller($nombre_archivo,$url);
}

if($peticion == 9){

	

	$instancia = new Blog_controller();


	$peticion_controller = $instancia -> subir_url_video_controller($nombre_archivo,$url);
}

if($peticion == 10){
	$instancia = new Blog_controller();
	$peticion_controller = $instancia -> consultar_archivo_multimedia_controller($codigo_multimedia);
	foreach($peticion_controller as $archivo_multimedia){
		echo $archivo =$archivo_multimedia['archivo'];

	}

	


}

if($peticion == 11){
	$instancia = new Blog_controller();
	$peticion_controller = $instancia -> crear_programa_controller($titulo_programa , $contenido_programa , $portada_programa);
}

if($peticion == 12){
	$instancia = new Blog_controller();
	$peticion_controller = $instancia -> crear_talento_controller($personal_nombre , $personal_perfil_profesional , $personal_foto , $link_facebook , $link_instagram , $link_twitter);
	$_SESSION['foco'] = 12;

}

if($peticion == 13){
	$instancia = new Blog_controller();
	$peticion_controller = $instancia -> crear_elemento_slider_controller($banner_nombre , $banner_imagen);
	$_SESSION['foco'] = 3;

}

if($peticion == 14){
	$instancia = new Blog_controller();
	$peticion_controller = $instancia -> crear_album_controller($album_titulo , $album_portada_principal);



}

if($peticion == 15){
	$instancia = new Blog_controller();
	$peticion_controller = $instancia -> crear_elemento_galeria_controller($contenido_galeria_nombre , $album_id , $contenido_galeria_foto);
}

if($peticion == 16){
	$instancia = new Blog_controller();
	$peticion_album = $instancia -> listar_contenido_albumn_controller($album);
	$peticion_titulo_album = $instancia -> listar_titulo_albumn_controller($album);

	if($peticion_album == null){

		echo "<script>
		alert('No hay elementos en este album');
		</script>";

	}

	foreach($peticion_titulo_album as $titulo){
		echo '<div class="encabezado-formulario">

		Contenido '.$titulo['album_titulo'].'
		</div>';
	}
	
	foreach($peticion_album as $elemento){
		echo "<div class='archivo'>
		<div class='cont-archivo'>

		".$elemento['contenido_galeria_foto']."
		<br>
		<span class='nombre-archivo-label'>".$elemento['contenido_galeria_nombre']."</span>

		<br>
		<div class='opciones-archivo'>
		<i class='fa fa-pencil cambiar_elemento_galeria_album' id='".$elemento['contenido_galeria_id']."' style='color:orange; cursor:pointer'></i>
		<i class='fa fa-trash btn-borrar-elemento-galeria' style='color:red; cursor:pointer' id='".$elemento['contenido_galeria_id']."'></i>


		</div>
		</div>
		</div>";
	}
	echo "<form action='../../controller/enrutador/route.php' method='post' style='display:none'><input type='text' name='tipo_peticion' value='23' ><input class='codigo_elemento_borrar'><input type='submit' class='btn-borrar-elemento-galeria'></form>";
	echo '<script>
	$(".cambiar_elemento_galeria_album").click(function(){
		var id_elemento_album = $(this).attr("id");
		$(".codigo_elemento_cambio").val(id_elemento_album);
		$(".btn-cambiar_elemento_galeria").click();
		});


		$(".btn-borrar-elemento-galeria").click(function(){
			var id_elemento_album = $(this).attr("id");
			$(".codigo_elemento_borrar").val(id_elemento_album);
			$(".btn-eliminar_elemento_galeria").click();
			});








			</script>';
			echo "<form action='editar_elemento_galeria.php' method='post' style='display:none'><input type='hidden' class='codigo_elemento_cambio' name='codigo_galeria_id'><input type='submit' class='btn-cambiar_elemento_galeria'></form>";

			echo "<form action='../../controller/enrutador/route.php' method='post' style='display:none'><input type='hidden' name='tipo_peticion' value='23'><input type='hidden' class='codigo_elemento_borrar' name='codigo_galeria_id'><input type='submit' class='btn-eliminar_elemento_galeria'></form>";


		}

		if($peticion == 17){


			if (strlen(strstr($archivo,'https://'))>0) {

			} else{

				unlink($archivo);
			}

		}

		/*Peticion update de cambio de slider*/
		if($peticion == 18){
			$instancia = new Blog_controller();
			$peticion_controller = $instancia -> cambiar_elemento_slider_controller($banner_id , $banner_nombre , $banner_imagen);
		}

		if($peticion == 19){
			$instancia = new Blog_controller();
			$peticion_controller = $instancia -> eliminar_elemento_slider_controller($banner);
		}

		if($peticion == 20){
			$instancia = new Blog_controller();
			$peticion_controller = $instancia -> editar_album_controller_unico($album_id , $album_titulo , $album_portada_principal);

		}

		if($peticion == 21){
			$instancia = new Blog_controller();
			$peticion_controller = $instancia -> editar_elemento_unico_galeria_controller($codigo_galeria_id , $contenido_galeria_nombre , $album_id , $contenido_galeria_foto);
		}

		if($peticion == 22){
			$instancia = new Blog_controller();
			$peticion_controller = $instancia -> eliminar_elementos_album_controller($album);

		}

		if($peticion == 23){
			$instancia = new Blog_controller();
			$peticion_controller = $instancia -> eliminar_elemento_galeria_controller($codigo_galeria_id);

			
		}

		if($peticion == 24){

			$instancia = new Blog_controller();
			$peticion_controller = $instancia -> editar_blog_controller($blog_id,$titulo_pub ,$contenido_pub, $autor_pub , $portada_pub);

		}

		if($peticion == 25){
			$instancia = new Blog_controller();
			$peticion_controller = $instancia -> editar_programa_controller($programa_id , $titulo_programa , $contenido_programa , $portada_programa);
		}

		if($peticion == 26){
			$instancia = new Blog_controller();
			$peticion_controller = $instancia -> eliminar_programa_controller($programa_id);

		}

		if($peticion == 27){
			$instancia = new Blog_controller();
			$peticion_controller = $instancia -> editar_talento_controller($personal_id , $personal_nombre , $personal_perfil , $personal_foto , $link_facebook , $link_instagram , $link_twitter);

		}

		if($peticion == 28){
			$instancia = new Blog_controller();
			$peticion_controller = $instancia -> borrar_talento_controller($talento_id);
		}

		if($peticion == 29){
			$instancia = new Blog_controller();
			$peticion_controller = $instancia -> login_controller($arg_usuario , $arg_clave);
			if($peticion_controller == null){
				echo '<script>alert("Acceso denegado");</script>';
			} else{

				$_SESSION['usuario']  = $arg_usuario;

				echo '<script>alert("Bienvenido al sistema");</script>';
				echo '<script>
				window.location.href = "index.php";
				</script>';

				

				

				
			}
		}

		if($peticion == 30){
			$instancia = new Blog_controller();
			$peticion_controller = $instancia -> cerrar_sesion_controller();
			echo '<script>
			window.location.href = "login.php";
			</script>';
		}

		if($peticion == 31){
			$instancia = new Blog_controller();
			$peticion_controller = $instancia -> crear_registro_contacto($usuario_contacto_nombre ,$telefono,$usuario_contacto_correo , $usuario_contacto_mensaje);
		}

		if($peticion == 32){
			$instancia = new Blog_controller();
			$peticion_controller = $instancia -> eliminar_blog_controller($blog);
		}

		






		?>