<?php
include_once "../../controller/blog/blog_controller.php";
session_start();


if (isset(	$_SESSION['usuario'] )) 
{

}else
{
	echo '<script>
	window.location.href = "login.php";
	</script>';
}
extract($_POST);
//print_r($_POST);
$instancia = new Blog_controller();
$peticion_blog = $instancia -> consultar_blog_controller_unico($blog_id);

foreach($peticion_blog as $blog){

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Famevida</title>
	<meta name="viewport" content="width=device-width, user-scalable=no">
	
	<link rel="stylesheet" href="css/admin.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





	
</head>
<body>
	<div class="container">
		<header>
			<div class="main">
				<div class="logotipo-contenedor">
					<img src="images/logotipo.png" alt="" class="logotipo-img">
					<br>
					<label for=""><?php echo $_SESSION['usuario']; ?></label> <label for="">/</label><label for="" style="color:blue;cursor:pointer" class="btn-cerrar-sesion"> Cerrar sesion</label>
				</div>
				<div class="main-option">
					<div class="option">

						<div class="option-cont">
							<div class="item-option">
								<li  id="menu-multimedia">Modulo Multimedia</li>
							</div>
							<div class="item-option-sub">
								<li id="subir-archivos">Cargar archivos</li>
							</div>
							<div class="item-option-sub">
								<li id="ver-archivos">Ver archivos </li>
							</div>
						</div>

						<div class="option-cont">
							<div class="item-option">
								<li id="menu-blog">Modulo Slider</li>
							</div>
							<div class="item-option-sub">
								<li id="agregar_slider">Crear elemento</li>
							</div>
							<div class="item-option-sub">
								<li id="ver_elementos_slider">ver elementos</li>
							</div>
						</div>

						<div class="option-cont">
							<div class="item-option">
								<li id="menu-blog">Modulo  galeria</li>
							</div>
							<div class="item-option-sub">
								<li ><label id="crear_album" style="color:blue; cursor: pointer;">Crear Albúm</label> /  <label id="crear_elemento_album" style="color:blue; cursor: pointer;">Crear elemento</label> </li>
							</div>
							<div class="item-option-sub">
								<li id="ver-album">Ver album</li>
							</div>
						</div>
						<div class="option-cont">
							<div class="item-option">
								<li id="menu-blog">Modulo blog</li>
							</div>
							<div class="item-option-sub">
								<li id="crear-blog">Crear blog</li>
							</div>
							<div class="item-option-sub">
								<li id="ver-blog">Ver blogs</li>
							</div>
						</div>
						
						


						<div class="option-cont">
							<div class="item-option">
								<li id="menu-data">Modulo programas</li>
							</div>
							<div class="item-option-sub">
								<li id="crear-programa">Crear programa</li>
							</div>
							<div class="item-option-sub">
								<li id="ver-programas">Ver Programas</li>
							</div>
							

						</div>
						<div class="option-cont">
							<div class="item-option">
								<li id="menu-data">Modulo estadistico</li>
							</div>
							<div class="item-option-sub">
								<li id="enlace-dona">Ver visitas</li>
							</div>
							<div class="item-option-sub">
								<li id="enlace-dona">Ver contactos</li>
							</div>
							

						</div>
						<div class="option-cont">
							<div class="item-option">
								<li  id="menu-multimedia">Modulo Talento humano</li>
							</div>
							<div class="item-option-sub">
								<li id="crear-talento">Crear talento humano</li>
							</div>
							<div class="item-option-sub">
								<li id="ver-talento">Ver talento </li>
							</div>
						</div>

						
						
						
						
					</div>
				</div>





















				
			</div>
		</header>

		<div class="contenedor-dinamico-admin">
			<div class="contenedor-ajustado">
				<?php
				include_once "../../controller/blog/blog_controller.php";
				$instancia = new Blog_controller();
				$peticion_controlador = $instancia -> listar_archivos_controller();




				?>
				<div class="widget-content nopadding" id="formulario-blog">
					<form action="../../controller/enrutador/route.php" method="post" class="formulario">
						<div class="encabezado-formulario">
							Modificar blog
						</div>
						<div class="form-control" style="display: none;">

							<input type="text" id="tipo_peticion" placeholder="Titulo de la publicación" value="24" required="on" autofocus="on" class="input-form" name="tipo_peticion" readonly="on" >
							<input type="text" value="<?php echo $blog_id?>" name="blog_id">


						</div>

						<div class="form-control">
							<label for="" class="label-form">Titulo de publicación</label>
							<br>
							<br>
							<input type="text" class="input-form" id="titulo_pub" value="<?php echo $blog['titulo_pub']?>" name="titulo_pub" required>


						</div>
						<div class="form-control">
							<label for="" class="label-form">Contenido de la publicación</label>
							<br>
							<br>
							<input type="text" name="contenido_pub" value="<?php echo $blog['contenido_pub'];?>" class="input-form" >

						</div>
						<div class="form-control">
							<label for="" class="label-form">Autor de la publicación</label>
							<br>
							<br>
							<input type="text" placeholder="Administrador" value="Administrador" name="autor_pub" required autofocus="on" class="input-form" readonly="on">

						</div>




						<div class="form-control">
							<label for="" class="label-form">Portada de la publicación</label>
							<br>
							<br>
							<input type="text" id="btn-abrir-multimedia" name="portada_pub" value='<?php echo $blog['portada_pub']?>'   required  class="input-form" readonly style="background-color: gray; color: white; font-weight: 900; cursor: pointer" >

							<div class="container-imagenes">
								<div class="archivos">
									<div class="encabezado-formulario">
										Listado de archivos precargados 
									</div>
									<?php
									foreach($peticion_controlador as $archivo){
										echo "<div class='archivo' rel='".$archivo['ruta_basica']."' title='".$archivo['procedencia']."'>
										<div class='cont-archivo' id='".$archivo['id_archivo']."'>

										'".$archivo['archivo']."'
										<br>
										<span class='nombre-archivo-label'>Nombre + extencion</span>
										<span class='datos-archivo'>'".$archivo['peso_archivo']."'</span>
										<br>
										<div class='opciones-archivo'>
										<i class='fa fa-trash' id='btn-borrar-archivo' title='".$archivo['id_archivo']."'></i>

										</div>
										</div>
										</div>";
									}
									?>






								</div>
							</div>


						</div>





						<center><input type="submit" id="btn-activar-formulario" value="Editar blog" style="display:block;"></center> 
					</form>
				</div>
				<div class="respuesta">

				</div>
				<script>



					$("#btn-abrir-multimedia").click(function(){
						$(".container-imagenes").css("display","block");
					});



					$(".archivo").click(function(){

						var tipo_archivo = $(this).attr("title");

						if(tipo_archivo == "imagen_externa" ){
							var id = $(this).attr("rel");

							$("#btn-abrir-multimedia").attr(id);
							var imagen ='<img class="img-archivo" src="'+id+'"></img>';
							$("#btn-abrir-multimedia").attr("value",imagen);
						}

						if(tipo_archivo == "imagen_interna"){
							var id = $(this).attr("rel");

							$("#btn-abrir-multimedia").attr(id);
							var imagen ='<img class="img-archivo" src="'+id+'"></img>';
							$("#btn-abrir-multimedia").attr("value",imagen);
						}

						if(tipo_archivo == "video_externo"){
							var id = $(this).attr("rel");

							$("#btn-abrir-multimedia").attr(id);
							var imagen =id;
							$("#btn-abrir-multimedia").attr("value",imagen);
						}

					});

					function ajax(id){

//alert(id);
$.ajax({
                data:  { codigo_multimedia:id , tipo_peticion:10}, //datos que se envian a traves de ajax
                url:   '../../controller/enrutador/route.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                  //$(".respuesta").html("Procesando, espere por favor...");
              },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                  //$(".respuesta").html(response);
              }
          });

};
$("#subir-archivos").click(function(){
	$(".contenedor-ajustado").load("subir_archivos.php");
});

