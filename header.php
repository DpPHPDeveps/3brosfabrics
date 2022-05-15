
<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: Sign.php");
}

?>


<header class="header">

   <div class="flex">
   <a href="#"><img src ="collection.jpg">
      <a href="#" class="logo">3 Bro's Fabrics</a>

      <nav class="navbar">
     
          <a  href="feb.php">Home</a>
           <a href="About.php">About</a>
          <a  href="Products.php">Products</a>
          <a  href="Contact.php">Contact</a>
         
     
         <a href="products.php">view products</a>
         
         <button class="btn p-2 my-lg-0 my-2"> <a class="click" href="logout.php" >Logout</a> </button>
       
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>
      <a href="#" class="cart"><?php echo "<h6>Welcome ". $_SESSION['username'] ."</h6>"; ?></a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>