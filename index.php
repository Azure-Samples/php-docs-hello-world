<?php
/* These salts are examples only, and should not be used verbatim in your code.
   You should generate a distinct, correctly-formatted salt for each password.
*/
echo 'Standard DES: ',
    crypt('rasmuslerdorf', 'rl'),
    "\n\r";
echo 'Extended DES: ',
    crypt('rasmuslerdorf', '_J9..rasm'),
    "\n\r";
echo 'MD5:          ',
    crypt('rasmuslerdorf', '$1$rasmusle$'),
    "\n\r";
echo 'Blowfish:     ',
    crypt('rasmuslerdorf', '$2a$07$usesomesillystringforsalt$'),
    "\n\r";
echo 'SHA-256:      ',
    $salt = utf_decode("1�r#Z���^���^�");
       echo 'Salt = ' . $salt;
    crypt('StmDbi123', '$5$rounds=5000$' . $salt . '$'),
    "\n\r";
echo 'SHA-512:      ',
    crypt('rasmuslerdorf', '$6$rounds=5000$usesomesillystringforsalt$'),
    "\n\r";
?>

