<?php
if(!isset($_SESSION))
{
session_start();
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="header.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=El+Messiri&family=Philosopher:wght@700&display=swap" rel="stylesheet">
</head>

<body>
<nav style="height: 100px;">
<div >
<a href="home.php"><img src="images/logo2.png" alt="Logo" style="width:150px;"></a>
</div>
<input type="checkbox" id="click">
<label for="click" class="menu-btn">
<i class="fas fa-bars"></i>
</label>
<ul>
<li><a href="home.php">Home</a></li>
<li><a href="activities.php">Activities</a></li>
<li><a href="facilities.php">Facilities</a></li>
<li><a href="gallery.php">Gallery</a></li>
<li><a href="accomodation.php">Accomodation</a></li>
<li><a href="contactus.php">Contact Us</a></li>
<li><a class="covid" href="covid.php">Covid-19</a></li>
<li><a class="book" href="booknow.php">Book Now</a></li>

<?php if(isset($_SESSION['email'])): ?>
<li><a class="out" href="signout.php">Sign Out</a></li>
<?php else: ?>
	<li><a class="out" href="signup.php">Sign In</a></li>
<?php endif; ?>

</ul>
</nav>
</body>
</html>