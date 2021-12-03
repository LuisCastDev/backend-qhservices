<?php

include "config.php";
$input = file_get_contents('php://input');
$data = json_decode($input,true);
$message = array();

$nombre = $data['nombre'];
$apellido = $data['apellido'];
$cedula = $data['cedula'];
$telefono = $data['telefono'];
$fecha_nacimiento = $data['fecha_nacimiento'];
$alergias = $data['alergias'];
$tipo_sangre = $data['tipo_sangre'];
$padecimientos = $data['padecimientos'];
$ocupacion = $data['ocupacion'];
$sexo = $data['sexo'];
$ars = $data['ars'];
$direccion = $data['direccion'];

$q = mysqli_query($con, "INSERT INTO pacientes (nombre_paciente, apellido_paciente, cedula_paciente,
 telefono_paciente, fecha_n_paciente, alergia_paciente, tipo_sangre_paciente, padecimiento_paciente, 
 ocupacion_paciente, sexo_paciente, ars_paciente, direccion_paciente, fecha_registro_paciente) VALUES ('$nombre','$apellido',
 '$cedula','$telefono', '$fecha_nacimiento','$alergias','$tipo_sangre','$padecimientos','$ocupacion',
 '$sexo','$ars','$direccion',now())");

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