<?php include 'header.php'; ?>
<?php include "db.php"; ?>

<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userId = $_POST['userId'];
    $userComment = $_POST['userComment'];
    $userRating = $_POST['userRating'];
    $productId = $_SESSION['product_id'];

    $sql = "INSERT INTO comments (user_id, product_id, comment, rating) VALUES ($userId, $productId, '$userComment', $userRating)";

    if ($mysqli->query($sql) === TRUE) {
        header("Location: product.php?product_id=$productId");
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
}


?>
