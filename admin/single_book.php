<?php 

	include('connectdb.php');

//check GET request
	if(isset($_GET['id'])){

		$id = mysqli_real_escape_string($conn, $_GET['id']);

		$sql= "SELECT * FROM booking WHERE book_id = $id";

		$result = mysqli_query($conn, $sql);

		$booking = mysqli_fetch_assoc($result);

		$sql1 = "SELECT * FROM billing JOIN category WHERE billing.book_id=$id AND category.cat_id=billing.cat_id";

		$result1 = mysqli_query($conn, $sql1);

		$billing = mysqli_fetch_assoc($result1);

		$sql2 = "SELECT * FROM room WHERE book_id=$id";

		$result2 = mysqli_query($conn, $sql2);

		$room = mysqli_fetch_assoc($result2);
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<style type="text/css">
 	
 	</style>
 </head>
 	<?php  include('adhead.php'); ?>
 	<br><br>

 	<div class="container center">
 		
 			<div class="container">
 				<div class="row">
 					<?php if($booking): ?>
 						<div class="card z-depth-1">
 							<div class="card-content center">
 								<h4>ID: <?php echo htmlspecialchars($booking['book_id']); ?></h4>
 								<p>Created at: <?php echo date($booking['created_at']); ?></p>
 								<p>Name: <?php echo htmlspecialchars($booking['name']); ?></p>
 								<p>Gender: <?php echo htmlspecialchars($booking['gender']); ?></p>
 								<p>Phone Number: <?php echo htmlspecialchars($booking['ph_no']); ?></p>
 								<p>Email-ID: <?php echo htmlspecialchars($booking['email']); ?></p>
 								<p>Address: <?php echo htmlspecialchars($booking['address']); ?></p>
 								<p>Check-in Date: <?php echo htmlspecialchars($booking['checkin']); ?></p>
 								<p>Check-out Date: <?php echo htmlspecialchars($booking['checkout']); ?></p>
 								<p>Number of People: <?php echo htmlspecialchars($booking['no_of_people']); ?></p>
 								<p>ID Type presented: <?php echo htmlspecialchars($booking['id_type']); ?></p>
 								<p>ID No: <?php echo htmlspecialchars($booking['id_no']); ?></p>
 								<h5>Room Details:</h5>
 								<p>Room type: <?php echo htmlspecialchars($billing['cat_name']); ?></p>
 								<p>Room No:<?php echo htmlspecialchars($room['room_id']); ?></p>
 								<h5>Payment Details:</h5>
 								<p>Bill No:<?php echo htmlspecialchars($billing['bill_no']); ?></p>
 								<p>Amount paid:&#160;&#8377;&#160;<?php echo htmlspecialchars($billing['amount']); ?></p>
 								<p>Pay-type: <?php echo htmlspecialchars($billing['paytype']); ?></p>
 							</div>
 						</div>
				</div>
			</div>
		</div>

		<?php else: ?>

 		<h5> No such customer exists!</h5>

 		<?php endif; ?>
 	</div>

 	<?php  include('adfoot.php'); ?>
 
 
 </html>