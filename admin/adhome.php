<!DOCTYPE html>
 <html>
 <head>
 	<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
 	<style type="text/css">
 		h4{
 			color: #caa472;
 		}
 	
 		.card{
 			font-family: Bree Serif;
 		}
 	</style>
 </head>
 
 <?php  include('adhead.php'); ?>
 <br><br>
 <div class="container">
 	<div class="row">
 			<div class="col s6 md3">
 				<div class="card z-depth-1">
 					<img src="customer1.png" class="icon">
 					<div class="card-content center">
 						<a href="customer.php"><h4>CUSTOMER DATABASE</h4></a>
 					</div>
 				</div>
 			</div>
 			<div class="col s6 md3">
 				<div class="card z-depth-1">
 					<img src="employee.png" class="icon">
 					<div class="card-content center">
 						<a href="employee.php"><h4>EMPLOYEE DATABASE</h4></a>
 					</div>
 				</div>
 			</div>
 			<div class="col s6 md3">
 				<div class="card z-depth-1">
 					<img src="booking.png" class="icon">
 					<div class="card-content center">
 						<a href="booking.php"><h4>BOOKING DATABASE</h4></a>
 					</div>
 				</div>
 			</div>
 			<div class="col s6 md3">
 				<div class="card z-depth-1">
 					<img src="cancelled.png" class="icon">
 					<div class="card-content center">
 						<a href="adcancel.php"><h4>CANCELLED DETAILS</h4></a>
 					</div>
 				</div>
 			</div>
 			<div class="col s6 md3">
 				<div class="card z-depth-1">
 					<img src="feedback.png" class="icon">
 					<div class="card-content center">
 						<a href="adfeedback.php"><h4>REVIEWS RECIEVED</h4></a>
 					</div>
 				</div>
 			</div>
 			<div class="col s6 md3">
 				<div class="card z-depth-1">
 					<img src="msgs.png" class="icon">
 					<div class="card-content center">
 						<a href="adcontactus.php"><h4>MESSAGES & QUERIES</h4></a>
 					</div>
 				</div>
 			</div>
 	</div>
 </div>
 
 <?php  include('adfoot.php'); ?>
 
 </body>
 </html>