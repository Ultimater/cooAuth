<?php
    session_start();
    include 'functions.php';

    if(!is_logged_in()){
        header("Location:index.php");
        die();   
    }
     
?>

<html>
    <head><title>Admin Page</title></head>
    
    <body>    
        <h4>Welcome <?php echo $_SESSION['username']?></h4>
        <a href="logout.php">Logout</a>
    </body>
</html>