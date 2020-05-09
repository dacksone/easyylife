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
SELECT Nombres,Apellidos,Usuario,r.Descripcion as Roll
FROM usuarios s
INNER JOIN role r ON r.IdRole = s.IdRole
LIMIT 5");

$consulta ->execute();
$consulta = $consulta ->fetchAll();
if(!$consulta){
	$mensaje .= 'NO HAY USUARIOS PARA MOSTRAR';
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
					
						<table class="tabla">
						  <tr>
							<th style="text-align: center" >Nombres</th>
							<th style="text-align: center" >Apellidos</th>
              <th style="text-align: center" >Usuario</th>
							<th style="text-align: center" >Perfil de usuario</th>
                            <th colspan="2">Opciones</th>
						  </tr>
						<?php foreach ($consulta as $Sql): ?>
						<tr>
							<?php echo "<td>". $Sql['Nombres']. "</td>"; ?>
              <?php echo "<td>". $Sql['Apellidos']. "</td>"; ?>
              <?php echo "<td>". $Sql['Usuario']. "</td>"; ?>
              <?php echo "<td>". $Sql['Roll']. "</td>"; ?>
              <?php echo "<td class='centrar'>"."<a href='actualizarusuario.php?id=".$Sql['IdUsuario']."' class='btn btn-success'><i class='fas fa-edit'></i>  Editar</a>". "</td>"; ?>
						  <?php echo "<td class='centrar'>"."<a href='eliminar_usuario.php?id=".$Sql['IdUsuario']."' class='btn btn-danger'><i class='far fa-trash-alt'></i>  Eliminar</a>". "</td>"; ?>
						</tr>
						<?php endforeach; ?>
          </table>
          <div class="bAgregar">
            <a class="btn btn-outline-info" href="registrarusuarios.php">Agregar Usuarios</a>
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
