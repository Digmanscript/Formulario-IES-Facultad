<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <title>Consultas</title>
</head>
<body>
<?php 
include("conexion.php");
$link = Conectarse();

$query ="SELECT nombre, apellido, nro_docu FROM $tabla WHERE tipo_docu = 1 ORDER BY nro_docu";
$result = mysqli_query($link,$query) or die ("Problemas al insertar".mysqli_error($link));

if ($row = mysqli_fetch_array($result)){ 
   echo "<table border = '1'> \n"; 
   echo "<tr><td>Apellido</td><td>Nombre</td><td>Numero Documento</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["nombre"]. " </td><td>".$row["apellido"]. "<td>".$row["nro_docu"]." </tr> \n"; 
   } while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?> 

<input type="button" class="btn btn-primary" onclick="history.back()" name="volver" value="Volver Atras">

</body>
</html>
