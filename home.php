<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <?php 
include('header.php') 
?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Alex Brush' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Arvo:700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway:300,100' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css2?family=El+Messiri&family=Philosopher:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style>
  body {
  background-image: url("images/bgimg.png");
  }
  * {
  box-sizing: border-box;
}
nav ul li{
  margin-top: -70px;
}
nav ul{
  
  float: right; 
}

/* Create two equal columns that floats next to each other */
.column-1 {
  float: left;
  width: 75%;
  text-align: left;
  padding: 10px;
  height: 450px; /* Should be removed. Only for demonstration */
}

.column-2 {
  float: left;
  width: 25%;
  padding: 10px;
  height: 450px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
  p {font-size: 16px;}
  .bg-1 { 
    background-image: url('images/home1.jpg');
    background-repeat: no-repeat;

    background-size: cover;
    
  }
  .text-1{
    text-align: center;
    text-orientation: mixed;
    font-color:white;
    font-family: Trattatello, fantasy;
  }
  .text_1 {
  animation: text1;
}
.text_1{
  overflow: hidden;
  white-space: nowrap;
  display: inline-block;
  position: relative;
  animation-duration: 20s;
  animation-timing-function: steps(23, end);
  animation-iteration-count: infinite;
  font-family: 'Alex Brush';
  font-size: 75px;
  font-color:#0000cc;
}

.text_1::after{
  content: "";
  position: absolute;
  right: 0;
  animation: caret infinite;
  animation-duration: 0.5s;
  animation-timing-function: steps(1, end);
}
.row_1 {
  padding: 75px;
  display: flex;
    text-align: center;
}
/* Create three equal columns that sits next to each other */
.column_1 {
  flex: 44.44%;
  padding: 5px;
}
.column_1 img { 
            width: 80%; 
            transition: 0.6s all ease-in-out; 
            flex: 20%
            padding:50px;
            border-radius: 85%
        } 
.column_1:hover img { 
            transform: scale(1.2); 
        }
.info-font {
  font-size: 20px;
}
.info-font-1 {
  font-size: 25px;
  text-align: center;
  color:DarkRed;

}
@keyframes text1 {
  0%, 50%, 100% {
    width: 0;
  }
  10%, 40% {
    width: 17em;
  }
}

@keyframes caret {
  0%, 100% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
}
  .bg-3 { 
    background-image: url("images/bg.jpg");
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

  }
  
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 5px;
  }
  .home img{
      filter: grayscale(100%);
      transition: 1s;
    }
    .home img:hover{
      filter: grayscale(0);
      transform: scale(1.1);
    }
  </style>
</head>
<body>

<!-- Navbar -->

<!-- First Container -->
<div class="container-fluid bg-1 text-1">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <h1><span class="text_1" text-color:#0000cc>Welcome to Serenehood!</span></h1>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
</div>
<!-- Third Container (Grid) -->
<div class="container-fluid ">    

<div class="row_1">
<h2>Serenehood is an eco-friendly resort situated amidst a private space at Peace town, the Serenecity.<br> Nature has always molded our health and Serenecity has been<br> generously gifted with the bounties of nature. A paradise with greenery all through the year, cool climate, misty peaks, <br>numerous waterfalls and abundance of the animals in the wild- life sanctuaries, is a heaven for tourist. </h2>
</div>

<div class="row_1">
  <div class="column_1">
    <figure class="info-font-1">
    <a href="activities.php">
    <img src="images/tea.jpg" alt="Activities" style="width:450px">
    </a>
    <figcaption><br>There is a lot you can do in and around Serenehood Resort.</figcaption>
    </figure>
  </div>
  <div class="column_1">
    <figure class="info-font-1">
    <a href="accomodation.php">
    <img  src="images/in7.jpg" alt="Accomodation" style="width:450px">
    </a>
    <figcaption><br>Pick a room that best suits your taste and budget</figcaption>
    </figure>
  </div>
  <div class="column_1">
    <figure class="info-font-1">
    <a href="facilities.php">
    <img  src="images/Spa.jpg" alt="Facilities" style="width:450px">
    </a>
    <figcaption><br>Ready to relax</figcaption>
    </figure>
  </div>
</div>
</div>
</body>
</html>
<a href="#top"><button type="button" class="btn btn-primary" align="bottom-right">Back to top</button></a>
<?php 
include('footer.php')
 ?>