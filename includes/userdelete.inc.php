<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["firstname"];
    $passwd = $_POST["password"];

    try {
        require_once "dbh.inc.php";

        $options = [
            'cost' => 11
        ];
        
        $hashedPasswd = password_hash($passwd, PASSWORD_BCRYPT, $options);

        $query = "DELETE FROM users WHERE username = :username AND passwd = :passwd;";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":passwd", $hashedPasswd);

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