<?php
include_once "../../controller/blog/blog_controller.php";
$instancia = new Blog_controller();
$peticion_album = $instancia -> listar_albumnes_controller();
if($peticion_album == null){
echo '<script>
alert("No hay albumnes creados");
</script>';
}
?>
<div class="contenedor-tabla">
	<div class="encabezado-formulario">
		Listado de albumnes fotograficos
	</div>
	<div class="table" id="encabezado_tabla">
		<div class="column-table-album-encabezado encabezado-oculto" style="font-weight: 900;"><label>Titulo del album</label></div>
		<div class="column-table-album-encabezado encabezado-oculto" style="font-weight: 900;"><label>Portada principal</label></div>
		<div class="column-table-album-encabezado encabezado-oculto" style="font-weight: 900;"><label>Opciones</label></div>
		
		
	</div>

	<div class="table" id="resultados-album">
		<?php
		foreach($peticion_album as $album){
			echo '<div class="column-table-album-encabezado encabezado-visible" style="font-weight: 900;"><label>Titulo del album</label></div>';
			echo '<div class="column-table-album"  ><label class="contenido_album" id="'.$album['album_id'].'"  style="margin:auto; cursor:pointer; color:blue;" >'.$album['album_titulo'].'</label></div>
			<div class="column-table-album-encabezado encabezado-visible" style="font-weight: 900;"><label>Portada principal</label></div>
			<div class="column-table-album">'.$album['album_portada_principal'].'</div>
			<div class="column-table-album-encabezado encabezado-visible" style="font-weight: 900;"><label>Opciones</label></div>
			<div class="column-table-album"><i class="fa fa-pencil btn-editar-album" id="'.$album['album_id'].'" style="color:orange; cursor:pointer; margin:auto;" id="btn-editar-slider"></i><i class="fa fa-trash btn-borrar-album" id="'.$album['album_id'].'" style="color:red; cursor:pointer; margin:auto;"></i></div>
			
			';
		}
		?>
		<form action="editar_album.php" method="post" style="display: none;">
			<input type="hidden" class="codigo_album" name="album_id">
			<input type="submit" class="btn-cambiar_album">
		</form>
	</div>
	<div class="resultados-album">
		<div class="container-resul-album">
			
		</div>
		
	</div>
</div>



<?php
include_once "../../controller/blog/blog_controller.php";
$instancia = new Blog_controller();
$peticion_controlador = $instancia -> listar_archivos_controller();
?>


<script>

	


	$(".btn-editar-album").click(function(){
		var id_album = $(this).attr("id");
		$(".codigo_album").val(id_album);
		$(".btn-cambiar_album").click();


	});

	$(".btn-borrar-album").click(function(){
		var id_album = $(this).attr("id");

		var mensaje;
		var opcion = confirm("Deseas eliminar este album");
		if (opcion == true) {
			borrar_contenido_album(id_album);
		} else {
      //alert("Cancelado");
  }
});
	$(".contenido_album").click(function(){
		var id_album = $(this).attr("id");
		consultar_contenido_album(id_album);



		
	});

	function consultar_contenido_album(id_album){

		$.ajax({
                data:  { tipo_peticion:16 , album:id_album }, //datos que se envian a traves de ajax
                url:   '../../controller/enrutador/route.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                	//$("#resultado-consulta").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                	$(".resultados-album").css("display","block");
                	$(".resultados-album").html(response);
                	$('html, body').animate({
                		scrollTop: $(".resultados-album").offset().top
                	}, 2000);

                	//$(".contenedor-ajustado").load("archivos_multimedia.php");
                }
            });
	};

	function borrar_contenido_album(id_album){

		$.ajax({
                data:  { tipo_peticion:22 , album:id_album }, //datos que se envian a traves de ajax
                url:   '../../controller/enrutador/route.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                	$("#resultado-consulta").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                	$(".resultados-album").css("display","block");
                	$(".resultados-album").html(response);

                	//$(".contenedor-ajustado").load("archivos_multimedia.php");
                }
            });
	};
	
</script>
<script>
	$(document).ready(function(){
		

		/*Borrar archivo*/
		

		function ajax_borrar_album(id_archivo_arg , arg_ruta){

			$.ajax({
                data:  { tipo_peticion:5 , archivo:id_archivo_arg , ruta:arg_ruta}, //datos que se envian a traves de ajax
                url:   '../../controller/enrutador/route.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                	//$(".respuesta").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                	$(".respuesta").html(response);
                	$(".contenedor-ajustado").load("archivos_multimedia.php");
                }
            });
		};


	});
</script>