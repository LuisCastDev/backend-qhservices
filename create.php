<?php

include "config.php";
$input = file_get_contents('php://input');
$data = json_decode($input,true);
$message = array();

$nombre = $data['nombre'];
$contrasena = $data['contrasena'];
$email = $data['email'];
//$estado = $data['estado'];
$rol = $data['rol'];

$q = mysqli_query($con, "INSERT INTO usuarios (nombre, contraseña, estado, rol, fecha_registro, usuario_email)
VALUES ('$nombre','$contrasena','Activo','$rol', now(), '$email')");

if($q)
{
    http_response_code(201);
    $message['status'] = "Success";
}
else
{
    http_response_code(422);
    $message['status'] = "Error";
}

echo json_encode($message);
echo mysqli_error($con);