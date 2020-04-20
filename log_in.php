<?php

    

?>

<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Log In</title>
</head>

<body>

    <nav>
        <ul id="toolbar_index">
            <li><a href="index.php">Home</a></li>
            <li style="float:right"><a href="log_in.php">Log In</a></li>
            <li style="float:right"><a href="bag.php">Bag</a></li>

        </ul>
    </nav>
    
    <div id="log_in">
        <p>If you dont have an account.</p>
        <a href="sign_in.php"><button class="button" style="margin-bottom: 50px;">Sign In</button></a><br>
        <h1 style="color: #555;">Log In</h1>
        <div id="info_sign_in">
            <form action="connection.php" method="post">
                <p>Email :<br/><input type="email" name="email" value=""/></p>
                <p>Password :<br/><input type="password" name="pwd" value=""/></p>
                <input class="button" type="submit" name="connection" value="Connection" style="font-weight: bold;"></input>            
            </form>
        </div>
    </div>
</body>
</html>