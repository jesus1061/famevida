<?php
include_once "../../model/blog/blog_front_page_model.php";
class Blog_front_page_controller{
	public function listar_blog_front_page_controller(){
		$instancia = new Blog_front_page_model();
		$peticion_model = $instancia -> listar_blog_front_page_model();
		return $peticion_model;
	}

	public function listar_programas_controller_front_page(){
		$instancia = new Blog_front_page_model();
		return	$peticion_model = $instancia -> listar_programas_front_page_model();	
	}

	public function listar_talento_controller_front_page(){
		$instancia = new Blog_front_page_model();
		return	$peticion_model = $instancia -> listar_talento_front_page_model();	
	}

	public function slider_controller_front_page(){
		$instancia = new Blog_front_page_model();
		return	$peticion_model = $instancia -> slider_front_page_model();	

	}

	public function mostrar_albumnes_fotograficos_controller_front_page(){
		$instancia = new Blog_front_page_model();
		return	$peticion_model = $instancia -> mostrar_albumnes_fotograficos_front_page_model();	

	}

	public function listar_fotos_galeria_album_front_page_controller($album_id){
		$instancia = new Blog_front_page_model();
		return	$peticion_model = $instancia -> listar_fotos_galeria_album_front_page_model($album_id);	
	}

	public function listar_blog_unico_controller_front_page($publicacion){
		$instancia = new Blog_front_page_model();
		return	$peticion_model = $instancia -> listar_blog_unico_front_page_model($publicacion);	
	}

	public function listar_programa_unico_controller_front_page($programa){
		$instancia = new Blog_front_page_model();
		return	$peticion_model = $instancia -> listar_programa_unico_front_page_model($programa);	
	}
}
?>