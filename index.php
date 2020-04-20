<?php
    session_start();
?>

<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>

<body>

    <nav>
        <ul id="toolbar_index">
            <li><a href="index.php">Home</a></li>
            <?php 
            if(!isset($_SESSION['email']))
            {
            echo '<li style="float:right"><a href="log_in.php">Log In</a></li>';
            }
            if(isset($_SESSION['email']))
            {
                echo '<li style="float:right"><a href="my_account.php">'.htmlentities(trim($_SESSION["email"])).'</a></li>';
                echo '<li style="float:right"><a href="deconnexion.php">Disconnection</a></li>';
            } ?>
            <li style="float:right"><a href="bag.php">Bag</a></li>

        </ul>
    </nav>

    <div id="research">
        <input type="search" id="site-search" placeholder="Search on the site">
        <button style="font-size: 20px;">Search</button>
    </div>

    <div id="image-index">

    </div>
</body>
</html>