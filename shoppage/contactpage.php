<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
<title>Contact Page</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3310.903626111448!2d18.419161314641908!3d-33.91787988064277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dcc67672de86b63%3A0x353726577595e960!2s18%20Bree%20St%2C%20Cape%20Town%20City%20Centre%2C%20Cape%20Town%2C%208000!5e0!3m2!1sen!2sza!4v1590707872753!5m2!1sen!2sza" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</head>
 
<body>

    <h3>Use the google maps above to find the Legit Boss Store on 18 Bree Street.</h3>

<div class="header">
    <h3>Plase put in your email address on the contact form below to receive information</h3>
</div>

<form method="post" action="index.php"> 
 <?php include('error.php'); ?>
  <div class="input">
  	<label>Email</label>
  	  <input type="email" name="email"  value="<?php echo $email; ?>">
	<button type="submit" name="submit" id="add_btn" class="add_btn">Contact</button>   

	<input type="text" name="task" class="task_input">
    <button type="submit" name="submit" id="add_btn" class="add_btn">Add Entry</button> 
      
 </div>
</form>



     <!--FOOTER-->
     <footer class="site-footer">
		<div class="container">
			<div class="text-center text-white">
				<p class="copyright-text">Copyright 2020 &copy; CHELSEA</p>
			</div>
		</div>
	</footer><!--End of Footer-->

<!--enables user to go back to home page-->
<nav class="menu">
         <ul>
          <li><em>Legit Boss</em></li>
          <li><a href="index.php">Home Page</a></li>
        </ul>



  <body>
</html>




<!--php script-->


  
  <?php 
    // initialize errors variable
  $errors = "";

	// insert a quote if submit button is clicked
	if (isset($_POST['add'])) {
		if (empty($_POST['entry'])) {
			$errors = "You must fill in the entry";
		}else{
			$entries = $_POST['entry'];
			$sql = "INSERT INTO products (products) VALUES ('$entries')";
			mysqli_query($db, $sql);
			header('location: contactpage.php');
		}
  }	

  ?>