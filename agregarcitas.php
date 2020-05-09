<?php session_start();
	if(!isset($_SESSION['usuario'])){
	header('Location: login.php');
	}
	
	require 'funciones.php';
	
	try{
		$conexion = new PDO('mysql:host=localhost;dbname=u653664851_eingreso','u653664851_eingreso','libertadores');
	}catch(PDOException $e){
		echo "ERROR: " . $e->getMessge();
		die();
	}

if($_SERVER['REQUEST_METHOD']=='POST'){
	$fecha = $_POST['fecha'];
	$hora = $_POST['hora'];
	$paciente =  $_POST['paciente'];
	$medico =  $_POST['medico'];
	$consultorio =  $_POST['consultorio'];
	$estado =  $_POST['estado'];
	$observaciones =  $_POST['observaciones'];
	$mensaje='';
	if(empty($fecha) or empty($hora)  or empty($consultorio) or empty($paciente) or empty($estado)or empty($medico)){
		$mensaje.= 'Por favor rellena todos los datos correctamente'."<br />";
	}
	else{	
		try{
			$conexion = new PDO('mysql:host=localhost;dbname=u653664851_eingreso','u653664851_eingreso','libertadores');
		}catch(PDOException $e){
			echo "Error: ". $e->getMessage();
			die();
		}
	}
	if($mensaje==''){
		$statement = $conexion->prepare(
		'INSERT INTO citas values(null, :fecha,:hora,:paciente,:medico,:consultorio,:estado,:observaciones)');

		$statement ->execute(array(
		':fecha'=>$fecha,
		':hora'=>$hora,
		':paciente'=>$paciente,
		':medico'=>$medico,
		':consultorio'=>$consultorio,
		':estado'=>$estado,
		':observaciones'=>$observaciones
		));
		header('Location: citas.php');
	}
}
require 'vista/agregarcitas_vista.php';
?>