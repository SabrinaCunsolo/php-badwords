<!-- Create una variabile con un paragrafo.
Leggete da un parametro GET della querystring una "badword"
Sostituite all'interno del paragrafo tutte le occorrenze della "badword" con *** (3 asterischi).
Stampate a schermo il paragrafo censurato e la lunghezza del paragrafo originale.
Nome repo: php-badwords -->

<?php
//paragrafo
$testo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

$badword = $_GET['badword']; //paramentro get per recuperare parola da censurare

$testo_censurato = str_replace($badword, '***', $testo); //cambio valore sulla parola corrispondente alla badword

$lunghezza_testo = strlen($testo); //variabile per lunghezza paragrafo

?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Bad Words</title>
    </head>
    <body>
        <p>
            <?php
            echo $testo_censurato;
            ?>
        </p>
        <p>Numero caratteri:
            <pre></pre>
            <?php
            echo $lunghezza_testo;
            ?>
        </p>


    </body>
</html>
