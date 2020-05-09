<?php session_start();
if(isset($_SESSION['usuario'])){
	require 'vista/index.php';
}else{
	header('Location: login.php');
}
?>