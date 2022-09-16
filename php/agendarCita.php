<?php
include("conexion.php");

if (isset($_POST['btnAgendar'])) {
	if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['sexo']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['tel']) >= 1 && strlen($_POST['fechaConsulta']) >= 1 && strlen($_POST['consulta'])) {
		$nombre = trim($_POST['nombre']);
		$apellido = trim($_POST['apellido']);
		$sexo = trim($_POST['sexo']);
		$correo = trim($_POST['correo']);
		$tel = trim($_POST['tel']);
		$fechaConsulta = trim($_POST['fechaConsulta']);
		$consulta = trim($_POST['consulta']);
		$fechareg = date("Y-m-d");

		$resulCitas = mysqli_query($conex, "SELECT Correo FROM TCitas WHERE Correo = '$correo' AND Nombre = '$nombre' AND Tel = '$tel'");

		$contadorCita = mysqli_num_rows($resulCitas);
		$subject = "Nueva cita registrada";
		$message = "Nombre(s)/First name: $nombre\n Apellidos/Last name: $apellido\n Sexo/Gender: $sexo\n Correo/Email: $correo\n Número telefónico/Phone number: $tel\n Fecha de la consulta deseada/Consultation date: $fechaConsulta\n Motivo de consulta/Consult reason: $consulta\n Cita creada el/Consult created on: $fechareg";
		$sender = "De: $nombre - $correo";
		if ($contadorCita == 0) {
			mail("lfernandomc16@gmail.com, $correo", $subject, $message, $sender);
			$insertar = mysqli_query($conex, "INSERT INTO TCitas(Nombre, Apellido, Sexo, Correo, Tel, FechaConsulta, Consulta, fechaRegistro) VALUES ('$nombre','$apellido','$sexo','$correo','$tel', '$fechaConsulta', '$consulta', '$fechareg')");
			$SUS = "¡Gracias $nombre, tu cita ha sido agendada!";
		} else {
			$YASUS = "¡$nombre, ya tienes una cita agendada!";
		}
	}
}
