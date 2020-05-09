<?php
$mensaje='';
try{
	$conexion = new PDO('mysql:host=localhost;dbname=u653664851_eingreso','u653664851_eingreso','libertadores');
}catch(PDOException $e){
	echo "Error: ". $e->getMessage();
}

//CARGAR ESPECIALIDADES EN EL SELECT
$especialidad = $conexion -> prepare("SELECT * FROM especialidades");

$especialidad ->execute();
$especialidad = $especialidad ->fetchAll();
if(!$especialidad)
	$mensaje .= 'NO hay especialidades, por favor registre!';
?>
<!DOCTYPE html>
<html>
	
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
                <a href="citas.php" title="Citas">
                  <span class="icon"><i class="far fa-calendar-alt"></i></span>
                  <span class="title">Citas</span>
                </a>
              </li>
              <li>
                <a href="medicos.php" title="Medicos" class="active">
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
						<h2>AGREGAR MÉDICOS</h2>
					</div>
         </form>
					<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
						<h2></h2>
              <form class="form-inline" role="form">
                <div class="form-group">
                  <label class="col-lg-4 control-label"><Strong>Identificación</Strong></label>
                  <div class="col-md-8">
                    <input id="fname" name="name" type="text" placeholder="Identificación" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-4 control-label"><Strong>Nombres</Strong></label>
                  <div class="col-md-8">
                   <input id="lname" name="name" type="text" placeholder="Nombres" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-4 control-label"><Strong>Apellidos</Strong></label>
                  <div class="col-md-8">
                   <input id="lname" name="name" type="text" placeholder="Apellidos" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-4 control-label"><Strong>Correo</Strong></label>
                  <div class="col-md-8">
                   <input id="lname" name="name" type="text" placeholder="Correo" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-4 control-label"><Strong>Teléfono</Strong></label>
                  <div class="col-md-8">
                   <input id="lname" name="name" type="text" placeholder="Teléfono" class="form-control">
                  </div>
                </div>
                  <div class="form-group">
                    <label class="col-lg-4 control-label"><Strong>Seleccione</Strong></label>
                      <div class="card-body d-flex justify-content-between align-items-center">
                        <select class="col-md-8 btn-sm">
                          <?php foreach ($especialidad as $Sql): ?>
                          <?php echo "<option value='". $Sql['IdEspecialidad']. "'>". $Sql['Descripcion']. "</option>"; ?>
                          <?php endforeach; ?>
                        </select>  
                      </div>
                    </div>
                    <div class="col-md-8"> 
                  <a href="#" class="btn btn-primary btn-lg btn-block btn-sm">Agregar Médico</a>
                </div> 
              </form>
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