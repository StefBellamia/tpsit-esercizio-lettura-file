<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $file_name = "libri.txt";

    $f = fopen($file_name, 'r');
    if ($f == false) {
        exit();
    } else {
        while(feof($f) == false) {
            $record = fgets($f);
            echo $record;
        }
        fclose($f);
    }
?>
</body>
</html>