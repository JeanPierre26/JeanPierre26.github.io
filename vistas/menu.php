
<?php require_once "dependencias.php" ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

  <!-- Begin Navbar -->
  <div id="nav">
    <div class=" navbar navbar-inverse navbar-fixed-top" data-spy="affix" data-offset-top="100">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        <div id="navbar" class="collapse navbar-collapse">

          <ul class="nav navbar-nav navbar-right">

            <li class=""><a href="inicio.php"><span class=""></span> Inicio</a>
            </li>

            
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="t"></span> Productos <span class="caret"></span></a>
            <ul class="dropdown-menu">
             
              <li><a href="articulos.php">Lista</a></li>
               <li><a href="categorias.php">Categorias</a></li>
            </ul>
          </li>


        <?php
        if($_SESSION['usuario']=="admin"):
         ?>
           <li><a href="usuarios.php"> Administrar usuarios</a>
            </li>
         <?php 
       endif;
          ?>


           <li><a href="clientes.php"><span class=""></span> Clientes</a>
          </li>
          <li><a href="ventas.php"><span class=""></span> Ventas</a>
          </li>
          
          <li class="dropdown" >
            <a href="#" style="color: #5DADE2  ;"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>  <?php echo $_SESSION['usuario']; ?>  <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li> <a style="color: #5DADE2 " href="../procesos/salir.php"><span class=""></span> Salir</a></li>
              
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.contatiner -->
  </div>
</div>
<!-- Main jumbotron for a primary marketing message or call to action -->





<!-- /container -->        


</body>
</html>

<script type="text/javascript">
  $(window).scroll(function() {
    if ($(document).scrollTop() > 150) {
      $('.logo').height(200);

    }
    else {
      $('.logo').height(100);
    }
  }
  );
</script>