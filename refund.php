<?php 


   $conn = mysqli_connect('localhost','vani','vani@123','resort');
if(!$conn){
    echo 'Connection error: '.mysqli_connect_error();
}


	if(isset($_POST['delete'])){

		$id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

		$reason = mysqli_real_escape_string($conn,$_POST['reason']);

		$refund = mysqli_real_escape_string($conn,$_POST['refund']);

		$sql1 = "INSERT INTO cancel(cancel_id, book_id, refund, reason) VALUES(NULL, '$id_to_delete', '$refund', '$reason')";

		if(mysqli_query($conn, $sql1)){}else{
			echo 'query error:'. mysqli_error($conn);
		}

		$sql2 = "DELETE FROM billing WHERE book_id = $id_to_delete";

		if(mysqli_query($conn, $sql2)){}else{
			echo 'query error:'. mysqli_error($conn);
		}

		$sql3 = "UPDATE room SET book_id = 0 WHERE book_id = $id_to_delete";

		if(mysqli_query($conn, $sql3)){}else{
			echo 'query error:'. mysqli_error($conn);
		}

		$sql4 = "DELETE FROM booking WHERE book_id = $id_to_delete";

		if(mysqli_query($conn, $sql4)){

			header('Location: confirm.php');

		} else{

			echo 'query error:'. mysqli_error($conn);
		}

	}

 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Refund</title>
	<?php include('header.php') ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=El+Messiri&family=Philosopher:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="header.css">

<style>
* {
  box-sizing: border-box;
 
}
body{
	background-image: url("images/bgimg.png");
	font-family: El Messiri;
}
.container {
  margin-left:500px;
  margin-top: 95px;
  width: 550px;
  padding: 8px;
    
}
.container .price {
  list-style-type: none;
  border: 1px solid #eee;
  margin: 0;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}
.price:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.8);
}
.price .header {
  background-color: black;
  color: white;
  font-size: 30px;
  text-align:center;
  
}
.price li {
  border-bottom: 1px solid black;
  padding: 20px;
  font-size:20px;
  background-color: white;
}
.price .grey {
  background-color: #eee;
  font-size: 20px;
   border-bottom: 1px solid black;
  padding: 20px;

}
@media only screen and (max-width: 600px) {
  .container {
    width: 100%;
  }
}
.footer{
	margin-bottom: -18px;
}
</style>
</head>
<body>
<div class="container">
<ul class="price">
<form action="refund.php" method="POST">
<li class="header">Refund Details</li>
<?php 	if(isset($_GET['id'])){

		$id = mysqli_real_escape_string($conn, $_GET['id']);

		$sql= "SELECT amount, amount*0.1 as 'fee', amount-amount*0.1 as refund FROM billing WHERE book_id = $id";

		$result = mysqli_query($conn, $sql);

		$billing = mysqli_fetch_assoc($result);

		if($billing){ 
?>
<li class="grey">Total Amount Paid: &#160 &#8377; &#160;<?php echo htmlspecialchars($billing['amount']); ?></li>
<li >Amount deducted for cancelling: &#160 &#8377; &#160;<?php echo htmlspecialchars($billing['fee']); ?></li>
<li class="grey">Amount that will be refunded: &#160 &#8377; &#160;<?php echo htmlspecialchars($billing['refund']);?></li>
<li>
		<div class="form-group"> 
		<label>Reason for Cancellation:</label>
		 <textarea name="reason" cols="8" rows="3" class="form-control bg-light" placeholder="Please enter reason for cancellation" required></textarea>  
		</div>

		<div class="form-group d-flex justify-content-center">
		<!--delete-->
		<input type="hidden" name="id_to_delete" value="<?php echo $id ?>" >
		<input type="hidden" name="refund" value="<?php echo htmlspecialchars($billing['refund']); ?>" >
		<input type="submit" name="delete" value="Confirm Cancellation" class="btn btn-danger text-black">
	<?php }} ?>
	</form> </li>
        </div>
</ul>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<br><br><br><br>
</body>
</html>
<?php include('footer.php') ?>