<?php
  
include_once "database.php";
include_once 'login.php';
  
$database = new Database();
$db = $database->getConnection();
  
$user = new User($db);
$data = json_decode(file_get_contents("php://input"));

if(
    !empty($data->name) &&
    !empty($data->password) &&
    !empty($data->age) &&
    !empty($data->sexe) &&
    !empty($data->sport)
){
    $user->name = $data->name;
    $user->password = $data->password;
    $user->age = $data->age;
    $user->sexe = $data->sexe;
    $user->sport = $data->sport;

    if($user->create()){
        http_response_code(201);
        echo json_encode(array("message" => "user was created."));
    } else {
        http_response_code(503);
        echo json_encode(array("message" => "Unable to create user."));
    }
} else {
    http_response_code(400);
    echo json_encode(array("message" => "Unable to create user. Data is incomplete."));
}
?>