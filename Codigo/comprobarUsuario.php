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
   if(mysqli_num_rows($existeUsuario)==1){
       $fila = mysqli_fetch_assoc($existeUsuario);
       foreach($fila as $atributo=>$valor){
           echo $atributo." : ".$valor." <br>";
       }
       crearSesion($fila);
       header('Location: principal.php');
       
      
   }else{
       if(mysqli_num_rows($existeSoloUsuario)==1){
           $fila = mysqli_fetch_assoc($existeSoloUsuario);
           crearSesion($fila);
           header('Location: recuperar_pass.php');
       }else{
           echo "<p> El usuario no existe </p>";
           $url ="ingresar_usuario.php";
           $texto= "Ingresar usuario";
           echo "<a href=$url>$texto</a>";
           header('Location: ingreso.php');
       }
       
   }
?>