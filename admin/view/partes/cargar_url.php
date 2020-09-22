<div class="archivos-multimedia-container-subida">
	<div class="title-seccion-admin">
		<h3>Cargar URL  externa</h3>
	</div>
	<div class="archivos-subida">
		
		<form action="../../controller/enrutador/route.php" enctype="multipart/form-data" method="post">

			<div class="form-group">
				<input type="hidden" name="tipo_peticion" value="6" id="peticion_url">
				<label for="" class="label-archivo campos-archivo">Nombre del archivo</label>
				<br><br>
				<input type="text" class="nombre_archivo campos-archivo " placeholder="Nombre del archivo " id="nombre_archivo_texto" name="nombre_archivo" required>
				<br><br>
			</div>

			<div class="form-group">
				<input type="hidden" name="tipo_peticion" value="6" >
				<label for="" class="label-archivo campos-archivo">Url del archivo externo</label>
				<br><br>
				<input type="text" class="nombre_archivo campos-archivo " placeholder="Url " id="nombre_archivo_texto" name="ruta_archivo" required>
			</div>

			<div class="form-group">


				<br>
				<button type="submit" class="nombre_archivo campos-archivo"   id="subir-archivo-file-btn">Cargar</button>
				<br><br>
			</div>
		</form>


	</div>	
</div>