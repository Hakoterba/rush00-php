<?php

    include('connect.php');
    if(isset($_POST['inscription']) && $_POST['inscription'] == 'Inscription')
    {
        if(empty($_POST['email']))
        {
            echo 'Write email please.';
            echo '<br><a href="sign_in.php">Sign in</a><br>';
            exit;
        }
        if(empty($_POST['pwd']))
        {
            echo 'Write password please.';
            echo '<br><a href="sign_in.php">Sign in</a><br>';
            exit;
        }
        if((isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['pwd']) && !empty($_POST['pwd'])) && (isset($_POST['pwd2']) && !empty($_POST['pwd2'])))
        {
            if (!$connection)
            {
                echo "Failed server connection.\n";
                exit;
            }   
            mysqli_select_db($connection,BDD);
            echo "successful server connection then";
            echo '<br>';
            $sql = 'SELECT count(*) FROM User WHERE email="'.mysqli_escape_string($connection,$_POST['email']).'"';   
            $req = mysqli_query($connection,$sql) or die('ERROR sql1 !<br>'.$sql.'<br>'.mysqli_error($connection));
            $data = mysqli_fetch_array($req);
            if($data[0] == 0)
            {
                $sql = 'INSERT INTO User(email,password) VALUES(\''.mysqli_escape_string($connection,$_POST['email']).'\', \''.mysqli_escape_string($connection,md5($_POST['pwd'])).'\')';
                mysqli_query($connection,$sql) or die('ERROR sql2 !<br>'.$sql.'<br>'.mysqli_error($connection));
                echo "Registration successful.";
                header('Location: log_in.php');
                exit;
            } 
            else 
            {
                echo 'Error\n';
                echo '<br><a href="index.php">Home</a><br>';
                exit;
            }
        }
    }

?>