<?php
include "config.php";

$input = file_get_contents('php://input');
$data = json_decode($input,true);
$message = array();

$estado_sonografia = $data['estado_sonografia'];

$id_col_sonografia = $_GET['id_col_sonografia'];



$q = mysqli_query($con, "UPDATE sonografia SET estado_sonografia = '$estado_sonografia' WHERE id_col_sonografia = '$id_col_sonografia' LIMIT 1");

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