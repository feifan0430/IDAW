<?php

include_once 'database_connect.php';
include_once 'User.php';

$database = new Database();
$db = $database->getConnection();
$user = new user($db);
$data = json_decode(file_get_contents("php://input"));
$user->name = $data->name;
$user->password = $data->password;
  

if($login_id = $user->login()){
    http_response_code(200);
    echo $login_id;
}else {
    http_response_code(503);
    echo json_encode(array("message" => "Unable to delete user."));
}
?>