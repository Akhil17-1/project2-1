<?php
// start the session
session_start();

// insert config.php
include('config.php');
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Eco-Friendly Website</title>
        <style>
   h1 {
      text-align: center;
    }
                body {
                        background-color: #c8e6c9; /* light green hex code */
                        #background-image: url("images/eco-friendly.png");
                        #background-size: cover;
                        color: black;
                }
        p {
                        font-size: 18px;
                }
        </style>
</head>
<body>
  <header>

  </header>
  <main>
    <section>
<div style="text-align:center">
<h1>Welcome to Greenkart</h1>
</div>
      <h2>Our Mission</h2>
      <p>At My Eco-Friendly Website, we are committed to promoting sustainability and environmental awareness. Our mission is to provide high-quality eco-friendly products and resources to individuals and organizations who share our passion for protecting the planet.</p>
      <p>From reusable bags to solar-powered gadgets, we offer a wide range of products that help reduce waste, conserve energy, and support a healthier planet. We also provide educational resources, tips, and inspiration to help our customers live more sustainably in their daily lives.</p>
    </section>
    <section>
      <h2>Featured Content</h2>
      <ul>
        <li><a href="http://www.greeneducationfoundation.org/nationalgreenweeksub/waste-reduction-tips/tips-to-use-less-plastic.html">New blog post: 5 Easy Ways to Reduce Plastic Use</a></li>
        <li><a href="https://www.emerald.com/insight/content/doi/10.1108/SAMPJ-07-2021-0260/full/html">In the news: Our CEO speaks about the importance of sustainability</a></li>
        <li><a href="http://large.stanford.edu/courses/2015/ph240/wilczynski2/">Product spotlight: Solar-powered phone charger</a></li>
      </ul>
    </section>
    <section>
      <h2>Join Our Community</h2>
      <p>Sign up for our newsletter to stay up-to-date on the latest eco-friendly news and products, and to receive exclusive discounts and promotions.</p>
      <form action="#" method="post">
        <label for="email">Enter your email:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit">Subscribe</button>
      </form>
    </section>
  </main>
  <footer>
    <p>&copy; 2023 My Eco-Friendly Website. All rights reserved.</p>
  </footer>
</body>
</html>
