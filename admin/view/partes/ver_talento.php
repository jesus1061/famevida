<?php
include_once "../../controller/blog/blog_controller.php";
$instancia = new Blog_controller();
$peticion_talento = $instancia -> listar_talento_controller();
if($peticion_talento == null){
echo '<script>
alert("No hay personal registrado");
</script>';
}
?>
<div class="contenedor-tabla">
	<div class="encabezado-formulario">
		Listado de publicaciones en el blog
	</div>
	<div class="table" id="encabezado_tabla">
		<div class="column-table-encabezado-pub encabezado-oculto" style="font-weight: 900;">Nombre completo</div>
		<div class="column-table-encabezado-pub encabezado-oculto" style="font-weight: 900;">Foto perfil</div>
		<div class="column-table-encabezado-pub encabezado-oculto" style="font-weight: 900;">Perfil profesional</div>
		<div class="column-table-encabezado-pub encabezado-oculto" style="font-weight: 900;">Opciones</div>
	</div>
	<div class="table" id="resultados">
		<?php
		foreach($peticion_talento as $talento){
			echo '<div class="column-table-encabezado-pub encabezado-visible" style="font-weight: 900;">Titulo de la publicación</div>';
			echo '<div class="column-table-contenido-pub"><label style="margin:auto">'.$talento['personal_nombre'].'</label></div>
			<div class="column-table-encabezado-pub encabezado-visible" style="font-weight: 900;">Fecha publicación</div>
			<div class="column-table-contenido-pub"><label style="margin:auto">'.$talento['personal_foto'].'</label></div>
			<div class="column-table-encabezado-pub encabezado-visible" style="font-weight: 900;">Contenido</div>
			<div class="column-table-contenido-pub"><textarea style="width:90%; margin:auto; resize:none; height:80%;" readonly>'.$talento['personal_perfil'].'</textarea></div>
			<div class="column-table-encabezado-pub encabezado-visible" style="font-weight: 900;">Opciones</div>
			<div class="column-table-contenido-pub"> <i class="fa fa-pencil btn-editar-talento" id="'.$talento['personal_id'].'" style="margin:auto; color:orange; cursor:pointer;"></i><i class="fa fa-trash btn-eliminar-talento" id="'.$talento['personal_id'].'" style="margin:auto; color:red; cursor:pointer;"></i></div>';
		}

		?>
		<form action="editar_blog.php" method="post" style="display:none">
			<input type="hidden" class="codigo_blog" name="blog_id">
			<input type="submit" class="btn-cambiar_blog">
		</form>
<script>
	$(".btn-editar-talento").click(function(){
		var codigo_talento = $(this).attr("id");
		$(".codigo_talento").val(codigo_talento);
		$(".btn-editar-talento-envio").click();
	});	

	$(".btn-eliminar-talento").click(function(){
		var codigo_talento = $(this).attr("id");

		var mensaje;
		var opcion = confirm("Deseas eliminar este archivo");
		if (opcion == true) {
			ajax_borrar_talento(codigo_talento);
		} else {
      //alert("Cancelado");
  }

});	

	function ajax_borrar_talento(codigo_talento){
		$.ajax({
                data:  { tipo_peticion:28 , talento_id:codigo_talento}, //datos que se envian a traves de ajax
                url:   '../../controller/enrutador/route.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                	//$(".respuesta").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                	//$(".david").html(response);


                	$(".contenedor-ajustado").load("ver_talento.php");
                  //alert("Borrar");
              }
          });
	};
</script>
<form action="editar_talento.php" method="post" style="display:none">
	<input type="hidden" class="codigo_talento" name="personal_id">
	<input type="submit" class="btn-editar-talento-envio">
</form>


