<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator</title>
</head>
<body>
    <h1>Hotel</h1>

    <form method="post" action="index.php">
        <select name="iloscOsob" id="iloscOsob" required onchange="this.form.submit()">
            <option>Wybierz ilość osób</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        </form>

    <form method="post" action="rezerwacja.php">

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $iloscOsob = $_POST['iloscOsob'];
        for($i=1; $i <= $iloscOsob; $i++){
            echo '<h2>Osoba nr' . $i . '</h2>';
                echo '<label for="clientName[]">Imię:</label>';
                echo '<input type="text" id="clientName[]" name="clientName[]"><br>';
                echo '<label for="clientLastName[]">Nazwisko:</label>';
                echo '<input type="text" id="clientLastName[]" name="clientLastName[]"><br>';

        }
    }else{
        echo "<p>Wybierz ilość osób</p>";
    }
        ?>

        <h2>Dane do rezerwacji </h2>
        <label id="fname" name="fname"  >Imię</label> 
        <input type="text" name="fname" required />
        <br>
        <label for="lname" >Nazwisko</label>
        <input type="text" name="lname" id="lname" required />
        <br>
        <label for="email" >Email</label>
        <input type="email" name="email" id="email" required />
        <br>
        <label for="address" >Adres</label>
        <input type="text" name="address" id="address" required />
        <br>
        <label for="card" >Numer karty</label>
        <input type="number" name="card" id="card"  maxlength="16" placeholder="xxxxxxxxxxxxxxxx" />
        <br>
        <label for="showDate" >Data przyjazdu</label>
        <input type="date" name="showDate" id="showDate" required/>
        <br>
        <label for="showTime" >Godzina przyjadzu</label>
        <input type="time" name="showTime" id="showTime" required/>
        <br>
        <p>Dostawić łóżeczko? (dla dziecka)
        <label for="tak">tak</label>
        <input type="radio" name="radio" id="tak" value="tak"/>
        <label for="nie">nie</label>
        <input type="radio" name="radio" id="nie" value="nie" />
        </p>
        <br>
        <select name="services[]" multiple>
         <option value="Klimatyzacja">Klimatyzacja</option>
         <option value="Popielniczka">Popielniczka</option>
         <option value="Extra śniadanie">Extra śniadanie</option>
         <option value="Extra kolacja">Extra kolacja</option>
         </select>



        <br>
        <input type="submit" name="submit" value="Oblicz">
    </form>
</body>
</html>