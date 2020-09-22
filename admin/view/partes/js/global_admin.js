$(document).ready(function(){

	
	
	//$(".item-option-sub").hide();
	var foco =$(".foco").val();
	//alert(foco);
	if(foco == 1){
		$(".contenedor-ajustado").load("archivos_multimedia.php");
	}
	if(foco == 2){
		$(".contenedor-ajustado").load("crear_slider.php");
	}
	if(foco == 3){
		$(".contenedor-ajustado").load("tabla_banners.php");
	}
	if(foco == 4){
		$(".contenedor-ajustado").load("crear_album.php");
	}
	if(foco == 5){
		$(".contenedor-ajustado").load("crear_elemento_galeria.php");
	}
	if(foco == 6){
		$(".contenedor-ajustado").load("ver_albumnes.php");
	}
	if(foco == 7){
		$(".contenedor-ajustado").load("formulario.php");
	}
	if(foco == 8){
		$(".contenedor-ajustado").load("tabla_publicaciones.php");
	}
	if(foco == 9){
		$(".contenedor-ajustado").load("crear_programa.php");
	}
	if(foco == 10){
		$(".contenedor-ajustado").load("tabla_programas.php");
	}
	if(foco == 11){
		$(".contenedor-ajustado").load("crear_talento.php");
	}
	if(foco == 12){
		$(".contenedor-ajustado").load("ver_talento.php");
	}
	if(foco == 13){
		$(".contenedor-ajustado").load("subir_archivos.php");
	}

	if(foco == 14){
		$(".contenedor-ajustado").load("tabla_contactos.php");
	}

	
	$("#subir-archivos").click(function(){
		$(".contenedor-ajustado").load("subir_archivos.php");
		ajax_foco(13);
	});

	$("#ver-archivos").click(function(){
		$(".contenedor-ajustado").load("archivos_multimedia.php");
		ajax_foco(1);
	});

	$("#agregar_slider").click(function(){
		$(".contenedor-ajustado").load("crear_slider.php");
		ajax_foco(2);
	});

	$("#ver_elementos_slider").click(function(){
		$(".contenedor-ajustado").load("tabla_banners.php");
		ajax_foco(3);
	});
	$("#crear_album").click(function(){
		$(".contenedor-ajustado").load("crear_album.php");
		ajax_foco(4);
	});

	$("#crear_elemento_album").click(function(){
		$(".contenedor-ajustado").load("crear_elemento_galeria.php");
		ajax_foco(5);
	});

	$("#ver-album").click(function(){
		$(".contenedor-ajustado").load("ver_albumnes.php");
		ajax_foco(6);
	});

	$("#crear-blog").click(function(){
		$(".contenedor-ajustado").load("formulario.php");
		ajax_foco(7);
	});

	$("#ver-blog").click(function(){
		//alert("Hola");
		$(".contenedor-ajustado").load("tabla_publicaciones.php");
		ajax_foco(8);
	});

	$("#crear-programa").click(function(){
		$(".contenedor-ajustado").load("crear_programa.php");
		ajax_foco(9);
	});

	$("#ver-programas").click(function(){
		$(".contenedor-ajustado").load("tabla_programas.php");
		ajax_foco(10);
	});

	$("#crear-talento").click(function(){
		$(".contenedor-ajustado").load("crear_talento.php");
		ajax_foco(11);
	});

	$("#ver-talento").click(function(){
		$(".contenedor-ajustado").load("ver_talento.php");
		ajax_foco(12);
	});

	$("#ver-contactos").click(function(){
		$(".contenedor-ajustado").load("tabla_contactos.php");
		ajax_foco(14);
	});


	function ajax_foco(foco){

		$.ajax({
                data:  {tipo_foco:foco}, //datos que se envian a traves de ajax
                url:   '../../controller/enrutador/crear_foco.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                	//$(".respuesta").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                	$("#foco").html(response);


                	//$(".contenedor-ajustado").load("tabla_programas.php");
                  //alert("Borrar");
              }
          });

	};

	

	
	


});