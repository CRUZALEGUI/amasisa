<?php
session_start();
// si la sesion es distinta a 1 redirecciona al login porque en el login la sesion autentificado es igual a 1
if($_SESSION["autentificado"]!=1){
 header('location:../login.php');
 exit();
}
?>
