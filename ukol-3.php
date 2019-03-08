<?php

function zjistitCas() {

    echo date('Y-m-d h:i:s');
    echo "<br>";
}


zjistitCas();
sleep(1);
zjistitCas();

function vypisPozdrav($denniDoba, $osloveni = "pane") { //default value input
    echo "Dobré $denniDoba, $osloveni";
}

$doba = "ráno";
vypisPozdrav($doba);

echo "<br>";

function maximum($arg1, $arg2) {
    if (is_numeric($arg1) && is_numeric($arg2)) {
        echo max($arg1, $arg2);
        echo "<br>";
    } else {


    echo "Chyba, hodnoty nejsou číselné!";
    }
}

maximum(304, 560);
maximum(7.2, 7.1);
maximum(23, 23);
maximum(253, 'x');
echo "<br>";
//nebo

function maximum2($arg1, $arg2) {
    if (!is_numeric($arg1) || !is_numeric($arg2)) {
        echo "chyba";
    } else {
        if ($arg1 > $arg2) {
            echo $arg1;
            echo "<br>";
        } else {
            echo $arg2;
            echo "<br>";

        }

    }


}

maximum2(304, 560);
maximum2(7.2, 7.1);
maximum2(23, 23);
maximum2(253, 'x');