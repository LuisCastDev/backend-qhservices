<?php

include "config.php";
$input = file_get_contents('php://input');
$data = json_decode($input,true);
$message = array();
$sonoObitoid_paciente=  $data['id_paciente'];
$sonoObitoNombre= $data['sonoObitoNombre'];
$sonoObitoApellido = $data['sonoObitoApellido'];
$sonoObitoEdad = $data['sonoObitoEdad'];
$sonoObitoFeto = $data['sonoObitoFeto'];
$sonoObitoPosicion = $data['sonoObitoPosicion'];
$sonoObitoDorso = $data['sonoObitoDorso'];
$sonoObitoPeso = $data['sonoObitoPeso'];
$sonoObitoColumna   = $data['sonoObitoColumna'];
$sonoObitoEstomago = $data['sonoObitoEstomago'];
$sonoObitoRinones = $data['sonoObitoRinones'];
$sonoObitoVejiga = $data['sonoObitoVejiga'];
$sonoObitoCabeza = $data['sonoObitoCabeza'];
$sonoObitoFCF = $data['sonoObitoFcf'];
$sonoObitoPlacenta = $data['sonoObitoPlacenta'];
$sonoObitoGrado = $data['sonoObitoGrado'];
$sonoObitoCordon = $data['sonoObitoCordon'];
$sonoObitoLiquido  = $data['sonoObitoLiquido'];
$sonoObitoCervix = $data['sonoObitoCervix'];
$sonoObitoSexo = $data['sonoObitoSexo'];
$sonoObitoConclusiones = $data['sonoObitoConclusiones'];
$sonoObitoFPP = $data['sonoObitoFpp'];


$q = mysqli_query($con, "INSERT INTO sonografia_obstetrica (id_paciente, nombre, apellido, edad,feto,posicion,dorso,peso,columna,estomago,rinones,vejiga,cabeza,fcf,placenta,grado,cordon,liquido,cervix,sexo,conclusiones,fpp,fecha,id_tipo_sonografia)
VALUES ('$sonoObitoid_paciente','$sonoObitoNombre','$sonoObitoApellido','$sonoObitoEdad','$sonoObitoFeto','$sonoObitoPosicion','$sonoObitoDorso','$sonoObitoPeso','$sonoObitoColumna','$sonoObitoEstomago','$sonoObitoRinones','$sonoObitoVejiga','$sonoObitoCabeza','$sonoObitoFCF','$sonoObitoPlacenta','$sonoObitoGrado','$sonoObitoCordon','$sonoObitoLiquido','$sonoObitoCervix','$sonoObitoSexo','$sonoObitoConclusiones','$sonoObitoFPP', now(),2)");

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