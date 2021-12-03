<?php
include "config.php";

$data = array();
$id_paciente_analisis = $_GET['id_paciente_analisis'];
$q = mysqli_query($con, "SELECT id_analisis, estado,id_paciente_analisis,PA.id_paciente,p.nombre_paciente,p.apellido_paciente,p.sexo_paciente,id_col_laboratorio,Timestampdiff(YEAR,p.fecha_n_paciente,CURRENT_DATE()) as EDAD from paciente_analisis PA INNER JOIN pacientes P on PA.id_paciente = P.id_paciente WHERE id_paciente_analisis ='$id_paciente_analisis'");

while ($row = mysqli_fetch_object($q))
{
    $data[] = $row;
}
echo json_encode($data);
echo mysqli_error($con);