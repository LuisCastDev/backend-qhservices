<?php
include "config.php";

$input = file_get_contents('php://input');
$data = json_decode($input,true);
$message = array();


$id_col_laboratorio = $_GET['id_col_laboratorio'];



$q = mysqli_query($con, "UPDATE laboratorio SET estado_laboratorio = '2' WHERE id_col_laboratorio = '$id_col_laboratorio' LIMIT 1");

if($q)
{   
    $message['status'] = "Success";
}
else
{
    http_response_code(422);
    $message['status'] = "Error";
}

echo json_encode($message);
echo mysqli_error($con);