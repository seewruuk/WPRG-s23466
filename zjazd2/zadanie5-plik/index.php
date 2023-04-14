<!DOCTYPE html>
<html>
<head>
    <title>Plik</title>
</head>
<body>
    <form action="file.php" method="post">
        <label for="path">Ścieżka do katalogu:</label>
        <input type="text" id="path" name="path">
        <label for="path">Katalog</label>
        <input type="text" id="folder" name="folder">
        <br>
        <label for="action">Akcja:</label>
        <select id="action" name="action">
            <option value="read">Odczytaj</option>
            <option value="delete">Usuń</option>
            <option value="create">Stwórz</option>
        </select>
        <br>
        <input type="submit" value="Wykonaj">
    </form>
</body>
</html>