<?php

include('connection.php');


$STMT = $conn->prepare("SELECT * FROM products LIMIT 4");

$STMT->EXECUTE();

$featured_products = $stmt->get_result();


?>
 


 <?php


while($row=$featyured_prducts->fetch_assoc()){
    
}