<?php
session_start();
// insert config.php

include('config.php');
 include('header.php');

$query = "SELECT * FROM products";
$results = mysqli_query($db, $query);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Shop - Eco-friendly products</title>
   <style>
    #logo {
      display: block;
      margin: 0 auto;
      width: 200px;
      height: 100px;
    }

   h1 {
      text-align: center;
    }

    h2 {
      text-align: center;
    }
    body {
      background-color: #c8e6c9; /* Light green background */
    }
    .featured-products,
    .products {
      text-align: center;
      display: flex;
      flex-wrap: wrap;
      justify-content: center; /* Center the flex items */
      list-style: none;
      margin: 0;
      padding: 0;
    }
    .featured-products li,
    .products li {
      flex: 1 0 200px; /* Set flex basis to 200px */
      margin: 10px; /* Add margin between items */
      text-align: center; /* Center the text */
    }
    .featured-products li a,
    .products li a {
        text-align: center;
      display: block;
      text-decoration: none;
      color: #000;
    }
    .featured-products img,
    .products img {
      display: block;
      margin: 0 auto; /* Center the images */
    }
    .featured-products h3,
    .products h3 {
      margin-top: 10px;
      font-size: 20px;
    }
    .featured-products p,
    .products p {
      margin-top: 10px;
      font-size: 16px;
    }
    .featured-products .price,
    .products .price {
      display: block;
      margin-top: 10px;
      font-size: 18px;
      font-weight: bold;
    }
    .add-to-cart {
      display: inline-block;
      padding: 5px 10px;
      background-color: #000;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      margin-top: 10px;
    }
  </style> 
</head>
<body>
<header>
</header>
  <h1>Shop</h1>
  <?php if (isset($_SESSION['username'])) : ?>
    <p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
    <p><a href="logout.php">Logout</a></p>
  <?php else : ?>
    <p><a href="login.php">Login</a> or <a href="register.php">Register</a> to start shopping.</p>
  <?php endif; ?>
 
  <main>
    <section class="featured-products">
      <ul>
        <li>
          <a href="images">
            <img src="images\reusable.png" alt="Product 1" width="200" height="200">
            <h3>Reusable Water Bottle</h3>
            <p>Stay hydrated and help the environment with our reusable water bottle made from sustainable materials.</p>
            <span class="price">$20.99</span>
            <div class="add-to-cart">
              <button>Add to Cart</button>
            </div>
          </a>
        </li>
        <li>
          <a href="images">
            <img src="images\bamboo.png" alt="Product 2" width="200" height="200">
            <h3>Bamboo Toothbrush</h3>
            <p>Upgrade your oral hygiene routine with our eco-friendly bamboo toothbrush that reduces plastic waste.</p>
             <span class="price">$5.99</span>
            <div class="add-to-cart">
              <button>Add to Cart</button>
            </div>
          </a>
        </li>
        <li>
          <a href="images">
            <img src="images\tote.png" alt="Product 3" width="200" height="200">
            <h3>Organic Cotton Tote Bag</h3>
            <p>Carry your groceries and everyday essentials in style with our organic cotton tote bag that supports fair trade practices.</p>
            <span class="price">$14.99</span>
            <div class="add-to-cart">
              <button>Add to Cart</button>
            </div>
          </a>
        </li>
      </ul>
    </section>
  </main>
  <footer>
    <p>&copy; 2023 Green kart</p>
  </footer>
</body>
</html>

</body>
</html>
