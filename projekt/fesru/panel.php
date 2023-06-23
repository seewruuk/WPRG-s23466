<?php include "header.php"; ?>
<?php include "db.php"; ?>

<?php
if ($_SESSION["user_role"] == "administrator") {
    ?>
    <div class="container mx-auto my-8">
        <h1 class="text-3xl font-bold mb-4">Panel Administratora</h1>
        <h2 class="text-2xl font-bold">Wszystkie produkty</h2>
        <?php
        $sql = "SELECT * FROM products";
        $result = $mysqli->query($sql);
        if ($result->num_rows > 0) {
            echo "<ul class='mt-4'>";
            while ($row = $result->fetch_assoc()) {
                echo "<li>{$row['title']}, <b>CENA: </b>{$row['price']}, <b>ILOŚĆ: </b> {$row["quantity"]}</li>";
                echo "<a href='editproduct.php?product_id={$row['id']}' class='text-blue-500'>edytuj</a>";
                echo " ";
                echo "<a href='removeproduct.php?product_id={$row['id']}' class='text-red-500'>usuń</a>";
            }
            echo "</ul>";
        }
        ?>

        <h2 class="text-2xl font-bold mt-8">Wszystkie zamówienia</h2>
        <?php
        $sql = "SELECT * FROM orders";
        $result = $mysqli->query($sql);
        if ($result->num_rows > 0) {
            echo "<ul class='mt-4'>";
            while ($row = $result->fetch_assoc()) {
                echo "<li><b>UŻYTKOWNIK: </b>{$row['user_id']}, <b>CENA: </b> {$row["total_amount"]} PLN, <b>STAUS: </b> {$row["status"]}</li>";
                if ($row["status"] == "zlozono") {
                    echo "<a href='editOrder.php?order_id={$row['id']}' class='text-blue-500'>oznacz jako zrealizowane</a>";
                }
                echo " ";
                echo "<a href='removeOrder.php?order_id={$row['id']}' class='text-red-500'>usuń</a>";
            }
            echo "</ul>";
        }
        ?>
    </div>
    <?php
} else if ($_SESSION["user_role"] == "sprzedawca") {
    ?>
    <div class="container mx-auto my-8">
        <h1 class="text-3xl font-bold mb-4">Sprzedawca</h1>
        <h2 class="text-2xl font-bold">Twoje produkty</h2>
        <?php
        $sql = "SELECT * FROM products WHERE sellerId = {$_SESSION['user_id']}";
        $result = $mysqli->query($sql);
        if ($result->num_rows > 0) {
            echo "<ul class='mt-4'>";
            while ($row = $result->fetch_assoc()) {
                echo "<li>{$row['title']}, <b>CENA: </b>{$row['price']}, <b>ILOŚĆ: </b> {$row["quantity"]}</li>";
                echo "<a href='editproduct.php?product_id={$row['id']}' class='text-blue-500'>edytuj</a>";
                echo " ";
                echo "<a href='removeproduct.php?product_id={$row['id']}' class='text-red-500'>usuń</a>";
            }
            echo "</ul>";
        }
        ?>

        <h2 class="text-2xl font-bold mt-8">Wszystkie zamówienia</h2>
        <?php
        $sql = "SELECT * FROM orders";
        $result = $mysqli->query($sql);
        if ($result->num_rows > 0) {
            echo "<ul class='mt-4'>";
            while ($row = $result->fetch_assoc()) {
                echo "<li><b>UŻYTKOWNIK: </b>{$row['user_id']}, <b>CENA: </b> {$row["total_amount"]} PLN, <b>STAUS: </b> {$row["status"]}</li>";
                if ($row["status"] == "zlozone") {
                    echo "<a href='editOrder.php?order_id={$row['id']}' class='text-blue-500'>oznacz jako zrealizowane</a>";
                }
                echo " ";
                echo "<a href='removeOrder.php?order_id={$row['id']}&user_id={$_SESSION['user_id']}' class='text-red-500'>usuń</a>";
            }
            echo "</ul>";
        }
        ?>
    </div>
    <?php
} else {
    header("Location: index.php");
}
?>