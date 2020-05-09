<!DOCTYPE html>
<html>
<?php
$mensaje='';
try{
	$conexion = new PDO('mysql:host=localhost;dbname=u653664851_eingreso','u653664851_eingreso','libertadores');
}catch(PDOException $e){
	echo "Error: ". $e->getMessage();
}
//SELECT PARA MEDICOS
$medicos = $conexion -> prepare("SELECT * FROM Medicos");

$medicos ->execute();
$medicos = $medicos ->fetchAll();
if(!$medicos)
	$mensaje .= 'No hay médicos, por favor registre primero! <br />';
//SELECT PARA CONSULTORIOS
$consultorios = $conexion -> prepare("SELECT * FROM Consultorios");

$consultorios ->execute();
$consultorios = $consultorios ->fetchAll();
if(!$consultorios)
	$mensaje .= 'No hay consultorios, por favor registre primero! <br />';
//SELECT PARA PACIENTES
$pacientes = $conexion -> prepare("SELECT * FROM Paciente");

$pacientes ->execute();
$pacientes = $pacientes ->fetchAll();
if(!$pacientes)
	$mensaje .= 'No hay pacientes, por favor registre primero! <br />';

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
					<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
						<h2>Agregar Citas</h2>
						<label>Fecha:</label>
						<input type="hidden" name="id" value="<?php echo $cita['IdCita'];?>" >
                        <input type="date" name="fecha" placeholder="Fecha:" value="<?php echo $cita['FechaCita'];?>" required/>
                        <label>Hora:</label>
                        <input type="time" name="hora" value="11:45" max="20:30" min="08:00" step="60" value="<?php echo $cita['HoraCita'];?>" required>
                        <label>Paciente:</label>
                        <select name="paciente" class="mayusculas" required>
                        	<option value="<?php echo $cita['IdPaciente'];?>"><?php echo $cita['IdPaciente'];?></option> 
	                        <?php foreach ($pacientes as $Sql2): ?>
							<?php echo "<option value='". $Sql2['Nombre']. "'>". $Sql2['Apellidos']."</option>"; ?>
							<?php endforeach; ?>
                        </select>
                        <label>Médicos:</label>
                        <select name="medico" class="mayusculas" required>
                        	<option value="<?php echo $cita['citMedico'];?>"><?php echo $cita['citMedico'];?></option>  
	                        <?php foreach ($medicos as $Sql): ?>
							<?php echo "<option value='". $Sql['mednombres']. "'>". $Sql['mednombres']." ". $Sql['medapellidos']. "</option>"; ?>
							<?php endforeach; ?>
                        </select>
                        <label>Consultorios:</label>
                        <select name="consultorio" class="mayusculas" required>
                        	<option value="<?php echo $cita['citConsultorio'];?>"><?php echo $cita['citConsultorio'];?></option> 
	                        <?php foreach ($consultorios as $Sql2): ?>
							<?php echo "<option value='". $Sql2['conNombre']. "'>". $Sql2['conNombre']."</option>"; ?>
							<?php endforeach; ?>
                        </select>
                        <label>Estado:</label required>
                        <select name="estado">
                        if (<?php echo $cita['citMedico'];?>=asignado){
                        	<option value="asignado">Asignado</option>
                        	<option value="atendido">Atendido</option> 
                        }
                        if (<?php echo $cita['citMedico'];?>=atendido){
                        	<option value="atendido">Atendido</option> 
                        	<option value="asignado">Asignado</option>
                        }
                                   	
                        </select>
                        <label>Observaciones:</label>
                        <textarea placeholder="Observacion:" name="observaciones" value="<?php echo $cita['citobservaciones'];?>"></textarea>
						<input type="submit" name="enviar" value="Agregar Consultorio">
					</form>
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



	