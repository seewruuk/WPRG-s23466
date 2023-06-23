<?php include 'header.php'; ?>


<div class="container mx-auto my-8">
    <h1 class="text-3xl font-bold mb-4">Product</h1>

    <?php
    if (isset($_GET['product_id'])) {

        $_SESSION['product_id'] = $_GET['product_id'];
        $userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 1;

        $productId = $_GET['product_id'];

        $sql = "SELECT * FROM products WHERE id = $productId";

        $result = $mysqli->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo "<img src='images/{$row['image']}' alt='product image' class='w-1/4'>";
            echo "<p>ID: " . $row["id"] . "</p>";
            echo "<p>Produkt: " . $row["title"] . "</p>";
            echo "<p>Opis: " . $row["description"] . "</p>";
            echo "<p>Cena: " . $row["price"] . "</p>";
            echo "<p>Stan: " . $row["quantity"] . "</p>";
            echo "<a href='addToCart.php?product_id={$row['id']}&user_id=$userId' class='text-blue-500'>Dodaj do koszyka</a>";

            $sql = "INSERT INTO lastViewed (product_name) VALUES ('{$row['title']}')";
            $mysqli->query($sql);
        }

        $selectComments = "SELECT * FROM comments WHERE product_id = $productId";
        $resultComments = $mysqli->query($selectComments);
        if ($resultComments->num_rows > 0) {
            echo "<h2 class='text-2xl font-bold mt-8'>Comments</h2>";
            while ($row = $resultComments->fetch_assoc()) {
                echo "<p>{$row['comment']} cena {$row['rating']}</p>";
            }
        }
        ?>

        <h2 class="text-2xl font-bold mt-8">Dodaj komentarz</h2>
        <form action="addComment.php" method="POST" class="mt-4">
            <input type="number" name="userId" id="userId" value="<?php echo $userId ?>" hidden/>

            <label class="block mb-2">Komentarz</label>
            <textarea name="userComment" id="userComment"
                      class="px-4 py-2 border border-gray-300 rounded-md mb-4"></textarea>

            <label class="block mb-2">Ocena</label>
            <input type="number" name="userRating" id="userRating" max="5" min="1"
                   class="px-4 py-2 border border-gray-300 rounded-md mb-4"/>
            <input type="submit" value="Dodaj opinie" class="px-4 py-2 bg-blue-500 text-white rounded-md">
        </form>

        <?php
    }
    ?>
</div>