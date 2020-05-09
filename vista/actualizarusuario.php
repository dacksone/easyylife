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
						<h2>USUARIOS</h2>
					</div>
					<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                        <h2>EDITAR USUARIOS</h2><br/>
                        <input type="hidden" name="id" value="<?php echo $user['IdUsuario'];?>">

                          <div class="form-group">
                                <label class="col-lg-4 control-label"><Strong>Usuario</Strong></label>
                                <div class="col-md-8">
                                <input class="form-control" type="text" name="usuario" placeholder="Usuario" value="<?php echo $user['Usuario'];?>" autofocus/>
                                </div>
                          </div>

                          
                          <input type="text" name="password" placeholder="Contraseña"/>
                          <input type="text" name="password2" placeholder="Repita la contraseña"/>
                          <input type="text" name="nombres" placeholder="Nombres" value="<?php echo $user['Nombres'];?>"/>
                          <input type="text" name="apellidos" placeholder="Apellidos" value="<?php echo $user['Apellidos'];?>"/>
                          <select name="roll">
                              <option value="1">Administrador</option>
                              <option value="2">Médico</option>
                              <option value="3">Empresa Solicitante</option>
                          </select>
                          <input type="submit" value="Registrar" />
                          <?php  if(!empty($errores)): ?>
                            <ul>
                                <?php echo $errores; ?>
                            </ul>
                          <?php  endif; ?>
                     </form>
                    <a class="btn-regresar" href="usuarios.php">Regresar</a>
				</article>
      </div> 
  </div> 
</div>	
</body>
</html>
