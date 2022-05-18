<?php
//datos de la base de datos
$usuario = "root";
$password = "";
$servidor = "localhost";
$basededatos = "prueba";

//creando conexion a base 
$conexion = mysqli_connect($servidor,$usuario,"") or die ("No se ha podido conectar al servidor de la Base de Datos");
//seleccion de la base de datos a utilizar
$db = mysqli_select_db($conexion,$basededatos) or die (" no se ha podido conectar a la base de datos ");
//establecer y realizar consulta a la db
$consulta ="SELECT * FROM  alumnos";
$resultado = mysqli_query($conexion,$consulta) or die ("algo anda mal en la consulta a la base de datos");
//mostarr  el resultado de los registros en la base de datos 

//tabla
echo "<table border ='1'>";
echo "<tr>";
echo "<th>nombre<th>";
echo "<th>apellido<th>";
echo "<th>dni<th>";
echo "<th>carrera<th>";
echo "<tr>";

//bucle  while que recorre cada registro y muestra cada campo en la tabla 








