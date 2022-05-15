<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: Sign.php");
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>3 BRO'S</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
 
</head>
<body>
	<!--navbar-->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    
	<nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
  <div class="container-fluid">
	<a href="#"><img src ="collection.jpg">
			
	</a>
    <a class="navbar-brand" href="#"> 3 Bro's Fabrics</a>
	<!--navbar

	<div class="nav-item">
		<div class="search">
			<input type="text" class="search-box" placeholder="search brand,product"> 
			<button class="search-btn" >search</button>
		</div>

		
	</div>
	-->
	


    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"  aria-expanded="false" >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto "> <!-- center aligin --->
        <li class="nav-item">
          <a class="nav-link active" href="feb.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="About.php">About</a>
        </li>

		<li class="nav-item">
          <a class="nav-link active" href="Products.php">Products</a>
        </li>

		<li class="nav-item">
          <a class="nav-link active" href="Contact.php">Contact</a>
        </li>


        </ul>
        <button class="btn p-2 my-lg-0 my-2"> <a class="click" href="logout.php" >Logout</a> </button>
		<a id="click"><?php echo "<h6>Welcome ". $_SESSION['username'] ."</h6>"; ?></a>

        

     </div>
</nav>

	
	 		
		
	</section>

		<!--about-->
		<section id="about">
			<div class="container m-5">
				<h1 class="text-center"> ABOUT US</h1>
				<h2>3 Bro's Fabrics is a social commerce platform that undertakes retail distribution, enabling small retail merchants to connect and sell their products effectively via social media channels. Cuddalore based </h2>
				<h3>Legal Name    :3 Bro's Fabrics<br>
					Headquarters  :Cuddalore,Tamil Nadu,India<br>
					Business Model:B2C <br>
					Founding Date :Dec 2015</h3>
					<p></p>
			</div>	
		</section>

        <footer>
    &copy; 2022 3BRO'S FABRICS <a href="#"><img src ="yellow icon.jpg"></a> Design by Divya
</footer>

