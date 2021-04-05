<?php
	include_once 'database_connect.php';
	include_once 'User.php';

	$database = new Database();                 
	$db = $database->getConnection();
	$journal = new journal($db);
    $journal->ID_USER=$_GET["id"];
	$stmt = $journal->get();
	$num = $stmt->rowCount();

	if($num>0){
    	$journal_arr=array();
   		$journal_arr["data"]=array();

   		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        	extract($row);
        	$journal_item=array(
            	"id" => $id,
            	"name_aliment" => $name_aliment,
            	"date" => $date,
            	"quantite" => $quantite,
        	);
        	array_push($journal_arr["data"], $journal_item);
    	}
    	http_response_code(200);
    	echo json_encode($journal_arr);
	}else {
    	http_response_code(404);
	    echo json_encode(
        	array("message" => "No journals found.")
    	);
	}
?>
