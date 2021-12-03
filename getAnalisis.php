<?php
include "config.php";

$data = array();
$id_paciente =$_GET['id_paciente'];
$q = mysqli_query($con, "SELECT id_analisis, estado,id_paciente_analisis,id_paciente from paciente_analisis
 WHERE id_paciente = '$id_paciente' and estado = 'pendiente' and id_paciente !='' or id_paciente IS NULL
 AND id_col_laboratorio !='' OR id_col_laboratorio IS NULL");

while ($row = mysqli_fetch_object($q))
{
    $data[] = $row;
}
echo json_encode($data);
echo mysqli_error($con);
