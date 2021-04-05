<?php
class Dashboard{
    private $conn;
    public $energie;
    public $glucide;
    public $lipide;
    public $proteine;
    public $sel;
    public $sucre;
    public $date_begin;
    public $date_end; 

    public function __construct($db){
        $this->conn = $db;
    }

    function dashboardget(){
        $query = "SELECT sum(j.quantite * a.energie /100) as energie, sum(j.quantite * a.glucide / 100) as glucide, sum(j.quantite * a.lipide / 100) as lipide, sum(j.quantite * a.proteine / 100) as proteine, sum(j.quantite * a.sel / 100) as sel, sum(j.quantite * a.sucre / 100) as sucre
            FROM    journal j, aliment a
            WHERE   j.name_aliment = a.name and j.ID_USER = ".$this->ID_USER ." and j.date between \"" . $this->date_begin . "\" and \"" . $this->date_end . "\"";  
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}

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

        $this->name=htmlspecialchars(strip_tags($this->name));
        $this->password=htmlspecialchars(strip_tags($this->password));
        $this->age=htmlspecialchars(strip_tags($this->age));
        $this->sexe=htmlspecialchars(strip_tags($this->sexe));
        $this->sport=htmlspecialchars(strip_tags($this->sport));

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
        $data=$stmt->fetch(PDO::FETCH_ASSOC);
        $this->id = $data['ID_USER'];

        if(!empty($this->id)){
            return $this->id;
        }else {
            return false;
        }
    }

    function profilget(){
        $query = "SELECT name, age, sexe, sport  FROM    " .$this->table_name . " WHERE ID_USER = " .$this->id. " ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    function profilupdate(){
        $query = "UPDATE
            " . $this->table_name . "
        SET
           age=:age, sexe=:sexe, sport=:sport WHERE ID_USER=" . $this->id."";
            
        $stmt = $this->conn->prepare($query);
        $this->age=htmlspecialchars(strip_tags($this->age));
        $this->sexe=htmlspecialchars(strip_tags($this->sexe));
        $this->sport=htmlspecialchars(strip_tags($this->sport));
        $stmt->bindParam(":age", $this->age);
        $stmt->bindParam(":sexe", $this->sexe);
        $stmt->bindParam(":sport", $this->sport);
  
        if($stmt->execute()){ //*** */
            return true;
        }else {
            return false;
        }
    }
}

class Aliment{
    private $conn;
    private $table_name = "aliment";
    public $id;
    public $name;
    public $categorie;
    public $energie;
    public $glucide;
    public $lipide;
    public $proteine;
    public $sel;
    public $sucre;

    public function __construct($db){
        $this->conn = $db;
    }

    function read(){
        $query = "SELECT *  FROM    " .$this->table_name . "  ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    
    function create(){
        $query = "INSERT INTO
            " . $this->table_name . "
        SET
            name=:name, categorie=:categorie, energie=:energie, glucide=:glucide, lipide=:lipide, proteine=:proteine, sel=:sel, sucre=:sucre";
  
        $stmt = $this->conn->prepare($query);
        $this->name=htmlspecialchars(strip_tags($this->name));
        $this->categorie=htmlspecialchars(strip_tags($this->categorie));
        $this->energie=htmlspecialchars(strip_tags($this->energie));
        $this->glucide=htmlspecialchars(strip_tags($this->glucide));
        $this->lipide=htmlspecialchars(strip_tags($this->lipide));
        $this->proteine=htmlspecialchars(strip_tags($this->proteine));
        $this->sel=htmlspecialchars(strip_tags($this->sel));
        $this->sucre=htmlspecialchars(strip_tags($this->sucre));

        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":categorie", $this->categorie);
        $stmt->bindParam(":energie", $this->energie);
        $stmt->bindParam(":glucide", $this->glucide);
        $stmt->bindParam(":lipide", $this->lipide);
        $stmt->bindParam(":proteine", $this->proteine);
        $stmt->bindParam(":sel", $this->sel);
        $stmt->bindParam(":sucre", $this->sucre);

        if($stmt->execute()){//** */
            return true;
        }else {
            return false;
        }
    }

