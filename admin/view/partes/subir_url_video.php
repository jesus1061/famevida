<form action="../../controller/enrutador/route.php" enctype="multipart/form-data" method="post">
		<div class="encabezado-formulario">
 		Cargar videos al servidor por url
 	</div>
			<div class="form-group">
				<input type="hidden" name="tipo_peticion" value="9" id="peticion_url">
				<br>
				<br>
				<label for="" class="label-archivo campos-archivo">Nombre del archivo a cargar</label>
				<br><br>
				<input type="text" class="nombre_archivo campos-archivo " id="nombre_archivo_texto" name="nombre_archivo" placeholder="Nombre del archivo" required maxlength="19">
				
				<br><br>
			</div>
			

			<div class="form-group">

				<label for="" class="label-archivo campos-archivo">Seleccionar archivo a cargar</label>
				<br><br>
				<input type="text" class="nombre_archivo  campos-archivo" name="url" required title="1" placeholder="Escriba el iframe del video aqui"  ><br><br>
				
				


			</div>
			<div class="form-group">


				<br>
				<button type="submit" class="nombre_archivo campos-archivo" id="subir-archivo-file-btn" >Subir video</button>
				<br><br>
			</div>
		</form>
		<script>
			
		</script>