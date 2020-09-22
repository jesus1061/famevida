<?php
//error_reporting(0);
include_once "../../controller/blog/blog_controller.php";
$instancia = new Blog_controller();
$peticion_contacto = $instancia -> listar_contactos_controller();
if($peticion_contacto == null){
	echo '<script>
	alert("Nadie se ha registrado");
	</script>';
}
?>
<div class="contenedor-tabla">
	<div class="encabezado-formulario">
		Listado de contactos Famevida
	</div>
	<div class="table" id="encabezado_tabla">
		<div class="column-table-encabezado-pub encabezado-oculto" style="font-weight: 900;">Nombre contacto</div>
		<div class="column-table-encabezado-pub encabezado-oculto" style="font-weight: 900;">Telefono</div>
		<div class="column-table-encabezado-pub encabezado-oculto" style="font-weight: 900;">Mensaje</div>
		<div class="column-table-encabezado-pub encabezado-oculto" style="font-weight: 900;">Correo</div>

	</div>
	<div class="table" id="resultados">
		<?php
		foreach($peticion_contacto as $contacto){
			echo '<div class="column-table-encabezado-pub encabezado-visible" style="font-weight: 900;">Titulo de la publicación</div>';
			echo '<div class="column-table-contenido-pub"><label style="margin:auto">'.$contacto['usuario_contacto_nombre'].'</label></div>
			<div class="column-table-encabezado-pub encabezado-visible" style="font-weight: 900;">Fecha publicación</div>
			<div class="column-table-contenido-pub"><label style="margin:auto">'.$contacto['telefono'].'</label></div>
			<div class="column-table-encabezado-pub encabezado-visible" style="font-weight: 900;">Contenido</div>
			<div class="column-table-contenido-pub"><textarea style="width:90%; margin:auto; resize:none; height:80%;" readonly>'.$contacto['usuario_contacto_mensaje'].'</textarea></div>
			<div class="column-table-encabezado-pub encabezado-visible" style="font-weight: 900;">Opciones</div>
			<div class="column-table-contenido-pub"><label style="margin:auto">'.$contacto['usuario_contacto_correo'].'</label> </div>';
		}

		?>
		<form action="editar_blog.php" method="post" style="display:none">
			<input type="hidden" class="codigo_blog" name="blog_id">
			<input type="submit" class="btn-cambiar_blog">
		</form>
		<script>
			$(".btn-editar-blog").click(function(){
				var id_blog = $(this).attr("id");
				$(".codigo_blog").val(id_blog);
				$(".btn-cambiar_blog").click();

			});

			$(".btn-eliminar-blog").click(function(){
				var id_blog = $(this).attr("id");
				var mensaje;
				var opcion = confirm("Deseas eliminar este elemento");
				if (opcion == true) {
					ajax_borrar_elemento_blog(id_blog);
				} else {
      //alert("Cancelado");
  }
});

			function  ajax_borrar_elemento_blog(id_blog){

				$.ajax({
                data:  { tipo_peticion:32 , blog:id_blog}, //datos que se envian a traves de ajax
                url:   '../../controller/enrutador/route.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                	//$(".respuesta").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                	//$(".david").html(response);

                	$(".contenedor-ajustado").html(response);
                	$(".contenedor-ajustado").load("tabla_publicaciones.php");
                  //alert("Borrar");
              }
          });
			};
		</script>
		
	</div>
</div>
