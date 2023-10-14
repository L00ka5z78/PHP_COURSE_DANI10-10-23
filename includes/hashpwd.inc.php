<?php

$pwdSignup = "krossing";

$options = [
    'cost' => 12
];
$hashedPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options);

$pwdLogin = 'krossing';

if (password_verify($pwdLogin, $hashedPwd)) {
    echo "THEY are the same";
} else {
    echo "THEY are not the same";
}







/*** HOW TO HAS SENSITIVE DATA ******************** */


// $sensitiveData = "krossing";
// $salt = bin2hex(random_bytes(16));  // generate random salt
// $pepper = 'ASecretPepperString';

// // echo "<br>" . $salt; //shows salt

// $dataToHash = $sensitiveData . $salt . $pepper;
// $hash = hash("sha256", $dataToHash);

// // echo "<br>" . $hash;  // shows hashed 

// /**** ***********************************************/

// $sensitiveData = "krossing";
// $storedSalt = $salt;
// $storedHash = $hash;
// $pepper = 'ASecretPepperString';

// $dataToHash = $sensitiveData . $salt . $pepper;

// $verificationHash = hash("sha256", $dataToHash);

// if ($storedHash == $verificationHash) {
//     echo "THE data are the same!!";
//     echo "<br>";
//     echo $storedHash;
//     echo "<br>";
//     echo $verificationHash;
// } else {
//     echo "THE data are NOT the same!!";
// }
