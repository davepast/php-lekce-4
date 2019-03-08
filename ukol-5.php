<?php

function minimum($arg1, $arg2) {
    if (!is_numeric($arg1) || !is_numeric($arg2)) {
        return false;
    }
    if ($arg1 < $arg2) {
        return $arg1;
    } else {
        return $arg2;
    }
}

// v ideálním světě jeden return na fci, tj. uložit hodnoty do variable a na konec za všemi těmi ify, tak


$a1 = 56;
$a2 = 'xy';

$vysledek = minimum($a1, $a2);

if ($vysledek === false) {

    echo "Chyba";
} else {

    echo $vysledek;
}