$("#ver-archivos").click(function(){
	$(".contenedor-ajustado").load("archivos_multimedia.php");
});

$("#agregar_slider").click(function(){
	$(".contenedor-ajustado").load("crear_slider.php");
});

$("#ver_elementos_slider").click(function(){
	$(".contenedor-ajustado").load("tabla_banners.php");
});
$("#crear_album").click(function(){
	$(".contenedor-ajustado").load("crear_album.php");
});

$("#crear_elemento_album").click(function(){
	$(".contenedor-ajustado").load("crear_elemento_galeria.php");
});

$("#ver-album").click(function(){
	$(".contenedor-ajustado").load("ver_albumnes.php");
});

$("#crear-blog").click(function(){
	$(".contenedor-ajustado").load("formulario.php");
});

$("#ver-blog").click(function(){
    //alert("Hola");
    $(".contenedor-ajustado").load("tabla_publicaciones.php");
});

$("#crear-programa").click(function(){
	$(".contenedor-ajustado").load("crear_programa.php");
});

$("#ver-programas").click(function(){
	$(".contenedor-ajustado").load("tabla_programas.php");
});

$("#crear-talento").click(function(){
	$(".contenedor-ajustado").load("crear_talento.php");
});

$("#ver-talento").click(function(){
	$(".contenedor-ajustado").load("ver_talento.php");
});

$(".btn-cerrar-sesion").click(function(){
			$.ajax({
                data:  {tipo_peticion:30}, //datos que se envian a traves de ajax
                url:   '../../controller/enrutador/route.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                  //$(".respuesta").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                  //$(".david").html(response);
                  window.location.href = "login.php";
                }
              });
		});



</script>

</div>

</div>














</div>