<?php
include_once 'database_connect.php';
include_once 'User.php';
  

$database = new Database();
$db = $database->getConnection();
$user = new user($db);
$data = json_decode(file_get_contents("php://input"));
$user->id = $_GET["id"];;
$user->age = $data->age;
$user->sexe = $data->sexe;
$user->sport = $data->sport;

if($user->profilupdate()){
    http_response_code(200);
    echo json_encode(array("message" => "user was updated."));
}else {
    http_response_code(503);
    echo json_encode(array("message" => "Unable to update user."));
}
?>