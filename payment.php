<?php 

   $conn = mysqli_connect('localhost','vani','vani@123','resort');
if(!$conn){
    echo 'Connection error: '.mysqli_connect_error();
}

    if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['cardname']);
    $card_no = mysqli_real_escape_string($conn, $_POST['pin1'].$_POST['pin2'].$_POST['pin3'].$_POST['pin4']);
    $exp_month = mysqli_real_escape_string($conn, $_POST['month']);
    $exp_year = mysqli_real_escape_string($conn, $_POST['year']);
    $cvv = mysqli_real_escape_string($conn, $_POST['cvv']);
    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $sql = "UPDATE billing, booking SET amount = amount*datediff(checkout,checkin), card_no='".$card_no."', exp_month='".$exp_month."', exp_year='".$exp_year."', name_on_card ='".$name."', cvv = '".$cvv."' WHERE bill_no = '".$id."' AND booking.book_id=billing.book_id";

    if(mysqli_query($conn,$sql)){

        header('Location: success.php');

    }else{

      echo 'query error: ' . mysqli_error($conn);

      }
    }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Payment Details</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=El+Messiri&family=Philosopher:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="header.css">
<link rel="stylesheet" type="text/css" href="payment.css">
<style type="text/css">
  .containers {
  background-color: #f2f2f2;
  border: 1px solid lightgrey;
  border-radius: 3px;
  margin-left: 520px;
 margin-top: 40px;
width: 550px;
}
</style>
</head>
<body>
<div class="containers">
<form class="rounded msg-form" action="payment.php" method="POST">


<div class="col-50">
  <div>

<h3> <?php 

    if(isset($_GET['id'])){

    $id = mysqli_real_escape_string($conn, $_GET['id']);
  
    $sql1= "SELECT price FROM category, billing WHERE bill_no = $id AND category.cat_id=billing.cat_id";

    $result = mysqli_query($conn, $sql1);

    $category = mysqli_fetch_assoc($result);

    if($category){ ?>

    <h3>Package amount(per night): &#160;&#160;&#160;&#160;&#8377;<?php

      echo htmlspecialchars($category['price']);
    }}
    ?> <br><br>Total amount: &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#8377;
    <?php

    $sql2 = "SELECT amount*datediff(checkout,checkin) as amount FROM billing, booking WHERE billing.book_id = booking.book_id and bill_no = $id";

     $result = mysqli_query($conn, $sql2);

    $billing = mysqli_fetch_assoc($result);

    if($billing){echo htmlspecialchars($billing['amount']);}

    ?>

  </h3>
</h3>

  <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
<h2><br>Payment Details <br><br></h2>
            <label for="fname">Accepted cards:</label>
            <div class="icon-containers">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on the Card:</label>
            <input type="text" id="cname" name="cardname" pattern="\w+ \w+.*" title="Fill your first and last name" placeholder="Full Name" class="form-control" required="">
           <div class="form-group">
                <label for="cardNumber">Card number:</label>
                <div class="input-group">
  <div class="container">
<div class="row">
  <div class="col-sm">
<input type="text" class="form-control" name="pin1" autocomplete="off" maxlength="4" pattern="\d{4}" title="First four digits" required>
</div>
</div>
<div class="row">
  <div class="col-sm">
<input type="text" class="form-control" name="pin2" autocomplete="off" maxlength ="4" pattern="\d{4}" title="Second four digits" required>
</div>
</div>
<div class="row">
  <div class="col-sm">
  <input type="text" class="form-control" name="pin3" autocomplete="off" maxlength="4" pattern="\d{4}" title="Third four digits" required>
    </div>
  </div>
    <div class="row">
  <div class="col-sm">
      <input type="text" class="form-control" name="pin4" autocomplete="off" maxlength="4" pattern="\d{4}" title="Fourth four digits" required>
        </div>
          </div>
          </div>    
          </div>
          </div>
           <div class="exdate">
         <div class="row">
                <div class="col-lg-8">
                  <div class="form-group">
                    <label><span class="hidden-xs">Card Expiry Date:</span></label>
                    <div class="input-group">
                      <input type="number" placeholder="MM" name="month" class="form-control" maxlength="2" max="12" required>
                      <input type="number" placeholder="YY" name="year" class="form-control" min="21" required>
                    </div>
                  </div>
                </div>
       </div>
                <div class="col-sm-4">
                  <div class="form-group mb-4">
                      <label data-toggle="popover" data-title="Three-digits code on the back of your card" maxlength="3">CVV:
                                                <i class="fa fa-question-circle"></i>
                                            </label> 
                    <input type="password" required class="form-control" pattern="\d{3}" title="Three-digits code on the back of your card" name="cvv" maxlength="3">
                  </div>
 </div>


        </div>
        
        <input type="submit" name="submit" value="Confirm Payment" class="btn">
      </form>
</div><br>
    </div>
  </div>
 <br><br>
</body>
</html>