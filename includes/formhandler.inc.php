<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["firstname"];
    $passwd = $_POST["password"];
    $email = $_POST["email"];

    try {
        require_once "dbh.inc.php";

        $options = [
            'cost' => 11
        ];
        
        $hashedPasswd = password_hash($passwd, PASSWORD_BCRYPT, $options); //PASSWORD_DEFAULT, PASSWORD_BCRYPT
        

        $query = "INSERT INTO users (username, passwd, email) VALUES (?, ?, ?);";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$username, $hashedPasswd, $email]);

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");

        die();//exit();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
}
else {
    header("Location: ../index.php");
}