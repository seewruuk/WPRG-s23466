<?php include('header.php') ?>
<?php include('db.php') ?>


<div class="flex items-center justify-center h-screen">
    <form action="loginUser.php" method="POST" class="flex flex-col space-y-4 max-w-xs">
        <input type="login" name="login" placeholder="login" class="px-4 py-2 border border-gray-300 rounded-md">
        <input type="password" name="password" placeholder="password"
               class="px-4 py-2 border border-gray-300 rounded-md">
        <input type="submit" value="Zaloguj" class="px-4 py-2 bg-blue-500 text-white rounded-md">
    </form>
</div>