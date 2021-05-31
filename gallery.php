<?php include("header.php"); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Gallery</title>
  <style type="text/css">
h1{
    font-family: monospace;
    margin-left: 120px;
    font-size: 50px;
  }
  .wrapper {
font-family: sans-serif;
width: 150px;
position: relative;
margin: 20px;
}
.content {
position: absolute;
top: 50%;
left: 42%;
transform: translate(-50%, -50%);
-ms-transform: translate(-50%, -50%);
color: #fff;
text-transform: uppercase;
font-size: 60px;
text-align: center;
}
.content span{
font-size: 24px;
display: block
}
.overlay {
position: absolute;
top: 0;
bottom: 0;
left: 0;
right: 0;
height: 98.48%;
width: 100%;
opacity: 0;
transition: .5s ease;
background-color: black;
margin-left: 50px;
margin-right: 50px;
}
.wrapper:hover .overlay {
opacity: 0.8;
}

body{
  background-image: url("images/bgimg.png");
  background-blend-mode: screen;
  
}
.Gallery{
  margin-bottom: 60px;
}
 
  </style>
</head>
<body>
<h1> All Images </h1>
<div class="Gallery">
  <div class="wrapper">
  <a href="exterior.php">
      <img style="width: 800px; height: 500px; margin-left: 200px; margin-right: 200px;" src="https://cf.bstatic.com/images/hotel/max1024x768/152/15267389.jpg" style="margin-bottom: 30px">
      <div class="overlay">
      <div class="content"><span>Exterior</span></div>
      </div>
    </a>
  </div>
  <div class="wrapper">
  <a href="interior.php">
      <img style="width: 800px; height: 500px; margin-left: 200px; margin-right: 200px;" src="https://imgcy.trivago.com/c_limit,d_dummy.jpeg,f_auto,h_1300,q_auto,w_2000/itemimages/40/41/404156_v3.jpeg" style="margin-bottom: 30px">
      <div class="overlay">
      <div class="content"><span>Interior</span></div>
    </div>
   </a>
 </div>
 <div class="wrapper">
  <a href="others.php">
  <img style="width: 800px; height: 500px; margin-left: 200px; margin-right: 200px;" src="https://www.kumarakomlakeresort.in/images/Background-images/Dining/speciality_restaurant/1.jpg" style="margin-bottom: 30px">
  <div class="overlay">
      <div class="content"><span>Others</span></div>
    </div>
    </a>
  </div>
  </div>
</body>
</html>

<?php include("footer.php"); ?>