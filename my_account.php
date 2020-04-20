<?php

    session_start();
    if (!isset($_SESSION['email'])) 
    {
        header('location: index.php');
        exit;
    }
    
?>

<html id="account_html">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>

<body id="account_body">

    <nav>
        <ul id="toolbar_index">
            <li><a href="index.php">Home</a></li>
            <li style="float:right"><a href="deconnexion.php">Disconnection</a></li>
            <li style="float:right"><a href="my_account.php"><?php echo htmlentities(trim($_SESSION['email'])); ?></a></li>
            <li style="float:right"><a href="bag.php">Bag</a></li>
        </ul>
    </nav>

    <div id="account">
        <h1><strong>MY ACCOUNT</strong></h1>
        <form action="delete_account.php">
        <p><a href="delete_account.php?action=deleteme">Delete my account</a></p>
        </form>
    </div>

</body>
</html>