<?php

    function is_logged_in(){
        return isset($_SESSION['username']);
    }

    function is_valid_cred($username, $password){
        return ($username === USERNAME && $password === PASSWORD);
    }

?>