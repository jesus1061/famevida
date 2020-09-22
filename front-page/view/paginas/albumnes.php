<?php
include_once "../../controller/blog/blog_front_page_controller.php";
$instancia = new Blog_front_page_controller();
$peticion_album = $instancia -> mostrar_albumnes_fotograficos_controller_front_page();

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
		body{background-image: url("images/banner3.jpg"); background-size: cover; background-attachment: fixed;}
		.contenedor-galeria{background-color: rgb(255,255,255,0.70); padding-bottom: 20px; padding-top: 20px;}
		
	</style>
	
</head>
<body>
	<div class="container">
		
		
		<br>

		
		

		
		
		<div class="contenedor-galeria" style="background-color: rgba(225,225,225,0.70);"  >
			<div class="title-section">
				<h1  class="titulo_seccion" style="color:#0a8e5f;">GALERIA FOTOGRÁFICA</h1>
			</div>
			<div class="cont-galeria">
				<?php
				foreach($peticion_album as $album){
					echo '<div class="album-galeria" id="'.$album["album_id"].'" title="'.$album["album_id"].'" >
					<div class="contenedor-album-front-page" >
					'.$album["album_portada_principal"].'
					<br><br>
					<h3 style="color:#a43474; font-style:oblique; text-decoration:underline; cursor:pointer">'.$album["album_titulo"].'</h3>
					</div>
					</div>';
				}
				?>
				
				
			</div>
			<div class="contenedor-volver" style="width: 100%; text-align: center; padding-top: 10px; padding-bottom: 10px; "><button class="btn-volver" style="background-color: #0a8e5f; border: none;padding-top: 5px; padding-bottom: 5px;"><a href="index.php" style="color:white; font-size: 15px; ">Volver</a></button></div>
		</div>
		<form action="galeria.php" method="post" style="display:none;">
			<input type="hidden" class="receptor-codigo-album" name="album_id">
			<input type="submit" class="btn-enviar_album">
		</form>

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

	
</div>

</body>
</html>