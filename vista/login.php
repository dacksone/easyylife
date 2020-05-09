<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=decive-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
    <title>Iniciar - Easy Life</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
        <img class="wave" src="img/wave.png">
    <div class="container">
      <div class="img">
        <img src="img/bg.svg">
      </div>
      <div class="login-content">
        <form class="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" name="login">
          <img src="img/avatar.svg">
          <h2 class="title">BIENVENIDO</h2>
                <div class="input-div one">
                  <div class="i">
                      <i class="fas fa-user"></i>
                  </div>
                  <div class="div">
                      <h5>Usuario</h5>
                      <input type="text" name="usuario" class="input">
                  </div>
                </div>
                <div class="input-div pass">
                  <div class="i"> 
                      <i class="fas fa-lock"></i>
                  </div>
                  <div class="div">
                      <h5>Contraseña</h5>
                      <input type="password" name="password" class="input">
                  </div>
                </div>
                <a href="#">EasyLife</a>
                <input type="submit" class="btn" value="Ingresar">

            <?php  if(!empty($errores)): ?>
              <ul>
                <?php echo $errores; ?>
              </ul>
            <?php  endif; ?>
          </form>
        </div>
      </div>
      <script type="text/javascript" src="js/main.js"></script>

</body>
</html>