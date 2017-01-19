<?php
include_once("../app/Config.php");

$host=Config::$mvc_bd_hostname;
$user=Config::$mvc_bd_usuario;
$pass=Config::$mvc_bd_clave;

$c=mysqli_connect($host,$user,$pass) or die ("Imposible conectar");
if(mysqli_query($c,"CREATE DATABASE IF NOT EXISTS alimentos")){
echo "Todo ok";

}else{
	echo "No ok";
}

mysqli_select_db($c,"alimentos");
$alimentos="CREATE TABLE `alimentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `energia` decimal(10,0) NOT NULL,
  `proteina` decimal(10,0) NOT NULL,
  `hidratocarbono` decimal(10,0) NOT NULL,
  `fibra` decimal(10,0) NOT NULL,
  `grasatotal` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;";


if(mysqli_query($c,$alimentos)){
echo "se ha creado usuarios";

}else{
echo "no se ha creado alimentos";
}



//$c=mysql_close ($c); Para cerrar conexión



?>
