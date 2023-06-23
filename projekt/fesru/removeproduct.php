<?php include "db.php";


if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $removeComments = "DELETE FROM comments WHERE product_id = {$_GET['product_id']}";
    $removeResult = $mysqli->query($removeComments);
    if ($removeResult) {
        $removeFromOrderItems = "DELETE FROM orderItems WHERE product_id = {$_GET['product_id']}";
        $removeFromResult = $mysqli->query($removeFromOrderItems);
        if ($removeFromResult) {

            $removeFromCarts = "DELETE FROM carts WHERE product_id = {$_GET['product_id']}";
            $removeFromCartsResult = $mysqli->query($removeFromCarts);
            if ($removeFromCartsResult) {
                $sql = "DELETE FROM products WHERE id = {$_GET['product_id']}";
                $result = $mysqli->query($sql);
                if ($result) {
                    header("Location: panel.php");
                } else {
                    echo "Error: " . $sql . "<br>" . $mysqli->error;
                }
            }
        }
    }
}
?>
