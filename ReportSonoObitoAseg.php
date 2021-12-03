<?php
include "config.php";

$data = array();
$q = mysqli_query($con, "SELECT count(*) AS resultado FROM sonografia_obstetrica 
INNER JOIN pacientes on sonografia_obstetrica.id_paciente = pacientes.id_paciente 
WHERE pacientes.ars_paciente !='No Asegurado' ");

while ($row = mysqli_fetch_object($q))
{
    $data[] = $row;
}
echo json_encode($data);
echo mysqli_error($con);