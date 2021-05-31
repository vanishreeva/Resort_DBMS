<?php  
    
    include('admin/connectdb.php');

    $name = $gender = $phone = $email = $address = $pin =$checkin = $checkout = $roomtype = $noofppl = $idtype = $idno = '';

    $errors = array('name'=> '','phone' => '', 'pin' => '','noofppl' => '','roomtype' => '', 'idtype' => '','full' => '');

    if(isset($_POST['submit'])){

    $name = $_POST['name'];
    if(!preg_match('/^[a-zA-Z\s]+$/', $name))
    {
        $errors['name'] = 'Must contain letters and spaces only';
    }

    $gender = $_POST['gender'];

    $phone = $_POST['phone'];
    if(!preg_match('/^[0-9]+$/', $phone))
    {
        $errors['phone'] =  'Must contain numbers only';
    }

    $email = $_POST['email'];
    $address = $_POST['address'];

     $pin = $_POST['pin'];
    if(!preg_match('/^[0-9]+$/', $pin))
    {
        $errors['pin'] =  'Must contain numbers only';
    }

    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];

    if(empty($_POST['roomtype'])){
        $errors['roomtype'] = '*Required';
    }
    else{
        
    $roomtype = $_POST['roomtype'];

    $sql6 = "SELECT * FROM room WHERE book_id = 0 AND cat_id = (SELECT cat_id FROM category WHERE cat_name = '".$roomtype."')";

    $result7 = mysqli_query($conn,$sql6);
    
    $count = mysqli_num_rows($result7);

    if($count == 0){

        $errors['full'] = 'We are sorry, there are no vacant rooms in this category';}

    }

    if($_POST['noofppl']>=5)
    {
        $errors['noofppl'] = 'Number exceeds limit';
    }else{
        $noofppl = $_POST['noofppl'];
    }

    if(empty($_POST['Idtype'])){
        $errors['idtype'] = '*Required';
    }
    else{
        $idtype = $_POST['Idtype'];}

    $idno = $_POST['IDNo'];

    if(array_filter($errors)){
        //echo 'errors in the form';
    } else{

    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $gender = mysqli_real_escape_string($conn,$_POST['gender']);
    $phone = mysqli_real_escape_string($conn,$_POST['phone']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $address = mysqli_real_escape_string($conn,$_POST['address']);
    $pin = mysqli_real_escape_string($conn,$_POST['pin']);
    $checkin = mysqli_real_escape_string($conn,$_POST['checkin']);
    $checkout = mysqli_real_escape_string($conn,$_POST['checkout']);
    $roomtype = mysqli_real_escape_string($conn,$_POST['roomtype']);
    $noofppl = mysqli_real_escape_string($conn,$_POST['noofppl']);
    $idtype = mysqli_real_escape_string($conn,$_POST['Idtype']);
    $idno = mysqli_real_escape_string($conn,$_POST['IDNo']);

       $sql1 = "INSERT INTO booking(book_id, name, gender, ph_no, email, address, pin, checkin, checkout, no_of_people, id_type, id_no) VALUES(NULL, '$name', '$gender', '$phone', '$email', '$address', '$pin', '$checkin','$checkout','$noofppl','$idtype','$idno')";
        

        if(mysqli_query($conn, $sql1)){

            $book_id = mysqli_insert_id($conn);
            
        } else{

            echo 'query error: ' . mysqli_error($conn);
        }


        $sql2 = "INSERT INTO billing(bill_no, book_id) VALUES(NULL, '$book_id')"; 

        if(mysqli_query($conn, $sql2)){

            $bill_id = mysqli_insert_id($conn);

        } else{

            echo 'query error: ' . mysqli_error($conn);
        }

        $sql3 = "SELECT * from category WHERE cat_name = '$roomtype'";

        if(mysqli_query($conn, $sql3)){

            $result = mysqli_query($conn, $sql3);

            $category = mysqli_fetch_assoc($result); 

            if($category){

            $c = $category['cat_id'];

            $sql5 = "UPDATE room SET book_id = '".$book_id."' WHERE cat_id = '".$c."' AND book_id = 0 ORDER BY room_id limit 1";

            if(!mysqli_query($conn, $sql5)){
                
                echo 'query error' . mysqli_error($conn);
            }

            $sql4 = "UPDATE billing SET cat_id = '".$c."',amount = '".$category['price']."' WHERE bill_no = '".$bill_id."'";

            if(!mysqli_query($conn, $sql4)){

                echo 'query error: ' . mysqli_error($conn);
            }


            header('Location: payment.php?id='.$bill_id);
          }   
            else{

            echo 'query error: ' . mysqli_error($conn);
        
        }

    }
}
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<title>Book Now</title>
<?php include('header.php'); ?>
<link rel="stylesheet" type="text/css" href="header.css">
<link rel="stylesheet" type="text/css" href="booknow.css">
</head>
<body>

<div class="container register">
<div class="row">
<div class="col-md-3 register-left">
<a href="home.php"><img src="images/logo2.png" style="width: 200px;" alt="Serenehood"/></a>
<h3>Welcome</h3>
<p>Spare a few moments to provide your details to make a reservation.</p>
</div>
<div class="col-md-9 register-right">
<h3 class="register-heading">Online Booking</h3>
<div class="register-form">
<form class="rounded msg-form" action="booknow.php" method="POST" >
<label>Name:</label>
<div class="form-group">
<input type="text" class="form-control" name="name" value="<?php echo $name ?>" placeholder="Full Name *" required> 
<div style="color: red;"><?php echo $errors['name']; ?></div>
</div>

<div class="form-group">
<div class="maxl">
<label for="name" class="h6">Gender:&#160; &#160</label>
<label class="radio inline"> 
<input type="radio" name="gender" value="male" checked>
<span> Male &#160;&#160</span> 
</label>
<label class="radio inline"> 
<input  type="radio" name="gender" value="female">
<span>Female&#160;&#160;&#160 </span> </label>
<label class="radio inline"> 
<input type="radio" name="gender" value="Prefer not to say">
<span>Prefer not to say</span> </label>
</div>
<label>Phone Number:</label>
<div class="form-group">
<input type="text" minlength="10" maxlength="10" name="phone" value="<?php echo $phone ?>" class="form-control" placeholder="Phone Number *" required>
<div style="color: red;"><?php echo $errors['phone']; ?></div>
</div>
<label>Email:</label>
<div class="form-group">
<input type="email" class="form-control" id="form_email" name="email" value="<?php echo $email ?>" placeholder="Your Email *" required>
</div>

<div class="form-group"> <label for="msg" class="h6">Address:</label> <textarea name="address" type="text" value="<?php echo $address ?>" cols="10" rows="5" class="form-control bg-light" placeholder="Please type your full address including State and City" required></textarea>  </div></div>
<label>Pin-code:</label>
    <input type="text" minlength="6" maxlength="6" name="pin" value="<?php echo $pin ?>" class="form-control" placeholder="Pin-code *" required>
    <div style="color: red;"><?php echo $errors['pin']; ?></div>
<br><div class="containers">
<div class="form-group">
    <label>Check-in:</label>
<input type="date" class="form-control" name="checkin" value="<?php echo $checkin ?>" placeholder="DD/MM/YY" required>
</div>
<div class="form-group"> 
    <label>Check-out:</label>
<input type="date" class="form-control" name="checkout" value="<?php echo $checkout ?>" placeholder="DD/MM/YY" required> 
</div>
</div> 

<div class="form-group">
<select class="form-control" name="roomtype">
<option class="hidden"  selected disabled>Please select Room Type</option>
<option>Heritage villa with private pool</option>
<option>Luxury pavilion</option>
<option>Heritage lake view villa</option>
<option>Meandering pool villa </option>
<option>Deluxe twin bedded room </option>
<option>Suite double occupancy  </option>
<option>Deluxe single room </option>
<option>Suite single occupancy </option> 

</select>
<div style="color: red;"><?php echo $errors['roomtype']; ?></div>
<div style="color: red;"><?php echo $errors['full']; ?></div></div> 

<div class="form-group">

<input type="number" class="form-control" name="noofppl" value="<?php echo $noofppl ?>" placeholder="No. Of People" required> 
<div style="color: red;"><?php echo $errors['noofppl']; ?></div>
</div>

<div class="form-group">
<select class="form-control" name="Idtype">
<option class="hidden"  selected disabled>Please select your ID Proof Type</option>
<option>Aadhar</option>
<option>Voter ID</option>
<option>PAN</option>
<option>Driving License</option>
<option>Passport</option>
</select>
<div style="color: red;"><?php echo $errors['idtype']; ?></div></div>
<div class="form-group">
    <label>ID Proof No:</label>
<input type="text" class="form-control" name="IDNo" value="<?php echo $idno ?>" placeholder="ID Proof No. *" required/> </div>


<div class="form-group d-flex justify-content-end"> 
    <input type="submit" name="submit" class="btn btn-primary text-black" value="Book Now">
</div>

                            
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php //include('footer.php') ?>
</body>
</html>
