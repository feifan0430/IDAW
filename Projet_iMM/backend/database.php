<?php
$servername = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($servername, $username, $password);

if (!$con) {
    die('...Could not connect: ' . mysql_error() . "<br/>");
} else {
    echo "...Connected to MySQL Now. <br/>";
}

if (mysqli_query($con, "CREATE DATABASE user")) {
    echo "...Database idaw_user created.<br/>";
} else {
    echo "...Error creating database: " . mysqli_error($con) . "<br/>";
}

//userlogin
mysqli_select_db($con, "user");
$sql = "CREATE TABLE userlogin (
    ID_USER int NOT NULL AUTO_INCREMENT,
    name varchar(15),
    password varchar(15),
    age varchar(15),
    sexe varchar(15),
    sport varchar(15),
    primary key (ID_USER)
)";
if(mysqli_query($con, $sql)) { 
    echo "...Table user created successfully. <br/>"; 
} else {
    echo "...Could not create table: ". mysqli_error($con) . "<br/>"; 
}

//aliment
mysqli_select_db($con, "user");
$sql = "CREATE TABLE aliment (
    data varchar(15),
    id int,
    name varchar(15),
    categorie varchar(30),
    energie double,
    glucide double,
    lipide double,
    proteine double,
    sel double,
    sucre double,
    primary key (id)
)";
if(mysqli_query($con, $sql)) { 
    echo "...Table aliment created successfully. <br/>"; 
} else {
    echo "...Could not create table: ". mysqli_error($con) . "<br/>"; 
}

//journal
mysqli_select_db($con, "user");
$sql = "CREATE TABLE journal (
    data varchar(15),
    id int,
    ID_USER int,
    name_aliment varchar(30),
    date varchar(15),
    quantite int
)";
if(mysqli_query($con, $sql)) { 
    echo "...Table Users created successfully. <br/>"; 
} else {
    echo "...Could not create table: ". mysqli_error($con) . "<br/>"; 
}

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('1', 'Bière brune', 'boisson', '0', '0.43', '4.1', '0', '4.1', '0.0029')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('2', 'cafe', 'boisson', '29', '0.5', '1.35', '0.018', '0', '0.0067')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('3', 'Jus d“ananas', 'boisson', '222', '0.41', '11.9', '0.096', '0', '11.9')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('4', 'Jus d”orange', 'boisson', '0', '0.7', '9.4', '0.2', '8.4', '0.025')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('5', 'Jus de carotte', 'boisson', '0', '0.4', '6.55', '0.1', '5.95', '0.1')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('6', 'Jus de citron', 'boisson', '0', '0.49', '2.41', '0.24', '2.06', '0.0065')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('7', 'Jus de citron', 'boisson', '0', '0.49', '2.41', '0.24', '2.06', '0.0065')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('8', 'Jus de pomme', 'boisson', '206', '0.24', '11.3', '0.098', '10.8', '0.0014')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('9', 'Thé noir', 'boisson', '5.39', '0', '0.3', '0.007', '0', '0.0075')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('10', 'Thé vert', 'boisson', '21.7', '0', '1.09', '0', '0', '0.011')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('11', 'Vin rouge', 'boisson', '341', '0.07', '2.63', '0', '0.62', '0.0025')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('12', 'Abricot', 'fruit', '194', '0.81', '9.01', '0.5', '6.7', '0.013')";
mysqli_query($con, $sql);


$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('13', 'Ananas', 'fruit', '231', '0.5', '11.7', '0.5', '10.5', '0.013')";
mysqli_query($con, $sql);


$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('14', 'Banane', 'fruit', '383', '1.06', '19.7', '0.5', '15.6', '0.013')";
mysqli_query($con, $sql);


$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('15', 'Cassis', 'fruit', '0', '1.33', '9.68', '0.86', '9.68', '0.0063')";
mysqli_query($con, $sql);


$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('16', 'Citron vert', 'fruit', '170', '1.13', '3.14', '0.3', '2.1', '0.015')";
mysqli_query($con, $sql);


$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('17', 'Citron', 'fruit', '118', '0.5', '1.56', '0.5', '0.8', '0.013')";
mysqli_query($con, $sql);


$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('18', 'Clémentine', 'fruit', '200', '0.81', '9.17', '0.5', '8.6', '0.013')";
mysqli_query($con, $sql);


$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('19', 'Fraise', 'fruit', '162', '0.63', '6.03', '0.5', '5.6', '0.013')";
mysqli_query($con, $sql);


$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('20', 'Framboise', 'fruit', '206', '1.19', '5.83', '0.8', '5.4', '0.013')";
mysqli_query($con, $sql);


$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('21', 'Fruit de la passion', 'fruit', '425', '2.13', '10.9', '3', '8.5', '0.013')";
mysqli_query($con, $sql);


