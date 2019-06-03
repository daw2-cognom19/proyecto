<?php
require_once "../conexion.php";
require_once "../controller/transeuntes.php";
$objTranseuntes = new Transeuntes();
$fecha = '03/06/2019';
$tracking_page_name = "index.php";
$agent = $_SERVER['HTTP_USER_AGENT'];
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
$host_name = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$objTranseuntes->save($agent, $ip, $tracking_page_name, $host_name);
?>