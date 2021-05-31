<!DOCTYPE html>
<html lang="en">
<head>
  <title>Activities</title>
  <?php  include('header.php') ;?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="header.css">
<link href='https://fonts.googleapis.com/css?family=Amatic SC' rel='stylesheet'>
  <style type="text/css">
  	body{
  		background-image: url(images/bgimg.png);
  	}
   
  	.jumbotron{
  		margin-top: 0px;
  		height:450px;
  		background-image: url("images/tea.jpg");
  		background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        color: white;
        width: 100%;
        font-size: 100px;
        align-content: center;
        min-height: 450px;
  	}
  	.jumbotron h1{
  		text-align: left;
  		margin-top: 70px;
  		 font-family: 'Amatic SC';font-weight: bolder;
  		 padding-left: 30px;

}
h3{
padding-left: 30px;
}

.row{
	display: flex;
	margin-top: 30px;
}

/* Create three equal columns that sits next to each other */
.column {
  float: left;
  width: 77.77%;
  padding: 5px;
  text-align: center;

}
div.desc {
  padding: 20px;
  text-align: center;
  font-size: 20px;
  font-weight: bold;
}

 .column img { 
            width: 100%; 
            transition: 0.6s all ease-in-out; 

        } 
      
        .column:hover img { 
            transform: scale(1.2); 
        } 


        .how-section1{
    margin-top:-15%;
    padding: 10%;
    margin-left: -150px;
}
.how-section1 h4{
    color: #650006;
    font-weight: bold;
    font-size: 40px;
}
.how-section1 p{
	font-size: 20px;
	font-style: bold;
	color: black;
}
.how-section1 .subheading{
    color: #820000;
    font-size: 25px;
}
.how-section1 .row
{
    margin-top: 10%;
}
.how-img 
{
    text-align: center;
   
    
}
.how-img img{
    width: 500px;
     border: 5px solid #650006;
}
html {
  scroll-behavior: smooth;

}
footer { float: right; }


.col {
float: left;
width: 33.33%;
padding: 10px ;
padding-left: 10px;
text-align: center;
}

/* Clearfix (clear floats) */
.ro::after {
  content: "";
  clear: both;
  text-align: center;
  display: flex;
}


.ro img{
border: 5px solid #650006;
width: 100%; 
transition: 0.6s all ease-in-out;
}
.col:hover img{  transform: scale(1.08); }
.near h1{
font-weight: bolder;
color: black;
font-size: 45px;
margin-top: -50px;
margin-bottom: 50px;
text-align: center;
}
.footer{
  margin-bottom: -20px;
}
</style>


</head>
<body>
<div id="top">
<div class="jumbotron">
<h1 style="font-size: 90px;">Activities Galore.</h1>
<h3 style="font-size: 34px;">There is a lot you can do in and around Serenehood Resort.</h3>
</div>

<div class="row">
<div class="column">
<a href="#trekking">
<img src="images/trekking.png" alt="Trekking" style="width:180px"></a>
<div class="desc">Trekking</div>
</div>
<div class="column">
<a href="#kayaking">
<img  src="images/kayaking1.png" alt="Kayaking" style="width:180px">
</a>
<div class="desc">Kayaking</div>
</div>
<div class="column">
<a href="#jeepsafari">
<img  src="images/jeep.png" alt="Jeep Safari" style="width:180px"></a>
<div class="desc">Jeep Safari</div>
</div>
<div class="column">
<a href="#ziplining">
<img  src="images/zipline2.png" alt="Ziplining" style="width:180px"></a>
<div class="desc">Ziplining</div>
  </div>
  <div class="column">
  	<a href="#cycling">
    <img src="images/cycling.png" alt="Mountain Cycling" style="width:180px">
</a>
<div class="desc">Mountain Cycling</div>
  </div>
   <div class="column">
  	<a href="#rafting">
    <img src="images/rafting1.png" alt="Rafting" style="width:180px">
</a>
<div class="desc">Rafting</div>
  </div>


   <div class="column">
    <a href="#near">
    <img src="images/near.png" alt="Places" style="width:180px">
</a>
<div class="desc">Places of Interest</div>
  </div>
  
</div>
</div>



