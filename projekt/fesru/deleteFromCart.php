<?php include('header.php') ?>
<?php include('db.php') ?>


<?php

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $productId = $_GET['product_id'];
    $userId = $_GET['user_id'];

    $sql = "SELECT * FROM carts WHERE product_id = $productId AND user_id = $userId";
    $result = $mysqli->query($sql);
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        if ($row['quantity'] > 1) {
            $newQuantity = $row['quantity'] - 1;
            $sql = "UPDATE carts SET quantity = $newQuantity WHERE product_id = $productId AND user_id = $userId";
            if ($mysqli->query($sql) === TRUE) {
                header("Location: cart.php");
            } else {
                header("Location: error.php");
            }
        } else {
            $sql = "DELETE FROM carts WHERE product_id = $productId AND user_id = $userId";
            if ($mysqli->query($sql) === TRUE) {
                header("Location: cart.php");
            } else {
                header("Location: error.php");
            }
        }
    } else {
        header("Location: error.php");
    }
}

?>

