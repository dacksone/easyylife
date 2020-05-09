<?php
	$mensaje='';
	extract ($_REQUEST);
	try{
		$conexion = new PDO('mysql:host=localhost;dbname=u653664851_eingreso','u653664851_eingreso','libertadores');
	}catch(PDOException $e){
		echo "Error: ". $e->getMessage();
	}
	$sql="DELETE FROM consultorios WHERE IdConsultorio = '$_REQUEST[IdConsultorio]'";
	$resultado = $conexion->query($sql);

	if($resultado == true){
		header('Location: consultorios.php');
		$mensaje .='Consultorio eliminado correctamente';
	}
?>