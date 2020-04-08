<?php
$servername = "localhost:3306";
$username = "root";
$password = "";

// Creating a connection
$conn = mysqli_connect($servername, $username, $password);
if (mysqli_connect_errno()) 
{
    echo "Echec lors de la connexion à MySQL : " . mysqli_connect_error();
    return;
}

// Creating a database named rpe
$queries = array(
    "DROP DATABASE IF EXISTS rpe",
    "CREATE DATABASE rpe",
    "USE rpe",
    "CREATE TABLE Category (id INT PRIMARY KEY AUTO_INCREMENT, label VARCHAR(255))",
    "CREATE TABLE Product (id INT PRIMARY KEY AUTO_INCREMENT, label VARCHAR(255), price INT,description VARCHAR(255))",
    "CREATE TABLE Photo (id INT PRIMARY KEY AUTO_INCREMENT, path VARCHAR(255), photo_id INT, FOREIGN KEY(photo_id) REFERENCES Product(id))",
    "CREATE TABLE Status (id INT PRIMARY KEY AUTO_INCREMENT, label VARCHAR(255))",
    "CREATE TABLE User (id INT PRIMARY KEY AUTO_INCREMENT, first_name VARCHAR(255), last_name VARCHAR(255),email VARCHAR(255), password VARCHAR(255), User_id INT, FOREIGN KEY (User_id) REFERENCES Status(statusid))",
    "CREATE TABLE Command (id INT PRIMARY KEY AUTO_INCREMENT, price INT, date DATETIME, Cmd_id INT, FOREIGN KEY (Cmd_id) REFERENCES Users(usersid))",
    "CREATE TABLE Categ_product (Categ_product_id INT, Categ_product_id2 INT, FOREIGN KEY (Categ_product_id) REFERENCES Category(id), FOREIGN KEY (Categ_product_id2) REFERENCES Product(id))",
    "CREATE TABLE Cmd_product (Cmd_product_id INT, Cmd_product_id2 INT, FOREIGN KEY (Cmd_product_id) REFERENCES Command(id), FOREIGN KEY (Cmd_product_id2) REFERENCES Product(id))"
);
$i = 0;
$count = count($queries);

while($i < $count)
{
    $res = mysqli_query($conn, $queries[$i]);
    
    echo "$queries[$i]\n";
    if($res)
    {
        echo "Executed successfully\n";
    }
    else
    {
        echo "Failed\n" . mysqli_error($conn);
        break;
    }
    $i++;
}

// closing connection
mysqli_close($conn);
?>