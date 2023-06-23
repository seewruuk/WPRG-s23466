<?php include "header.php"; ?>
<?php include "db.php"; ?>

<div class="container mx-auto my-8">
    <h1 class="text-3xl font-bold mb-4">Dodaj produkt</h1>

    <form action="addProduct.php" method="post" class="mt-4">
        <input type="text" name="title" id="title" placeholder="Tytuł"
               class="border border-gray-300 rounded px-4 py-2 mt-2">
        <input type="text" name="desc" id="desc" placeholder="Opis"
               class="border border-gray-300 rounded px-4 py-2 mt-2">
        <input type="text" name="price" id="price" placeholder="Cena"
               class="border border-gray-300 rounded px-4 py-2 mt-2">
        <input type="number" name="category" id="category" placeholder="Kategoria"
               class="border border-gray-300 rounded px-4 py-2 mt-2">
        <input type="number" min="0" name="qty" id="qty" placeholder="Stan magazynowy"
               class="border border-gray-300 rounded px-4 py-2 mt-2">
        <input type="text" name="image" id="image" placeholder="Nazwa obrazka"
               class="border border-gray-300 rounded px-4 py-2 mt-2">
        <input type="number" min="1" name="sellerId" id="sellerId" placeholder="Id sprzedawcy"
               class="border border-gray-300 rounded px-4 py-2 mt-2">
        <input type="submit" value="Dodaj" class="bg-blue-500 text-white rounded px-4 py-2 mt-4">
    </form>

</div>


<?php


if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $productTitle = $_POST['title'];
    $productPrice = $_POST['price'];
    $productDescription = $_POST['desc'];
    $productCategory = $_POST['category'];
    $productQty = $_POST['qty'];
    $productImage = $_POST['image'];
    $productSellerId = $_POST['sellerId'];

    $sql = "INSERT INTO products (title, description, price, quantity, category_id, image, sellerId) VALUES ('$productTitle', '$productDescription', '$productPrice', '$productQty', '$productCategory', '$productImage', '$productSellerId')";
    $result = $mysqli->query($sql);
    if ($result) {
        header("Location: products.php");
    } else {
        echo "Błąd";
    }

}


?>
