<!DOCTYPE html>
<html>
<head>
	 <title> Others </title>
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
<body>
	<h1> <br>Other images </h1><br>
	<div class="gallery">
    <a href=""><img src="images/o1.jpg" style="margin-bottom: 30px; width: 400px; margin-left: 50px"></a>
    <a href=""><img src="images/o2.jpg" style="margin-bottom: 30px"></a>
    <a href=""><img src="images/o3.jpg" style="margin-bottom: 30px"></a>
    <a href=""><img src="images/o4.jpg" style="margin-bottom: 30px"></a>
    <a href=""><img src="images/o5.jpg" style="margin-bottom: 30px; margin-left: 150px"></a>
    <a href=""><img src="images/o6.jpg" style="margin-bottom: 30px"></a>
    <a href=""><img src="images/o7.jpg" style="margin-bottom: 30px"></a>
	</div><br>
</body>
</html>
<?php
  include('footer.php')
?>