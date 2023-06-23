<?php include("header.php"); ?>
<?php include("db.php"); ?>

<?php
$userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 1;


?>
    <div class="container mx-auto max-w-md mt-8">
        <h2 class="text-2xl font-semibold mb-4">Zmień hasło</h2>
        <form method="POST" action="resetPassword.php">
            <div class="mb-4">
                <label for="new_password" class="block font-medium">Nowe hasło</label>
                <input type="password" name="new_password" id="new_password"
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="text" name="new_email" id="new_email"
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="password" name="user_id" id="user_id" hidden value="<?php echo $userId ?>">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Zmień hasło
            </button>
        </form>
    </div>
<?php


?>