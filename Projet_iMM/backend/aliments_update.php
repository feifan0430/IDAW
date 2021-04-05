<?php

include_once 'database_connect.php';
include_once 'User.php';

$database = new Database();
$db = $database->getConnection();
$aliment = new aliment($db);
$data = json_decode(file_get_contents("php://input"));
$aliment->id = $data->id;
$aliment->name = $data->name;
$aliment->categorie = $data->categorie;
$aliment->energie = $data->energie;
$aliment->glucide = $data->glucide;
$aliment->lipide = $data->lipide;
$aliment->proteine = $data->proteine;
$aliment->sel = $data->sel;
$aliment->sucre = $data->sucre;

if($aliment->update()){
    http_response_code(200);
    echo json_encode(array("message" => "aliment was updated."));
}else {
    http_response_code(503);
    echo json_encode(array("message" => "Unable to update aliment."));
}
?>