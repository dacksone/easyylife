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
$medicos = $conexion -> prepare("SELECT * FROM medicos");

$medicos ->execute();
$medicos = $medicos ->fetchAll();
if(!$medicos)
	$mensaje .= 'No hay médicos, por favor registre primero! <br />';
//SELECT PARA CONSULTORIOS
$consultorios = $conexion -> prepare("SELECT * FROM consultorios");

$consultorios ->execute();
$consultorios = $consultorios ->fetchAll();
if(!$consultorios)
	$mensaje .= 'No hay consultorios, por favor registre primero! <br />';
//SELECT PARA PACIENTES
$pacientes = $conexion -> prepare("SELECT * FROM pacientes");

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
						<h2>AGREGAR CITAS</h2>
          </div>
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="form-inline" method="post">
						<h2></h2>
						<form class="form-inline" role="form">
  							<div class="form-group">
								<label><strong>Fecha:</strong></label>
                        		<input type="date" class="form-control" name="fecha" placeholder="Fecha:" required/>
                    		</div>
  							<div class="form-group">
                        		<label><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Hora:</strong></label>
                        		<input type="time" class="form-control" name="hora" value="11:45" max="20:30" min="08:00" step="60" required>
                    		</div>
                    	</form>
                    	<div class="form-group">
                        <label><strong>Paciente:</strong></label>
                        <select name="paciente" class="form-control" class="mayusculas" required> 
	                        <?php foreach ($pacientes as $Sql2): ?>
							<?php echo "<option value='". $Sql2['pacNombre']. "'>". $Sql2['pacNombre']."</option>"; ?>
							<?php endforeach; ?>
                        </select>
                    	</div>
                    	<div class="form-group">
                        <label><strong>Médicos:</strong></label>
                        <select name="medico" class="form-control" class="mayusculas" required> 
	                        <?php foreach ($medicos as $Sql): ?>
							<?php echo "<option value='". $Sql['mednombres']. "'>". $Sql['mednombres']." ". $Sql['medapellidos']. "</option>"; ?>
							<?php endforeach; ?>
                        </select>
                    	</div>
                    	<div class="form-group">
                        <label><strong>Consultorios:</strong></label>
                        <select name="consultorio" class="form-control" class="mayusculas" required> 
	                        <?php foreach ($consultorios as $Sql2): ?>
							<?php echo "<option value='". $Sql2['conNombre']. "'>". $Sql2['conNombre']."</option>"; ?>
							<?php endforeach; ?>
                        </select>
                    	</div>
                        <div class="form-group">
                        <label><strong>Estado:</strong></label required>
                        <select name="estado" class="form-control">
                        	<option value="asignado">Asignado</option>
                        	<option value="atendido">Atendido</option>                    	
                        </select>
                    	</div>
                    	<div class="form-group">
                        <label><strong>Observaciones:</strong></label>
                        <textarea class="form-control" placeholder="Observación:" name="observaciones"></textarea>
                        </div>
                        <div class="col-md-8"> 
                        <a href="#" class="btn btn-primary btn-lg btn-block btn-sm">Agregar Consultorios</a>
                        </div> 					
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
