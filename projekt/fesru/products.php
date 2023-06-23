<?php include 'header.php'; ?>

<div class="products-container mx-auto max-w-4xl px-4">
    <div class="search-field flex items-center space-x-2 mb-4">
        <input type="text" id="searchInput" placeholder="Wpisz nazwę produktu"
               class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">

        <ul id="categoriesList" class="flex space-x-2">
            <li data-category="all" class="px-2 py-1 bg-blue-500 text-white rounded-md cursor-pointer">Wszystkie</li>
            <li data-category="1" class="px-2 py-1 bg-blue-500 text-white rounded-md cursor-pointer">Elektronika</li>
            <li data-category="2" class="px-2 py-1 bg-blue-500 text-white rounded-md cursor-pointer">Moda</li>
            <li data-category="3" class="px-2 py-1 bg-blue-500 text-white rounded-md cursor-pointer">Dom i ogród</li>
            <li data-category="4" class="px-2 py-1 bg-blue-500 text-white rounded-md cursor-pointer">Ksiazki</li>
            <li data-category="5" class="px-2 py-1 bg-blue-500 text-white rounded-md cursor-pointer">Sport</li>
        </ul>
    </div>
    <div class="products">
        <ul id="productsList" class="space-y-4">
            <?php
            $sql = "SELECT * FROM products";
            $result = $mysqli->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo "<li data-category='{$row['category_id']}' class='border border-gray-300 rounded-md p-4'>";
                echo "<a href='product.php?product_id={$row['id']}' class='flex items-center space-x-4'>";
                echo "<div class='bg-gray-300 w-16 h-16'>";
                $imageId = $row['image'];
                $imageUrl = "images/{$imageId}";
                echo "<img src='{$imageUrl}' alt='Product Image'>";
                echo "</div>";
                echo "<div class='title font-semibold text-lg'>{$row['title']}</div>";
                echo "<div class='qty'>Dostępnych sztuk {$row['quantity']}</div>";
                echo "<div class='price'>{$row['price']} PLN</div>";
                echo "</a>";
                echo "</li>";
            }
            ?>
        </ul>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#searchInput').on('input', function () {
            var searchText = $(this).val().toLowerCase();
            $('.products li').each(function () {
                var title = $(this).find('.title').text().toLowerCase();
                if (title.indexOf(searchText) === -1) {
                    $(this).hide();
                } else {
                    $(this).show();
                }
            });
        });

        $('#categoriesList li').click(function () {
            var selectedCategory = $(this).data('category');
            if (selectedCategory === 'all') {
                $('.products li').show();
            } else {
                $('.products li').each(function () {
                    var category = $(this).data('category');
                    if (category != selectedCategory) {
                        $(this).hide();
                    } else {
                        $(this).show();
                    }
                });
            }
        });
    });
</script>
