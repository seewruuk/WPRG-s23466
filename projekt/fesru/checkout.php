<?php include("header.php"); ?>
<?php include("db.php"); ?>


<?php


if ($_SERVER["REQUEST_METHOD"] === "GET") {

    $totalPrice = $_GET['total_price'];
    $userId = $_GET['user_id'];

    $sql = "INSERT INTO orders (user_id, total_amount, status) VALUES ($userId, $totalPrice, 'złożono')";
    $mysqli->query($sql);

    $sql = "DELETE FROM carts WHERE user_id = $userId";
    $mysqli->query($sql);


    echo "Zamówienie zostało złożone";
} else {
    echo "Niepoprawne dane";
}


?>

