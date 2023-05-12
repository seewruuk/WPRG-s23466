<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Document</title>
</head>
<body>

<h3>Podanej dane</h3>

<form action="register.php" method="post">
    <input type="text" name="cardNumber" placeholder="Card number">
    <input type="text" name="fname" placeholder="First name">
    <input type="text" name="lname" placeholder="Last name">
    <input type="text" name="email" placeholder="Email">
    <input type="number" value="1" min="1" max="10" name="numberOfUsers" placeholder="Ilość osób">

    <input type="submit" value="Wyślij" name="submit">
</form>

    
    
</body>
</html>