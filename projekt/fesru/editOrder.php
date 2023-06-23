<?php include ("header.php"); ?>
<?php include ("db.php"); ?>



<?php
    if($_SERVER["REQUEST_METHOD"] ==="GET"){
        $orderId = $_GET['order_id'];

        $sql = "UPDATE orders SET status = 'zrealizowano' WHERE id = $orderId";
        $mysqli->query($sql);
        header("Location: panel.php");
    }else{
        echo "Niepoprawne dane";
    }
?>
