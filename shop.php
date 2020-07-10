<?php include('config/server.php')?>
<!DOCTYPE html>
<html>
<head>
<title>Shopping Page</title>
<link rel="stylesheet" tyoe="text/css"href="css/style.css">
<style>
    .section{
        border: 2px solid black;
        margin: 20px auto;
        width: 60%;
    }

    #image{
        border: 2px solid black;
    }
     .p{
         background-color: black;
         border: 2px solid black;
     

     }
     .subscribe{ background-color: black;
                 width:600px;
                 color:white;
                 border: 1px solid white;
                 margin: 20px auto;

     }

      .add{
          padding: 20px;
          float:right;
          border: 1px solid white;
          color:#a94442; 
          background-color:black;
      }
      #quantity{
         float:right;
      }
      
      label{
          float:right;
      }
    
    </style>
</head>





<body>

<!--navbar-->
<nav class="menu">
         <ul>
          <li><em>Legit Boss</em></li>
          <li><a href="index.php"> Home Page</a></li>
        </ul>
        
<div id="image">
<img src="images/bag.jpg" width="100%" alt="leather" height="400px">
 </div>

 <div class="p">
<em><h2>6 Products To Add To Your Cart. Let's go shopping!!!</h2></em>
</div>

<br>
<br>
<br>
<br>
<br>
<img src="images/shopping-cart.png" width="200px" height="100px" alt="cart">

<?php

//connect to the database
//config database
$conn = new mysqli ( 'localhost','root', 'new_password', 'onlinestore');

$query = "SELECT name, price, image FROM tblproducts";
$result = $conn -> query($query);
if ($result -> num_rows != 0 )
{
?>
 


<!--shopping cart section-->
<div class="section">
<?php

while($array = $result -> fetch_assoc())
{
    $name = $array['name'];
    $price = $array['price'];
    $image = $array['image'];
?>
 <div>

    <label for="quantity">Quantity</label>
    <select id="quantity">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    </select>
    <hr>
        <div>
            <img src="<?php echo $image; ?>">
        </div>
        <div>
            <?php echo $name;
            $product_name = $name;
             ?>

        </div>

        <div>
            <?php echo $price; ?>
        </div>
           
        <div class="btn_div"><button id="a_c_btn" onclick="addToCart('<?php echo $product_name; ?>')">ADD TO CART</button></div>
    </div>
    <?php
}
   

}else{
    echo "sorry we have ran out of stock.";
}

$result->close();
$conn->close();


?>
</div>

  

<div class="subscribe">

    <h2>Subscribe</h2>
    <p>To get more special offers and VIP treatment:</p>
 <p>Enter your email address below</p> 

 <!--formtosubscribe-->
 <form method="post" action="shop.php"> 
 <?php include('error.php'); ?> 
  	<label>Email</label>
  	  <input type="email" name="email"  value="<?php echo $email; ?>">
	<button type="submit" name="submit" id="add_btn" class="add_btn">Email</button>   
    
 </form>


  </body>
</html>
 
    <?php
  // connect to database
    $db = mysqli_connect('localhost', 'root', 'new_password', 'onlinestore');
    if (isset($_POST['subscribe'])) {
            $subscribe = "You have subscribed to legit boss";
    }
?> 
    </form>
</div>


    <!--FOOTER-->
    <footer class="site-footer">
		<div class="container">
			<div class="text-center text-white">
				<p class="copyright-text">Copyright 2020 &copy; CHELSEA</p>
			</div>
		</div>
	</footer><!--End of Footer-->
<script type="text/javascript" src="script/cart.js"></script>
</body>
</html>


