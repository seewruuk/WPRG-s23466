<!DOCTYPE html>
<html>
<head>
    <title>Liczba pierwsza</title>
</head>
<body>
    <h1>Sprawdź czy liczba jest liczbą pierwszą</h1>
    <form action="index.php" method="post">
        <label for="number">Liczba:</label>
        <input type="number" name="number" id="number" required>
        <input type="submit" value="Sprawdź">
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $number = $_POST['number'];
        $iterations = 0;
        function isPrime($n)
        {
            if ($n <= 1) {
                return false;
            }
            global $iterations;
            for ($i = 2; $i <= sqrt($n); $i++) {
                $iterations++;
                if ($n % $i == 0) {
                    return false;
                }
            }
            return true;
        }
    if ( !is_numeric($number) || $number <= 0 ) {
        echo "<p>Błąd! Podana wartość nie jest liczbą całkowitą dodatnią.</p>";
    } else {
        isPrime($number);
        if (isPrime($number)) {
            echo "<p>Liczba $number jest liczbą pierwszą.</p>";
        } else {
            echo "<p>Liczba $number nie jest liczbą pierwszą.</p>";
        }

        echo "<p>Liczba iteracji pętli: $iterations</p>";
    } 
}
?>
</body>
</html>