<?php
error_reporting(0);
session_start();
$valor_anterior;
if (isset($_SESSION['visitante'])) 
{
	
}else
{
	
	$file = fopen("visitas.txt", "r");

	while(!feof($file)) {

		$valor_anterior = fgets($file);

	}


	$valor_nuevo = 1;
	fclose($file);



	$file_actualizar = fopen("visitas.txt", "a");



	fwrite($file_actualizar, ''.$valor_nuevo.''. PHP_EOL);

	fclose($file_actualizar);
	$_SESSION['visitante'] = "activo";

}
include_once "../../controller/blog/blog_front_page_controller.php";
$instancia = new Blog_front_page_controller();
$peticion_controlador = $instancia -> listar_blog_front_page_controller();

$peticion_programas = $instancia -> listar_programas_controller_front_page();

$peticion_talento = $instancia -> listar_talento_controller_front_page();
$peticion_banners = $instancia -> slider_controller_front_page();

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
	
</head>
<body>
	<script language="JavaScript">

	</script>
	<div class="container">
		<header>
			<div class="main">
				<div class="logotipo-contenedor">
					<img src="images/logotipo.png" alt="" class="logotipo-img">
					<i class="fa fa-navicon" id="btn-abrir-menu"></i>
				</div>
				<div class="main-option">
					<div class="option">
						
						<div class="option-cont">
							<div class="item-option">
								<li id="enlace-nosotros">Nosotros</li>
							</div>
						</div>
						<div class="option-cont">
							<div class="item-option">
								<li id="enlace-programas">Programas</li>
							</div>
						</div>
						
						<div class="option-cont">
							<div class="item-option">
								<li id="enlace-donaciones">Donaciones</li>
							</div>
						</div>
						<div class="option-cont">
							<div class="item-option">
								<li id="enlace-blog">Blog</li>
							</div>
						</div>
						<div class="option-cont">
							<div class="item-option">
								<li id="enlace-galeria">Galeria</li>
							</div>
						</div>
						<div class="option-cont">
							<div class="item-option">
								<li id="enlace-contacto">Contactanos</li>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		
		<br>

		<div class="w3-content w3-section" id="slider">
			<?php
			foreach($peticion_banners as $banner){
				echo ''.$banner["banner_imagen"].'';

			} 
			?>
			<script>
				$("#slider img").each(function(){
					//$(this).removeClass("img-archivo");
					$(this).addClass("mySlides");
				});
			</script>
			
			
			
		</div>
		<div class="contenedor-about1" id="nosotros">
			
			<div class="contenedor-mision">
				<div class="contenedor-video">
					<img src="images/collage.webp" class="videos-famevida" alt="" id="video-mision">
				</div>	
				<div class="contenedor-desc-mision">
					<h1>Misión</h1>
					<p>"FAMEVIDA" tiene como misión promover un cambio sociocultural con acciones que conduzcan a la formulación de soluciones integrales, que fortalezcan los valores de amor y compromiso y conlleven al reconocimiento y respeto por la dignidad humana en todas las circunstancias. </p>
				</div>	
			</div>

		</div>

		<div class="contenedor-about2">
			
			<div class="contenedor-mision">
				<div class="contenedor-desc-mision">
					<h1>Visión</h1>
					<p>Ser reconocida como una fundación cuyos actos se conviertan en modelo y ejemplo de otras instituciones por la calidad humana de sus miembros, la voluntad y responsabilidad de servicio y excelente desempeño en todas sus acciones.  </p>
				</div>
				<div class="contenedor-video">
					<img src="images/collage.webp" class="videos-famevida" alt="" id="video-vision">

				</div>


			</div>

		</div>

		<div class="contenedor-about2" style="background-color: white; color:black;">
			<div class="title-section">
				<h1 style="color:#0a8e5f;">SU FUNDADORA</h1>
				<br>
				<br>
			</div>
			<div class="contenedor-mision">
				<div class="biografia" style="width: 100%; text-align: center;">
					<img src="images/biografia_nancy.jpeg" style="width: 100%;-webkit-box-shadow: -2px 3px 13px 0px rgba(0,0,0,0.75);
					-moz-box-shadow: -2px 3px 13px 0px rgba(0,0,0,0.75);
					box-shadow: -2px 3px 13px 0px rgba(0,0,0,0.75);" alt="">
				</div>


			</div>

		</div>
		<div class="contenedor-talento" id="talento">
			<div class="title-section">
				<h1  class="titulo_seccion" style="color:#0a8e5f;">TALENTO HUMANO</h1>
			</div>
			<div class="con-talento">

				<?php
				foreach($peticion_talento as $talento){
					echo '<div class="talento">
					<div class="perfil">
					'.$talento["personal_foto"].'
					<br>
					<div class="data-perfil">
					<br>
					<center><h4 class="nombre-talento">'.$talento["personal_nombre"].'</h4></center>	
					<br>
					<p text-align:justify>
					'.$talento["personal_perfil"].'
					</p>
					
					<br>
					<br>
					<div class="redes-sociales-contact">
					<div class="container-red">
					<div class="red-social">
					<div class="red">
					<center><i  class=" fa fa-facebook-square" id="ico-facebook" title="'.$talento["link_facebook"].'"></i></center>
					</div>
					</div>
					<div class="red-social">
					<div class="red">
					<center><i  class=" fa fa-instagram" id="ico-instagram" title="'.$talento["link_instagram"].'"></i></center>
					</div>
					</div>
					<div class="red-social">
					<div class="red">
					<center><i  class=" fa fa-twitter" id="ico-twitter" title="'.$talento["link_twitter"].'"></i></center>
					</div>
					</div>
					</div>
					</div>
					</div>
					</div>
					</div>
					';
				}
				?>
				<script>
					$(".fa-facebook-square").click(function(){
						var enlace_social = $(this).attr("title");
						window.open(enlace_social, '_blank');
					});

					$(".fa-instagram").click(function(){
						var enlace_social = $(this).attr("title");
						window.open(enlace_social, '_blank');
					});
					$(".fa-twitter").click(function(){
						var enlace_social = $(this).attr("title");
						window.open(enlace_social, '_blank');
					});
				</script>
				
				

				
				
				
			</div>
		</div>
		<div class="contenedor-actividades" id="programas">
			<div class="title-section" style="color:black;">
				<br>

				<h1 style="color:#0a8e5f;">PROGRAMAS</h1>
				<br>
			</div>
			<?php
			foreach($peticion_programas as $programa){
				echo '<div class="block-actividades"><div class="actividad">
				'.$programa["portada_programa"].'
				<br>
				<br>
				<button class="btn-ver-mas ver-programa" id="'.$programa['programa_id'].'" style="background-color:#a43474; color:white"><a href="programa.php?programa='.$programa['programa_id'].'">'.$programa['titulo_programa'].'</a></button>	
				</div>
				</div>';
			}
			?>
			
			<script>
				$(".ver-programa").click(function(){
					var id_programa = $(this).attr("id");
					alert(id_programa);
				});
			</script>

		</div>



		

		<div class="contenedor-donacion" id="donaciones">
			<div class="donaciones-container">
				<h1 class="title-donacion">Apoyanos con tu donación</h1>
				<br>
				<button class="btn-donacion"><a href="#">Donar</a></button>
			</div>
		</div>
		<div class="contenedor-blog" id="blog">
			<div class="title-section" style="color: black;">
				<h1 style="color:#0a8e5f;">BLOG DE NOTICIAS</h1>
			</div>

			<?php
			foreach($peticion_controlador as $publicaciones){

				echo '<div class="blog-column">
				<div class="publicacion" >
				'.$publicaciones["portada_pub"].'
				<br><br>
				<h2 class="titulo-blog"><a href="publicacion.php?publicacion='.$publicaciones['blog_id'].'" class="titulo-blog">'.$publicaciones['titulo_pub'].'</a></h2>
				<br>
				<p><span class="fechas-blog">'.$publicaciones['fecha_pub'].'</span> <span class="fechas-blog">POR</span> <span class="autor-blog">ADMINISTRADOR</span> </p>
				<br>
				<div class="container-descripcion">
				<p class="resumen-publicacion">'.$publicaciones['contenido_pub'].'</p>
				<p class="link-publicacion"><a href="publicacion.php?publicacion='.$publicaciones['blog_id'].'">Ver publicacion</a></p>
				</div>

				</div>
				</div>';
			}
			?>
			<script>

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
			<form action="../../../admin/controller/enrutador/route.php" class="formulario-contacto-famevida" method="post">
				<div class="form-group">
					<label for="" class="info">Nombre completo</label>
					<input type="text" placeholder="Nombre completo" name="usuario_contacto_nombre" class="info" id="info-nombre-input" required autocomplete="off">
					<input type="hidden" name="tipo_peticion" value="31">
				</div>
				<div class="form-group">
					<label for="" class="info">Telefono</label>
					<input type="text" placeholder="Telefono" name="telefono" class="info" id="info-nombre-input" required autocomplete="off">
					
				</div>
				<div class="form-group">
					<label for="" class="info">Correo electronico</label>
					<input type="email" placeholder="Correo electronico" name="usuario_contacto_correo" class="info" id="info-nombre-input" required autocomplete="off">
				</div>
				<div class="form-group">
					<label for="" class="info">Mensaje</label>
					<input type="text" placeholder="Escriba aqui su mensaje" name="usuario_contacto_mensaje" class="info" id="info-mensaje-input" required autocomplete="off">
				</div>
				<div class="form-group">
					
					<input type="submit"value="Enviar" class="submit">
				</div>
			</form>
		</div>
	</div>
	<div class="column-footer">
		<div class="cont">
			<center>  <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63715.526871839604!2d-76.42365026623337!3d3.5365234250514024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3a07076a0315f9%3A0x83b6cd9efa7653ba!2sEstadio%20Deportivo%20Cali!5e0!3m2!1ses!2sco!4v1591384015379!5m2!1ses!2sco" width="90%" height="320px;" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></center>
		</div>
	</div>
	<div class="contador-visitas" style="width: 100%; padding: 10px; float: left; text-align: center; color: white; font-size: 40px;">

		<input type="text" value="10000" class="count" style="display:none">
		<?php
		$fh = fopen("visitas.txt", "r");
		$t  = 0;
		while (!feof($fh)) {

			$test = fgets($fh);

			$t = $test + $t;

			if (empty($test) == true) {
				break;      
			}

		}
		//echo ($t . "\n");
		fclose($fh);
		if($t >= 0  && $t< 10){
			echo '<div class="total" style="display:none">0000'.$t.'</div>';
		}

		if($t > 9  && $t< 100){
			echo '<div class="total" style="display:none">000'.$t.'</div>';
		}

		if($t > 99 && $t< 1000){
			echo '<div class="total" style="display:none">00'.$t.'</div>';
		}
		if($t > 999 && $t< 10001){
			echo '<div class="total" style="display:none">'.$t.'</div>';
		}

		
		?>
		<script>
			$(document).ready(function(){
				
				var cadena= $(".total").text();
				var longitud =$(".count").val().length;
				
				for(var i = 0 ; i<= longitud -1 ; i++){
					var valor = cadena.charAt(i);
					$(".conteo").append("<div class='digito' style='float:left;'><div class='valor' style='display:table; margin:auto; background-color:#a43474;'>"+valor+"</div></div>");
				}
				


			});

		</script>
		<div class="visitas" style=" margin: auto; text-align: center;"><label for="">Visitantes</label></div>
		
		<div class="conteo" style="margin: auto;">
			
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

<script>

	var myIndex = 0;
	carousel();

	function carousel() {
		var i;
		var x = document.getElementsByClassName("mySlides");
		for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";  
		}
		myIndex++;
		if (myIndex > x.length) {myIndex = 1}    
			x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</div>

</body>
</html>