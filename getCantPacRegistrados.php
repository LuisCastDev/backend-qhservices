<?php
include "config.php";

$data = array();
$q = mysqli_query($con, "SELECT count(*) AS CanPacientes FROM pacientes WHERE pacientes.id_paciente !='' OR pacientes.id_paciente IS NULL 
AND pacientes.nombre_paciente !='' OR pacientes.nombre_paciente IS NULL;");

while ($row = mysqli_fetch_object($q))
{
    $data[] = $row;
}
echo json_encode($data);
echo mysqli_error($con);