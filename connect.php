<?php

    define('SERVEUR',"localhost:3306");
    define('LOGIN',"root");
    define('MDP',"");
    define('BDD',"rpe");

    $connection = mysqli_connect(SERVEUR, LOGIN, MDP) or die('ERROR connect.php > mysqli_connect !<br>'.mysqli_error($connection));
    $sql = "USE rpe";
    mysqli_query($connection,$sql) or die('ERROR connect.php > mysqli_query !<br>'.$sql.'<br>'.mysqli_error($connection));

?>