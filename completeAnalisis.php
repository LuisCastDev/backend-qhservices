<?php
include "config.php";

$input = file_get_contents('php://input');
$data = json_decode($input,true);
$message = array();

$id_paciente_analisis = $_GET['id_paciente_analisis'];



$q = mysqli_query($con, "UPDATE paciente_analisis SET estado = 'completado' WHERE id_paciente_analisis = '$id_paciente_analisis' LIMIT 1");

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