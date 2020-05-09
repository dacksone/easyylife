<head>
	<meta charset="UTF-8">
	<title>SideBar Menu</title>
	<link rel="stylesheet" href="Bootstrap_4/css/bootstrap.min.css">	
    <link rel="stylesheet" href="plugins/alertifyjs/css/alertify.min.css">  
	<link rel="stylesheet" href="plugins/alertifyjs/css/themes/default.min.css"/>  
    <link rel="stylesheet" href="css/estilos-menu.css">
	<link href="https://fonts.googleapis.com/css?family=Antic" rel="stylesheet">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="icon" type="image/x-icon" href="img/iconotb.png">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".hamburger .hamburger__inner").click(function(){
			  $(".wrapper").toggleClass("active")
			})

			$(".top_navbar .fas").click(function(){
			   $(".profile_dd").toggleClass("active");
			});
		})
	</script>
</head>

<body>

<div class="wrapper">
  <div class="top_navbar">
    <div class="hamburger">
       <div class="hamburger__inner">
         <div class="one"></div>
         <div class="two"></div>
         <div class="three"></div>
       </div>
    </div>
    <div class="menu">
      <div class="logo">
        <a title="CenterMedicine">Easy<a class="bordes" title="CenterMedicine">Life</a></a>
      </div>
      <div class="sesion">
        <p><?php echo $_SESSION['usuario'];?></p>
      </div>
      <div class="right_menu">
        <ul>  
          <li><i class="fas fa-user"></i>
            <div class="profile_dd">              
               <div class="dd_item" >
               <a href="cerrar.php" title="Cerrar Sesion" class="dd_item" ><span class="icon" ><i class="far fa-times-circle"></i></span>Cerrar sesión</a> 
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>