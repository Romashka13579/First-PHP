<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["usersearch"];

    try {
        require_once "includes/dbh.inc.php";

        $query = "SELECT * FROM comments WHERE username = :username;";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username", $username);

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;
        $stmt = null;

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
}
else {
    header("Location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>
        <?php
            if(empty($results)){
                echo "No Results";
            }
            else{
                foreach ($results as $row) {
                    echo " --- " . htmlspecialchars($row["username"]);
                    echo " --- " . htmlspecialchars($row["commented_text"]);
                    echo " --- " . htmlspecialchars($row["created_at"]);
                }
            }
        ?>
    </h3>

</body>
</html>