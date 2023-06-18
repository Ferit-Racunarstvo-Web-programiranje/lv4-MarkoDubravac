<?php
session_start();
include 'functions.php';

if(isset($_POST['id']) && isset($_SESSION['products'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = validate($_POST['id']);
    if (!is_numeric($id)) {
		header("Location: home.php?error=PageNotValid");
	    exit();
	}
    $fruit = $_SESSION['products'][$_POST['id']];
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
  
    <div style="display: flex; padding: 50px 20px;">
  <div style="flex: 0 0 auto; margin-right: 20px; width: 500px;">
    <?php echo '<img src="'.$fruit['image'].'" alt="'.$fruit['name'].'">'; ?>
  </div>
  <div style="background: linear-gradient(to right bottom, #18a1ad, white); border-radius: 10px; padding: 20px;">
  <div style="flex: 1; margin: 50px;">
    <?php
    echo '<h1>'.$fruit['name'].'</h1>';
    echo '<h3>'.$fruit['description'].'</h3>';
    echo '<h2>Price: $'.$fruit['price'].'</h2>';
    ?>
    <form action="addToCart.php" method="post" style="display: flex; flex-direction: column;">
      <label>Quantity:</label>
      <input type="number" style="width: 200px;" name="quantity" min="1" value="1">
      <br>
      <?php
      echo '<button class="add-to-cart-btn" type="submit" name="id" value="'.($fruit['id']-1).'"style="width: 200px; border: 3px black solid;">Add To Cart</button>';
      ?>
    </form>
  </div>
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