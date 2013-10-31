<?php
    session_start();    
    include 'config.php';
    include 'functions.php';

    if(isset($_POST['login'])) {        
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if(is_valid_cred($username, $password)){            
            $_SESSION['username']= $username;
            header("location:admin.php");
         } else {
            $status = "Invalid username and password";               
        }
    }    
        
?>

<html>
<head>
    <title>Index Page</title>    
    <style>        
        form li {
            list-style:none;   
        }
    </style>
</head>    
    <body>    
        <form action="index.php" method="post">        
            <ul>
                <li>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                </li>                
                <li>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </li>
                <li>
                    <input type="submit" name="login" value="Submit">
                </li>
            </ul>                        
            <?php if(isset($status)) echo $status; ?>
        </form>   
    </body>
</html>