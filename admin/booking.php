<?php 
		
	include('connectdb.php');

	$sql = 'SELECT booking.book_id, name, amount, cat_name FROM booking, billing, category WHERE booking.book_id=billing.book_id and category.cat_id=billing.cat_id';

	$result = mysqli_query($conn, $sql);

	$bookings = mysqli_fetch_all( $result, MYSQLI_ASSOC);

	mysqli_free_result($result); //free $result from memory

	mysqli_close($conn); //closes the database connection

 ?>

 <!DOCTYPE html>
 <html>
  <head>
 	<title>Booking Database</title>
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
 		<?php foreach($bookings as $booking){ ?>
 			<div class="col s6 md3">
 				<div class="card z-depth-1">
 					<img src="book.png" class="icon">
 					<div class="card-content left-align">
 						<h6><b> ID: <?php echo htmlspecialchars($booking['book_id']); ?></b></h6><br>
 						<div style="margin-left: 70px"> <b>Name: </b><?php echo htmlspecialchars($booking['name']); ?></div>
 						<div style="margin-left: 70px"> <b>Paid amount: &#160;&#8377;&#160; </b><?php echo htmlspecialchars($booking['amount']); ?></div>
 						<div style="margin-left: 70px"> <b>Room type: </b><?php echo htmlspecialchars($booking['cat_name']); ?></div>

 					</div>
 					<div class="card-action right-align">
 						<a class="brand-text" href="single_book.php?id=<?php echo $booking['book_id'];?>">More info</a>
 					</div>
 				</div>
 			</div>
 		<?php } ?>
 	</div>
 </div>

 <?php  include('adfoot.php'); ?>
 
 </body>
 </html>