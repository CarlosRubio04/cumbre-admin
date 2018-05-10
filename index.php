<!DOCTYPE html>
<html lang="es">
<?php require_once('views/head.php'); ?>
<body>
    <?php require_once('views/cargador.php'); ?>
    <?php 
    if(isset($_REQUEST['content'])){
      require_once('views/header.php');
    }

    if(!isset($_REQUEST['content'])){

      require_once('views/login.php');

    }elseif($_REQUEST['content']=='inicio'){

      require_once('views/inicio.php');

    }elseif($_REQUEST['content']=='cursos'){

      require_once('views/cursos.php');

    }elseif($_REQUEST['content']=='subir-grupos'){

      require_once('views/subir-grupos.php');

    }elseif($_REQUEST['content']=='perfil'){

      require_once('views/perfil.php');

    }else{

      require_once('views/login.php');

    } 

    ?>

  <!-- All js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="js/app.js"></script>
</body>
</html>