    function update(){
        $query = "UPDATE" . $this->table_name . "
            SET
                name=:name, categorie=:categorie, energie=:energie, glucide=:glucide, lipide=:lipide, proteine=:proteine, sel=:sel, sucre=:sucre
            WHERE 
                id = :id";

        $stmt = $this->conn->prepare($query);
        $this->id=htmlspecialchars(strip_tags($this->id));
        $this->name=htmlspecialchars(strip_tags($this->name));
        $this->categorie=htmlspecialchars(strip_tags($this->categorie));
        $this->energie=htmlspecialchars(strip_tags($this->energie));
        $this->glucide=htmlspecialchars(strip_tags($this->glucide));
        $this->lipide=htmlspecialchars(strip_tags($this->lipide));
        $this->proteine=htmlspecialchars(strip_tags($this->proteine));
        $this->sel=htmlspecialchars(strip_tags($this->sel));
        $this->sucre=htmlspecialchars(strip_tags($this->sucre));

        $stmt->bindParam(":id", $this->id);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":categorie", $this->categorie);
        $stmt->bindParam(":energie", $this->energie);
        $stmt->bindParam(":glucide", $this->glucide);
        $stmt->bindParam(":lipide", $this->lipide);
        $stmt->bindParam(":proteine", $this->proteine);
        $stmt->bindParam(":sel", $this->sel);
        $stmt->bindParam(":sucre", $this->sucre);

        if($stmt->execute()){
            return true;
        }
        return false;
    }

    function delete(){
        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $this->id=htmlspecialchars(strip_tags($this->id));
        $stmt->bindParam(1, $this->id);
        if($stmt->execute()){
            return true;
        }
        return false;
    }
}

class Journal{
    private $conn;
    private $table_name = "journal";
    public $id;
    public $ID_USER;
    public $name_aliment;
    public $date;
    public $quantite;

    public function __construct($db){
        $this->conn = $db;
    }
   
    function get(){
        $query = "SELECT * FROM " . $this->table_name . " WHERE ID_USER=". $this->ID_USER . " ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    function post(){
        $query = "INSERT INTO" . $this->table_name . "
            SET
                ID_USER=:ID_USER, name_aliment=:name_aliment,date=:date, quantite=:quantite";

        $stmt = $this->conn->prepare($query);
        $this->ID_USER=htmlspecialchars(strip_tags($this->ID_USER));
        $this->name_aliment=htmlspecialchars(strip_tags($this->name_aliment));
        $this->date=htmlspecialchars(strip_tags($this->date));
        $this->quantite=htmlspecialchars(strip_tags($this->quantite));
        $stmt->bindParam(":ID_USER", $this->ID_USER);
        $stmt->bindParam(":name_aliment", $this->name_aliment);
        $stmt->bindParam(":date", $this->date);
        $stmt->bindParam(":quantite", $this->quantite);

        if($stmt->execute()){
            return true;
        }
        return false;
    }

    function update(){
        $query = "UPDATE" . $this->table_name . "
            SET
                date=:date, name_aliment=:name_aliment, quantite=:quantite, ID_USER=:ID_USER
            WHERE 
                id = :id";

        $stmt = $this->conn->prepare($query);
        $this->id=htmlspecialchars(strip_tags($this->id));
        $this->name_aliment=htmlspecialchars(strip_tags($this->name_aliment));
        $this->ID_USER=htmlspecialchars(strip_tags($this->ID_USER));       
        $this->date=htmlspecialchars(strip_tags($this->date));
        $this->quantite=htmlspecialchars(strip_tags($this->quantite));
        $stmt->bindParam(":id", $this->id);
        $stmt->bindParam(":ID_USER", $this->ID_USER);
        $stmt->bindParam(":date", $this->date);
        $stmt->bindParam(":name_aliment", $this->name_aliment);
        $stmt->bindParam(":quantite", $this->quantite);

        if($stmt->execute()){
            return true;
        }
        return false;
    }

    function delete(){
        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $this->id=htmlspecialchars(strip_tags($this->id));
        $stmt->bindParam(1, $this->id);

        if($stmt->execute()){
            return true;
        }
        return false;
    }
}
?>