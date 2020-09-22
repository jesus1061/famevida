<?php
include_once "../../controller/blog/blog_front_page_controller.php";
extract($_POST);
$instancia = new Blog_front_page_controller();
$peticion_galeria = $instancia -> listar_fotos_galeria_album_front_page_controller($album_id);

//print_r($_POST);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="A touchable jQuery lightbox plugin for desktop, mobile and tablet" />
	<meta property="og:site_name" content="Swipebox" />
	<meta property="og:url" content="http://brutaldesign.github.com/swipebox/" />
	<meta property="og:image" content="http://swipebox.csag.co/images/swipe250.jpg" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Swipebox | A touchable jQuery lightbox" />
	<meta property="og:description" content="Swipebox is a jQuery lightbox plugin for desktop, mobile and tablet">
	<meta itemprop="name" content="Swipebox | A touchable jQuery lightbox">
	<meta itemprop="image" content="http://swipebox.csag.co/images/swipe250.jpg">
	<meta itemprop="description" content="Swipebox is a jQuery lightbox plugin for desktop, mobile and tablet">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Merriweather:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="css/bagpakk.min.css">
	<link rel="stylesheet" href="css/style-gallery.css">
	<link rel="stylesheet" href="css/swipebox.css">
	<link rel="stylesheet" href="css/new.css">
	<title>Galeria Famev</title>
	<!-- share buttons -->
	<script type="text/javascript">(function(doc, script) {
		var js, 
		fjs = doc.getElementsByTagName(script)[0],
		add = function(url, id) {
			if (doc.getElementById(id)) {return;}
			js = doc.createElement(script);
			js.src = url;
			id && (js.id = id);
			fjs.parentNode.insertBefore(js, fjs);
		};add("//connect.facebook.net/en_US/all.js#xfbml=1", "facebook-jssdk");
		add("//platform.twitter.com/widgets.js", "twitter-wjs");
	}(document, "script"));
</script>

<style>
	body{background-image: url("images/banner3.jpg"); background-size: cover;}
	.cont{box-shadow: 0px 0px 0px 0px rgba(0,0,0,0.75);}
</style>

</head>
<body>
	
	
	

	<section  class="container" id="container-galeria-seleccionada" style="background-color: rgb(255,255,255,0.70); padding-top: 20px; padding-bottom: 20px;">
		<div class="title-section">
				<h4  class="titulo_seccion" style="color:#0a8e5f;">AlBÚM FOTOGRÁFICO</h4>
			</div>
		<div class="cont">

			<ul id="box-container">

				<?php
				foreach($peticion_galeria as $elemento_galeria){
					echo '<div class="caja">
					<div class="con" style="box-shadow: 0px 0px 0px 0px rgba(0,0,0,0.75)">
					<a href="" class="swipebox" title="'.$elemento_galeria["contenido_galeria_nombre"].'">
					'.$elemento_galeria["contenido_galeria_foto"].'
					</a>
					</div>
					</div>';
				}
				?>
				
				
			</ul>
		</div>
	</section>


	

	
	


	
	<script src="js/ios-orientationchange-fix.js"></script>
	<script src="js/jquery-2.1.0.min.js"></script>
	<script src="js/jquery.swipebox.js"></script>
	<script type="text/javascript">
		$( document ).ready(function() {

			/* Basic Gallery */
			$( '.swipebox' ).swipebox();
			
			/* Video */
			$( '.swipebox-video' ).swipebox();

			/* Dynamic Gallery */
			$( '#gallery' ).click( function( e ) {
				e.preventDefault();
				$.swipebox( [
					{ href : 'http://swipebox.csag.co/mages/image-1.jpg', title : 'My Caption' },
					{ href : 'http://swipebox.csag.co/images/image-2.jpg', title : 'My Second Caption' }
					] );
			} );

		});
	</script>
	<script>


		$(".img-archivo").each(function(){
			var src = $(this).attr("src");

			name = src.toLowerCase();

			if (name.includes('https://')){
				//alert("Es verdad");
				$(this).parent().attr("href",src);
			}
			else{
				//alert(src);
				var archivo_convertido = src.substring(6);
				
				
				$(this).attr("src","../../../admin/"+archivo_convertido);
				$(this).parent().attr("href","../../../admin/"+archivo_convertido);

				
			}
		});

		
	</script>
</body>

</html>
