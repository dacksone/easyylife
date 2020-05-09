<!DOCTYPE html>
<html lang>

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
                  <span class="title">Medicos</span>
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
                <a href="usuarios.php" title="Usuarios" class="active">
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
						<h2>REGISTRAR USUARIOS</h2>
					</div>
					<form class="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" name="login">
                    <h2></h2><br/>
                      <div class="form-group">
                        <label class="col-lg-4 control-label"><Strong>Nombres</Strong></label>
                          <div class="col-md-8">
                            <input class="form-control" type="text" name="usuario"placeholder="Usuario" autofocus/>
                          </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-4 control-label"><Strong>Apellidos</Strong></label>
                          <div class="col-md-8">
                          <input class="form-control" type="text" name="apellidos"placeholder="Apellidos" autofocus/>
                          </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-4 control-label"><Strong>Usuario</Strong></label>
                          <div class="col-md-8">
                          <input class="form-control" type="text" name="usuario"placeholder="Nombre de Usuario" autofocus/>
                          </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-4 control-label"><Strong>Contraseña</Strong></label>
                          <div class="col-md-8">
                          <input class="form-control" type="text" name="contraseña"placeholder="Contraseña" autofocus/>
                          </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-4 control-label"><Strong>Confirme su contraseña</Strong></label>
                          <div class="col-md-8">
                          <input class="form-control" type="text" name="confirme su contraseña"placeholder="Confirme su contraseña" autofocus/>
                          </div>
                      </div>
                      <div class="form-group">
                      <label class="col-lg-4 control-label"><strong>Roll</strong></label>
                          <div class="col-md-8">
                              <select class="col-md-8 btn-sm" name="roll">
                                <option value="admin">Admin</option>
                                <option value="Limitado">Limitado</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-8"> 
                        <a href="#" class="btn btn-primary btn-lg btn-block btn-sm">Registrar</a>
                      </div> 
                    <?php  if(!empty($errores)): ?>
                      <ul>
                          <?php echo $errores; ?>
                      </ul>
                    <?php  endif; ?>
          </form>	
				</article>
      </div> 
  </div> 
</div>	
</body>
</html>
