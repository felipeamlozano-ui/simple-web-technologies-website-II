<?php
session_start();
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header('Content-Type: application/json');
if(isset($_SESSION['Status']) && $_SESSION['Status'] === true){
    $condicao = true;
} else {
    $condicao = false;
}
echo json_encode($condicao);
?>