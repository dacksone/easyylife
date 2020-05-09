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
						<h2>EDITAR MÉDICO</h2>
					</div>
					<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
						<h2></h2>
              <div class="form-group">
                  <label class="col-lg-4 control-label"><Strong>Identificación</Strong></label>
                  <div class="col-md-8">
                    <input class="form-control" type="numeric" name="identificacion" placeholder="Identificación" value="<?php echo $medico['Documento'];?>" requerid>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-4 control-label"><Strong>Nombres</Strong></label>
                  <div class="col-md-8">
                    <input class="form-control" type="numeric" name="identificacion" placeholder="Nombres" value="<?php echo $medico['Nombre'];?>" requerid>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-4 control-label"><Strong>Apellidos</Strong></label>
                  <div class="col-md-8">
                    <input class="form-control" type="numeric" name="identificacion" placeholder="Apellidos" value="<?php echo $medico['Apellido'];?>" requerid>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-4 control-label"><Strong>Correo</Strong></label>
                  <div class="col-md-8">
                    <input class="form-control" type="numeric" name="identificacion" placeholder="Correo" value="<?php echo $medico['Email'];?>" requerid>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-4 control-label"><Strong>Teléfono</Strong></label>
                  <div class="col-md-8">
                    <input class="form-control" type="numeric" name="identificacion" placeholder="Teléfono" value="<?php echo $medico['Telefono'];?>" requerid>
                  </div>
              </div>

						<input type="hidden" name="id" value="<?php echo $medico['IdMedico'];?>" />

            <div class="form-group">
                <label class="col-lg-4 control-label"><Strong>Especialidad</Strong></label>
                  <div class="card-body d-flex justify-content-between align-items-center">
                      <select class="col-md-8 btn-sm">
                        <option value="<?php echo $medico['IdEspecialidad'];?>"><?php echo $medico['IdEspecialidad'];?></option>
                      </select>  
                    </div>
              </div>
              <input class="btn btn-primary btn-sm" type="submit" name="enviar" value="Actualizar"> <a class="btn btn-outline-dark  btn-sm" href="medicos.php">Regresar</a>
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
