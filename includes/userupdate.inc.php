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
        
        $hashedPasswd = password_hash($passwd, PASSWORD_BCRYPT, $options);

        $query = "UPDATE users SET username = :username, passwd = :passwd, email = :email WHERE id = 8;";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":passwd", $hashedPasswd);
        $stmt->bindParam(":email", $email);

        $stmt->execute();

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