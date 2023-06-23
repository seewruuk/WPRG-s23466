<?php include "header.php"; ?>
<?php include "db.php"; ?>

<div class="container mx-auto my-8">
    <h1 class="text-3xl font-bold mb-4">Edytuj produkt</h1>

    <?php
    if (isset($_GET['product_id'])) {

        $productId = $_GET['product_id'];

        $sql = "SELECT * FROM products WHERE id = $productId";

        $result = $mysqli->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo "ID: " . $row["id"] . "<br>";
            echo "Produkt: " . $row["title"] . "<br>";
            echo "Opis: " . $row["description"] . "<br>";
            echo "Cena: " . $row["price"] . "<br>";
            echo "Stan: " . $row["quantity"] . "<br>";
        }
        ?>
        <h3 class="text-xl font-bold mt-4">ID kategorii produktów</h3>
        <ul class="list-disc list-inside mt-2">
            <li>1 - Elektronika</li>
            <li>2 - Moda</li>
            <li>3 - Dom i ogród</li>
            <li>4 - Książki</li>
            <li>5 - Sport</li>
        </ul>

        <form action="updateproduct.php" method="post" class="mt-4">
            <input type="hidden" name="product_id" value="<?php echo $productId ?>">
            <input type="text" name="new_title" id="new_title" placeholder="Nowy tytuł" class="border border-gray-300 rounded px-4 py-2 mt-2">
            <input type="text" name="new_desc" id="new_desc" placeholder="Nowy opis" class="border border-gray-300 rounded px-4 py-2 mt-2">
            <input type="text" name="new_price" id="new_price" placeholder="Nowa cena" class="border border-gray-300 rounded px-4 py-2 mt-2">
            <input type="number" name="new_category" id="new_category" placeholder="Nowa kategoria" class="border border-gray-300 rounded px-4 py-2 mt-2">
            <input type="number" min="0" name="new_quantity" id="new_quantity" placeholder="Nowy stan magazynowy" class="border border-gray-300 rounded px-4 py-2 mt-2">
            <input type="submit" value="Zapisz" class="bg-blue-500 text-white rounded px-4 py-2 mt-4">
        </form>

        <?php
    } else {
        echo "Błąd";
    }
    ?>
</div>