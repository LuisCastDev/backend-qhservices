<?php

include "config.php";
$input = file_get_contents('php://input');
$data = json_decode($input,true);
$message = array();
$id_paciente = $data['id_paciente'];
$id_analisis = $data['id_analisis'];
$id_col_laboratorio = $data['id_col_laboratorio'];

$q = mysqli_query($con, "INSERT INTO paciente_analisis (id_paciente,id_analisis,estado,fecha_analisis,id_col_laboratorio) 
VALUES ('$id_paciente','$id_analisis','pendiente' , now(),'$id_col_laboratorio')");

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