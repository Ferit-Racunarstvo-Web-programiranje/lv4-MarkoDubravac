<?php
session_start();
include 'functions.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>The Fruit Crate</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="icon" href="img/icon_small.png" />
    <script src="script.js"></script>
  </head>
  <body>
    <div class="navbar">
      <img
        class="slogan"
        src="img/fruit_icon2.png"
        width="80"
        alt="company_logo"
      />
      <div class="nav-text">
        <h1>The Fruit Crate</h1>
        <p class="slogan">Fresh Fruits, Delivered!</p>
      </div>
      <div class="cart-container nav-button">
        <button class="cart-button" onclick='window.location.assign("home.php")'>
          Home 
        </button>
      </div>
    </div>
    
        <?php 
        if (isset($_GET['error'])) { 
        ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <?php 
        if (isset($_GET['message'])) { 
        ?>
        <p class="message"><?php echo $_GET['message']; ?></p>
        <?php } ?>

        <div class="cart-grid">
            <?php
            if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
                foreach($_SESSION['cart'] as $cartItem){ ?>
                    <script>
                        createCartItem( <?php echo json_encode($cartItem); ?> );
                    </script>		
                <?php }
            }else{
                echo '<div style="text-align:center;"><h2>Your cart is empty, try adding something!</h2></div>';
            }
            ?>
            <br></br>
            <form action="checkout.php" method="post" class="centered-form">
              <h2>Your total cost is: $<?php echo getTotalCartCost() ?></h2>
              <button class="add-to-cart-btn" type="submit" name="order" value="order" style="margin-bottom: 20px;">Go To Checkout</button>
            </form>
        </div>

    </div>
    
    
  </body>
</html>