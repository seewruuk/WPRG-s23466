<?php
session_start();

if (isset($_POST['submit'])) {
    $cardNumber = $_POST['cardNumber'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $numberOfUsers = $_POST['numberOfUsers'];

    $_SESSION['cardNumber'] = $cardNumber;
    $_SESSION['fname'] = $fname;
    $_SESSION['lname'] = $lname;
    $_SESSION['email'] = $email;
    $_SESSION['numberOfUsers'] = $numberOfUsers;
    
    echo "<h2>Dane osób</h2>";
    echo "<form method='post' action='submit.php'>";
    for ($i = 1; $i <= $numberOfUsers; $i++) {
        echo "<h3>Osoba $i</h3>";
        echo "<label>Imię:</label>";
        echo "<input type='text' name='person[$i][fname]'><br><br>";
        echo "<label>Nazwisko:</label>";
        echo "<input type='text' name='person[$i][lname]'><br><br>";
        echo "<label>Email:</label>";
        echo "<input type='text' name='person[$i][email]'><br><br>";
    }
    echo "<input type='submit' name='save' value='Zapisz'>";
    echo "<input type='submit' name='submit' value='Dalej'>";
    echo "</form>";
} else {
    // exit();
}
?>