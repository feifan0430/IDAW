<?php
	include_once 'database_connect.php';
	include_once 'User.php';

	$database = new Database();                 
	$db = $database->getConnection();
	$dashboard = new Dashboard($db);
    $dashboard->ID_USER=$_GET["id"];
    $data = json_decode(file_get_contents("php://input"));
    $dashboard->date_begin = $data->date_begin;
    $dashboard->date_end = $data->date_end;
	$stmt = $dashboard->dashboardget();
	$num = $stmt->rowCount();

	if($num>0){
   		$row = $stmt->fetch(PDO::FETCH_ASSOC);
        extract($row);
        $glucidep = round($glucide / ( $glucide + $lipide + $proteine + $sel + $sucre) * 100, 2);
        $glucidep = $glucidep . '%';
        $lipidep = round($lipide / ( $glucide + $lipide + $proteine + $sel + $sucre) * 100, 2);
        $lipidep = $lipidep . '%';
        $proteinep = round($proteine / ( $glucide + $lipide + $proteine + $sel + $sucre) * 100, 2);
        $proteinep = $proteinep . '%';
        $selp = round($sel / ( $glucide + $lipide + $proteine + $sel + $sucre) * 100, 2);
        $selp = $selp . '%';
        $sucrep = round($sucre / ( $glucide + $lipide + $proteine + $sel + $sucre) * 100, 2);
        $sucrep = $sucrep . '%';

        $dashboard_arr=array(
            "energie" => $energie,
            "glucide" => $glucidep,
            "lipide" => $lipidep,
            "proteine" => $proteinep,
            "sel" => $selp,
            "sucre" => $sucrep,
        );
        http_response_code(200);
        echo json_encode($dashboard_arr);
    }else {
    	http_response_code(404);
	    echo json_encode(
            array("message" => "No dashboards found.")
    	);
	}
?>
