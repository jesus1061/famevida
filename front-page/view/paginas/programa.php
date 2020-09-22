<?php
extract($_GET);
//print_r($_GET);
include_once "../../controller/blog/blog_front_page_controller.php";
$instancia = new Blog_front_page_controller();
$peticion_programa = $instancia -> listar_programa_unico_controller_front_page($programa);
foreach($peticion_programa as $programa){

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Famevida</title>
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" href="css/new.css">
	<link rel="stylesheet" href="css/slider_new.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="js/custom.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;700&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet"> 
	<style>

		@media only screen and (max-width: 600px) {	body{background-image: url("images/banner4.jpg"); background-size: cover;}
		.container-programa{width: 100%;  margin: auto;background-color: white; padding-top: 20px; padding-bottom: 20px; }
		.contenedor-programa{width: 90%; margin: auto; display: table;}
		.portada{width: 95%; -webkit-box-shadow: -1px 0px 11px 0px rgba(0,0,0,0.75);
			-moz-box-shadow: -1px 0px 11px 0px rgba(0,0,0,0.75);
			box-shadow: -1px 0px 11px 0px rgba(0,0,0,0.75); margin: auto; padding: 10px;}
			.contenido-programa{width: 100%; text-align: justify;}
			.portada .img-archivo{width: 100%; height: 300px;}
			.contenedor-volver{width: 100%;  text-align: center; display: table; padding-top: 5px; padding-bottom: 5px;}
			.contenedor-volver button{padding-top: 8px; padding-bottom: 8px; font-size: 15px; border: none;}
		}

		@media only screen and (min-width: 600px) {	body{background-image: url("images/banner4.jpg"); background-size: cover;}
		.container-programa{width: 87.5%;  margin: auto;background-color: white; padding-top: 20px; padding-bottom: 20px; }
		.contenedor-programa{width: 80%; margin: auto; display: table;}
		.portada{width: 95%; -webkit-box-shadow: -1px 0px 11px 0px rgba(0,0,0,0.75);
			-moz-box-shadow: -1px 0px 11px 0px rgba(0,0,0,0.75);
			box-shadow: -1px 0px 11px 0px rgba(0,0,0,0.75); margin: auto; padding: 10px;}
			.contenido-programa{width: 100%; text-align: justify;}
			.portada .img-archivo{width: 100%; height: 400px;}
			.contenedor-volver{width: 100%;  text-align: center; display: table; padding-top: 5px; padding-bottom: 5px;}
			.contenedor-volver button{padding-top: 8px; padding-bottom: 8px; font-size: 15px; border: none;}
		}

		@media only screen and (min-width: 768px) {	body{background-image: url("images/banner4.jpg"); background-size: cover;}
		.container-programa{width: 87.5%;  margin: auto;background-color: white; padding-top: 20px; padding-bottom: 20px; }
		.contenedor-programa{width: 70%; margin: auto; display: table;}
		.portada{width: 95%; -webkit-box-shadow: -1px 0px 11px 0px rgba(0,0,0,0.75);
			-moz-box-shadow: -1px 0px 11px 0px rgba(0,0,0,0.75);
			box-shadow: -1px 0px 11px 0px rgba(0,0,0,0.75); margin: auto; padding: 10px;}
			.contenido-programa{width: 100%; text-align: justify;}
			.portada .img-archivo{width: 100%; height: 400px;}
			.contenedor-volver{width: 100%;  text-align: center; display: table; padding-top: 5px; padding-bottom: 5px;}
			.contenedor-volver button{padding-top: 8px; padding-bottom: 8px; font-size: 15px; border: none;}
		}

		@media only screen and (min-width: 992px) {	body{background-image: url("images/banner4.jpg"); background-size: cover;}
		.container-programa{width: 87.5%;  margin: auto;background-color: white; padding-top: 20px; padding-bottom: 20px; }
		.contenedor-programa{width: 70%; margin: auto; display: table;}
		.portada{width: 95%; -webkit-box-shadow: -1px 0px 11px 0px rgba(0,0,0,0.75);
			-moz-box-shadow: -1px 0px 11px 0px rgba(0,0,0,0.75);
			box-shadow: -1px 0px 11px 0px rgba(0,0,0,0.75); margin: auto; padding: 10px;}
			.contenido-programa{width: 100%; text-align: justify;}
			.portada .img-archivo{width: 100%; height: 500px;}
			.contenedor-volver{width: 100%;  text-align: center; display: table; padding-top: 5px; padding-bottom: 5px;}
			.contenedor-volver button{padding-top: 8px; padding-bottom: 8px; font-size: 15px; border: none;}
		}
		
		@media only screen and (min-width: 1200px) {	body{background-image: url("images/banner4.jpg"); background-size: cover;}
		.container-programa{width: 87.5%;  margin: auto;background-color: white; padding-top: 20px; padding-bottom: 20px; }
		.contenedor-programa{width: 70%; margin: auto; display: table;}
		.portada{width: 95%; -webkit-box-shadow: -1px 0px 11px 0px rgba(0,0,0,0.75);
			-moz-box-shadow: -1px 0px 11px 0px rgba(0,0,0,0.75);
			box-shadow: -1px 0px 11px 0px rgba(0,0,0,0.75); margin: auto; padding: 10px;}
			.contenido-programa{width: 100%; text-align: justify;}
			.portada .img-archivo{width: 100%; height: 500px;}
			.contenedor-volver{width: 100%;  text-align: center; display: table; padding-top: 5px; padding-bottom: 5px;}
			.contenedor-volver button{padding-top: 8px; padding-bottom: 8px; font-size: 15px; border: none;}
		}

		



		
	</style>
	
</head>
<body>
	<div class="container-programa">
		
		
		<br>

		
		

		
		
		<div class="contenedor-programa">
			<div class="title-section">
				<br>
				<h1  class="titulo_seccion" style="color:#0a8e5f;"><?php echo $programa['titulo_programa']; ?></h1>
				<br>
				<br>
			</div>
			<div class="portada" style="text-align: center;">
				<?php echo $programa['portada_programa']; ?>
				<div class="contenido-programa">
					
					<p style="text-align: justify;"><?php echo $programa['contenido_programa']; ?></p>
					<br>
					
				</div>
			</div>
			
			

		</div>
		
		<div class="contenedor-volver"><br><button class="btn-volver" style="background-color: #a43474;"><a href="index.php" style="color:white;">Volver</a></button></div>
		<script>
			$(".album-galeria").click(function(){
				var codigo_album = $(this).attr("id");
				$(".receptor-codigo-album").val(codigo_album);
				$(".btn-enviar_album").click();

			});
			$(".img-archivo").each(function(){
				var src = $(this).attr("src");

				name = src.toLowerCase();

				if (name.includes('https://')){
				//alert("Es verdad");
			}
			else{
				//alert(src);
				var archivo_convertido = src.substring(6);
				
				
				$(this).attr("src","../../../admin/"+archivo_convertido);
			}
		});
	</script>



	

	
</div>
<div class="footer" id="contacto">
	<div class="title-section" id="title-footer">
		<h1 style="color:white;">Contactate con nosotros</h1>

	</div>	
	<div class="column-footer">
		<div class="cont">
			<form action="" class="formulario-contacto-famevida">
				<div class="form-group">
					<label for="" class="info">Nombre completo</label>
					<input type="text" placeholder="Nombre completo" class="info" id="info-nombre-input">
				</div>
				<div class="form-group">
					<label for="" class="info">Telefono</label>
					<input type="text" placeholder="Nombre completo" name="telefono" class="info" id="info-nombre-input" required autocomplete="off">
					
				</div>
				<div class="form-group">
					<label for="" class="info">Correo electronico</label>
					<input type="text" placeholder="Correo electronico" class="info" id="info-nombre-input">
				</div>
				<div class="form-group">
					<label for="" class="info">Mensaje</label>
					<input type="text" placeholder="Escriba aqui su mensaje" class="info" id="info-mensaje-input">
				</div>
				<div class="form-group">

					<input type="submit"value="Enviar" class="submit" >
				</div>
			</form>
		</div>
	</div>
	<div class="column-footer">
		<div class="cont">
			<center>  <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63715.526871839604!2d-76.42365026623337!3d3.5365234250514024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3a07076a0315f9%3A0x83b6cd9efa7653ba!2sEstadio%20Deportivo%20Cali!5e0!3m2!1ses!2sco!4v1591384015379!5m2!1ses!2sco" width="90%" height="320px;" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></center>
		</div>
	</div>


</div>
<div class="redes-sociales-footer">
	<div class="redes-footer">
		<div class="red-footer"><div class="ico-footer"><i class="fa fa-facebook-square" id="facebook"></i></div></div>
		<div class="red-footer"><div class="ico-footer"><i class="fa fa-instagram" id="facebook"></i></div></div>
		<div class="red-footer"><div class="ico-footer"><i class="fa fa-youtube" id="facebook"></i></div></div>
		<div class="red-footer"><div class="ico-footer"><i class="fa fa-twitter" id="facebook"></i></div></div>
	</div>
	<br>
	<hr>
	<br>
	<div class="datos-contacto">
		<div class="data-contact">
			<div class="column-data">
				<div class="con-title">
					<h2 class="title-data">Contactos</h2>	
				</div>
				<div class="data-data">
					<p>Carrera 7 v # 61 - 11 </p>
					<p>Cali - Valle del cauca -Colombia</p>
				</div>

			</div>
		</div>
		<div class="data-contact">
			<div class="column-data">
				<div class="con-title">
					<h2 class="title-data">Telefonos</h2>	
				</div>
				<div class="data-data">
					<p><a href="#">315 3098158</a></p>
					<p><a href="#">315 3098158</a></p>

				</div>
			</div>
		</div>
		<div class="data-contact">
			<div class="column-data">
				<div class="con-title">
					<h2 class="title-data">Correo</h2>	
				</div>
				<div class="data-data">
					<p>Email : info@famevida.com</p>
					<p>Email : info@famevida.com</p>
				</div>
			</div>
		</div>


	</div>
	<div class="copyright">
		<div class="autor-page">
			© 2020 FAMEVIDA . All Rights Reserved | Design by Redepyme
		</div>	
	</div>
</div>

</body>
</html>
