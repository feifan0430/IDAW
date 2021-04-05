<?php
date_default_timezone_set('UTC');
  
include_once 'database_connect.php';
include_once 'User.php';
  
$database = new Database();
$db = $database->getConnection();
$journal = new journal($db);
$data = json_decode(file_get_contents("php://input"));

if(
    !empty($data->name_aliment) &&
    !empty($data->date) &&
    !empty($data->quantite) 
){
    $journal->ID_USER=$_GET["id"];
    $journal->name_aliment = $data->name_aliment;
    $journal->date = $data->date;
    $journal->quantite = $data->quantite;

    if($journal->post()){
        http_response_code(201);
        echo json_encode(array("message" => "journal was created."));
    }else {
        http_response_code(503);
        echo json_encode(array("message" => "Unable to create journal."));
    }
}else {
    http_response_code(400);
    echo json_encode(array("message" => "Unable to create journal. Data is incomplete."));
}
?>