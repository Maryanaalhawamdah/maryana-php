<?php
session_start();

if (!empty($_SESSION['cart']) && isset($_POST['checkout'])){


}else{

    header('location:index.php');
}
?>



<div class="form-group checkout-btn-container">
    <p>Total amount : $ <?php echo $_SESSION['total'];?></p>



    <!-- 103<form id="checkout-form" method="POST" action="server/place_order.php"> -->
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
        <section class="my-5 py-5">
            <div class="container text-center mt-3 pt-5">
                <h2 class="form-weight-bold">check Out</h2>
                <hr class="mx-auto">
            </div>

            <div class="mx-auto container">
                <form id="checkout-form" method="POST" action="server/place_order.php">
                    <div class="form-group checkout-small-element">
                        <label>Name</label>
                        <input type="text" class="form-control" id="checkout-name" name="name" placeholder="Name" required/>
                    </div>
                    <div class="form-group checkout-small-element">
                        <label>Email</label>
                        <input type="text" class="form-control" id="checkout-email" name="email" placeholder="Email" required/>
                    </div>
                    <div class="form-group checkout-small-element">
                        <label>Phone</label>
                        <input type="tel" class="form-control" id="checkout-phone" name="phone" placeholder="Phone" required/>
                    </div>
                    <div class="form-group checkout-small-element">
                        <label>City</label>
                        <input type="text" class="form-control" id="checkout-city" name="city" placeholder="City" required/>
                    </div>
                    <div class="form-group checkout-large-element">
                        <label>Address</label>
                        <input type="text" class="form-control" id="checkout-address" name="address" placeholder="Address" required/>
                    </div>
                    <div class="form-group checkout-btn-container">
                        
                        <input type="submit" class="btn" id="checkout-btn" value="Checkout"/>
                    </div>
        </body>
        </html>
       