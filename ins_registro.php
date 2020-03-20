<?php
include("conexion.php");
$link = Conectarse();


$tipo_docu= $_POST['tipo_docu'];
$nro_docu= $_POST['nro_docu'];

    $query ="SELECT * FROM $tabla WHERE tipo_docu = '$tipo_docu' AND nro_docu = '$nro_docu'";
    $result = mysqli_query($link,$query) or die ("Problemas al insertar".mysqli_error($link));
    

if(mysqli_num_rows ($result)!=0){
    header("Location: error.php");
    exit;
}

$fecha=date("Y-m-d");
$apellido= ucwords($_POST['apellido']);
$nombre= ucwords($_POST['nombre']);
$email = $_POST['email'];
$esalumno = $_POST['esalumno'];
$ocupacion = $_POST['ocupacion'];
$seentero = $_POST['seentero'];
$desea = $_POST['desea'];

$query="INSERT INTO $tabla (apellido , nombre, tipo_docu,nro_docu,email,esalumno,ocupacion,seentero,desea,fecha)
VALUES ('$apellido', '$nombre', '$tipo_docu','$nro_docu','$email','$esalumno','$ocupacion','$seentero','$desea','$fecha')";
$result = mysqli_query($link,$query) or die ("Problemas al insertar".mysqli_error($link));
mysqli_close($link);

header("Location: gracias.php");

?>
