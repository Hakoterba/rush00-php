<?php
    
    include('connect.php');
    session_start();

    if (!isset($_SESSION)) 
    {
        echo "Session variable is not set !";
        exit;
    }
    else 
    {
        if($_GET['action'] == 'deleteme')
        {
            $sql = "DELETE FROM `user` WHERE email = \"" . $_SESSION['email'] . "\"";
            $res = mysqli_query($connection,$sql);
            if(!$res)
            {
                echo '<br>fail';
                exit;
            }
            unset($_SESSION['email'], $_SESSION['pwd']);
            echo "Session is set. <br>A plus dans l'bus.<br><a href='index.php'>Home</a></div>";
        }
    }

?>