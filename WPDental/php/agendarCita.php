<?php
	include("conexion.php");
	
	if(isset($_POST['btnAgendar'])){
		if(strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['sexo']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['tel']) >= 1 && strlen($_POST['consulta'])){
			$nombre = trim($_POST['nombre']);
			$apellido = trim($_POST['apellido']);
			$sexo = trim($_POST['sexo']);
			$correo = trim($_POST['correo']);
			$tel = trim($_POST['tel']);
			$consulta = trim($_POST['consulta']);
			$fechareg = date("d/m/y");
			$query = "INSERT INTO tblcitas(Nombre, Apellido, Sexo, Correo, Tel, Consulta, fechaRegistro) VALUES ('$nombre','$apellido','$sexo','$correo','$tel','$consulta', '$fechareg')";
			$resultado = mysqli_query($conex,$query);

			if($resultado){
				?>
					echo '<script type="text/javascript">
    				alert("¡Cita agendada!");
    				window.location.href="index.html";
    				</script>';
				<?php
			}else {
				?>
					echo '<script type="text/javascript">
    				alert("¡Ups ha ocurrido un error!");
    				window.location.href="agendar-cita.php";
    				</script>';
				<?php
			}

		} else {
			?>
				echo '<script type="text/javascript">
    				alert("¡Por favor complete los campos!");
    				window.location.href="agendar-cita.php";
    				</script>';
			<?php	
		}
	}

?>