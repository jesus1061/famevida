<?php
include_once "../../controller/blog/blog_controller.php";
$instancia = new Blog_controller();
$peticion_controlador = $instancia -> listar_archivos_controller();
if($peticion_controlador == null){
echo "<script>alert('No hay archivos en el servidor');</script>";
}
?>
<div class="archivos-multimedia-container">

	
	<div class="archivos">
    <div class="encabezado-formulario">
      Listado de archivos cargados en el servidor
    </div>
    <?php

    foreach($peticion_controlador as $archivo){
      echo "<div class='archivo' rel='".$archivo['ruta_basica']."' title='".$archivo['procedencia']."'>
      <div class='cont-archivo' id='".$archivo['id_archivo']."'>

      ".$archivo['archivo']."
      <br>
      <span class='nombre-archivo-label'>".$archivo['nombre_archivo']."</span>

      <br>

      <div class='opciones-archivo'>
      <i class='fa fa-trash' id='btn-borrar-archivo' title='".$archivo['id_archivo']."'></i>

      </div>
      
      </div>
      </div>
      ";

    }
    ?>

    




  </div>	
</div>
<script>
	$(document).ready(function(){
		
$(".item-option-sub").click(function(){

$('html, body').animate({
 scrollTop: $(".contenedor-ajustado").offset().top-20
 }, 1000);
  });
    /*Borrar archivo*/
    $(".fa-trash").click(function(){
     var id_archivo = $(this).attr("title");
     var ruta = $(this).next().val();


     var mensaje;
     var opcion = confirm("Deseas eliminar este archivo");
     if (opcion == true) {
       ajax_borrar(id_archivo , ruta);
     } else {
      //alert("Cancelado");
    }




  });

    function ajax_borrar(id_archivo_arg , arg_ruta){

     $.ajax({
                data:  { tipo_peticion:5 , archivo:id_archivo_arg , ruta:arg_ruta}, //datos que se envian a traves de ajax
                url:   '../../controller/enrutador/route.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                	//$(".respuesta").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                	$(".david").html(response);


                	$(".contenedor-ajustado").load("archivos_multimedia.php");
                  //alert("Borrar");
                }
              });
   };


 });
</script>
