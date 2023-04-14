<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator - podsumowanie</title>
</head>
<body>
    <style>
        span{
            font-style: italic
        }
        </style>
<h1>Rezerwacja #<?php
    echo rand(1000, 9999);
?></h1>



<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $card = $_POST['card'];
        $showDate = $_POST['showDate'];
        $showTime = $_POST['showTime'];
        $radio = $_POST['radio'];
        if(isset($_POST['services'])){
            $services = $_POST['services'];
        }


    }
?>

<p>Imie: <span><?php echo $fname ?></span></p>
<p>Nazwisko: <span><?php echo $lname ?></span></p>
<p>Email: <span><?php echo $email ?></span></p>
<p>Adres: <span><?php echo $address ?></span></p>
<p>Numer karty: <span><?php echo $card ?></span></p>
<p>Data przyjazdu: <span><?php echo $showDate ?></span></p>
<p>Godzina przyjazdu: <span><?php echo $showTime ?></span></p>
<p>Łóżeczko dla dziecka: <span><?php echo $radio ?></span></p>
<p>Usługi dodatkowe: <span>
    <?php
    if(!empty($services)) {

        echo "<ul>";
        foreach ($services as $service) {
            echo "<li>$service</li>";
        }
        echo "</ul>";
    }else{
        echo "Brak usług dodatkowych";
    }
    ?>

</span></p>
    <h1>Dane osób </h1>    

    <?php
    $clientName = $_POST['clientName'];
    $clientLastName = $_POST['clientLastName'];
    for($i=0; $i <= count($clientName)-1; $i++){
        echo "<p><h3>Osoba nr " . $i + 1 . "</h3></p>";
        echo "<p>Imie: <span>". $clientName[$i] . "</span></p>";
        echo "<p>Nazwisko: <span>". $clientLastName[$i] . "</span></p>";
    }
    ?>





    
</body>
</html>











