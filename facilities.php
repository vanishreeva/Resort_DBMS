<?php include("header.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>
		Facilites
	</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css2?family=El+Messiri&family=Philosopher:wght@700&display=swap" rel="stylesheet">
<style>
* {
  box-sizing:border-box;
}
body {
  margin: 0;
  font-family: El Messiri;
  background-image: url("Images/bgimg.png"); 
}
.container {
  padding: 64px;
  background-position: center;
  background-size: cover;
}

.row:after {
  content: "";
  display: table;
  clear: both
}

.column-66 {
  float: left;
  width: 60%;
  padding: 20px;
}

.column-33 {
  float: left;
  width: 40%;
  padding: 20px;
}

.large-font {
  font-size: 48px;
   font-family: El Messiri;
}
.info-font {
	font-size: 20px;
}
.info-font-1 {
	font-size: 25px;
	text-align: center;
	color:DarkRed;

}
.column-33 img {
  display: block;
  height: auto;
  max-width: 100%;
  border:5px solid DarkRed;
}
.column-66 img {
  display: block;
  height: auto;
  max-width: 100%;
  border:5px solid DarkRed;
}
.row-1 {
	padding: 64px;
  display: flex;

}

/* Create three equal columns that sits next to each other */
.column-1 {
  flex: 33.33%;
  padding: 5px;
}
.column-1 img { 
            width: 100%; 
            transition: 0.6s all ease-in-out; 
            flex: 20%
            padding:20px;
        } 
        .column-1:hover img { 
            transform: scale(1.2); 
        }

</style>
</head>
<body>
<div style="text-align:center"style="font-family:El Messiri">
  <br>
  <br>
  <p>
  		<h2>FACILITES</h2>
  </p>
</div>
<div class="container">
  <div class="row">
    <div class="column-66">
      <h1 class="large-font" style="color:DarkRed;" ><b>Dining</b></h1>
      <div class="info-font">
      	Large expanses of glass on two ends in the dining area provide superlative views of the surroundings and set the ambience for a delightful meal. The resort serves an eclectic menu that features pan – Indian and south eastern cuisine, besides exquisitel desserts. The kitchen serves both al carte and buffets based on occupancy in the resort. (The management reserves rights to decide on the menu for the day)
      	Room service is available to guests on a limited menu and with a service fee applicable. We highly discourage the same unless absolutely necessary considering the fact that food will attract insects and rodents to your rooms. Also due to the distance between our kitchens and the rooms, food ordered is most likely to turn cold and insipid and we recommend you to enjoy the same in the comfort of our restaurant.
      	Striving to minimise our footprint on the natural environment, a large portion of the ingredients, fruits and vegetables in the food served to guests are grown on an organic farm in the estate as part of Coorg Cliffs Resort’s farm to table initiative.
      </div>
    </div>
    <div class="column-33">
    	<br>
    	<br>
    	<br>
    	<br>
        <img src="Images/Dining.jpg" width="1000" height="600">
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="column-33">
      <img src="Images/Pool.jpg" alt="App" width="500" height="500">
    </div>
    <div class="column-66">
      <h1 class="large-font" style="color:DarkRed;"><b>Swimming Pool</b></h1>
      <p><span style="font-size:24px"></span> 
      	 <div class="info-font">
      The view from the pool stretches across the horizon,including majestic mountains of the Western Ghats and a vast expanse of the sky above. Sunsets viewed from the pool are magical. A paddle pool for kids extends from the larger pool. Being eco-sensitive, ensuring hygiene and safety of our guests, the pool is kept clean by ozonized filtration and a pair of water purifiers. We do not add chlorine to the water. Shower areas are nearby and the deck is provided with fresh towels. Should guests require assistance a pool attendant is on duty.
  </div>
</p>
     </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="column-66">
      <h1 class="large-font" style="color:DarkRed;"><b>Game Room</b></h1>
       <div class="info-font">
      	You find the brand-new, state-of-the-art Mission Control Game Room on the first floor of the Village Shops! Take on the latest arcade games, fun for all ages and every skill level.
      	The game room offers a range of indoor games like board games, table tennis, air hockey table, board games and foosball tables.  Charge up your playing card and play the day away with the whole family!
      	</div>
      </p>
      
    </div>
    <div class="column-33">
        <img src="Images/Gaming.jpg" width="750" height="600">
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="column-33">
      <img src="Images/Spa.jpg" alt="App" width="500" height="500">
    </div>
    <div class="column-66">
      <h1 class="xlarge-font"></h1>
      <h1 class="large-font" style="color:DarkRed;"><b>Spa</b></h1>
      <p><span style="font-size:24px"></span> 
      	 <div class="info-font">
      	Undeniably chic, equipped with the state- of- the art infrastructure and staffed by professionals, the spa at Serenehood Resort will offer an extensive range of curative and wellness treatments that adhere to international standards. Cocooned in stunningly beautiful surroundings, watch the sun languorously paint the landscape below, breathe in pristine mountain air, listen to mellifluous, preening birds – pamper your body, soothe your soul.
      	</div>
</p>
     </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="column-66">
      <h1 class="large-font" style="color:DarkRed;"><b>Campfire</b></h1>
       <div class="info-font">
      	Enjoy a cold night around the campfire along with your friends and family.Barbecunation, music and some games along with your loved ones is a great experience to live. At Serenehood you can have a memorable and warm campfire experience to be cherished for a lifetime!
      	</div>
      </p>
      
    </div>
    <div class="column-33">
        <img src="Images/Campfire.jpg" width="400" height="571">
    </div>
  </div>
</div>
<!-- Clarity Section -->
<div class="container">
  <div class="row">
    <div class="column-33">
      <img src="Images/parking.jpg" alt="App" width="500" height="500">
    </div>
    <div class="column-66">
      <h1 class="xlarge-font"></h1>
      <h1 class="large-font" style="color:DarkRed;"><b>Parking</b></h1>
      <p><span style="font-size:24px"></span> 
      	 <div class="info-font">
      	Serenehood provides a spacious parking for both two-wheeler as well as four-wheeler.There is no scope of inconvenience as each room has a parking lot assigned .The vehicles of the customers are safe and protected with Camera Survelliance in the premises.
      	</div>
     </p>
     </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="column-66">
      <h1 class="large-font" style="color:DarkRed;"><b>Bar</b></h1>
       <div class="info-font">
      	A 24 X 7 Bar is available here at Serenehood. All variety of brands will be served at the bar.Room delivery is also provided after 7 p.m everyday. There is a smoking section available at the bar as Smoking isn't allowed at the rest of the premises.
      	</div>
      </p>
      
    </div>
    <div class="column-33">
        <img src="Images/Bar.jpg" width="350" height="350">
    </div>
  </div>
</div>  
</div>
</div>
<div class="row-1">
  <div class="column-1">
  	<figure class="info-font-1">
    <a href="#Coffee Maker">
    <img src="Images/coffee.png" alt="Coffee Maker" style="width:180px">
    </a>
    <figcaption>Coffee Maker</figcaption>
    </figure>
  </div>
  <div class="column-1">
  	<figure class="info-font-1">
    <a href="#Room Service">
    <img  src="Images/Roomservice.png" alt="Room Service" style="width:180px">
    </a>
    <figcaption>Room Service</figcaption>
    </figure>
  </div>
  <div class="column-1">
  	<figure class="info-font-1">
   <a href="#LED TV">
    <img  src="Images/TV.png" alt="LED TV" style="width:180px">
	</a>
	<figcaption>LED TV</figcaption>
</figure>
  </div>

  <div class="column-1">
  	<figure class="info-font-1">
    <a href="#Laundry">
    <img  src="Images/Laundry.png" alt="Laundry" style="width:180px">
    </a>
    <figcaption>Laundry</figcaption>
</figure>

</div>
<div class="column-1">
	<figure class="info-font-1">
    <a href="#Free WiFi">
    <img src="Images/Wifi.png" caption="Free WiFi" alt="Free WiFi" style="width:180px">
    </a>
    <figcaption>Free WiFi</figcaption>
</figure>

   </div>

</div>


<?php  

 include('footer.php');

?>


</body>
</html>