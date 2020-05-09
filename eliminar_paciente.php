<?php
	$errores='';
	extract ($_REQUEST);
	try{
		$conexion = new PDO('mysql:host=localhost;dbname=u653664851_eingreso','u653664851_eingreso','libertadores');
	}catch(PDOException $e){
		echo "Error: ". $e->getMessage();
	}
	$sql="DELETE FROM Paciente WHERE IdPaciente = '$_REQUEST[idPaciente]'";
	$resultado = $conexion->query($sql);

	if($resultado == true){
		header('Location: Pacientes.php');
		$errores .='Paciente eliminado correctamente';
	}
?>