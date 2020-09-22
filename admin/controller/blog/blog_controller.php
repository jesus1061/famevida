<?php
include_once "../../model/blog/blog_model.php";

/*controladores insert*/
class Blog_controller{
	public function crear_blog_controller($arg_titulo_pub , $arg_contenido_pub , $arg_autor_pub , $arg_portada_pub  ){
		$instancia = new Blog_model();
		$peticion_model = $instancia -> crear_blog_model($arg_titulo_pub , $arg_contenido_pub , $arg_autor_pub , $arg_portada_pub );


		
	}

	public function crear_blog_controller_url($titulo_pub , $contenido_pub , $autor_pub  , $portada_pub ){
		$instancia = new Blog_model();
		$peticion_model = $instancia -> crear_blog_model_url($titulo_pub , $contenido_pub , $autor_pub  , $portada_pub);


		
	}

	public function subir_archivo_controller($ruta_final_Archivo ,$nombre_archivo, $extencion_convertida , $peso_archivo, $tipo_archivo){
		$instancia = new Blog_model();
		$peticion_model = $instancia -> subir_archivo_model($nombre_archivo, $ruta_final_Archivo , $extencion_convertida , $peso_archivo , $tipo_archivo);	
		return $peticion_model;
		

	}


	public function subir_url_controller($nombre_archivo , $ruta){
		$instancia = new Blog_model();
		$peticion_model = $instancia -> subir_url_model($nombre_archivo , $ruta);	
		
	}

	public function subir_url_video_controller($nombre_archivo , $ruta){
		$instancia = new Blog_model();
		$peticion_model = $instancia -> subir_url_video_model($nombre_archivo , $ruta);	
		
	}

	public function crear_programa_controller($titulo_programa , $contenido_programa , $portada_programa){

		$instancia = new Blog_model();
		$peticion_model = $instancia -> crear_programa_model($titulo_programa , $contenido_programa , $portada_programa);

	}


	public function crear_talento_controller($personal_nombre , $personal_perfil_profesional , $personal_foto , $link_facebook , $link_instagram , $link_twitter){

		$instancia = new Blog_model();
		$peticion_model = $instancia -> crear_talento_model($personal_nombre , $personal_perfil_profesional , $personal_foto , $link_facebook , $link_instagram , $link_twitter);

	}

	public function crear_elemento_slider_controller($banner_nombre , $banner_imagen){

		$instancia = new Blog_model();
		$peticion_model = $instancia -> crear_elemento_slider_model($banner_nombre , $banner_imagen);

	}

	public function crear_album_controller($album_titulo , $album_portada_principal){
		$instancia = new Blog_model();
		$peticion_model = $instancia -> crear_album_model($album_titulo , $album_portada_principal);

	}
	

	

	public function crear_elemento_galeria_controller($contenido_galeria_nombre , $album_id , $contenido_galeria_foto){
		$instancia = new Blog_model();
		$peticion_model = $instancia -> listar_elementos_galeria_model($contenido_galeria_nombre , $album_id , $contenido_galeria_foto);
	}


	/*Controladores select*/

	public function listar_blogs_controller(){
		$instancia = new Blog_model();
		$peticion_model = $instancia -> listar_blog_model();	
		return $peticion_model;
	}


	

	
	public function listar_archivos_controller(){
		$instancia = new Blog_model();
		$peticion_model = $instancia -> listar_archivos_model();	
		return $peticion_model;
	}



	public function consultar_archivo_multimedia_controller($codigo_multimedia){
		$instancia = new Blog_model();
		$peticion_model = $instancia -> consultar_archivo_multimedia_model($codigo_multimedia);
	}

	

	public function listar_programas_controller(){

		$instancia = new Blog_model();
		return $peticion_model = $instancia -> listar_programa_model();

	}

	public function listar_talento_controller(){
		$instancia = new Blog_model();
		return $peticion_model = $instancia -> listar_talento_model();
	}
	public function listar_contenido_albumn_controller($album){
		$instancia = new Blog_model();
		return $peticion_model = $instancia -> listar_contenido_album_model($album);
	}

	public function listar_titulo_albumn_controller($album){
		$instancia = new Blog_model();
		return $peticion_model = $instancia -> listar_titulo_album_model($album);	
	}
	public function listar_banners_controller(){
		$instancia = new Blog_model();
		return $peticion_model = $instancia -> listar_elemento_slider_model();
	}

	public function listar_banners_controller_unico($banner_id){
		$instancia = new Blog_model();
		return $peticion_model = $instancia -> listar_elemento_slider_unico_model($banner_id);


	}
	public function listar_albumnes_controller(){
		$instancia = new Blog_model();
		return $peticion_model = $instancia -> listar_albumnes_model();
	}


	/*Controladores delete*/

	public function borrar_archivos_controller($arg_archivo){
		$instancia = new Blog_model();
		return $peticion_model = $instancia -> borrar_archivos_model($arg_archivo);


	}

	/*Controladores update*/

