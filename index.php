<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/style.css">
    <title>Document</title>
</head>
<body>
    <?php

    // $music = array("electric guitar", "drums", "piano");
    // $music = ["electric guitar", "drums", "piano"];

    // $music[] = "acoustic guitar";

    // //unset($music[1]);
    // array_splice($music, 0, 1);
    // //echo $music[1];

    // $bands = [
    //     "metalcore" => "Killswitch Engage",
    //     "hard rock" => "Three Days Grace",
    //     "metal" => "Bullet For My Valentine",
    // ];

    // //echo $bands["metalcore"];

    // //print_r($bands);

    // //echo count($bands);
    // sort($bands);
    // //print_r($bands);

    // array_push($music, "violin");

    // array_splice($music, 0, 0, "drums2");
    // print_r($music);

    // $music2 = [
    //     array("Sleeping with Sirens", "While She Sleeps"),
    //     array("Three Days Grace", "Thirty Seconds To Mars"),
    // ];

    // echo $music2[1][1];

    $string = "Hello World!";

    //echo strlen($string);
    //echo strpos($string, "o");
    //echo str_replace("World!", "Romashka", $string);

    $array = ["Sleeping with Sirens", "While She Sleeps"];
    $array2 = ["Bring Me The Horizon", "Motionless In White"];

    //echo count($array);
    //echo is_array($array);
    //array_push($array, "Ice Nine Kills");
    //print_r($array);
    //array_pop($array);
    //print_r($array);
    //print_r(array_merge($array, $array2));
    //echo date("Y-m-d H:i:s");
    //echo time();
    $date = "2024-03-20 23:52:00";
    echo strtotime($date);
    ?>
</body>
</html>