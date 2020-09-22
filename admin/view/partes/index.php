<?php
error_reporting(0);
session_start();


if (isset(	$_SESSION['usuario'] )) 
{
	if(isset($_SESSION['foco'])){

	}else{
		$_SESSION['foco'] = 1;
	}

}else
{
	echo '<script>
	window.location.href = "login.php";
	</script>';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Famevida</title>
	<meta name="viewport" content="width=device-width, user-scalable=no">
	
	<link rel="stylesheet" href="css/admin.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="js/global_admin.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





	
</head>
<body>
	<div class="container">
		<div id="foco" style="display: none">
			
		</div>
		<input type="text" value="<?php echo $_SESSION['foco']; ?>" class="foco" style="display: none">
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
								<li id="ver-contactos">Ver contactos</li>
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
				
			</div>

		</div>


		



<div class="david"></div>







	</div>
	<script>
		$(".btn-cerrar-sesion").click(function(){
			$.ajax({
                data:  {tipo_peticion:30}, //datos que se envian a traves de ajax
                url:   '../../controller/enrutador/route.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                  //$(".respuesta").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                  $(".david").html(response);
                }
              });
		});
	</script>

</body>
</html>
