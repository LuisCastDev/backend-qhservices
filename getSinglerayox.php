<?php
include "config.php";

$data = array();
$id_col_rayosx = $_GET['id_col_rayosx'];
$q = mysqli_query($con, "SELECT id_col_rayosx,nombre_paciente,apellido_paciente,cedula_paciente,telefono_paciente from pacientes inner JOIN rayos_x ON pacientes.id_paciente = rayos_x.id_paciente and rayos_x.estado_rayosx = 1 and id_col_rayosx = '$id_col_rayosx'
LIMIT 1");

while ($row = mysqli_fetch_object($q))
{
    $data[] = $row;
}
echo json_encode($data);
echo mysqli_error($con);