<?php

include_once 'database_connect.php';
include_once 'User.php';
  
$database = new Database();
$db = $database->getConnection();
$aliment = new aliment($db);
$data = json_decode(file_get_contents("php://input"));
$aliment->id = $data->id;

if($aliment->delete()){
    http_response_code(200);
    echo json_encode(array("message" => "aliment was deleted."));
}else {
    http_response_code(503);
    echo json_encode(array("message" => "Unable to delete aliment."));
}
?>