<?php  
 $conn = mysqli_connect('localhost','vani','vani@123','resort');
if(!$conn){
    echo 'Connection error: '.mysqli_connect_error();
}

if(isset($_POST['submit'])){
    
    $name = mysqli_real_escape_string($conn,$_POST['name']);
     $email = mysqli_real_escape_string($conn,$_POST['email']);
     $message = mysqli_real_escape_string($conn,$_POST['message']);

$sql = "INSERT INTO contactus(msg_id,name,email,message) VALUES (NULL,'$name','$email','$message')";
  
     if(mysqli_query($conn,$sql)){
      header("Location:message.php");

      } else{

            echo 'query error: ' . mysqli_error($conn);
        }

   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Contact Us</title>
<?php include('header.php'); ?>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="header.css">
<style type="text/css">
body{
    background-image: url("images/bgimg.png");
 }
.footer{
  margin-bottom: -20px;
}
.container-fluid {
    background: -webkit-linear-gradient(left, #002A66,#B3D2FF);
    margin-top: 50px;
    }

.msg-form {
    background-color: white;
    padding: 20px;
}

.pad-icon {
    padding-top: 50px;
    padding-left: 20px
}

.pad-icon a {
    text-decoration: none;
    margin-right: 30px;
}

.input-group input:focus {
    border: 1px solid blue;
}

.pad-icon a:active {
    height: 30px;
    width: 30px;
    background-color: #0080ff;
    border-radius: 100%
}

.links {
    padding-top: 10px;
    width: 50%
}

#bordering a:active {
    border: 1px solid #0080ff;
}

@media(min-width:568px) {
    .container-fluid {
        margin: 120px 30px;
        width: 96%;
        padding-top: 50px;
        padding-bottom: 50px;
        margin-top: 100px;
    }
}

@media(max-width:567px) {
    .container-fluid {
        margin: 20px 20px;
        width: 94%;
        padding-top: 50px;
        padding-bottom: 20px;
         margin-top: 100px;

    }

    .pad {
        padding-top: 60px;
    }
}
.reserve{
    padding-top: 30px;
}

</style>
</head>

<body>
<div class="container-fluid rounded">
<div class="row px-5">
<div class="col-sm-6">
<div>
<h3 class="text-white">Contact Us</h3>
<p class="text-white">Feel free to drop us a line. Our Team will get back to you soon.</p>
</div>

<div class="reserve"><p class="text-white">For Reservations and Availability:</p></div>
<div class="links" id="bordering"> <a href="#" class="btn rounded text-white p-3"><i class="fa fa-phone icon text-primary pr-3"></i>+91 7406223332</a> <a href="#" class="btn rounded text-white p-3"><i class="fa fa-envelope icon text-primary pr-3"></i>booking@serenehood.com</a> </div>
<div class="pt-lg-4 d-flex flex-row justify-content-start">
<div class="pad-icon"> <a class="fa fa-facebook text-black" href="#"></a> </div>
<div class="pad-icon"> <a class="fa fa-twitter text-black" href="#"></a> </div>
<div class="pad-icon"> <a class="fa fa-instagram text-black" href="#"></a> </div>
</div></div>
<div class="col-sm-6 pad">
<form class="rounded msg-form" action="contactus.php" method="POST">

<div class="form-group"><label for="name" class="h6">Your Name</label>
<div class="input-group mb-2">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user text-info"></i></div></div>
</label> <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your Name*" required>
</div></div>

<div class="form-group"><label for="name" class="h6">Email</label>
<div class="input-group mb-2">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-envelope text-info"></i></div></div>
<input type="email" class="form-control" id="form_email" name="email" placeholder="example@gmail.com" required>
</div></div>

<div class="form-group"> <label for="msg" class="h6">Message</label> <textarea name="message" id="msgus" cols="10" rows="5" class="form-control bg-light" placeholder="How can we help you?" required></textarea> </div>
<div class="form-group d-flex justify-content-end"> <input type="submit" name="submit" class="btn btn-primary text-black" value="Send message"> </div>
</form>
</div></div></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

<?php  
include('footer.php') ;
?>