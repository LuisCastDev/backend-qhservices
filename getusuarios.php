<?php
include "config.php";

$data = array();
$q = mysqli_query($con, "SELECT usuarios.id, usuarios.nombre, usuarios.contraseña, usuarios.rol, usuarios.estado, usuarios.usuario_email 
FROM usuarios WHERE usuarios.nombre !='' OR usuarios.nombre is null and usuarios.contraseña !='' or usuarios.contraseña is null 
AND usuarios.rol !='' OR usuarios.rol is null AND usuarios.estado !='' or usuarios.estado is null 
AND usuarios.usuario_email !='' OR usuarios.usuario_email is null;");

while ($row = mysqli_fetch_object($q))
{
    $data[] = $row;
}
echo json_encode($data);
echo mysqli_error($con);
