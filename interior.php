<!DOCTYPE html>
<html>
<head>
	 <title> Interior </title>
   <?php
include('header.php')
?>
  <style>
  	h1{
  		font-family: monospace;
  		text-align: center;
  		font-size: 50px;
  	}
  	body{
      background-image: url('https://img.wallpapersafari.com/desktop/1280/1024/95/72/bOKL4C.png');
    }
    .gallery img{
    	filter: grayscale(100%);
    	transition: 1s;
    }
    .gallery img:hover{
    	filter: grayscale(0);
    	transform: scale(1.1);
    }
  </style>
</head>
<body><br><br>
	<h1> Resort interior images </h1><br><br>
	<div class="gallery">
		<a href="images/in2.jpg"><img src="images/in2small.jpg" style="margin-bottom: 30px; margin-left: 15px"></a>
		<a href="images/in3.jpg"><img src="images/in3small.jpg" style="margin-bottom: 30px"></a>
		<a href="images/in4.jpg"><img src="images/in4small.jpg" style="margin-bottom: 30px"></a>
		<a href="images/in5.jpg"><img src="images/in5small.jpg" style="margin-bottom: 30px; margin-left: 15px"></a>
		<a href="images/in6.jpg"><img src="images/in6small.jpg" style="margin-bottom: 30px"></a>
    <a href="images/in7.jpg"><img src="images/in7small.jpg" style="margin-bottom: 30px"></a>
	</div><br>
</body>
</html>
<?php include('footer.php') ?>