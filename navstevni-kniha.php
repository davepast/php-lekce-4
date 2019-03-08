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

    <form method="POST" action="vlozit.php">
        <div class="form-group">
            <label for="name">Jméno:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Vložte jméno">
        </div>
        <div class="form-group">
            <label for="note">Vzkaz</label>

            <textarea id="note" name="note" class="form-control" placeholder="Vložte vzkaz" style="height: 100px"></textarea>
        </div>

        <button type="submit" id="submit" name="submit" class="btn btn-primary">Přidat vzkaz</button>
    </form>

</div>

<div class="container">
    <?php
            /*
        if (!file_exists('prispevky.txt')) {
            echo "<hr><p>Žádné příspěvky!</p>";
        } else {
            $handle = fopen('prispevky.txt', 'r');
            if (!$handle) {
                echo "<hr><p>Žádné příspěvky!</p>";
            } else {
                echo "<br><hr>";
                while (($line = fgets($handle, 4096)) !== false) {
                    echo $line;

                }

            }
            fclose($handle);
        }
                        }
        }
            */


    function seradPrispevky($prispevky, $oddelovac) {
        $row = explode("<hr>", $prispevky);
        $i = 0;
        $text = "";
        for ($i = count($row); $i > 0; $i--) {
            $text = $text . $row[$i-1] . "<hr>";
        }
        return $text;
    }

        if (!file_exists('prispevky.txt')) {
            echo "<hr><p>Žádné příspěvky!</p>";
        } else {
            $handle = fopen('prispevky.txt', 'r');
            $contents = fread($handle, 10000);
            echo seradPrispevky($contents, "<hr>");
            fclose($handle);
        }

    ?>

</div>
</body>
</html>