<div class="how-section1">
	<div id="trekking">
                    <div class="row">
                        <div class="col-md-6 how-img">
                            <img src="images/trek.jpg" style="width: 500px;" alt=""/>
                        </div>
                        <div class="col-md-6" >
                            <h4>Trekking</h4>
                                        <h4 class="subheading">Tread on the road less travelled</h4>
                        <p class="text-muted">From pushing boundaries on rugged terrain to discovering the undiscovered natural beauty of the pristine forests and mountains, trekking is one of the most therapeutic activities. Serenehood Resort offer you the opportunity to unravel the hidden secrets of nature on an adventurous trek.Nestled in the pristine teak forests of the Sahyadris (Western Ghats), Serenehood resort, invites guests to follow the forest trails lead by the melodious chirping of the exotic birds. You can also trek to the mountain forts of Sudhagad and Sarasgad, dating back to Chattrapati Shivaji Maharaj, which are an absolute trekker’s delight.</p>
                        </div>
                    </div>
                </div>

                <div id="kayaking">
                    <div class="row">
                        <div class="col-md-6 how-img">
                            <img src="images/kayaking2.jpg"  alt=""/>
                        </div>
                        <div class="col-md-6">
                            <h4>Kayaking</h4>
                                        <h4 class="subheading">Paddle your worries away</h4>
                        <p class="text-muted">Paddle your way through the beautiful lake surrounded by mesmerising sceneries or take up a challenge against the mysterious waters - kayaking is an adventure sport that tests your limits. With an amazing arrangement for kayaking, Serenehood will bring out the thrillseeker in you.Gliding through the blissful lake at Serenehood Resort, overseen by experts, kayaking with us is a truly unique experience. Let the gentle breeze caress your soul and the picturesque beauty wave at you. Kayaking will persuade you to try something different.</p>
                        </div>
                    </div>
                </div>

                  <div id="jeepsafari">
                    <div class="row">
                        <div class="col-md-6 how-img">
                            <img src="images/jeep2.jpg"  alt=""/ style="height: 380px;">
                        </div>
                        <div class="col-md-6">
                            <h4>Jeep Safari</h4>
                                        <h4 class="subheading">Take a ride on the Wildside</h4>
                        <p class="text-muted">One amazing way to journey through splendid lands of India is by taking a jeep safari through it. Not only is it a far more comfortable mode to travel but it also allows you to soak in the beautiful surroundings. Jeep safaris are also a very practical way to cover a great distance that would be immensely tiring on some other mode of travel.Our Jeep safari offers you the full entertainment of wild life and surroundings. Here you can enjoy the fresh aroma of the nature and also your proximity to the almighty which is unforgettable. We provide excellent services to the genuine tourist who is really interested in our places.We arrange the sight seeing facilities at your affordable budgets.</p>
                        </div>
                    </div>
                </div>

                 <div id="ziplining">
                    <div class="row">
                        <div class="col-md-6 how-img">
                            <img src="images/zipline1.jpg"  alt=""/>
                        </div>
                        <div class="col-md-6">
                            <h4>Ziplining</h4>
                                        <h4 class="subheading">Fly Away!!</h4>
                        <p class="text-muted">Glide through the air enjoying spectacular views around as you cross streams, forests, and hills–that’s the sheer thrill of ziplining, an experience that a very few other activities can offer.We give you wings to fly from tree to tree over the expansive teak forests peppered with streams. Set against the majestic Sahyadri Hills, ziplining at Serenhood, is a breathtaking experience.</p>
                        </div>
                    </div>
                </div>

                  <div id="cycling">
                    <div class="row">
                        <div class="col-md-6 how-img">
                            <img src="images/cycling2.jpg"  alt=""/>
                        </div>
                        <div class="col-md-6">
                            <h4>Mountain Cycling</h4>
                                        <h4 class="subheading">Sometimes this is all you need!</h4>
                        <p class="text-muted">One of the ideal ways to indulge in exploring is to set off on a cycling tour. It is eco-friendly ensuring no damage done to the heavenly environment using fueled vehicles, and it is extremely pocket-friendly. With the weather always being pleasant and the air being fresh, riding around the town is more refreshing than exhausting. Cycling at Serenhood, mentioned amongst the best cycling tours up the hills and mountains sure demands a consistent amount of stamina, but the journey made up the road is worth the efforts invested.  </p>
                        </div>
                    </div>
                </div>

                 <div id="rafting">
                    <div class="row">
                        <div class="col-md-6 how-img">
                            <img src="images/rafting2.jpg"  alt=""/ style="height: 340px;">
                        </div>
                        <div class="col-md-6">
                            <h4>Rafting</h4>
                                        <h4 class="subheading">Play the rhythmic river</h4>
                        <p class="text-muted">The thrill of testing uncharted waters, or simply the joy of pushing your boundaries together, as you hurtle down a river, past whirlpools, rocks, and waterfalls, makes rafting one of the most popular adventure sports. At Serenehood, we let you explore the wisdom and mysteries of the river.It is just the right place to take on your first rafting adventure or satisfy your passion for it.We have created the ideal setting for you to raft down the meandering river, as the surrounding undulating rice fields and thick forests cheer you on! </p>
                        </div>
                    </div>
                </div>

            </div>   
            <div class="near" id="near"><h1>Places of interest near Serenehood</h1>

<div class="ro">

  <div class="col">
    <img src="images/lake.jpg" alt="lake" style="width:450px">
    <div><h2 style="font-weight: bold;">Ahtohallan Lake</h2> <h4 style="font-weight: bold;"> 5 Kms from Serenehood</h4></div>
</div>


  <div class="col">
    <img src="images/caves.jpg" alt="caves" style="width:400px">
     <div><h2 style="font-weight: bold;">Macadamia Caves</h2> <h4 style="font-weight: bold;"> 37 Kms from Serenehood</h4></div>
  </div>
  <div class="col">
    <img src="images/dam.jpg" alt="dam" style="width:400px">
     <div><h2 style="font-weight: bold;">Vallestrella Dam</h2> <h4 style="font-weight: bold;"> 51 Kms from Serenehood</h4></div>
  </div>
</div>


<div class="ro">

  <div class="col">
    <img src="images/peak.jpg" alt="peak" style="width:400px">
    <div><h2 style="font-weight: bold;">Nottingham Peak</h2> <h4 style="font-weight: bold;"> 89 Kms from Serenehood</h4></div>
</div>


  <div class="col">
    <img src="images/falls.jpg" alt="Falls" style="width:450px; height: 300px;">
     <div><h2 style="font-weight: bold;">Bootsville waterfalls</h2> <h4 style="font-weight: bold;"> 190 Kms from Serenehood</h4></div>
  </div>
  <div class="col">
    <img src="images/wild.jpg" alt="wildlife" style="width:400px; height: 300px;">
     <div><h2 style="font-weight: bold;">Arendelle Wildlife Sanctury</h2> <h4 style="font-weight: bold;"> 220 Kms from Serenehood</h4></div>
  </div>
</div></div>

  </div> 
 <footer>
 	<a href="#top"><button type="button" class="btn btn-primary">Back to top</button></a>
 </footer>              
               


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php include("footer.php");  ?>











