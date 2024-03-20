<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/style.css">
    <title>Document</title>
</head>
<body>
    <!-- <div class = "main">
        <form action="includes/formhandler.php" method="post">
            <label for="firstname">Write your name</label>
            <input class="firstname" type="text" name="firstname" placeholder="Firstname...">

            <label for="lastname">Write your name</label>
            <input class="lastname" type="text" name="lastname" placeholder="Lastname...">

            <label for="favouritefruit">Write your name</label>
            <select class="favouritefruit" name="favouritefruit">
                <option value="apples">Apples</option>
                <option value="bananas">Bananas</option>
                <option value="oranges">Oranges</option>
                <option value="grapes">Grapes</option>
            </select>
            <button type = "submit">Submit</button>
        </form>
    </div> -->

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "post">
    <input type="number" name="number1" placeholder="First number">
    <select name="operator">
        <option value="add">+</option>
        <option value="subtract">-</option>
        <option value="multiply">*</option>
        <option value="divide">/</option>
    </select>
    <input type="number" name="number2" placeholder="Second number">
    <button>Calculate</button>
</form>
    <?php
    // $a = "Hello";
    // $b = "World!";
    // $c = $a . " " . $b;
    // echo $c;
    // echo 10**3;

    // $a = 19;

    // $result = match($a) {
    //     1 => "Variable a is equal to one",
    //     4 => "Variable a is equal to four",
    //     3,6 => "Variable a is equal to three or six",
    //     default => "IDK",
    // };

    // echo $result

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $number1 = filter_input(INPUT_POST, "number1", FILTER_SANITIZE_NUMBER_FLOAT);
        $number2 = filter_input(INPUT_POST, "number2", FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = htmlspecialchars($_POST["operator"]);
        
        // ERror handlers

        $errors = false;
        if(empty($number1) || empty($number2) || empty($operator)){
            echo "Are you dumb?";
            $errors = true;
        }

        if(!is_numeric($number1) || !is_numeric($number2) || !is_string($operator)){
            $errors = true;
        }


        //Calculations 
        if(!$errors){

            $result = 0;
            switch ($operator) {
                case "add":
                    $result = $number1 + $number2;
                    break;
                case "subtract":
                    $result = $number1 - $number2;
                    break;
                case "multiply":
                    $result = $number1 * $number2;
                    break;
                case "divide":
                    $result = $number1 / $number2;
                    break;
                default:
                    break;
            }
            echo $result;
        }
    }

    ?>
</body>
</html>