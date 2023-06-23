<?php include "header.php"; ?>
<?php include "db.php"; ?>


<?php


if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $productId = $_GET['product_id'];
    $userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 1;


    $sql = "SELECT * FROM carts WHERE user_id = $userId AND product_id = $productId";
    $result = $mysqli->query($sql);
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $cartItemId = $row['id'];
        $newQuantity = $row['quantity'] + 1;
        $sql = "UPDATE carts SET quantity = '$newQuantity' WHERE id = '$cartItemId'";
        if ($mysqli->query($sql) === TRUE) {
            header("Location: product.php?product_id=$productId");
        } else {
            header("Location: error.php");
        }
    } else {
        $sql = "INSERT INTO carts (user_id, product_id, quantity) VALUES ($userId, $productId, 1)";
        if ($mysqli->query($sql) === TRUE) {
            header("Location: product.php?product_id=$productId");
        } else {
            header("Location: error.php");
        }
    }

}

?>