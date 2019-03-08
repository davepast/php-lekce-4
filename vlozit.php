<!DOCTYPE html>
<html lang="en">
<head>
    <title>Úkol 2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container">

<?php

        $handle = @fopen('prispevky.txt', 'a');
        if (!$handle) {
            echo "Chyba při otevírání souboru!";
        } else {
            if (!isset($_POST['submit'])) {
                echo "Chyba ve zdroji dat!";
            } else {
                $name = $_POST['name'];
                $note = $_POST['note'];
                $added = '<b>' . $name . '</b><br><small>' . date('Y-m-d h:i:s') . '</small><br>' . $note . "<br><hr>\n";

                if (fwrite($handle, $added)) {
                    echo "<p>Příspěvek byl úspěšně uložen do návštěvní knihy</p>";
                    echo "<p>Pokračujte na <a href='navstevni-kniha.php'>Návštěvní knihu</a></p>";

                } else {
                    echo "<p>Chyba při ukládání příspěvku!</p>";
                    echo "<p>Pokračujte na <a href='navstevni-kniha.php'>Návštěvní knihu</a></p>";
    //            fwrite($handle,  $added);


                }
                fclose($handle);
            }
        }

?>
</div>
</body>
</html>