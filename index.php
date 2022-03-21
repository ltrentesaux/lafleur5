<?php session_start();
require_once('vues/fonctions.php');
define('WEBROOT', str_replace('index.php','',$_SERVER['SCRIPT_NAME']));
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="public/css/fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet"> <!--load all styles -->

  <title>La Fleur 5</title>

  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="public/css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <?php include('vues/v_menu.php'); ?>

  <!-- Page Content -->
  <div class="container">
    <br><br><br> 
    <?php if (!isset($_GET['page']) || ($_GET['page']=='')) header('location:'.WEBROOT.'news/index'); 
    $parametres=explode('/', $_GET['page']);
    $_SESSION['controleur']=$parametres[0]; 
    $_SESSION['action']=isset($parametres[1]) ? $parametres[1] : 'index'; 
    $_SESSION['idurl']=isset($parametres[2]) ? $parametres[2] : null;

    echo $_SESSION['controleur']."-".$_SESSION['action']."-".$_SESSION['idurl'];

    include ('controleurs/c_'.$_SESSION['controleur'].'.php'); 
    ?> 
    </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2158</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>