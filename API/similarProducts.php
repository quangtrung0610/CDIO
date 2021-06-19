<?php
require_once("connect.php");
try {
    foreach ($conn->query("SELECT * FROM product ") as $row) {
        if ($row['Pro_ID'] < 4)  {
            require('productCard.php');
        }
    }
} catch (PDOException $e) {
    print "errorr! " . $e->getMessage() . "<\br>";
}
