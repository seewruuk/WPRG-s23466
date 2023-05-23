<?php include 'header.php'; ?>



<?php
if(isset($_GET['id'])) {
    $carId = $_GET['id'];



    $sql = "SELECT * FROM samochody WHERE id = $carId";
    $result = $conn->query($sql);

    echo "<h1>Informacje o samochodzie</h1>";

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "ID: " . $row["id"] . "<br>";
        echo "Marka: " . $row["marka"] . "<br>";
        echo "Model: " . $row["model"] . "<br>";
        echo "Cena: " . $row["cena"] . "<br>";
        echo "Rok: " . $row["rok"] . "<br>";
        echo "Opis: " . $row["opis"] . "<br>";
        echo "<a href='index.php'>Powrót na strone główną</a>";
    } else {
        echo "Brak informacji o samochodzie.";
    }

} else {
    echo "Nieprawidłowe id samochodu.";
}
?>

<?php include 'footer.php'; ?>
