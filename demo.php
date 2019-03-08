<?php
$handle = fopen('my_file.txt','a');

if ($handle === false) {
    echo 'Soubor se nepodařilo otevřít!';
} else {

    fwrite($handle, "Ahoj lidi\n");
    fread($handle,1000);
    fclose($handle);
}
