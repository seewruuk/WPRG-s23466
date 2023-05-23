<?php include 'header.php'; ?>


<div>

    <h1>Strona główna</h1>
    <div class="cars-container">
         <h1>Najtańsze samochody w bazie</h1>
         <ul>
             <?php

             $sql = "select * from samochody ORDER by cena asc limit 5";
             $result = $conn->query($sql);
             if ($result->num_rows > 0) {
                 while ($row = $result->fetch_assoc()) {
                    echo "<li>";
                     echo $row["marka"] . " " . $row['model'] . ", Cena: " . $row["cena"] . " PLN";
                        echo "</li>";
                 }
             } else {
                 echo "Brak rekordów w tabeli.";
             }
             ?>

         </ul>
    </div>
</div>

<?php include 'footer.php'; ?>
