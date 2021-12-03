<?php
include "config.php";

$data = array();
$q = mysqli_query($con, "SELECT sonografia_abdominal.nombre, sonografia_abdominal.apellido, 
sonografia_abdominal.edad, sonografia_abdominal.morfologia, sonografia_abdominal.lesionesFocales,
sonografia_abdominal.medidaHigado, sonografia_abdominal.viasBiliares, sonografia_abdominal.vesiculaForma,
sonografia_abdominal.vesiculaSituacion from sonografia_abdominal;");

while ($row = mysqli_fetch_object($q))
{
    $data[] = $row;
}
echo json_encode($data);
echo mysqli_error($con);
