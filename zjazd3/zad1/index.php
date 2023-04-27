<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad 1</title>
</head>
<body>
    
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

       $file = $_POST['plik'];
       $fileOpen = fopen($file, "r");
       $array = array();
       $i = 0;

       while(!feof($fileOpen)){
            $line = fgets($fileOpen);
            $array[$i] = $line;
            $i++;
       }

        fclose($fileOpen);
        $fileWrite = fopen($file, "w");
       for($j = count($array) - 1; $j >= 0; $j--){
            fwrite($fileWrite, $array[$j]);
       }
       fclose($fileWrite);

        
    }
    ?>

    <form method="post" action="index.php">
        <input type="file" name="plik" id="plik" />
        <input type="submit" value="Wyślij" />
    </form>



</body>
</html>

