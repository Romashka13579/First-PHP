<?php

$sensetiveDATA = "Romashka";
$salt = bin2hex(random_bytes(16));
$pepper = "KEYWORDPepperString";

echo $salt;

$dataToHash = $sensetiveDATA . $salt . $pepper;
$hash = hash("sha256", $dataToHash);

echo '<br>' . $hash;

// ---

$sensetiveDATA = "Romashka";

$storedSalt = $salt;
$storedHash = $hash;
$pepper = "KEYWORDPepperString";

echo '<br>' . $salt;

$dataToHash = $sensetiveDATA . $storedSalt . $pepper;
$hash = hash("sha256", $dataToHash);

echo '<br>' . $hash;

if($storedHash == $hash){
    echo '<br>' . "same";
}
else{
    echo '<br>' . "different";
}