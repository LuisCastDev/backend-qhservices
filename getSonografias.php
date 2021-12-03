<?php
include "config.php";

$data = array();
$q = mysqli_query($con, "SELECT id_col_sonografia,nombre_paciente,apellido_paciente,cedula_paciente,telefono_paciente from pacientes inner JOIN sonografia ON pacientes.id_paciente = sonografia.id_paciente and sonografia.estado_sonografia = 1");

while ($row = mysqli_fetch_object($q))
{
    $data[] = $row;
}
echo json_encode($data);
echo mysqli_error($con);
