<?php
require 'BD/ConectorBD.php';
require 'BD/DAOUsuario.php';
require 'BD/DAOProducto.php';

$q=$_POST['q'];
$conexion=conectar(false);

$res=buscador($conexion,$q);

if(mysql_num_rows($res)==0){

echo '<b>No hay sugerencias</b>';

}else{

echo '<b>Sugerencias:</b><br />';

while($fila=mysql_fetch_array($res)){

echo $fila['nombre'].'<br />';

}

}
?>