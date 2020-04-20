<?php
    include("connect.php");

    if(isset($_POST['connection']) && $_POST['connection'])
    {
        if((isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['pwd']) && !empty($_POST['pwd'])))
        {
            if (!$connection)
            {
                echo "Failed server connection.\n";
                exit;
            }
            mysqli_select_db($connection,BDD);
            echo "successful server connection then";
            echo '<br>';
            $sql = 'SELECT count(*) FROM User WHERE email="'.mysqli_escape_string($connection,$_POST['email']).'"
            AND password="'.mysqli_escape_string($connection,md5($_POST['pwd'])).'"';
            $req = mysqli_query($connection,$sql) or die('ERROR sql !<br>'.$sql.'<br>'.mysqli_error());
            $data = mysqli_fetch_array($req);
            mysqli_free_result($req);
            mysqli_close($connection);
            
            if($data[0] == 1)
            {
                session_start();
                $_SESSION['email'] = $_POST['email'];
                header('Location: espace_membre.php');
                exit;
            }
            elseif($data[0] == 0)
            {
                echo "email or password not recognized.\n";
                echo "<br><a href='index.php';>Home</a>";
                exit;
            }
            else
            {
                echo "Input error.\n";
                echo "<br><a href='index.php';>Home</a>";  
            }
        }
    }

?>