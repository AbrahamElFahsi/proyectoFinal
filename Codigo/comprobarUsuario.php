<?php
require 'BD/ConectorBD.php';
require 'BD/DAOUsuario.php';
$conexion=conectar(false);
   //Voy a recoger los datos del formulario
   $usuario = $_POST['usuario'];
   $password = $_POST['password'];


   //Imprimo por pantalla
   echo "Usuario: $usuario <br>";
   echo "Password: $password <br>";
   //Hacemos la consulta
   //Hacemos la consulta del usuario para saber si no se acuerda de la contraseña
   //Comprobamos si existe el usuario
   $existeSoloUsuario=consultaUsuario($conexion, $usuario);
   $fila = mysqli_fetch_assoc($existeUsuario);
   foreach($fila as $atributo=>$valor){
       echo $atributo." : ".$valor." <br>";
   }
  
?>