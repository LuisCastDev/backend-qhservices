<?php
include "config.php";

$data = array();
$id_paciente =$_GET['id_paciente'];
$q = mysqli_query($con, "SELECT id_analisis, estado,id_paciente_analisis,id_paciente from paciente_analisis WHERE id_paciente = '$id_paciente' and estado = 'completado'");

while ($row = mysqli_fetch_object($q))
{
    $data[] = $row;
}
echo json_encode($data);
echo mysqli_error($con);
