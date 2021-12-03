<?php
include "config.php";

$data = array();
$q = mysqli_query($con, "SELECT id_col_laboratorio,nombre_paciente,apellido_paciente,cedula_paciente,telefono_paciente from pacientes inner JOIN laboratorio ON pacientes.id_paciente = laboratorio.id_paciente and laboratorio.estado_laboratorio = 1");

while ($row = mysqli_fetch_object($q))
{
    $data[] = $row;
}
echo json_encode($data);
echo mysqli_error($con);
