<?php


    //Conexión con host
$conexion = mysql_connect("localhost", "root","S3milla")
or die("Error de conexion con el servidor.");

mysql_select_db("DB_Clientes", $conexion)
or die("Error en la seleccion de la base de datos.");


?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario de contacto con Bootstrap 3.3.6</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta charset="utf-8" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/animate.css" />
 
</head>
<body style="background-color: #dedede">
<div class="row">
<div class="col-sm-6 col-sm-offset-3">
	<div class="well" style="margin-top: 10%;">
    <h3>Envíanos un mensaje</h3>
    <form role="form" id="contactForm">
    	<div class="row">
            <div class="form-group col-sm-6">
                <label for="name" class="h4">Nombre</label>
                <input type="text" class="form-control" id="name" placeholder="Nombre" required data-error="Introduce un nombre válido">
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-sm-6">
                <label for="telefono" class="h4">Telefono</label>
                <input type="text" class="form-control" id="telefono" placeholder="Telefono" required data-error="Introduce un telefono válido">
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-sm-6">
                <label for="telefono2" class="h4">Telefono2</label>
                <input type="text" class="form-control" id="telefono2" placeholder="Telefono 2" required data-error="Introduce un telefono válido">
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-sm-6">
                <label for="email" class="h4">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" required>
                <div class="help-block with-errors"></div>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="form-group col-sm-6">
        <select name="estado" id="estado">

            <?php


                $sql1 = "SELECT Estado FROM ComboEstado";

                $resultado1 = mysql_query($sql1, $conexion);

                while ($fila = mysql_fetch_array($resultado1)){
    
                echo "<option value=".$fila["Estado"].">".$fila["Estado"]."</option> ";

                }

            ?>    
       
        </select>
        </div>
        <div class="form-group col-sm-6">
        <select name="seguro" id="seguro"> 

            <?php


                $sql2 = "SELECT Seguro FROM ComboSeguro";

                $resultado2 = mysql_query($sql2, $conexion);


                while ($fila = mysql_fetch_array($resultado2)){

                echo "<option value=".$fila["Seguro"].">".$fila["Seguro"]."</option> ";
    

                }

            ?>    
       
        </select>
        </div>
        <div class="form-group col-sm-6">
        <select name="fecha">    
       
        </select>
        </div>
        <div class="form-group">
            <label for="message" class="h4 ">Mensaje</label>
            <textarea id="message" class="form-control" rows="5" placeholder="Introduce el mensaje" required></textarea>
            <div class="help-block with-errors"></div>
        </div>
        	<button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right">Guardar</button>
		<div id="msgSubmit" class="h3 text-center hidden"></div>
		<div class="clearfix"></div>
    </form>
    </div>
</div>
</div>
</body>
<script  type="text/javascript" src="js/jquery-2.2.1.js"></script>
<script type="text/javascript" src="js/validator.js"></script>
<script type="text/javascript" src="js/jquery.backstretch.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
</html>