	public function cambiar_elemento_slider_controller($banner_id , $banner_nombre , $banner_imagen){
		$instancia = new Blog_model();
		return $peticion_model = $instancia -> cambiar_elemento_slider_model($banner_id ,$banner_nombre , $banner_imagen);	
	}

	public function eliminar_elemento_slider_controller($banner){
		$instancia = new Blog_model();
		return $peticion_model = $instancia -> eliminar_elemento_slider_model($banner);	
	}

	public function consultar_album_controller_unico($album_id){
		$instancia = new Blog_model();
		return $peticion_model = $instancia ->editar_album_unico_model($album_id);
		
	}

	public function editar_album_controller_unico($album_id , $album_titulo , $album_portada_principal){
		$instancia = new Blog_model();
		
		return $peticion_model = $instancia -> editar_album_model_unico($album_id , $album_titulo , $album_portada_principal);		

	}

	public function consultar_elemento_galeria_unico_controller($codigo_galeria_id){
		$instancia = new Blog_model();
		
		return $peticion_model = $instancia -> consultar_elemento_galeria_model_unico($codigo_galeria_id);

	}

	public function editar_elemento_unico_galeria_controller($codigo_galeria_id , $contenido_galeria_nombre , $album_id , $contenido_galeria_foto){
		$instancia = new Blog_model();
		$peticion_editar_elemento_galeria = $instancia ->  editar_elemento_galeria_model_unico($codigo_galeria_id , $contenido_galeria_nombre , $album_id , $contenido_galeria_foto);
	}

	public function eliminar_elementos_album_controller($album){

		$instancia = new Blog_model();
		$peticion_editar_elemento_galeria = $instancia -> eliminar_contenido_album_model($album);

	}

	public function eliminar_elemento_galeria_controller($codigo_galeria_id){

		$instancia = new Blog_model();
		$peticion_editar_elemento_galeria = $instancia ->eliminar_elemento_galeria_model($codigo_galeria_id);


	}

	public function consultar_blog_controller_unico($blog_id){
		$instancia = new Blog_model();
		return $peticion_consultar_blog_unico = $instancia ->consultar_blog_unico_model($blog_id);
	}

	public function editar_blog_controller($blog_id,$titulo_pub ,$contenido_pub , $autor_pub , $portada_pub){
		$instancia = new Blog_model();
		return $peticion_consultar_blog_unico = $instancia ->editar_blog_model($blog_id,$titulo_pub ,$contenido_pub , $autor_pub , $portada_pub);
	}

	public function consultar_programa_unico_controller($programa_id){
		$instancia = new Blog_model();
		return $peticion_consultar_programa_unico = $instancia ->	consultar_programa_unico_model($programa_id);
	}

	public function editar_programa_controller($programa_id , $titulo_programa , $contenido_programa , $portada_programa){
		$instancia = new Blog_model();
		return $peticion_editar_programa_unico = $instancia ->	editar_programa_unico_model($programa_id , $titulo_programa , $contenido_programa , $portada_programa);
	}

	public function eliminar_programa_controller($programa_id){
		$instancia = new Blog_model();
		return $peticion_editar_programa_unico = $instancia ->	eliminar_programa_model($programa_id);
	}
	public function listar_personal_controller_unico($personal_id){
		$instancia = new Blog_model();
		return $peticion_editar_programa_unico = $instancia -> consultar_personal_unico_model($personal_id);
	}

	public function editar_talento_controller($personal_id , $personal_nombre , $personal_perfil , $personal_foto , $link_facebook , $link_instagram , $link_twitter){
		$instancia = new Blog_model();
		return $peticion_editar_programa_unico = $instancia -> editar_talento_model($personal_id , $personal_nombre , $personal_perfil , $personal_foto ,  $link_facebook , $link_instagram , $link_twitter);	
	}

	public function borrar_talento_controller($talento_id){
		$instancia = new Blog_model();
		return $peticion_editar_programa_unico = $instancia -> borrar_talento_model($talento_id);
	}
	public function login_controller($arg_usuario , $arg_clave){

		$instancia = new Blog_model();
		return $peticion_consultar_usuario_login = $instancia -> consultar_usuario_login_model($arg_usuario , $arg_clave);
	}

	public function cerrar_sesion_controller(){
		session_destroy();
	}


	public function crear_registro_contacto($usuario_contacto_nombre ,$telefono,$usuario_contacto_correo , $usuario_contacto_mensaje){
		$instancia = new Blog_model();

		return $peticion_registrar_contacto = $instancia -> crear_registro_contacto_model($usuario_contacto_nombre ,$telefono,$usuario_contacto_correo , $usuario_contacto_mensaje);
	}

	public function eliminar_blog_controller($blog){
		$instancia = new Blog_model();

		return $peticion_registrar_contacto = $instancia ->	eliminar_blog_model($blog);
	}

	public function listar_contactos_controller(){
		$instancia = new Blog_model();

		return $listar_contactos = $instancia ->	listar_contactos_model();	
	}


	
	
}
?>