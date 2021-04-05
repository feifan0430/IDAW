<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

	include_once 'database_connect.php';
	include_once 'User.php';

	$database = new Database();                 
	$db = $database->getConnection();
	$aliment = new aliment($db);
	$stmt = $aliment->read();
	$num = $stmt->rowCount();

	if($num>0){
    	$aliment_arr=array();
        $aliment_arr["data"]=array();

   		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $aliment_item=array(
                "id" => $id,
                "name" => $name,
                "categorie" => $categorie,
                "energie" => $energie,
                "glucide" => $glucide,
                "lipide" => $lipide,
                "proteine" => $proteine,
                "sel" => $sel,
                "sucre" => $sucre,
            );
            array_push($aliment_arr["data"], $aliment_item);
        }
        http_response_code(200);
        echo json_encode($aliment_arr);
    }else {
    	http_response_code(404);
	    echo json_encode(
            array("message" => "No aliments found.")
    	);
	}
?>
