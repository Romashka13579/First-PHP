<?php

$passwordSignup = "Romashka";

$options = [
    'cost' => 11
];

$hashedPWD = password_hash($passwordSignup, PASSWORD_BCRYPT, $options); //PASSWORD_DEFAULT, PASSWORD_BCRYPT

$passwordLogin = "Romashka";

if(password_verify($passwordLogin, $hashedPWD)){
    echo "same";
}
else{
    echo "different";
}
