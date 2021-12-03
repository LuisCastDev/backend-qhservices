<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header('Allow: GET, POST, OPTIONS, PUT, DELETE');
header('Access-Control-Max-Age: 1728000');
header('Content-Length: 0');
header('Content-Type: text/plain');

$con = mysqli_connect("localhost", "root", "", "hqservices") or die ("No se conecto a la DB");
