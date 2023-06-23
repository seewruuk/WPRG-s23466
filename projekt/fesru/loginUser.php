<?php include('header.php') ?>
<?php include('db.php') ?>



<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['login'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['username'];
        $_SESSION['user_email'] = $row['email'];
        $_SESSION['user_role'] = $row['role'];
        header("Location: index.php");
    } else {
        ?>
        <div class="flex items-center justify-center h-screen">
            <h1>Błędny login lub hasło :/</h1>
        </div>

        <?php
    }
}

?>
