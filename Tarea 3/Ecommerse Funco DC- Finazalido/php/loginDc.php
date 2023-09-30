<?php
$usuario = $_POST["usuario"];
$contrasenia = $_POST["pass"];

$ckusuario= "admin";
$ckpass = "1234";

if ($usuario==$ckusuario && $contrasenia==$ckpass   ) {
  echo "Correcto";
  header ("location:../html/login.html");
} else {
  echo "Incorrecto";
  header ("location:https://support.google.com/webmasters/answer/2445990?hl=es" );
}

?>
