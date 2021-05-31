<?php 
		
	include('connectdb.php');

	$sql = 'SELECT * FROM contactus';

	$result = mysqli_query($conn, $sql);

	$messages = mysqli_fetch_all( $result, MYSQLI_ASSOC);

	mysqli_free_result($result); //free $result from memory

	mysqli_close($conn); //closes the database connection

 ?>

 <!DOCTYPE html>
 <html>
  <head>
 	<title>Messages and queries</title>
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
 		<?php foreach($messages as $message){ ?>
 			<div class="col s6 md3">
 				<div class="card z-depth-1">
 					<img src="msg.png" class="icon">
 					<div class="card-content left-align">
 						<h6><b>Message ID: <?php echo htmlspecialchars($message['msg_id']); ?></b></h6><br>
 						
 						<div style="margin-left: 70px"> <b>Name: </b><?php echo htmlspecialchars($message['name']); ?>
 						</div>
 						<div style="margin-left: 70px;"> <b>Email: </b><?php echo htmlspecialchars($message['email']); ?></div>
 						<div style="margin-left: 70px"> <b>Message Recieved: </b><?php echo htmlspecialchars($message['message']); ?>
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