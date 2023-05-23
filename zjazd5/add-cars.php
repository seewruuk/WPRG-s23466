<?php include 'header.php'; ?>


<h1>Witaj na stronie addCars!</h1>
<p>Tutaj dodasz auto do bazy danych</p>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
       $sql = 'INSERT INTO samochody (marka, model, cena, rok, opis) VALUES ("'.$_POST['marka'].'", "'.$_POST['model'].'", "'.$_POST['cena'].'", "'.$_POST['rok'].'", "'.$_POST['opis'].'")';
         $result = $conn->query($sql);
            if($result){
                echo 'Dodano auto do bazy danych';
            }else{
                echo 'Błąd dodawania auta do bazy danych';
            }

    }


?>



<form method="post" action="add-cars.php">
    <input type="text" name="marka" placeholder="Marka"><br>
    <input type="text" name="model" placeholder="Model"><br>
    <input type="text" name="rok" placeholder="Rok"><br>
    <input type="float" name="cena" placeholder="Cena"><br>
    <input type="text" name="opis" placeholder="Opis"><br>
    <input type="submit" name="submit" value="Dodaj auto">
</form>

<?php include 'footer.php'; ?>