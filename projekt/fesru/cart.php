<?php include("header.php") ?>
<?php include("db.php") ?>

<div class="container mx-auto my-8">
    <h2 class="text-2xl font-semibold mb-4">Twój koszyk</h2>

    <?php
    $userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 1;

    $sql = "SELECT carts.id, carts.quantity, products.title, products.price, products.id FROM carts INNER JOIN products ON carts.product_id = products.id WHERE carts.user_id = $userId";

    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        echo "<table class='w-full'>";
        echo "<tr>";
        echo "<th class='px-4 py-2'>ID</th>";
        echo "<th class='px-4 py-2'>Produkt</th>";
        echo "<th class='px-4 py-2'>Cena</th>";
        echo "<th class='px-4 py-2'>Ilość</th>";
        echo "<th class='px-4 py-2'>Suma</th>";
        echo "<th class='px-4 py-2'>Usuń</th>";
        echo "</tr>";
        $total = 0;
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td class='px-4 py-2'>{$row['id']}</td>";
            echo "<td class='px-4 py-2'>{$row['title']}</td>";
            echo "<td class='px-4 py-2'>{$row['price']}</td>";
            echo "<td class='px-4 py-2'>{$row['quantity']}</td>";
            echo "<td class='px-4 py-2'>" . $row['price'] * $row['quantity'] . "</td>";
            echo "<td class='px-4 py-2'><a href='deleteFromCart.php?product_id={$row['id']}&user_id=$userId' class='text-red-500'>Usuń</a></td>";
            echo "</tr>";
            $total += $row['price'] * $row['quantity'];
        }
        echo "<tr>";
        echo "<td colspan='4' class='px-4 py-2'>Suma</td>";
        echo "<td class='px-4 py-2'>$total</td>";
        echo "</tr>";
        echo "</table>";

        if (isset($_SESSION['user_id'])) {
            echo "<a href='checkout.php?total_price=$total&user_id=$userId' class='inline-block px-4 py-2 mt-4 bg-blue-500 text-white rounded-md'>Zamów</a>";
        } else {
            echo "<a href='login.php' class='inline-block px-4 py-2 mt-4 bg-blue-500 text-white rounded-md'>Zaloguj się</a>";
        }
    } else {
        echo "Brak produktów w koszyku";
    }
    ?>
</div>