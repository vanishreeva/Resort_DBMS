<?php 

include('connectdb.php');

$ename = $job = $phone = $email = $sal = $temp = $bp = $sugar = $status = $address = $city = $state = $pin= '';
$errors = array('ename' => '', 'job' => '', 'email'=> '', 'sal'=> '', 'temp'=> '', 'bp'=> '', 'sugar'=> '', 'status'=> '', 'address'=> '', 'city'=> '', 'state'=> '');

if(isset($_POST['submit'])){

	if(empty($_POST['ename'])){
		$errors['ename'] = 'Full name is required';
	}
	else{
	
		$ename = $_POST['ename'];
		if(!preg_match('/^[a-zA-Z\s]+$/', $ename)){
			$errors['ename'] = 'Must contain letters and spaces only';
		}
	}
	if(empty($_POST['job'])){
		$errors['job'] = 'Mention the job type';
	}
	else{
	
		$job = $_POST['job'];
		if(!preg_match('/^[a-zA-Z\s]+$/', $job)){
			$errors['job'] = 'Must contain letters and spaces only';
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
	if(empty($_POST['sal'])){
		$errors['sal'] = 'Enter correct salary';
	}
	else{
	
		$sal = $_POST['sal'];
		if(!preg_match('/^[0-9]+$/', $sal)){
			$errors['sal'] = 'Must contain numbers only';
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
	if(empty($_POST['address'])){
		$errors['address'] = 'Enter permanent address';
	}
	else{
		$address = $_POST['address'];
		if(!preg_match('/^.+$/', $address)){
			$errors['address'] =  'Enter permanent address';
		}
	}
	if(empty($_POST['city'])){
		$errors['city'] = 'Enter city';
	}
	else{
	
		$city = $_POST['city'];
		if(!preg_match('/^[a-zA-Z\s]+$/', $city)){
			$errors['city'] = 'Must contain letters and spaces only';
		}
	}
	if(empty($_POST['state'])){
		$errors['state'] = 'Enter state';
	}
	else{
	
		$state = $_POST['state'];
		if(!preg_match('/^[a-zA-Z\s]+$/', $state)){
			$errors['state'] = 'Must contain letters and spaces only';
		}
	}

	$pin = $_POST['pin'];

	if(array_filter($errors)){
		//echo 'errors in the form';
	} else{
		$ename = mysqli_real_escape_string($conn, $_POST['ename']);
		$job = mysqli_real_escape_string($conn, $_POST['job']);
		$gender = mysqli_real_escape_string($conn, $_POST['gender']);
		$phone = mysqli_real_escape_string($conn, $_POST['phone']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$sal = mysqli_real_escape_string($conn, $_POST['sal']);
		$temp = mysqli_real_escape_string($conn, $_POST['temp']);
		$bp = mysqli_real_escape_string($conn, $_POST['bp']);
		$sugar = mysqli_real_escape_string($conn, $_POST['sugar']);
		$status = mysqli_real_escape_string($conn, $_POST['status']);
		$address = mysqli_real_escape_string($conn, $_POST['address']);
		$city = mysqli_real_escape_string($conn, $_POST['city']);
		$state = mysqli_real_escape_string($conn, $_POST['state']);
		$pin = mysqli_real_escape_string($conn, $_POST['pin']);

		$sql1 = "INSERT INTO covid(track_no,temp,bp,sugar,health_status,last_visited) VALUES(NULL, '$temp', '$bp', '$sugar', '$status', '$city')";
		

		if(mysqli_query($conn, $sql1)){

			$trackid = mysqli_insert_id($conn);
			
		} else{

			echo 'query error: ' . mysqli_error($conn);
		}

		$sql2 = "INSERT INTO employee(track_no,emp_name,job,gender,ph_no,email,salary,address,city,state,pin_code) VALUES('$trackid', '$ename', '$job', '$gender', '$phone', '$email', '$sal', '$address', '$city', '$state', '$pin')";

		if(mysqli_query($conn, $sql2)){

			header('Location: employee.php');
			
		} else{

			echo 'query error: ' . mysqli_error($conn);
		}
	}
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Employee details</title>
 </head>
 
 <?php  include('adhead.php'); ?>

	<section class="container grey-text">
		
		<form class="white" action="addemp.php" method="POST">
			<h4 class="center">Add an Employee</h4>
			<label>Name:</label>
			<input type="text" name="ename" value="<?php echo $ename ?>">
			<div class="red-text"><?php echo htmlspecialchars($errors['ename']); ?></div>
			<div>
			<label>Designation:</label>
			<input type="text" name="job" value="<?php echo $job ?>">
			<div class="red-text"><?php echo htmlspecialchars($errors['job']); ?></div>
			</div>
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
			<label>Email:</label>
			<input type="text" name="email" value="<?php echo $email ?>">
			<div class="red-text"><?php echo $errors['email']; ?></div></div>
			<div>
			<label>Salary(in rupees):</label>
			<input type="text" name="sal" value="<?php echo $sal ?>">
			<div class="red-text"><?php echo $errors['sal']; ?></div></div>
			<div>
			<label>Recorded Temperature(in Celsius):</label>
			<input type="text" name="temp" value="<?php echo $temp ?>">
			<div class="red-text"><?php echo $errors['temp']; ?></div></div>
			<div>
			<label>Blood Pressure(mmHg):</label>
			<input type="text" name="bp" value="<?php echo $bp ?>">
			<div class="red-text"><?php echo $errors['bp']; ?></div></div>
			<div>
			<label>Blood Sugar Level(mg/dL):</label>
			<input type="text" name="sugar" value="<?php echo $sugar ?>">
			<div class="red-text"><?php echo $errors['sugar']; ?></div></div>
			<div>
			<label>Health status:</label>
			<input type="text" name="status" value="<?php echo $status ?>">
			<div class="red-text"><?php echo $errors['status']; ?></div></div>
			<div>
			<label>Address:</label>
			<input type="text" name="address" value="<?php echo $address ?>">
			<div class="red-text"><?php echo $errors['address']; ?></div></div>
			<div>
			<label>City:</label>
			<input type="text" name="city" value="<?php echo $city ?>">
			<div class="red-text"><?php echo $errors['city']; ?></div></div>
			<div>
			<label>State:</label>
			<input type="text" name="state" value="<?php echo $state ?>">
			<div class="red-text"><?php echo $errors['state']; ?></div></div>
			<div class="form-group">
			<label><br>Pin-code:</label>
			<input type="text" minlength="6" maxlength="6" name="pin" class="form-control" placeholder="Pin-code *" required value="<?php echo $pin ?>">
			</div>
			<div class="center" style="margin-top: 40px">
				<input type="submit" name="submit" value="Enter" class="btn brand z-depth-2">
			</div>
		</form>
		
	</section>

 <?php  include('adfoot.php'); ?>
 
 </body>
 </html>