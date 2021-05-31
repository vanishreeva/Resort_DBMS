<!DOCTYPE html>
<html>
<head>
<title>Message Recieved!</title>

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
		width: 520px;
		height: 550px;
		padding-top: 20px;
		margin-left: 540px;
		margin-top: 70px; }
.btn{
	margin-bottom: 30px;
}
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
<h1>We recieved your message!<br> Our team will get back to you shortly.</h1><br>
<h3 style="color: yellow;">Until then, you could explore our <br>website  to know more about us and our services. <br></h3><br>
<div class="container">

<a href="home.php"><button type="button" class="btn btn-success">Go to Home</button></a>
</div>
</div>
<br><br><br><br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
<?php include('footer.php'); ?>