<?php
    header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");

	include_once 'database_connect.php';
	include_once 'User.php';

	$database = new Database();                 
	$db = $database->getConnection();
	$user = new user($db);
    $data = json_decode(file_get_contents("php://input"));
    $user->id = $_GET["id"];
	$stmt = $user->profilget();
   	$row = $stmt->fetch(PDO::FETCH_ASSOC);
    extract($row);
    
    $user_arr=array(
        "name" => $name,
        "age" => $age,
        "sexe" => $sexe,
        "sport" => $sport
    );

    http_response_code(200);
    echo json_encode($user_arr);
?>
