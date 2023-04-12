<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator</title>
</head>
<body>
    <h1>Kalkulator</h1>
    <form method="post" action="kalkulator.php">
        <label for="liczba1">Liczba 1:</label>
        <input type="number" name="liczba1" id="liczba1" required>
        <br>
        <label for="liczba2">Liczba 2:</label>
        <input type="number" name="liczba2" id="liczba2" required>
        <br>
        <label for="dzialanie">Działanie:</label>
        <select name="dzialanie" id="dzialanie" required>
            <option value="dodawanie">Dodawanie</option>
            <option value="odejmowanie">Odejmowanie</option>
            <option value="mnozenie">Mnożenie</option>
            <option value="dzielenie">Dzielenie</option>
        </select>
        <br>
        <input type="submit" name="submit" value="Oblicz">
    </form>
</body>
</html>