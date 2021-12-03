<?php
include "config.php";

$data = array();
$id_col_odontologia = $_GET['id_col_odontologia'];
$q = mysqli_query($con, "SELECT id_col_odontologia,nombre_paciente,apellido_paciente,cedula_paciente,telefono_paciente from pacientes inner JOIN odontologia ON pacientes.id_paciente = odontologia.id_paciente and odontologia.estado_odontologia = 1 and id_col_odontologia = '$id_col_odontologia'
LIMIT 1");

while ($row = mysqli_fetch_object($q))
{
    $data[] = $row;
}
echo json_encode($data);
echo mysqli_error($con);