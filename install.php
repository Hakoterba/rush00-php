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

// Creating a database named newDB
$sql = "CREATE DATABASE IF NOT EXISTS rpe";
$res = mysqli_query($conn, $sql);

if($res)
{
    echo "Database creates successfully";
}
else
{
    echo "Error while creating database";
}

// closing connection
mysqli_close($conn);
?>