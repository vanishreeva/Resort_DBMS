<!DOCTYPE html>
<html>
<head>
<title>Cancelled!</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=El+Messiri&family=Philosopher:wght@700&display=swap" rel="stylesheet">
<?php include('header.php'); ?>
<link rel="stylesheet" type="text/css" href="header.css">
<style type="text/css">
img { width: 100px; }
body{font-family: El Messiri;
background-image: url("images/bgimg.png");}
a{ text-decoration: none; }

.success{ background-color: #002a66;
	    opacity: 0.8;
		text-align: center;
		width: 500px;
		height: 530px;
		padding-top: 20px;
		margin-left: 540px;
		margin-top: 70px; }
.container{ padding-top: 40px; }
.footer{
  margin-bottom: -20px;
}
h1{ font-weight: bold; color: white;}
h4{ color: white;}
</style>

</head>
<body>
<div class="success">
<img src="images/logo2.png" style="width: 200px;">
<h1>Your Booking has been Cancelled!</h1><br>
<h3 style="color: yellow;">Thank you for visiting Serenehood. <br>We hope to see you soon <br></h3><br>
<h4>Do You Wish to Log-out?</h4>
<div class="container">

<a href="signout.php"><button type="button" class="btn btn-success">Log-out</button></a>
</div>
</div>
<br><br><br><br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
<?php include('footer.php'); ?>