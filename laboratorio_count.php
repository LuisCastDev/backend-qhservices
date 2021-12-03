<?php
include "config.php";

$data = array();
$q = mysqli_query($con, "SELECT count(*) AS resultado FROM laboratorio where laboratorio.estado_laboratorio = 1 
AND laboratorio.id_paciente != '' or laboratorio.id_paciente is null AND laboratorio.id_col_laboratorio != ''
 or laboratorio.id_col_laboratorio is null");

while ($row = mysqli_fetch_object($q))
{
    $data[] = $row;
}
echo json_encode($data);
echo mysqli_error($con);
