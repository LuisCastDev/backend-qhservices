<?php
include "config.php";

$data = array();
$id_col_sonografia = $_GET['id_col_sonografia'];
$q = mysqli_query($con, "SELECT id_col_sonografia,sonografia.id_paciente,nombre_paciente,apellido_paciente,sexo_paciente,Timestampdiff(YEAR,fecha_n_paciente,CURRENT_DATE()) as EDAD from pacientes inner JOIN sonografia ON pacientes.id_paciente = sonografia.id_paciente and sonografia.estado_sonografia = 1 and id_col_sonografia = '$id_col_sonografia' LIMIT 1;");

while ($row = mysqli_fetch_object($q))
{
    $data[] = $row;
}
echo json_encode($data);
echo mysqli_error($con);