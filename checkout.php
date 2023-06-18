<?php
session_start();

if(isset($_POST['order'])){
    if(!isset($_SESSION['cart']) || empty($_SESSION['cart'])){
        header("Location: cart.php?error=Nothing-To-Order");
        exit();
    }
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
        <form class="checkout-form" action="orderComplete.php" method="post">
            <h1>Checkout</h1>
            <br></br>
            <label class="label">First name</label>
            <input class="input" type="text" name="firstname" placeholder="Mark"><br>
            <label class="label">Last name</label>
            <input class="input" type="text" name="lastname" placeholder="Dubrave"><br>
            <label class="label">Email address</label>
            <input class="input" type="email" name="email" placeholder="mark123@gmail.com"><br>
            <label class="label">Address</label>
            <input class="input" type="text" name="address" placeholder="Ul. VIM, Osijek"><br>
            <label class="label">Phone Number</label>
            <input class="input" type="tel" name="telephone" placeholder="(+385)93232323"><br>
            <button class="add-to-cart-btn" type="submit">Make Order</button>   
        </form>
  </body>
</html>

<?php
}else{
    header("Location: home.php");
    exit();
}
?>
