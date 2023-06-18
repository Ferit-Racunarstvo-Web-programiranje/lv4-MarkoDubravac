<?php 
session_start();
include 'functions.php';

if (isset($_SESSION['products'])) {

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
        <button class="cart-button" onclick='window.location.assign("cart.php")'>
          Cart 
			    <span class="cart-badge">
				  <?php
          echo getCartItems();
				  ?>
			    </span>
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

      <div class="items-grid">
		  <?php foreach($_SESSION['products'] as $fruit){ ?>
      <script>
        createFruit( <?php echo json_encode($fruit); ?> ); //u scriptu
      </script>		
		  <?php } ?>
      </div>

    </div>
  </body>
</html>


<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>