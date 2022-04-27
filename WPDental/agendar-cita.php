<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Agendar Cita</title>
	<!-- LINK CSS -->
	<link rel="stylesheet" type="text/css" href="css/AgendarCita.css">
	<!-- LINK ICONOS-->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
	
	<form method="post" class="wrapper">
		<div class="titulo">
			Agendar Cita
		</div>
		<div class="form">
			<div class="input_field">
				<label>Nombre(s)</label>
				<input type="text" class="input" name="nombre">
			</div>
			<div class="input_field">
				<label>Apellidos</label>
				<input type="text" class="input" name="apellido">
			</div>
			<div class="input_field">
				<label>Sexo</label>
				<div class="custom_select">					
					<select name="sexo">
						<option value="">Selecciona</option>
						<option name="Hombre" value="Hombre">Masculino</option>
						<option name="Mujer" value="Mujer">Femenino</option>
					</select>
				</div>
			</div>
			<div class="input_field">
				<label>Correo</label>
				<input type="email" class="input" name="correo">
			</div>
			<div class="input_field">
				<label>Número celular</label>
				<input type="text" class="input" name="tel">
			</div>
			<div class="input_field">
				<label>Motivo de la consulta</label>
				<textarea class="textarea" name="consulta"></textarea>
			</div>			
			<div class="input_field">
				<input type="submit" value="Agendar Cita" class="btn" name="btnAgendar">				
			</div>

			<div class="input_field">
				<a class="btn" href="index.html"><input type="button" class="btn" value="Inicio"></a>
			</div>

		</div>
	</form>
	<?php
		include("php/agendarCita.php");
	?>
</body>
</html>