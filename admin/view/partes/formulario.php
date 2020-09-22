 <?php
 include_once "../../controller/blog/blog_controller.php";
 $instancia = new Blog_controller();
 $peticion_controlador = $instancia -> listar_archivos_controller();




 ?>
 <div class="widget-content nopadding" id="formulario-blog">
  <form action="../../controller/enrutador/route.php" method="post" class="formulario">
    <div class="encabezado-formulario">
    Creación de blog
  </div>
    <div class="form-control" style="display: none;">

      <input type="text" id="tipo_peticion" placeholder="Titulo de la publicación" value="1" required="on" autofocus="on" class="input-form" name="tipo_peticion" readonly="on" >
      

    </div>

    <div class="form-control">
      <label for="" class="label-form">Titulo de publicación</label>
      <br>
      <br>
      <input type="text" class="input-form" id="titulo_pub"  name="titulo_pub" required>


    </div>
    <div class="form-control">
      <label for="" class="label-form">Contenido de la publicación</label>
      <br>
      <br>
      <textarea name="contenido_pub" id="contenido_publi" class="input-textarea contenido_publi" required></textarea>

    </div>
    <div class="form-control">
      <label for="" class="label-form">Autor de la publicación</label>
      <br>
      <br>
      <input type="text" placeholder="Administrador" value="Administrador" name="autor_pub" required autofocus="on" class="input-form" readonly="on">

    </div>



    
    <div class="form-control">
      <label for="" class="label-form">Portada de la publicación</label>
      <br>
      <br>
      <input type="text" id="btn-abrir-multimedia" name="portada_pub" placeholder="Seleccionar archivo multimedia"   required  class="input-form"  style="background-color: gray; color: white; font-weight: 900; cursor: pointer" >

      <div class="container-imagenes">
        <div class="archivos">
           <div class="encabezado-formulario">
    Listado de archivos precargados 
  </div>
         <?php
            foreach($peticion_controlador as $archivo){
      echo "<div class='archivo' rel='".$archivo['ruta_basica']."' title='".$archivo['procedencia']."'>
      <div class='cont-archivo' id='".$archivo['id_archivo']."'>
      
      ".$archivo['archivo']."
      <br>
      <span class='nombre-archivo-label'>".$archivo['nombre_archivo']."</span>
     
      <br>
      
      </div>
      </div>";
    }
        ?>






      </div>
    </div>


  </div>




  
  <center><input type="submit" id="btn-activar-formulario" value="Crear publicación" style="display:block;"></center> 
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
