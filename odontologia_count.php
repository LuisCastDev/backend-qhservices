<?php
include "config.php";

$data = array();
$q = mysqli_query($con, "SELECT count(*) AS resultado FROM odontologia where odontologia.estado_odontologia = 1 
AND odontologia.id_paciente != '' or odontologia.id_paciente is null AND odontologia.id_col_odontologia != ''
 or odontologia.id_col_odontologia is null");

while ($row = mysqli_fetch_object($q))
{
    $data[] = $row;
}
echo json_encode($data);
echo mysqli_error($con);
