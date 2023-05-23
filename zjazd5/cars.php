<?php include 'header.php'; ?>

<style>
    td, th{
        padding: 7px 10px;
    }
    *{
    border-collapse: collapse;
    }
    table, td, th{
        border: 1px solid black;

    }
</style>


<h1>Witaj na stronie Cars!</h1>
<p>Znajdziesz tutaj informacje o wszystkich samochodach w bazie, posortowanych według rocznika</p>


<table>
    <tr>
    <th>Marka</th>
    <th>Model</th>
    <th>Rocznik</th>
    <th>Cena</th>
    </tr>
    <?php

                 $sql = "SELECT * FROM samochody ORDER BY rok ASC";
                 $result = $conn->query($sql);
                 if ($result->num_rows > 0) {
                     while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                         echo "<td><a href='singleCar.php?id=".$row['id']."'>" . $row["id"] . "</a></td>" .
                            "<td>" . $row["marka"] . "</td>" .
                            "<td>" . $row["model"] . "</td>" .
                            "<td>" . $row["rok"] . "</td>" .
                            "<td>" . $row["cena"] . "</td>";


                            echo "</tr>";
                     }
                 } else {
                     echo "Brak rekordów w tabeli.";
                 }

                 ?>
</table>

<?php include 'footer.php'; ?>
