<!DOCTYPE html>
<html>
<head>
   <title> Exterior </title>
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
  <h1> <br>Resort exterior images </h1><br>
  <div class="gallery">
    <a href="images/ex1.jpg"><img src="images/ex1small.jpg" style="margin-bottom: 30px; margin-left: 50px; margin-right: 10px"></a>
    <a href="images/ex3.jpg"><img src="images/ex3small.jpg" style="margin-bottom: 30px; margin-right: 10px"></a>
    <a href="images/ex4.jpg"><img src="images/ex4small.jpg" style="margin-bottom: 30px"></a>
    <a href="images/ex2.jpg"><img src="images/ex2.jpg" style="margin-bottom: 30px; margin-left: 70px"></a>
    <a href="images/ex5.jpg"><img src="images/ex5small.jpg" style="margin-bottom: 30px; margin-left: 100px; margin-right: 10px"></a>
    <a href="images/ex6.jpg"><img src="images/ex6small.jpg" style="margin-bottom: 30px"></a>

  </div><br>
</body>
</html>
<?php
include('footer.php')
?>