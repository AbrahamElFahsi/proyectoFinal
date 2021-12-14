<?php
require 'ConectorBD.php';
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
   $consulta = "Select * from usuario where usuario=$usuario";
    $resultado = mysqli_query($conexion,$consulta);
   
  $usu=mysqli_fetch_assoc($resultado);
    echo $usu['nombre']."-".$usu['idUsuario'];
  
  
/*
  
   if(mysqli_num_rows($existeUsuario)==1){
       $fila = mysqli_fetch_assoc($existeUsuario);
       foreach($fila as $atributo=>$valor){
           echo $atributo." : ".$valor." <br>";
       }
       
       header('Location: principal.php');
       crearSesion($fila);
      
   }else{
       if(mysqli_num_rows($existeSoloUsuario)==1){
           $fila = mysqli_fetch_assoc($existeSoloUsuario);
           crearSesion($fila);
           header('Location: recuperar_pass.php');
       }else{

           header('Location: ingreso.php');
       }
       
   }
   */
?>