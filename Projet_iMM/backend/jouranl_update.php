<?php
include_once 'database_connect.php';
include_once 'User.php';
  
$database = new Database();
$db = $database->getConnection();
$journal = new journal($db);
$data = json_decode(file_get_contents("php://input"));
$journal->ID_USER=$_GET["id"];
$journal->id = $data->id;
$journal->name_aliment = $data->name_aliment;
$journal->date = $data->date;
$journal->quantite = $data->quantite;

if($journal->update()){
    http_response_code(200);
    echo json_encode(array("message" => "journal was updated."));
}else {
    http_response_code(503);
    echo json_encode(array("message" => "Unable to update journal."));
}
?>