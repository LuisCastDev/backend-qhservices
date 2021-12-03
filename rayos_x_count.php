<?php
include "config.php";

$data = array();
$q = mysqli_query($con, "SELECT count(*) AS resultado FROM rayos_x where rayos_x.estado_rayosx = 1 
AND rayos_x.id_paciente != '' or rayos_x.id_paciente is null 
AND rayos_x.id_col_rayosx != '' or rayos_x.id_col_rayosx is null");

while ($row = mysqli_fetch_object($q))
{
    $data[] = $row;
}
echo json_encode($data);
echo mysqli_error($con);
