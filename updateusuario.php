<?php
include "config.php";

$input = file_get_contents('php://input');
$data = json_decode($input,true);
$message = array();

$nombre = $data['nombre'];
$contrasena = $data['contrasena'];
$estado = $data['estado'];
$rol = $data['rol'];
$id = $_GET['id'];

$q = mysqli_query($con, "UPDATE usuarios SET nombre = '$nombre', contraseña = '$contrasena', estado = '$estado', rol = '$rol' WHERE id = '$id' LIMIT 1");

if($q)
{   
    $message['status'] = "Success";
}
else
{
    http_response_code(422);
    $message['status'] = "Error";
}

echo json_encode($message);
echo mysqli_error($con);