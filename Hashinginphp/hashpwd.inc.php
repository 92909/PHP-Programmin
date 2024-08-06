<?php

$sensitiveData = "Jackson";
$salt = bin2hex(random_bytes(16)); // generates random salt
$pepper = "ASecretPepperString";

$datatoHash = $sensitiveData . $salt . $pepper;
$hash = hash("sha256", $datatoHash);
echo "<br> $hash";
/*--  --*/

$sensitiveData = "Jackson";
$storedSalt = $salt;
$storedHash = $hash;
$pepper = "ASecretPepperString";

$datatoHash = $sensitiveData . $storedSalt . $pepper;
$verificationHash = hash("sha256", $datatoHash);



if ($storedHash === $verificationHash) {
    echo " <br> The data stored is the same";
    echo "<br> s$storedHash";
    echo "<br> s$verificationHash";
}


else {
    echo " <br>The data stored is not the same";
}