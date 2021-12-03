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

$id = $_GET['id'];



$q = mysqli_query($con, "UPDATE pacientes SET nombre_paciente = '$nombre', apellido_paciente = '$apellido', 
cedula_paciente = '$cedula', telefono_paciente = '$telefono', fecha_n_paciente = '$fecha_nacimiento', 
alergia_paciente = '$alergias', tipo_sangre_paciente = '$tipo_sangre', padecimiento_paciente = '$padecimientos',
ocupacion_paciente = '$ocupacion', sexo_paciente = '$sexo', ars_paciente = '$ars', direccion_paciente = '$direccion' WHERE id_paciente = '$id' LIMIT 1");

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