<?php

    $handle = @fopen('pristupy.txt', 'a');

    if ($handle === false) {
        echo "Nelze otevřít soubor pristupy.txt";
    } else {
        fwrite($handle, date('Y-m-d H:i:s') . "<br>\n");
        fclose($handle);

        $handle = @fopen('pristupy.txt', 'r');

        if ($handle === false) {
            echo "Nelze otevřít soubor pristupy.txt";
        } else {


        echo 'Historie přístupů:<br>';
        echo (fread($handle, 10000));
        fclose($handle);
        }
    }
