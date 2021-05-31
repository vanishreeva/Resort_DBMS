<?php 

include('connectdb.php');

$cname = $phone = $email = $temp = $bp = $sugar = $status = $loc = '';
$errors = array('cname' => '', 'email'=> '', 'temp'=> '', 'bp'=> '', 'sugar'=> '', 'status'=> '', 'loc'=> '');

if(isset($_POST['submit'])){

	if(empty($_POST['cname'])){
		$errors['cname'] = 'Full name is required';
	}
	else{
	
		$cname = $_POST['cname'];
		if(!preg_match('/^[a-zA-Z\s]+$/', $cname)){
			$errors['cname'] = 'Must contain letters and spaces only';
		}
	}

	$gender = $_POST['gender'];
	
	$phone = $_POST['phone'];

	if(empty($_POST['email'])){
		$errors['email'] = 'Email is required';
	}
	else{
		$email = $_POST['email'];
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$errors['email'] =  'Email must be a valid email address';
		}
	}
	if(empty($_POST['temp'])){
		$errors['temp'] = 'Enter recorded temperature';
	}
	else{

		$temp = $_POST['temp'];
		if(!preg_match('/^[0-9]+$/', $temp)){
			$errors['temp'] =  'Must contain numbers only';
		}
	}
	if(empty($_POST['bp'])){
		$errors['bp'] = 'Enter recorded Blood Pressure';
	}
	else{
		$bp = $_POST['bp'];
		if(!preg_match('/^\d+\/\d+$/', $bp)){
			$errors['bp'] =  'Must contain valid value';
		}
	}
	if(empty($_POST['sugar'])){
		$errors['sugar'] = 'Enter recorded Blood sugar level';
	}
	else{

		$sugar = $_POST['sugar'];
		if(!preg_match('/^[0-9]+$/', $sugar)){
			$errors['sugar'] =  'Must contain numbers only';
		}
	}
	if(empty($_POST['status'])){
		$errors['status'] = 'Enter status';
	}
	else{
		$status = $_POST['status'];
		if(!preg_match('/^[a-zA-Z\s]+$/', $status)){
			$errors['status'] =  'Must contain letters and spaces only';
		}
	}
	if(empty($_POST['loc'])){
		$errors['loc'] = 'Last visited place is required';
	}
	else{
		$loc = $_POST['loc'];
		if(!preg_match('/^[a-zA-Z\s]+$/', $loc)){
			$errors['loc'] =  'Must contain letters and spaces only';
		}
	}

	if(array_filter($errors)){
		//echo 'errors in the form';
	} else{
		$cname = mysqli_real_escape_string($conn, $_POST['cname']);
		$gender = mysqli_real_escape_string($conn, $_POST['gender']);
		$phone = mysqli_real_escape_string($conn, $_POST['phone']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$temp = mysqli_real_escape_string($conn, $_POST['temp']);
		$bp = mysqli_real_escape_string($conn, $_POST['bp']);
		$sugar = mysqli_real_escape_string($conn, $_POST['sugar']);
		$status = mysqli_real_escape_string($conn, $_POST['status']);
		$loc = mysqli_real_escape_string($conn, $_POST['loc']);

		$sql1 = "INSERT INTO covid(track_no,temp,bp,sugar,health_status,last_visited) VALUES(NULL, '$temp', '$bp', '$sugar', '$status', '$loc')";
		

		if(mysqli_query($conn, $sql1)){

			$trackid = mysqli_insert_id($conn);
			
		} else{

			echo 'query error: ' . mysqli_error($conn);
		}

		$sql2 = "INSERT INTO customer(track_no,c_name,gender,ph_no,email) VALUES('$trackid', '$cname', '$gender', '$phone', '$email')";

		if(mysqli_query($conn, $sql2)){

			header('Location: customer.php');
			
		} else{

			echo 'query error: ' . mysqli_error($conn);
		}
	}
}


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Customer details</title>
 </head>
 
 <?php  include('adhead.php'); ?>

	<section class="container grey-text">
		
		<form class="white" action="addcust.php" method="POST">
			<h4 class="center">Add a Customer</h4>
			<label>Name:</label>
			<input type="text" name="cname" value="<?php echo $cname ?>">
			<div class="red-text"><?php echo htmlspecialchars($errors['cname']); ?></div>
			<div class="form-group">
			<div class="maxl">
			<label for="name" class="h6">Gender:<br><br></label>
			<label class="radio inline"> 
			<input type="radio" name="gender" value="male" checked>
			<span> Male </span> </label>
			<label class="radio inline"> 
			<input  type="radio" name="gender" value="female">
			<span>Female </span> </label>
			<label class="radio inline"> 
			<input type="radio" name="gender" value="Prefer not to say">
			<span>Prefer not to say</span> </label> </div>
			<div class="form-group">
			<label><br>Phone No:</label>
			<input type="text" minlength="10" maxlength="10" name="phone" class="form-control" placeholder="Phone Number *" required value="<?php echo $phone ?>">
			</div>
			<div>
			<label>Email</label>
			<input type="text" name="email" value="<?php echo $email ?>">
			<div class="red-text"><?php echo $errors['email']; ?></div></div>
			<div>
			<label>Recorded Temperature(in Celsius)</label>
			<input type="text" name="temp" value="<?php echo $temp ?>">
			<div class="red-text"><?php echo $errors['temp']; ?></div></div>
			<div>
			<label>Blood Pressure(mmHg)</label>
			<input type="text" name="bp" value="<?php echo $bp ?>">
			<div class="red-text"><?php echo $errors['bp']; ?></div></div>
			<div>
			<label>Blood Sugar Level(mg/dL)</label>
			<input type="text" name="sugar" value="<?php echo $sugar ?>">
			<div class="red-text"><?php echo $errors['sugar']; ?></div></div>
			<div>
			<label>Health status</label>
			<input type="text" name="status" value="<?php echo $status ?>">
			<div class="red-text"><?php echo $errors['status']; ?></div></div>
			<label>Last visited place</label>
			<input type="text" name="loc" value="<?php echo $loc ?>">
			<div class="red-text"><?php echo $errors['loc']; ?></div>
			<div class="center" style="margin-top: 40px">
				<input type="submit" name="submit" value="Enter" class="btn brand z-depth-2">
			</div>
		</form>
		
	</section>

 <?php  include('adfoot.php'); ?>
 
 </body>
 </html>