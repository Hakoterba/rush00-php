<?php

    session_start();
    if(!isset($_SESSION['email']))
    {
        header('Location: index.php');
        return;
    }

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
            <li style="float:right"><a href="deconnexion.php">Disconnection</a></li>
            <li style="float:right"><a href="my_account.php">My account</a></li>
            <li style="float:right"><a href="bag.php">Bag</a></li>
        </ul>
    </nav>

    <div id="welcome">
        <p><strong>MEMBER AREA</strong></p>
        <p>Welcome <?php echo htmlentities(trim($_SESSION['email'])); ?></p> 
    </div>

</body>
</html>
