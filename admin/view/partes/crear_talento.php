 <?php
 include_once "../../controller/blog/blog_controller.php";
 $instancia = new Blog_controller();
 $peticion_controlador = $instancia -> listar_archivos_controller();


 ?>
 <div  id="formulario-blog">
 	
 	<form action="../../controller/enrutador/route.php" method="post" class="formulario">
 		<div class="encabezado-formulario">
 		Formulario de creación de funcionarios
 	</div>
 		<div class="form-control" style="display: none;">

 			<input type="hidden" id="tipo_peticion" value="12"   class="input-form" name="tipo_peticion">


 		</div>

 		<div class="form-control">
 			<label for="" class="label-form">Nombre del funcionario</label>
 			<br>
 			<br>
 			<input type="text" class="input-form" id="titulo_programa"  name="personal_nombre" placeholder="Nombre funcionario" required >


 		</div>
 		<div class="form-control">
 			<label for="" class="label-form">Perfil profesional</label>
 			<br>
 			<br>
 			<textarea name="personal_perfil_profesional" id="contenido_programa" class="input-textarea contenido_publi" required placeholder="Perfil profesional"></textarea >

 		</div>

    <div class="form-control">
      <label for="" class="label-form">Link facebook</label>
      <br>
      <br>
      <input type="text" class="input-form" id="titulo_programa"  name="link_facebook" placeholder="Link facebook" required >


    </div>
   
   <div class="form-control">
      <label for="" class="label-form">Link instagram</label>
      <br>
      <br>
      <input type="text" class="input-form" id="titulo_programa"  name="link_instagram" placeholder="Link instagram" required >


    </div>

    <div class="form-control">
      <label for="" class="label-form">Link twitter</label>
      <br>
      <br>
      <input type="text" class="input-form" id="titulo_programa"  name="link_twitter" placeholder="Link twitter" required >


    </div>
 		




 		<div class="form-control">
 			<label for="" class="label-form">Foto perfil</label>
 			<br>
 			<br>
 			<input type="text" id="btn-abrir-multimedia" name="personal_foto" placeholder="Seleccionar archivo multimedia"   required  class="input-form"  style="background-color: gray; color: white; font-weight: 900; cursor: pointer" >

 			<div class="container-imagenes">
 				<div class="archivos">
 					<?php
 					foreach($peticion_controlador as $archivo){
 						echo "<div class='archivo' rel='".$archivo['ruta_basica']."' title='".$archivo['procedencia']."'>
 						<div class='cont-archivo' id='".$archivo['id_archivo']."'>

 						".$archivo['archivo']."
 						<br>
 						<span class='nombre-archivo-label'>  ".$archivo['nombre_archivo']."</span>
 					
 						<br>
 						
 						</div>
 						</div>";
 					}
 					?>






 				</div>
 			</div>


 		</div>





 		<center><input type="submit" id="btn-activar-formulario" value="Crear talento" style="display:block;"></center> 
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



</script>
