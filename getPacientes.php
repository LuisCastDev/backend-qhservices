<?php
include "config.php";

$data = array();
$q = mysqli_query($con, "SELECT pacientes.id_paciente, pacientes.nombre_paciente, 
pacientes.apellido_paciente, pacientes.telefono_paciente, pacientes.fecha_n_paciente, 
pacientes.alergia_paciente, pacientes.tipo_sangre_paciente, pacientes.padecimiento_paciente, 
pacientes.ocupacion_paciente, pacientes.sexo_paciente, pacientes.ars_paciente,
pacientes.direccion_paciente, pacientes.cedula_paciente FROM pacientes WHERE pacientes.nombre_paciente !='' or pacientes.nombre_paciente is null 
AND pacientes.apellido_paciente !='' OR pacientes.apellido_paciente is null 
AND pacientes.telefono_paciente !='' or pacientes.telefono_paciente is null 
AND pacientes.fecha_n_paciente !='' or pacientes.fecha_n_paciente is null 
AND pacientes.alergia_paciente !='' or pacientes.alergia_paciente is null 
AND pacientes.tipo_sangre_paciente !='' or pacientes.alergia_paciente is null 
and pacientes.padecimiento_paciente !='' or pacientes.padecimiento_paciente is null 
AND pacientes.ocupacion_paciente !='' or pacientes.ocupacion_paciente is null 
and pacientes.sexo_paciente !='' or pacientes.sexo_paciente is null 
and pacientes.ars_paciente !='' or pacientes.ars_paciente is null 
and pacientes.direccion_paciente !='' or pacientes.direccion_paciente is null 
and pacientes.cedula_paciente !='' or pacientes.cedula_paciente is null;");

while ($row = mysqli_fetch_object($q))
{
    $data[] = $row;
}
echo json_encode($data);
echo mysqli_error($con);
