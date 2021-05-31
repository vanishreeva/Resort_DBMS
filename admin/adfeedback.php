<?php 
		
	include('connectdb.php');

	$sql = 'SELECT * FROM feedback';

	$result = mysqli_query($conn, $sql);

	$feedbacks = mysqli_fetch_all( $result, MYSQLI_ASSOC);

	mysqli_free_result($result); //free $result from memory

	mysqli_close($conn); //closes the database connection

 ?>

 <!DOCTYPE html>
 <html>
  <head>
 	<title>Reviews recieved</title>
 	<style type="text/css">
 		h6{
 			color: #caa472;
 		}
 	</style>
 </head>
 
 <?php  include('adhead.php'); ?>
 <br><br>
 <div class="container">
 	<div class="row">
 		<?php foreach($feedbacks as $feedback){ ?>
 			<div class="col s6 md3">
 				<div class="card z-depth-1">
 					<img src="feed.png" class="icon">
 					<div class="card-content left-align">
 						<h6><b>Feedback ID: <?php echo htmlspecialchars($feedback['feed_id']); ?></b></h6><br>
 						<div style="margin-left: 70px"> <b>Booking ID: </b><?php echo htmlspecialchars($feedback['book_id']); ?>
 						</div>
 						<div style="margin-left: 70px"> <b>Name: </b><?php echo htmlspecialchars($feedback['name']); ?>
 						</div>
 						<div style="margin-left: 70px;"> <b>Email: </b><?php echo htmlspecialchars($feedback['email']); ?></div>
 						<div style="margin-left: 70px"> <b>Comments: </b><?php echo htmlspecialchars($feedback['comments']); ?>
 						</div>
 						<div style="margin-left: 70px"> <b>Rating: </b><?php echo htmlspecialchars($feedback['rating']); ?>
 						</div>
 					</div>
 				</div>
 			</div>
 		<?php } ?>
 	</div>
 </div>

 <?php  include('adfoot.php'); ?>
 
 </body>
 </html>