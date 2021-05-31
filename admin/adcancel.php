<?php 
		
	include('connectdb.php');

	$sql = 'SELECT * FROM cancel';

	$result = mysqli_query($conn, $sql);

	$cancels = mysqli_fetch_all( $result, MYSQLI_ASSOC);

	mysqli_free_result($result); //free $result from memory

	mysqli_close($conn); //closes the database connection

 ?>

 <!DOCTYPE html>
 <html>
  <head>
 	<title>Cancelled details</title>
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
 		<?php foreach($cancels as $cancel){ ?>
 			<div class="col s6 md3">
 				<div class="card z-depth-1">
 					<img src="cancel.png" class="icon">
 					<div class="card-content left-align">
 						<h6><b>Cancel ID: <?php echo htmlspecialchars($cancel['cancel_id']); ?></b></h6><br>
 						<div style="margin-left: 70px"> <b>Booking ID: </b><?php echo htmlspecialchars($cancel['book_id']); ?>
 						</div>
 						<div style="margin-left: 70px"> <b>Cancelled at: </b><?php echo htmlspecialchars($cancel['cancelled_at']); ?>
 						</div>
 						<div style="margin-left: 70px;"> <b>Refund Amount: &#160;&#8377;&#160;</b><?php echo htmlspecialchars($cancel['refund']); ?></div>
 						<div style="margin-left: 70px"> <b>Reason for Cancellation: </b><?php echo htmlspecialchars($cancel['reason']); ?>
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