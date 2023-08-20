<?php


if (isset($_GET['product_id'])){

$product_id = $_GET['product_id'];

$stmt = $conn->prepare("SELECT * FROM products WHERE product_id =?");
$stmt->bind_param("i",$product_id);


$stmt->execute();

$product = $stmt->get_result();


//no product id was given
}else{

    header('location: index.php');


}
?>


<!-- single product -->

<?php while($row =$product->fetch_assoc()){?>



<!-- //delete the img frome the code -->
<?php echo$row['product_image'];?>





    <?php }?>