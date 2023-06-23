<?php include("header.php") ?>
<?php include("db.php") ?>


<?php


if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $orderId = $_GET['order_id'];

    $removeFromOrdeItems = "DELETE FROM orderItems WHERE order_id = $orderId";
    $removeResult = $mysqli->query($removeFromOrdeItems);
    if ($removeResult) {
        $removeFromOrders = "DELETE FROM orders WHERE id = $orderId";
        $removeFromOrdersResult = $mysqli->query($removeFromOrders);
        if ($removeFromOrdersResult) {
            header("Location: panel.php");
        }
    }


} else {
    echo "Niepoprawne dane";
}
?>
