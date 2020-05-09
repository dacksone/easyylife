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
                <a href="medicos.php" title="Medicos">
                  <span class="icon"><i class="fas fa-user-md"></i></span>
                  <span class="title">Médicos</span>
                </a>
              </li>
              <li>
                <a href="pacientes.php" title="Pacientes" class="active">
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
						<h2>AGREGAR PACIENTES</h2>
					</div>
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
								    <label class="col-lg-4 control-label"><strong>Fecha de Nacimiento </strong></label>
                    <div class="col-md-8">
                      <input type="date" class="form-control" name="fecha" placeholder="Fecha:" required/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-lg-4 control-label"><strong>Genéro</strong></label>
                        <select class="col-md-8 btn-sm" name="sexo">
                          <option value="Masculino">Masculino</option>
                          <option value="Femenino">Femenino</option> 
                        </select>
                    </div>
                </div>
                <div class="col-md-8"> 
                  <a href="#" class="btn btn-primary btn-lg btn-block btn-sm">Agregar Médico</a>
                </div> 
					</form>
						<?php  if(!empty($errores)): ?>
							<ul>
							  <?php echo $errores; ?>
							</ul>
						<?php  endif; ?>
				</article>
      </div> 
  </div> 
</div>	
</body>
</html>