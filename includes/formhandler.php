<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $fruits = htmlspecialchars($_POST["favouritefruit"]);
    
    if(empty($firstname) || empty($lastname) || empty($fruits)){

        header("Location: ../index.php"); 
    }

    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $fruits;
    header("Location: ../index.php");
}

else{
    header("Location: ../index.php"); 
}