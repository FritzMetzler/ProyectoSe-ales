<?php
$conexion = mysqli_connect("localhost", "oscar", "hola123", "eq1hamburguesas");
//$conexion = mysqli_connect("localhost", "root", "password", "eq1hamburguesas");
//$conexion = mysqli_connect("localhost", "root", "password", "test2");
if (!$conexion ) {
    die("Connection failed: " . mysqli_connect_error());
}