$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('22', 'Grenade', 'fruit', '340', '1.44', '14.3', '1.2', '13.3', '0.013')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('23', 'Kaki', 'fruit', '290', '0.88', '11', '0.6', '8.9', '0.013')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('24', 'Kiwi', 'fruit', '255', '0.88', '11', '0.6', '8.9', '0.013')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('25', 'Litchi', 'fruit', '344', '1.13', '16.1', '0.5', '15.7', '0.013')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('26', 'Mangue', 'fruit', '314', '0.63', '14.3', '0.5', '12.9', '0.013')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('27', 'Myrtille', 'fruit', '244', '0.87', '10.6', '0.33', '9.96', '0.0025')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('28', 'Orange', 'fruit', '192', '0.75', '8.03', '0.5', '7.6', '0.013')";
mysqli_query($con, $sql);


$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('29', 'Pomme', 'fruit', '218', '0.25', '11.6', '0.25', '9.35', '0.0037')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('30', 'Raisin', 'fruit', '311', '0.75', '16.6', '0.5', '15.5', '0.013')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('31', 'Biscuit', 'grain', '2020', '4.25', '60.5', '24.1', '1.61', '3.14')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('32', 'Croissant', 'grain', '1010', '7.9', '19.2', '14.6', '2.6', '1.1')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('33', 'Frites', 'grain', '896', '3.75', '32.6', '6.6', '0.29', '0.39')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('34', 'Maïs', 'grain', '1460', '8.1', '67.2', '3.7', '1.6', '0.01')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('35', 'Pain', 'grain', '1170', '8.21', '54.4', '1.61', '2.74', '1.28')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('36', 'Pain grillé', 'grain', '1340', '9.46', '64', '1.3', '1.4', '1.51')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('37', 'Riz complet', 'grain', '668', '3.21', '32.6', '1', '0.2', '0.01')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('38', 'Sandwich', 'grain', '1020', '14.2', '27.2', '8.35', '0', '1.24')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('39', 'Lait entier', 'laitage', '272', '3.32', '4.85', '3.63', '4.2', '0.11')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('40', 'Brocoli', 'légume', '158', '4.13', '2.53', '0.7', '1.5', '0.04')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('41', 'Carotte', 'légume', '41', '0.63', '4.99', '0.27', '4.73', '0.15')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('42', 'Champignon', 'légume', '91.2', '2.37', '1.88', '0.23', '1.43', '0.012')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('43', 'Chou vert', 'légume', '2.53', '1.92', '0.41', '1.92', '0.065', '0')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('44', 'Chou-fleur', 'légume', '24.9', '2.09', '2.64', '0.37', '1.91', '0.047')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('45', 'Haricot vert', 'légume', '117', '1.75', '3.39', '0.3', '2.5', '0.013')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('46', 'Piment', 'légume', '6', '1.87', '7.7', '0.32', '5.3', '0.02')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('47', 'Tomate', 'légume', '81.1', '0.86', '2.49', '0.26', '2.48', '0.008')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('48', 'Oeuf', 'oeuf', '201', '10.3', '1.12', '0.17', '0.7', '0.39')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('49', 'Crabe', 'poisson', '520', '19.5', '1.79', '4.29', '0', '1.23')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('50', 'Crevette', 'poisson', '397', '19', '1.87', '1.16', '0.25', '1.35')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('51', 'Homard', 'poisson', '385', '19.6', '0.11', '1.32', '0', '0.9')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('52', 'Moule', 'poisson', '457', '17.2', '5.12', '2.09', '0', '0.11')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('53', 'Saumon', 'poisson', '933', '25.5', '0', '13.5', '0', '0.14')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('54', 'Thon', 'poisson', '576', '29.9', '0', '1.83', '0', '0.14')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('55', 'Agneau', 'viande', '999', '25.7', '0', '15.2', '0', '0.31')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('56', 'Boeuf', 'viande', '829', '25.5', '0.1', '10.7', '0', '0.15')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('57', 'Cheval', 'viande', '581', '28', '0', '2.85', '0', '0.1')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('58', 'Jambon', 'viande', '939', '25.9', '0.76', '13.2', '0.75', '5.67')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('59', 'Lapin', 'viande', '828', '30.4', '0', '8.41', '0', '0.093')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('60', 'Porc', 'viande', '1000', '27.1', '0', '14.7', '0', '0.15')";
mysqli_query($con, $sql);

$sql = "INSERT INTO aliment (id, name, categorie, energie, glucide, lipide, proteine, sel, sucre) 
        VALUES ('61', 'Poulet', 'viande', '893', '25.9', '2', '11.3', '0', '0.23')";
mysqli_query($con, $sql);

// journal
$sql = "INSERT INTO journal (id, ID_USER, name_aliment, date, quantite) 
        VALUES ('1', '1', 'Frites', '2021-04-04', '1')";
mysqli_query($con, $sql);

$sql = "INSERT INTO journal (id, ID_USER, name_aliment, date, quantite) 
        VALUES ('1', '1', 'Poulet', '2021-04-04', '1')";
mysqli_query($con, $sql);

?>