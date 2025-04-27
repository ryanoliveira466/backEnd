<?php

    $userRight = "admin";
    $passwordRight = "123";



    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $user = $_POST["user"];
        $password = $_POST["password"];

        if($user == $userRight && $password == $passwordRight){
            echo "Logged in";
        }
        else{
            echo "User/password incorrects";
        }

    }
?>
