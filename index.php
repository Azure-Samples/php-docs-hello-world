<?php
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
$str = "\u{31ef}";
$str .= "\u{bfbd}";
$str .= "\u{7216}";
$str .= "\u{231e}";
$str .= "\u{5aef}";
$str .= "\u{bfbd}";
$str .= "\u{efbf}";
$str .= "\u{bdef}";
$str .= "\u{bfbd}";
$str .= "\u{5eef}";
$str .= "\u{bfbd}";
$str .= "\u{efbf}";
$str .= "\u{bdef}";
$str .= "\u{bfbd}";
$str .= "\u{5eef}";
$str .= "\u{bfbd}";

31EF BFBD 7216 231E 5AEF BFBD EFBF BDEF BFBD 5EEF BFBD EFBF BDEF BFBD 5EEF BFBD

/*$salt = utf8_decode("1�r#Z���^���^�"); */
       echo 'Ny Salt2 = ' . $str;
echo 'SHA-256:      ',
    

    crypt('StmDbi123', '$5$rounds=5000$' . $str . '$'),
    "<br/>";
echo 'SHA-512:      ',
    crypt('rasmuslerdorf', '$6$rounds=5000$usesomesillystringforsalt$'),
    "<br/>";
?>

