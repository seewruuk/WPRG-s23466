<?php include 'header.php'; ?>
<?php include 'db.php'; ?>

    <div class="hero bg-gray-800 text-white py-20">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold mb-4">Miejski Bazarek</h1>
            <p class="text-lg">Kacper Sewruk s23466</p>
        </div>
    </div>

    <div class="container mx-auto mt-10">
        <h2 class="text-2xl font-semibold mb-4">Ostatnio przeglądane</h2>
        <div class="flex justify-center gap-8">
            <?php
            $sql = "SELECT * FROM lastViewed ORDER BY id DESC LIMIT 3";
            $result = $mysqli->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='w-1/3 bg-gray-200 p-4 rounded-lg text-center'>";
                    echo "<h3 class='text-lg font-semibold mb-2'>{$row['product_name']}</h3>";
                    echo "</div>";
                }
            }
            ?>
        </div>
    </div>


<?php include 'footer.php'; ?>