<?php

    

?>


<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Sign In</title>
</head>

<body>

    <nav>
        <ul id="toolbar_index">
            <li><a href="index.html">Home</a></li>
            <li style="float:right"><a href="log_in.php">Log In</a></li>
            <li style="float:right"><a href="bag.php">Bag</a></li>

        </ul>
    </nav>
    
    <div id="sign_in">
        <p>You remember you have a account.</p>
        <a href="log_in.php"><button class="button" style="margin-bottom: 50px;">Log In</button></a><br>
        <h1 style="color: #555;">Sign In</h1>
        <div id="info_sign_in">
        <form action="verification.php" method="post">
            <p>Email :<br/><input type="email" name="email" value=""/></p>
            <p>Password :<br/><input type="password" name="pwd" value=""/></p>
            <p>Confirm Password :<br/><input type="password" name="pwd2" value=""/></p>
        </div>
        <input type="submit" name="inscription" value="Inscription" class="button" style="font-weight: bold;"></input>
        </form>
    </div>
</body>
</html>