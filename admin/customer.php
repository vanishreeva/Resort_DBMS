<?php 
		
	include('connectdb.php');

	$sql = 'SELECT c_id, c_name, health_status FROM customer c, covid d where c.track_no=d.track_no';

	$result = mysqli_query($conn, $sql);

	$customers = mysqli_fetch_all( $result, MYSQLI_ASSOC);

	mysqli_free_result($result); //free $result from memory

	mysqli_close($conn); //closes the database connection

 ?>

 <!DOCTYPE html>
 <html>
  <head>
 	<title>Customer Database</title>
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
 		<?php foreach($customers as $customer){ ?>
 			<div class="col s6 md3">
 				<div class="card z-depth-1">
 					<img src="cust.png" class="icon">
 					<div class="card-content left-align">
 						<h6><b> ID: <?php echo htmlspecialchars($customer['c_id']); ?></b></h6><br>
 						<div style="margin-left: 70px"> <b>Name: </b><?php echo htmlspecialchars($customer['c_name']); ?></div>
 						<div style="margin-left: 70px; <?php if($customer['health_status']=='Normal'): ?> color: #76ba1b;<?php else: ?> color: red; <?php endif; ?>"> <b>Health status: </b><?php echo htmlspecialchars($customer['health_status']); ?></div>
 					</div>
 					<div class="card-action right-align">
 						<a class="brand-text" href="single_cust.php?id=<?php echo $customer['c_id'];?>">More info</a>
 					</div>
 				</div>
 			</div>
 		<?php } ?>
 	</div>
 </div>

 <?php  include('adfoot.php'); ?>
 
 </body>
 </html>