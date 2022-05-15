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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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
	<!-- center aligin 
	<div class="nav-item">
		<div class="search">
			<input type="text" class="search-box" placeholder="search brand,product"> 
			<button class="search-btn" >search</button>
		</div>

		
	</div>
	--->
	


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
		<br>
		<a id="click"><?php echo "<h6>Welcome ". $_SESSION['username'] ."</h6>"; ?></a>

        </nav>


            
     

	<br>
   <section id="contact" >
			<div class="container box">
				<div class="row">
					<div class="col-lg-6  col-md-6  col-12">
						<br>
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15624.144168310218!2d79.7643501!3d11.7625119!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2984951b0c91343a!2s3%20Bro&#39;s%20Fabrics!5e0!3m2!1sen!2sin!4v1652607659694!5m2!1sen!2sin" width="400" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						
					</div>
					
			
						    
					<div class="col-lg-6  col-md-6  col-12">
					<div class="icons-container">

<div class="icons" data-aos="fade-up" data-aos-delay="150">
   <i class="fas fa-map"></i>
   <h3>address :</h3>
   <p>Cuddalore,Tamil Nadu,India</p>
</div>

<div class="icons" data-aos="fade-up" data-aos-delay="300">
   <i class="fas fa-envelope"></i>
   <h3>email :</h3>
   <p>aanandzmail@gmail.com</p>

</div>

<div class="icons" data-aos="fade-up" data-aos-delay="450">
   <i class="fas fa-phone"></i>
   <h3>phone :</h3>
   <p>08608411185</p>
</div>
						<h1><b>CONTACT US</b></h1>
						
						<div class="form">

   
						    
						<form action="mail.php" method="post">
						<input type="text" class="form-control"  name="name" id="name" placeholder="Enter your name">
							<input type="text" class="form-control" name="email"  id="email" placeholder="Enter your mail id">
							<textarea class="form-control"  name="message" id="body" placeholder="Enter your  messages"></textarea>
							<button value="Submit" class="btn signin">Send </button>
 							
						<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	
					</div>
					
						<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	
					</div>
					
				</div>
				
			</div>
			
		</section>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<footer>
    &copy; 2022 3BRO'S FABRICS <a href="#"><img src ="yellow icon.jpg"></a> Design by Divya
</footer>


</body>

</html>
                    
                    
                    
                    
                    
                