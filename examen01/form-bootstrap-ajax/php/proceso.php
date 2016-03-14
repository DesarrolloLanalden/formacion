<?php
/*
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
*/

$errorMSG = "";
 
// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Se requiere un nombre ";
} else {
    $name = $_POST["name"];
}
 
// telefono
if (empty($_POST["telefono"])) {
    $errorMSG .= "Se requiere un telefono ";
} else {
    $telefono = $_POST["telefono"];
}

// telefono2
if (empty($_POST["telefono2"])) {
    $errorMSG .= "Se requiere un telefono ";
} else {
    $telefono2 = $_POST["telefono2"];
}

// seguro
if (empty($_POST["seguro"])) {
    $errorMSG .= "Se requiere un seguro ";
} else {
    $seguro = $_POST["seguro"];
}

// estado
if (empty($_POST["estado"])) {
    $errorMSG .= "Se requiere un estado ";
} else {
    $estado = $_POST["estado"];
}
 
// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}

//Aquí van las consultas SELECT, INSERT, UPDATE, DELETE
//$sql = "INSERT INTO Agenda(nombre, email, mensaje) VALUES('".$name."', '".$email."', '".$message."')";



//Cerrar la base de datos
mysql_close($conexion);

$EmailTo = "nirekatua1111@gmail.com";
$Subject = "Nuevo Mensaje Recibido";
 
// prepare email body text
$Body = "";
$Body .= "Nombre: ";
$Body .= $name;
$Body .= "\n";
 
$Body .= "Telefono: ";
$Body .= $telefono;
$Body .= "\n";
 
$Body .= "Mensaje: ";
$Body .= $message;
$Body .= "\n";
 
// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
 
// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}
 
?>