<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Preinscripci&oacute;n a &quot;Seminario de Seguridad Inform&aacute;tica&quot;</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

        <script type="text/javascript" src="js/bootstrap.min.js"></script>   
        <script type="text/javascript" src="js/valida.js"></script>   

</head>

<body>

<div class="form-group container">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td width="23%"><img src="imagenes/logoies.jpg" width="85" height="107" hspace="25" vspace="10"></td>
    <td width="77%"><strong>Instituto de Educaci&oacute;n Superior MANUEL BELGRANO 
      9-008</strong></td>
  </tr>
</table>
</div>

<form action="ins_registro.php" method="POST" id="form-id" name="form-id"  >

        <div class="form-group container">
            <label for="exampleInputEmail1">Apellido</label>
            <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingrese apellido">
           
        </div>

        <div class="form-group container">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese apellido">
            
        </div>


        <div class="form-group container">
            <label for="inputState">Tipo de documento</label>
            <select name="tipo_docu" class="form-control">
                <option selected name="tipo_docu" value="1">
        DNI </option>
        <option name="tipo_docu" value="2">
        CI </option>
        <option name="tipo_docu" value="3">
        PAS </option>
        <option name="tipo_docu" value="4">
        CE </option>
        <option name="tipo_docu" value="5">
        LE </option>
        <option name="tipo_docu" value="6" >
        LC </option>

            </select>
        </div>

        <div class="form-group container">
            <label for="exampleInputEmail1">Numero:</label>
            <input type="number" class="form-control" name="nro_docu" id="nro_docu" placeholder="Ingrese el numero sin puntos">
            
        </div>

        <div class="form-group container">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
        </div>
        <div class="form-group container">

        <label for="inputState">Es Alumno de la Institucion?</label><br>
      <label><input type="radio" name="esalumno" id = 'esalumno' value ='1' checked>Si</label>

      <label><input type="radio" name="esalumno"id = 'esalumno' value ='2'>No</label>
    </div>
    <div class="form-group container">
    <label for="inputState">Cómo se entero del evento?</label>
            <select name="seentero" id = "seentero" class="form-control">
                <option selected name="seentero" value="Diario">
                Diario </option>
        <option name="seentero" value="Afiche">
        Afiche </option>
        <option name="seentero" value="Por un Amigo">
        Por un Amigo </option>
        <option name="seentero" value="Otro">
        Otro </option>
            </select>
    </div>
   

    </div>
        <div class="form-group container">
            <label for="exampleInputEmail1">Ocupación</label>
            <input type="text" class="form-control" name="ocupacion" id="ocupacion" placeholder="Ingrese Ocupacion">
           
        </div>

        <div class="form-group container">

<label for="inputState">Desea recibir información?</label><br>
<label><input type="radio" name="desea" id = 'desea' value ='1' checked>Si</label>

<label><input type="radio" name="desea"id = 'desea' value ='2'>No</label>
</div>

        

            <div class="form-group container">
            <button type="submit" value = "enviar" name = "submit" class="btn btn-primary">Enviar</button>
</div>
<div class="form-group container">
<input type="button" class="btn btn-primary" onclick="history.back()" name="volver" value="Volver Atras">
</div>
    </form>
    

        
</body>

</html>