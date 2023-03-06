<?php
/* These salts are examples only, and should not be used verbatim in your code.
   You should generate a distinct, correctly-formatted salt for each password.
*/
echo 'Standard DES: ',
    crypt('rasmuslerdorf', 'rl'),
    "<br/>";
echo 'Extended DES: ',
    crypt('rasmuslerdorf', '_J9..rasm'),
    "<br/>";
echo 'MD5:          ',
    crypt('rasmuslerdorf', '$1$rasmusle$'),
    "<br/>";
echo 'Blowfish:     ',
    crypt('rasmuslerdorf', '$2a$07$usesomesillystringforsalt$'),
    "<br/>";
$salt = "ï¿½r#Zï¿½ï¿½ï¿½^ï¿½ï¿½ï¿½^ï¿";

/*$salt = utf8_decode("1�r#Z���^���^�");
       echo 'Ny Salt2 = ' . $salt;*/
echo 'SHA-256:      ',
    

    crypt('StmDbi123', '$5$rounds=5000$' . $salt . '$'),
    "<br/>";
echo 'SHA-512:      ',
    crypt('rasmuslerdorf', '$6$rounds=5000$usesomesillystringforsalt$'),
    "<br/>";
?>

