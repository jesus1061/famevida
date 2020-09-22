$(document).ready(function(){

	$(".option-cont").hide();
	$(".w3-content").css("width","100%");

	$("#btn-abrir-menu").click(function(){
		$(".option-cont").toggle();
	});

	var ancho_ventana = $(window).width();
	//alert(ancho_ventana);
	
	if(ancho_ventana >= 778){
		$(".option-cont").show();
	} else{
		$(".option-cont").hide();
	}

	$(window).resize(function() { 

		var ancho_ventana_resize = $(window).width();

		if(ancho_ventana_resize >= 778){
			$(".option-cont").show();
		} else{
			$(".option-cont").hide();
		}
	}); 

	$("#video-vision").click(function(){
		$(this).replaceWith('<video src="images/capacitaciones.mp4" autoplay class="videos-famevida"></video>');
	});

	$("#video-mision").click(function(){
		$(this).replaceWith('<video src="images/capacitaciones.mp4" autoplay class="videos-famevida"></video>');
	});

	var poscicion_nosotros = document.getElementById('nosotros');
var posicion = poscicion_nosotros.getBoundingClientRect();
var top = posicion.top;

$("#enlace-nosotros").click(function(){
$('html, body').animate({
 scrollTop: $("#nosotros").offset().top-100
 }, 2000);

});

$("#enlace-nosotros").click(function(){
	var ancho_ventana2  = $(window).width();
if(ancho_ventana2 <601){
$(".option-cont").hide();
}
});
$("#enlace-programas").click(function(){


$('html, body').animate({
 scrollTop: $("#programas").offset().top-100
 }, 2000);
});
$("#enlace-programas").click(function(){
	var ancho_ventana2  = $(window).width();
if(ancho_ventana2 <601){
$(".option-cont").hide();
}
});

$("#enlace-contacto").click(function(){
$('html, body').animate({
 scrollTop: $("#contacto").offset().top-100
 }, 2000);
});

$("#enlace-contacto").click(function(){
	var ancho_ventana2  = $(window).width();
if(ancho_ventana2 <601){
$(".option-cont").hide();
}
});

$("#enlace-donaciones").click(function(){
$('html, body').animate({
 scrollTop: $("#donaciones").offset().top-100
 }, 2000);
});

$("#enlace-donaciones").click(function(){
	var ancho_ventana2  = $(window).width();
if(ancho_ventana2 <601){
$(".option-cont").hide();
}
});
$("#enlace-blog").click(function(){
$('html, body').animate({
 scrollTop: $("#blog").offset().top-100
 }, 2000);
});

$("#enlace-blog").click(function(){
	var ancho_ventana2  = $(window).width();
if(ancho_ventana2 <601){
$(".option-cont").hide();
}
});

$("#enlace-galeria").click(function(){
window.location.href = 'albumnes.php';
});

});