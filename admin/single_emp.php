<?php 

	include('connectdb.php');

	if(isset($_POST['delete'])){

		$id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

		$sql1 = "SELECT track_no from employee WHERE emp_id = $id_to_delete";

		$result = mysqli_query($conn, $sql1);

		$track = mysqli_fetch_assoc($result);

		$sql = "DELETE FROM employee WHERE emp_id = $id_to_delete";

		$result1 = mysqli_query($conn, $sql);

		$sql2 = "DELETE FROM covid WHERE track_no = '".$track['track_no']."'";

		if(mysqli_query($conn, $sql2)){
			header('Location: employee.php');
		} else{
			echo 'query error:'. mysqli_error($conn);
		}

	}
//check GET request
	if(isset($_GET['id'])){

		$id = mysqli_real_escape_string($conn, $_GET['id']);

		$sql= "SELECT * FROM employee e JOIN covid d ON (e.track_no=d.track_no) WHERE emp_id = $id";

		$result = mysqli_query($conn, $sql);

		$employee = mysqli_fetch_assoc($result);
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<style type="text/css">
 		<?php if($employee['health_status']=='Normal'): ?>
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
 					<?php if($employee): ?>
 						<div class="card z-depth-1">
 							<div class="card-content center">
 								<h4>ID: <?php echo htmlspecialchars($employee['emp_id']); ?></h4>
 								<p>Created at: <?php echo date($employee['created_at']); ?></p>
 								<p>Name: <?php echo htmlspecialchars($employee['emp_name']) ?></p>
 								<p>Designation: <?php echo htmlspecialchars($employee['job']) ?></p>
 								<p>Gender: <?php echo htmlspecialchars($employee['gender']) ?></p>
 								<p>Phone Number: <?php echo htmlspecialchars($employee['ph_no']) ?></p>
 								<p>Email Address: <?php echo htmlspecialchars($employee['email']) ?></p>
 								<p>Salary(in rupees): <?php echo htmlspecialchars($employee['salary']) ?></p>
 								<p>Permanent Address: <?php echo htmlspecialchars($employee['address']) ?></p>
 								<p>City: <?php echo htmlspecialchars($employee['city']) ?></p>
 								<p>State: <?php echo htmlspecialchars($employee['state']) ?></p>
 								<p>Pin-code: <?php echo htmlspecialchars($employee['pin_code']) ?></p>
 								<h5>Recorded during Check-in:</h5>
 								<p>Body Temperature (in Celsius): <?php echo htmlspecialchars($employee['temp']) ?></p>
 								<p>Blood pressure (in mmHg): <?php echo htmlspecialchars($employee['bp']) ?></p>
 								<p>Blood Sugar Level (mg/dL): <?php echo htmlspecialchars($employee['sugar']) ?></p><br>
 								<p class="health"><b>Health Status: <?php echo htmlspecialchars($employee['health_status']) ?></b></p><br>
 								<p>Last Visited Place: <?php echo htmlspecialchars($employee['last_visited']) ?></p>
 							</div>
 								<!-- delete entry -->
							<form action="single_emp.php" method="POST">
								<input type="hidden" name="id_to_delete" value="<?php echo $employee['emp_id'] ?>" >
								<input type="submit" name="delete" value="Delete" class="btn brand z-depth-1">
							</form> 
 						</div>
				</div>
			</div>
		</div>

		<?php else: ?>

 		<h5> No such employee exists!</h5>

 		<?php endif; ?>
 	</div>

 	<?php  include('adfoot.php'); ?>
 
 
 </html>