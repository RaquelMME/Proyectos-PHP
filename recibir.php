<?php

echo "<pre>";
var_dump($_GET);
echo "</pre>";

$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$edad = $_GET['edad'];
$pass = $_GET['pass'];
$leng = $_GET['leng'];
$peliculas = $_GET['peliculas'];

echo "<br>";
echo "el nombre del usuario es".$nombre."<br>";
echo "<br>";
echo "el apellido es: ".$apellido;
echo "<br>";
echo "la edad es: ".$edad;
echo "<br>";
echo " Aprenderás: ".$leng;
echo "<br>";
echo " Tipo de peliculas: ".$peliculas;


?>