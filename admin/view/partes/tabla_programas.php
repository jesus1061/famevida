<?php
include_once "../../controller/blog/blog_controller.php";
$instancia = new Blog_controller();
$peticion_programa = $instancia -> listar_programas_controller();
if($peticion_programa == null){
echo '<script>
alert("No hay programas creados");
</script>';
}
?>
<div class="contenedor-tabla">
	<div class="encabezado-formulario">
		Listado de los programas
	</div>
	<div class="table" id="encabezado_tabla">
		<div class="column-table-programa-encabezado encabezado-oculto" style="font-weight: 900;">Nombre del programa</div>
		<div class="column-table-programa-encabezado encabezado-oculto" style="font-weight: 900;">Contenido del programa</div>
		<div class="column-table-programa-encabezado encabezado-oculto" style="font-weight: 900;">Portada del programa</div>
		<div class="column-table-programa-encabezado encabezado-oculto" style="font-weight: 900;">Opciones</div>
	</div>
	<div class="table" id="resultados">
		<?php
		foreach($peticion_programa as $programa){
			echo '<div class="column-table-programa-encabezado encabezado-visible" style="font-weight: 900;">Nombre del programa</div>';
			echo '<div class="column-table-programa-contenido"><label style="margin:auto;">'.$programa['titulo_programa'].'</label></div>
			<div class="column-table-programa-encabezado encabezado-visible" style="font-weight: 900;">Contenido del programa</div>
			<div class="column-table-programa-contenido"><div style="width:90%;height:70px; color:black; margin:auto; overflow-y:scroll "  >'.$programa['contenido_programa'].'</div></div>
			<div class="column-table-programa-encabezado encabezado-visible" style="font-weight: 900;">Portada del programa</div>
			<div class="column-table-programa-contenido">'.$programa['portada_programa'].'</div>
			<div class="column-table-programa-encabezado encabezado-visible" style="font-weight: 900;">Opciones</div>
			<div class="column-table-programa-contenido"><i class="fa fa-pencil btn-editar-programa" id="'.$programa['programa_id'].'" style="margin:auto; color:orange; cursor:pointer;"></i><i class="fa fa-trash btn-eliminar-programa" id="'.$programa['programa_id'].'" style="margin:auto; color:red; cursor:pointer;"></i></div>';
		}
		?>
		
	</div>
</div>
<script>
	$(".btn-editar-programa").click(function(){
var id_programa = $(this).attr("id");
$(".codigo_programa").val(id_programa);
$(".btn-editar-programa-envio").click();
	});

	$(".btn-eliminar-programa").click(function(){
var id_programa = $(this).attr("id");
$(".codigo_programa").val(id_programa);


var mensaje;
     var opcion = confirm("Deseas eliminar este elemento");
     if (opcion == true) {
       ajax_borrar_programa(id_programa);
     } else {
      //alert("Cancelado");
    }

	});


	function ajax_borrar_programa(id_programa){
 $.ajax({
                data:  { tipo_peticion:26 , programa_id:id_programa}, //datos que se envian a traves de ajax
                url:   '../../controller/enrutador/route.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                	//$(".respuesta").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                	//$(".david").html(response);


                	$(".contenedor-ajustado").load("tabla_programas.php");
                  //alert("Borrar");
                }
              });
	};
</script>
<form action="editar_programa.php" method="post" style="display: none">
	<input type="hidden" name="programa_id" class="codigo_programa">
	<input type="submit" class="btn-editar-programa-envio">
</form>
