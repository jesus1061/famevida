<?php
include_once "../../controller/blog/blog_controller.php";
$instancia = new Blog_controller();
$peticion_banner = $instancia -> listar_banners_controller();
if($peticion_banner == null){
echo '<script>
alert("No hay banneres creados");
</script>';
}
?>
<div class="contenedor-tabla">
	<div class="encabezado-formulario">
		Listado de elementos del slider
	</div>
	<div class="table" id="encabezado_tabla">
		<div class="column-table-banner-encabezado encabezado-oculto" style="font-weight: 900;"><label>Titulo del banner</label></div>
		<div class="column-table-banner-encabezado encabezado-oculto" style="font-weight: 900;"><label>Contenido</label></div>
		<div class="column-table-banner-encabezado encabezado-oculto" style="font-weight: 900;"><label>Opciones</label></div>
		
	</div>
	<div class="table" id="resultados">
		<?php
		foreach($peticion_banner as $banner){
			echo '<div class="column-table-banner-encabezado encabezado-visible" style="font-weight: 900;"><label>Titulo del banner</label></div>';
			echo '<div class="column-table-banner"><label style="margin:auto;">'.$banner['banner_nombre'].'</label></div>
			<div class="column-table-banner-encabezado encabezado-visible" style="font-weight: 900;"><label>Contenido</label></div>
			<div class="column-table-banner">'.$banner['banner_imagen'].'</div>
			<div class="column-table-banner-encabezado encabezado-visible" style="font-weight: 900;"><label>Opciones</label></div>
			<div class="column-table-banner"><i class="fa fa-pencil btn-editar-slider" id="'.$banner['banner_id'].'" style="color:orange; cursor:pointer; margin:auto;" id="btn-editar-slider"></i><i class="fa fa-trash btn-eliminar-slider" id="'.$banner['banner_id'].'" style="color:red; cursor:pointer; margin:auto;"></i></div>
			';
		}
		?>
		
	</div>

	<form action="editar_slider.php" method="post" style="display: none;">
		<input type="hidden" name="banner_id" class="codigo_banner">
		<input type="submit" class="btn-editar_slider">
	</form>
</div>
<script>
	$(".btn-editar-slider").click(function(){
		var id_banner = $(this).attr("id");
		$(".codigo_banner").val(id_banner);
		$(".btn-editar_slider").click();

	});

	$(".btn-eliminar-slider").click(function(){
		var id_banner = $(this).attr("id");
		var mensaje;
		var opcion = confirm("Deseas eliminar este elemento");
		if (opcion == true) {
			ajax_borrar_elemento_slider(id_banner);
		} else {
      //alert("Cancelado");
  }
});

	function  ajax_borrar_elemento_slider(id_banner){
		
		$.ajax({
                data:  { tipo_peticion:19 , banner:id_banner}, //datos que se envian a traves de ajax
                url:   '../../controller/enrutador/route.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                	//$(".respuesta").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                	//$(".david").html(response);

                	$(".contenedor-ajustado").html(response);
                	$(".contenedor-ajustado").load("tabla_banners.php");
                  //alert("Borrar");
              }
          });
	};
</script>