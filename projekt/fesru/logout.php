<?php include "header.php"; ?>
<?php include "db.php"; ?>


<?php


if (isset($_SESSION['user_id'])) {
    session_destroy();
    header("Location: index.php");
} else {
    header("Location: login.php");
}


?>
