<?php
include_once "database.php";

class User{

    private $conn;
    private $table_name = "userlogin";

    public $id;
    public $name;
    public $password;
    public $age;
    public $sexe;
    public $sport;

    public function __construct($db){
        $this->conn = $db;
    }
    
    function create(){

        $query = "INSERT INTO
            " . $this->table_name . "
        SET
            name=:name, password=:password, age=:age, sexe=:sexe, sport=:sport";
  
        $stmt = $this->conn->prepare($query);
  
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->password = htmlspecialchars(strip_tags($this->password));
        $this->age = htmlspecialchars(strip_tags($this->age));
        $this->sexe = htmlspecialchars(strip_tags($this->sexe));
        $this->sport = htmlspecialchars(strip_tags($this->sport));

        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":password", $this->password);
        $stmt->bindParam(":age", $this->age);
        $stmt->bindParam(":sexe", $this->sexe);
        $stmt->bindParam(":sport", $this->sport);

        if($stmt->execute()){
            return true;
        }
        return false;     
    }   

    function login(){

        $query = "SELECT ID_USER FROM " .$this->table_name. " WHERE name=\""  .$this->name ."\" and password=\"" .$this->password. "\" limit 1";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->id = $data['ID_USER'];

        if(!empty($this->id)){
            return $this->id;
        }
        else
            return false;
    }

    function profilget(){

        $query = "SELECT name, age, sexe, sport  FROM    " .$this->table_name . " WHERE ID_USER = " .$this->id. " ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    function profilupdate(){

        $query = "UPDATE" . $this->table_name . "SET age=:age, sexe=:sexe, sport=:sport WHERE ID_USER=" . $this->id . "";
        $stmt = $this->conn->prepare($query);

        $this->age=htmlspecialchars(strip_tags($this->age));
        $this->sexe=htmlspecialchars(strip_tags($this->sexe));
        $this->sport=htmlspecialchars(strip_tags($this->sport));

        $stmt->bindParam(":age", $this->age);
        $stmt->bindParam(":sexe", $this->sexe);
        $stmt->bindParam(":sport", $this->sport);
  
        if($stmt->execute()){
            return true;
        }

        return false;
    }
}
?>