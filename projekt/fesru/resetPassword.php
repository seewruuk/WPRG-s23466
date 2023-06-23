<?php include("header.php"); ?>
<?php include("db.php"); ?>


<?php


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $userId = $_POST['user_id'];
    $newPassword = $_POST['new_password'];
    $newEmail = $_POST['new_email'];

    $sql = "UPDATE users SET password = '$newPassword', email = '$newEmail' WHERE id = '$userId'";
    $result = $mysqli->query($sql);
    if ($result) {
        header("Location: index.php");
    }
}


?>
