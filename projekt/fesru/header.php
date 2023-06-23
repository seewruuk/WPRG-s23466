<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sklep internetowy</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<header class="bg-gray-900 text-white">
    <nav class="flex justify-between items-center p-4">
        <div class="text-xl font-bold">s23466</div>
        <div>
            <ul class="flex space-x-4">
                <li><a href="index.php" class="text-white hover:text-gray-300">Strona główna</a></li>
                <li><a href="products.php" class="text-white hover:text-gray-300">Produkty</a></li>
                <li><a href="cart.php" class="text-white hover:text-gray-300">Koszyk</a></li>
            </ul>
        </div>
        <div>
            <ul class="flex space-x-4">
                <?php
                if (isset($_SESSION['user_name'])) {
                    echo '<li><a href="logout.php" class="text-white hover:text-gray-300">Wyloguj</a></li>';
                    echo '<li><a href="changepassword.php" class="text-white hover:text-gray-300">Zmień hasło</a></li>';


                    if ($_SESSION['user_role'] == 'administrator' || $_SESSION['user_role'] == 'sprzedawca') {
                        echo '<li><a href="panel.php" class="text-white hover:text-gray-300">Panel</a></li>';
                        echo '<li><a href="addProduct.php" class="text-white hover:text-gray-300">Dodaj produkt</a></li>';
                    }
                } else {
                    echo '<li><a href="login.php" class="text-white hover:text-gray-300">Zaloguj się</a></li>';
                }
                ?>
            </ul>
        </div>
    </nav>
</header>

<?php
$host = 'localhost';
$dbName = 'fesru';
$username = 'root';
$password = 'qwerty123!';
$mysqli = new mysqli($host, $username, $password, $dbName);

if ($mysqli->connect_error) {
    die("Nieudane połączenie: " . $mysqli->connect_error);
}
?>

<?php
$lastViewedProducts = [];
?>

<?php
//if (isset($_SESSION['user_id'])) {
//    $loggedIn = true;
//    $username = $_SESSION['user_name'];
//} else {
//    $loggedIn = false;
//    $username = '';
//}
//?>

</body>
</html>