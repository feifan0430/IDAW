<?php
include_once 'database_connect.php';
include_once 'User.php'; 

$database = new Database();
$db = $database->getConnection();
$journal = new journal($db);
$data = json_decode(file_get_contents("php://input"));
$journal->id = $data->id;

if($journal->delete()){
    http_response_code(200);
    echo json_encode(array("message" => "journal was deleted."));
}else {
    http_response_code(503);
    echo json_encode(array("message" => "Unable to delete journal."));
}
?>