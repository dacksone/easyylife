<!DOCTYPE html>
<html>
<?php
$mensaje='';
try{
	$conexion = new PDO('mysql:host=localhost;dbname=u653664851_eingreso','u653664851_eingreso','libertadores');
}catch(PDOException $e){
	echo "Error: ". $e->getMessage();
}

$consulta = $conexion -> prepare("
SELECT IdCita,FechaCita,HoraCita,CONCAT(p.Nombre,' ',p.Apellidos) as Paciente,
CONCAT(m.Nombre,' ',m.Apellidos) as Medico,c.NombreConsultorio as Consultorio,
a.Descripcion as Estado
FROM citas ci 
INNER JOIN paciente p ON p.IdPaciente = ci.IdPaciente
INNER JOIN medicos m ON m.IdMedico = ci.IdMedico
INNER JOIN consultorios c ON c.IdConsultorio = ci.IdConsultorio
INNER JOIN atencion a ON a.IdAtencion = ci.IdAtencion
WHERE ci.IdAtencion = 1 ORDER BY IdCita LIMIT 5");

$consulta ->execute();
$consulta = $consulta ->fetchAll();
if(!$consulta){
	$mensaje .= 'NO HAY CITAS PARA MOSTRAR';
}
?>
<?php include 'plantillas/header.php'; ?>
    
  <div class="main_container">
      <div class="sidebar">
          <div class="sidebar__inner">
            <ul>
              <li>
                <a href="CenterMedicine.php" >
                  <span class="icon"><i class="fab fa-battle-net"></i></span>
                  <span class="title">Easy Life</span>
                </a>
              </li>
              <li>
                <a href="citas.php" title="Citas" class="active">
                  <span class="icon"><i class="far fa-calendar-alt"></i></span>
                  <span class="title">Citas</span>
                </a>
              </li>
              <li>
                <a href="medicos.php" title="Medicos">
                  <span class="icon"><i class="fas fa-user-md"></i></span>
                  <span class="title">Médicos</span>
                </a>
              </li>
              <li>
                <a href="pacientes.php" title="Pacientes">
                  <span class="icon"><i class="fas fa-user-injured"></i></span>
                  <span class="title">Pacientes</span>
                </a>
              </li>
              <li>
                <a href="consultorios.php" title="Consultorios">
                  <span class="icon"><i class="far fa-hospital"></i></span>
                  <span class="title">Consultorios</span>
                </a>
              </li>
              <li>
                <a href="especialidades.php">
                  <span class="icon"><i class="fas fa-lungs-virus"></i></span>
                  <span class="title">Especialidades</span>
                </a>
              </li>
              <li>
                <a href="usuarios.php" title="Usuarios">
                  <span class="icon"><i class="far fa-address-book"></i></span>
                  <span class="title">Usuarios</span>
                </a>
              </li>
              <li>
                <a href="#" title="Reportes">
                  <span class="icon"><i class="fas fa-book-reader"></i></span>
                  <span class="title">Reportes</span>
                </a>
              </li>
            </ul>
          </div>
      </div>
      <div class="container">
				<article>
					<div class="mensaje">
						<h2>CITAS</h2>
					</div>

					<table class="tabla">
						  <tr>
							<th style="text-align: center">#</th>
							<th style="text-align: center">Fechas</th>
							<th style="text-align: center">Hora</th>
							<th style="text-align: center">Paciente</th>
							<th style="text-align: center">Médico</th>
							<th style="text-align: center">Consultorio</th>
							<th style="text-align: center">Estado</th>
							<th style="text-align: center" colspan="2">Opciones</th>
						  </tr>
						<?php foreach ($consulta as $Sql): ?>
						<tr>
						<?php echo "<td class='mayusculas'>". $Sql['IdCita']. "</td>"; ?>
						<?php echo "<td class='mayusculas'>". $Sql['FechaCita']. "</td>"; ?>
						<?php echo "<td class='mayusculas'>". $Sql['HoraCita']. "</td>"; ?>
						<?php echo "<td class='mayusculas'>". $Sql['Paciente']. "</td>"; ?>
						<?php echo "<td class='mayusculas'>". $Sql['Medico']. "</td>"; ?>
						<?php echo "<td class='mayusculas'>". $Sql['Consultorio']. "</td>"; ?>
						<?php echo "<td class='mayusculas'>". $Sql['Estado']. "</td>"; ?>
            <?php echo "<td class='centrar'>"."<a href='actualizarcitas.php?IdCita=".$Sql['Idcita']."' class='btn btn-success'><i class='fas fa-edit'></i>  Editar</a>". "</td>"; ?>
						<?php echo "<td class='centrar'>"."<a href='eliminar_citas.php?Idcita=".$Sql['Idcita']."' class='btn btn-danger'><i class='far fa-trash-alt'></i>  Eliminar</a>". "</td>"; ?>
						</tr>
						<?php endforeach; ?>
            </table>
            <div class="bAgregar">
            <a class="btn btn-outline-info" href="agregarcitas.php">Agregar Citas</a>
            </div>
						<?php  if(!empty($mensaje)): ?>
							<ul>
							  <?php echo $mensaje; ?>
							</ul>
						<?php  endif; ?>	 
				</article>
      </div> 
  </div> 
</div>	
</body>
</html>
