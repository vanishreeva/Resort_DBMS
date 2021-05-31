<?php 

	 $conn = mysqli_connect('localhost','vani','vani@123','resort');
if(!$conn){
    echo 'Connection error: '.mysqli_connect_error();
}

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
  <title>Registeration Details</title>
  <?php include('header.php') ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=El+Messiri&family=Philosopher:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="header.css">
<link rel="stylesheet" type="text/css" href="cancel.css">
<style type="text/css">
	.container{
		margin-left: 375px;
	}
	.footer{
		margin-bottom: -18px;
	}
</style>
</head>
<body><br>
<div class="container">
<div class="columns">
<ul class="price">
<li class="header" style="font-size: 30px;">Registration Details</li>
<li class="grey" style="text-align: center;">Booking ID: &#160 <?php echo htmlspecialchars($id); ?></li>

<div class="row"> 
<div class="column">  
<li>Name: &#160 <?php echo htmlspecialchars($booking['name']); ?></li>
<li>Phone Number: &#160 <?php echo htmlspecialchars($booking['ph_no']); ?></li>
<li>Address: &#160 <?php echo htmlspecialchars($booking['address']); ?></li>
<li>Room Type: &#160 <?php echo htmlspecialchars($billing['cat_name']); ?></li>
<li>Check-in: &#160 <?php echo htmlspecialchars($booking['checkin']); ?></li>
<li>ID Proof Type: &#160 <?php echo htmlspecialchars($booking['id_type']); ?></li></div>

<div class="column">
<li>Gender: &#160 <?php echo htmlspecialchars($booking['gender']); ?></li>
<li>Email: &#160 <?php echo htmlspecialchars($booking['email']); ?></li>
<li>No. Of People: &#160 <?php echo htmlspecialchars($booking['no_of_people']); ?></li>
<li>Room No.: &#160 <?php echo htmlspecialchars($room['room_id']); ?></li>
<li>Check-out: &#160 <?php echo htmlspecialchars($booking['checkout']); ?></li>
<li>ID Proof No: &#160 <?php echo htmlspecialchars($booking['id_no']);?></li></div>
</div>   
</ul>
</div>

<div class="columns">
<ul class="price">
<li class="header" style="font-size: 30px;">Payment Details</li>
<li>Amount Paid:&#160 &#x20B9; &#160;<?php echo htmlspecialchars($billing['amount']); ?></li>
<li>Payment Type:&#160 <?php echo htmlspecialchars($billing['paytype']); ?></li>
</ul>
</div>
<div class="columns">
<ul class="price">
<li class="grey" style="text-align: center;">Please share your review below<br>
	<a href="feedback.php?id=<?php echo $booking['book_id'];?>"><button type="button" class="btn" style="background-color: green; color: white;">Feedback</button></a><br><br>Do you wish to cancel the Booking?<br>
	<a href="refund.php?id=<?php echo $booking['book_id'];?>"><button type="button" class="btn btn-danger">Yes,I want to Cancel</button></a><br><br></li>
</ul>
</div><br>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
<?php include('footer.php'); ?>