<?php
/* These salts are examples only, and should not be used verbatim in your code.
   You should generate a distinct, correctly-formatted salt for each password.
*/
echo 'Standard DES: ',
    crypt('rasmuslerdorf', 'rl'),
    "<br/>";
echo 'Extended DES: ',
    crypt('rasmuslerdorf', '_J9..rasm'),
    "\n\r";
echo 'MD5:          ',
    crypt('rasmuslerdorf', '$1$rasmusle$'),
    "\n\r";
echo 'Blowfish:     ',
    crypt('rasmuslerdorf', '$2a$07$usesomesillystringforsalt$'),
    "\n\r";
$salt = iconv('Latin1', 'UTF-8', hex2str("31EFBFBD7216231E5AEFBFBDEFBFBDEFBFBD5EEFBFBDEFBFBDEFBFBD5EEFBFBD"));

/*$salt = utf8_decode("1�r#Z���^���^�");
       echo 'Ny Salt2 = ' . $salt;*/
echo 'SHA-256:      ',
    

    crypt('StmDbi123', '$5$rounds=5000$' . $salt . '$'),
    "\n\r";
echo 'SHA-512:      ',
    crypt('rasmuslerdorf', '$6$rounds=5000$usesomesillystringforsalt$'),
    "\n\r";
?>

