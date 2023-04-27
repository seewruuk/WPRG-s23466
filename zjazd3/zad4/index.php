<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad 4</title>
</head>
<body>
    
<?php
    $isCorrectIp = false;
     $file = fopen("ip.txt", 'r');
        while(!feof($file)) {
            $line = fgets($file);
            if (strpos($line, $_SERVER['REMOTE_ADDR']) !== false) {
                $isCorrectIp = true;
            }
        }
        if($isCorrectIp){
            include 'admin.php';
        }else{
            include 'user.php';
        }
?>


</body>
</html>

