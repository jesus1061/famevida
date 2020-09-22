<div id="formulario-archivos">
	
	<div class="archivos-subida">
		<form action="../../controller/enrutador/route.php" enctype="multipart/form-data" method="post">
			<div class="encabezado-formulario">
				Formulario de carga de archivos al servidor
			</div>
			<div class="form-group">
				<br>
				<br>
				<input type="hidden" name="tipo_peticion" value="3" id="peticion_url">
				<label for="" class="label-archivo campos-archivo">Nombre del archivo a cargar</label>
				<br><br>
				<input type="text" class="nombre_archivo campos-archivo " id="nombre_archivo_texto" name="nombre_archivo" placeholder="Nombre del archivo" maxlength="19">
				<input type="file"  name="fileToUpload" id="inputFileServer"  accept="image/png/mp4"/>
				<br><br>
			</div>
			<div class="form-group">
				<input type="hidden" name="tipo_peticion" value="3" id="peticion_url">
				<label for="" class="label-archivo campos-archivo">Tipo de archivo</label>
				<br><br> 
				<select name="archivo" id="select" class="select" onchange="var valor_formulario = $(this).val();cambio_formulario(valor_formulario);">
					<option value="0">Seleccione tipo de archivo</option>
					<option value="1">Imagen interna</option>
					<option value="2">Imagen externa</option>
					<option value="3">Video externo</option>
				</select>
				
				<br><br>
			</div>

			<div class="form-group" id="seleccionador_archivo">

				<label for="" class="label-archivo campos-archivo">Seleccionar archivo a cargar</label>
				<br><br>
				<input type="text" class="nombre_archivo input-url campos-archivo" title="1" placeholder="Seleccione su archivo aqui" id="subir-archivo-file" readonly ><br><br>
				<input type="file" name="fileToUpload" id="btn-file" style="display:none" onchange="cambiarFile();">
				


			</div>
			<div class="form-group">


				<br>
				<button type="button" class="nombre_archivo campos-archivo"  id="subir-archivo-file-btn" onclick="var estado = $(this).attr('title');comprobar_estado();">Continuar</button>
				<br><br>
			</div>
		</form>


	</div>	
</div>
<script>
	var validar_nombre = 0;

	var validaar_file = 0;

	function cambio_formulario(valor_formulario){
		
		if(valor_formulario == 1){
			$("#seleccionador_archivo").css("display","block");
		}

		if(valor_formulario == 2){
			$(".archivos-subida").load("subir_url.php");
			

		}

		if(valor_formulario == 3){
			$(".archivos-subida").load("subir_url_video.php");
			

		}

	};

	$("#subir-archivo-file").click(function(){
		$("#btn-file").click();
	});

	function cambiarFile(){
		const input = document.getElementById('btn-file');
		if(input.files && input.files[0])
			var valor =    $(input).val();
		$("#subir-archivo-file").val(valor);
		validaar_file = 1;

	};

	function comprobar_estado(){

		if(validar_nombre == 1 && validaar_file == 1){

			$("#subir-archivo-file-btn").attr("type","submit");
			$("#subir-archivo-file-btn").click();

		} else{
			alert("Por favor diligenciar todos los datos");
		}

	};

	$("#nombre_archivo_texto").keyup(function(){
		var longitud = $(this).val().length;
		if(longitud > 0){
			validar_nombre = 1;

		}else{
			validar_nombre = 0;
		}

		
	});







	
</script>