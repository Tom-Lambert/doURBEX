<?php
  session_start();
  require_once("config/config.php");

  $container = "";
  $link = "";

  if (isset($_GET['link'])){
    $link = $_GET['link'];
  }

  elseif ($link=="") {
    ob_start();
    //var_dump(BASE_FILE."pages/accueil.html.php");
    require_once(BASE_FILE."views/home.php");
    $container= ob_get_clean();
  }

  else{
    $container = "erreur";
    echo "<button><a href=\"index.php\">Accueil</a></button>";
  }


  require_once('skeleton/skeleton.html.php');

?>

