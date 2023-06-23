<?php include "db.php";


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $new_title = $_POST['new_title'];
    $new_desc = $_POST['new_desc'];
    $new_price = $_POST['new_price'];
    $new_price = str_replace(",", ".", $new_price);
    $new_price = floatval($new_price);
    $new_quantity = $_POST['new_quantity'];
    $new_category = $_POST['new_category'];

    $sql = "UPDATE products SET title = '$new_title', description = '$new_desc', price = '$new_price', category_id = '$new_category', quantity = '$new_quantity' WHERE id = {$_POST['product_id']}";
    $result = $mysqli->query($sql);
    if ($result) {
        header("Location: panel.php");
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

}


?>