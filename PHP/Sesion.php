<?php
  
session_start();

function destroySession(){    
  session_unset();
  session_destroy();
}

function login(){    
    $_SESSION["log"] = $_GET['permiso'];    
}

function logout(){    
    $_SESSION["log"] = "0";
}

function getlog(){    
    if(isset($_SESSION['log'])=='1')
      echo $_SESSION["log"];   
      
}

switch ($_GET["funcion"]) {
    case "destroySession":   destroySession();  break;
    case "login":   login();  break;
    case "logout":   logout();  break;
    case "getlog":   getlog();  break;    
    default: echo "nel, opcion invalida."; break;
}


?>