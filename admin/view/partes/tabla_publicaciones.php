<?php
//error_reporting(0);
include_once "../../controller/blog/blog_controller.php";
$instancia = new Blog_controller();
$peticion_blog = $instancia -> listar_blogs_controller();
if($peticion_blog == null){
echo '<script>
alert("No hay publicaciones creadas");
</script>';
}
?>
<div class="contenedor-tabla">
	<div class="encabezado-formulario">
		Listado de publicaciones en el blog
	</div>
	<div class="table" id="encabezado_tabla">
		<div class="column-table-encabezado-pub encabezado-oculto" style="font-weight: 900;">Titulo de la publicación</div>
		<div class="column-table-encabezado-pub encabezado-oculto" style="font-weight: 900;">Fecha publicación</div>
		<div class="column-table-encabezado-pub encabezado-oculto" style="font-weight: 900;">contenido</div>
		<div class="column-table-encabezado-pub encabezado-oculto" style="font-weight: 900;">Opciones</div>
	</div>
	<div class="table" id="resultados">
		<?php
		foreach($peticion_blog as $blog){
			echo '<div class="column-table-encabezado-pub encabezado-visible" style="font-weight: 900;">Titulo de la publicación</div>';
			echo '<div class="column-table-contenido-pub"><label style="margin:auto">'.$blog['titulo_pub'].'</label></div>
			<div class="column-table-encabezado-pub encabezado-visible" style="font-weight: 900;">Fecha publicación</div>
			<div class="column-table-contenido-pub"><label style="margin:auto">'.$blog['fecha_pub'].'</label></div>
			<div class="column-table-encabezado-pub encabezado-visible" style="font-weight: 900;">Contenido</div>
			<div class="column-table-contenido-pub"><textarea style="width:90%; margin:auto; resize:none; height:80%;" readonly>'.$blog['contenido_pub'].'</textarea></div>
			<div class="column-table-encabezado-pub encabezado-visible" style="font-weight: 900;">Opciones</div>
			<div class="column-table-contenido-pub"> <i class="fa fa-pencil btn-editar-blog" id="'.$blog['blog_id'].'" style="margin:auto; color:orange; cursor:pointer;"></i><i class="fa fa-trash btn-eliminar-blog" id="'.$blog['blog_id'].'" style="margin:auto; color:red; cursor:pointer;"></i></div>';
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
