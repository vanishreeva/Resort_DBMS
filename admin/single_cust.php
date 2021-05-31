<?php 

	include('connectdb.php');

	if(isset($_POST['delete'])){

		$id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

		$sql1 = "SELECT track_no from customer WHERE c_id = $id_to_delete";

		$result = mysqli_query($conn, $sql1);

		$track = mysqli_fetch_assoc($result);

		$sql = "DELETE FROM customer WHERE c_id = $id_to_delete";

		$result1 = mysqli_query($conn, $sql);

		$sql2 = "DELETE FROM covid WHERE track_no = '".$track['track_no']."'";

		if(mysqli_query($conn, $sql2)){
			header('Location: customer.php');
		} else{
			echo 'query error:'. mysqli_error($conn);
		}

	}

//check GET request
	if(isset($_GET['id'])){

		$id = mysqli_real_escape_string($conn, $_GET['id']);

		$sql= "SELECT * FROM customer c JOIN covid d ON (c.track_no=d.track_no) WHERE c_id = $id";

		$result = mysqli_query($conn, $sql);

		$customer = mysqli_fetch_assoc($result);
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<style type="text/css">
 		<?php if($customer['health_status']=='Normal'): ?>
 			.health{
 				color: green;
 				font-size: 130%;
 			}
 		<?php else: ?>
 			.health{
 				color: red;
 				font-size: 130%;
 			}
 		<?php endif; ?>
 	</style>
 </head>
 	<?php  include('adhead.php'); ?>
 	<br><br>

 	<div class="container center">
 		
 			<div class="container">
 				<div class="row">
 					<?php if($customer): ?>
 						<div class="card z-depth-1">
 							<div class="card-content center">
 								<h4>ID: <?php echo htmlspecialchars($customer['c_id']); ?></h4>
 								<p>Created at: <?php echo date($customer['created_at']); ?></p>
 								<p>Name: <?php echo htmlspecialchars($customer['c_name']); ?></p>
 								<p>Gender: <?php echo htmlspecialchars($customer['gender']); ?></p>
 								<p>Phone Number: <?php echo htmlspecialchars($customer['ph_no']); ?></p>
 								<p>Email Address: <?php echo htmlspecialchars($customer['email']); ?></p>
 								<h5>Recorded during Check-in:</h5>
 								<p>Body Temperature (in Celsius): <?php echo htmlspecialchars($customer['temp']); ?></p>
 								<p>Blood pressure (in mmHg): <?php echo htmlspecialchars($customer['bp']); ?></p>
 								<p>Blood Sugar Level (mg/dL): <?php echo htmlspecialchars($customer['sugar']); ?></p><br>
 								<p class="health"><b>Health Status: <?php echo htmlspecialchars($customer['health_status']); ?></b></p><br>
 								<p>Last Visited Place: <?php echo htmlspecialchars($customer['last_visited']); ?></p>
 							</div>
 								<!-- delete entry -->
							<form action="single_cust.php" method="POST">
								<input type="hidden" name="id_to_delete" value="<?php echo $customer['c_id'] ?>" >
								<input type="submit" name="delete" value="Delete" class="btn brand z-depth-1">
							</form> 
								<!--not able to delete covid table entries-->
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