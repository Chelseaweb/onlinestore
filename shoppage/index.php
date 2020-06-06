<!DOCTYPE html>
<html>
<head>
<title>Shopping Cart</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

   
  <?php 
    // initialize errors variable
  $errors = "";

  define("DB_SERVER","localhost");
  define("DB_USERNAME","root");
  define("DB_PASSWORD","new_password");
  define("DB_DATABASE", "onlinestore");

	// connect to database
  $db = mysqli_connect('localhost', 'root', 'new_password', 'onlinestore');
    
?>

<div class="shopping-cart">
 <!--Title -->
<div class='title'>
  Shopping Bag
</div>
<!--Product #1 -->
<div class="item">
 <div class="buttons">
  <span class="delete-btn"></span>
  <span class="like-btn"></span>
 </div>

<div class="image">
 <img src="images/bag1.jpg"
  alt="bag">
</div>

<div class="description">
 <span>Brown Bag</span>
</div>
  <div class="total-price">R700</div>
</div>


<div class="shopping-cart">
 <!--Title -->
<div class='title'>
  Shopping Bag
</div>

<!--Product #2 -->
<div class="item">
 <div class="buttons">
  <span class="delete-btn"></span>
  <span class="like-btn"></span>
 </div>

<div class="image">
 <img src="images/handbag1.jpg" alt="bag">
</div>

<div class="description">
 <span>Black Swan</span>
</div>
  <div class="total-price">R820</div>
</div>


<div class="shopping-cart">
 <!--Title -->
<div class='title'>
  Shopping Bag
</div>

<!--Product #3 -->
<div class="item">
 <div class="buttons">
  <span class="delete-btn"></span>
  <span class="like-btn"></span>
 </div>

<div class="image">
 <img src="images/handbag3.jpg" alt="bag">
</div>

<div class="description">
 <span>Faded Bag</span>
</div>
  <div class="total-price">R900</div>
</div>



<div class="shopping-cart">
 <!--Title -->
<div class='title'>
  Shopping Bag
</div>

<!--Product #4 -->
<div class="item">
 <div class="buttons">
  <span class="delete-btn"></span>
  <span class="like-btn"></span>
 </div>

<div class="image">
 <img src="images/fur1.jpg" alt="bag">
</div>

<div class="description">
 <span>Boujee Coat</span>
</div>

  <div class="total-price">R1000</div>
</div>



<div class="shopping-cart">
 <!--Title -->
<div class='title'>
  Shopping Bag
</div>

<!--Product #5 -->
<div class="item">
 <div class="buttons">
  <span class="delete-btn"></span>
  <span class="like-btn"></span>
 </div>

<div class="image">
 <img src="images/fur4.jpg" alt="bag">
</div>

<div class="description">
 <span>Polo Coat</span>
</div>
  <div class="total-price">R840</div>
</div>


<div class="shopping-cart">
 <!--Title -->
<div class='title'>
  Shopping Bag
</div>

<!--Product #6 -->
<div class="item">
 <div class="buttons">
  <span class="delete-btn"></span>
  <span class="like-btn"></span>
  
 </div>

<div class="image">
 <img src="images/fur3.jpg" alt="bag">
</div>

<div class="description">
 <span>Glam Coat</span>
</div>
  <div class="total-price">R2000</div>
</div>

</body>
</html>



<script>
  /*
    $('.like-btn').on('click',function() {
     $(this).toggleClass('is-active');
    });

$('.minus-btn').on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closet('div').find('input');
    var value = parseInt($input.val());

 if (value &amp;gt;  1) {
     value = value - 1;
 } else {
     value = 0;
 }

  $input.val(value);

});

$('plus-btn').on('click', function(e) {
  e.preventDefault();
  var $this = $(this);
  var $input = $this.closet('div').find('input');
  var value = parseInt($input.val());

  if (value &amp;lt; 100) {
      value = value + 1;
  } else {
      value =100;
  }

 $input.val(value);

});
<div class="quantity">
 <button class="plus-btn" type="button" name="button">
  <img src="plus.svg" alt="plus">
 </button>
 <input type="text" name="name" value="1">
 <button class="minus-btn" type="button"  name="button">
    <img src="minus.svg" alt="minus">
 </button>
</div>

</script>



