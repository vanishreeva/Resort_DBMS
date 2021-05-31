<?php 

include('admin/connectdb.php');


$email = $password = '';
$errors = array('email'=>'','password'=>'','incorrect'=>'');

if(isset($_POST['submit'])){

    session_start();
    if(empty($_POST['email'])){
        $errors['email'] = 'Email-ID is required';
    }
    else{
        $email=$_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $errors['email'] =  'Email must be a valid email address';
    }
    }
    if(empty($_POST['password'])){
        $errors['password'] = 'Password is required';
    }
    else{
        $password=$_POST['password'];
    }
    
  $sql = "SELECT * FROM booking WHERE email='$email' AND password='$password' ";
    $result = mysqli_query($conn,$sql);
    $booking = mysqli_fetch_assoc($result);
    
    $count = mysqli_num_rows($result);
    if($count != 1){

      if(!empty($_POST['password'])&&!empty($_POST['email'])){
        $errors['incorrect'] = 'Account does not exist!';}
      
    }
    else{
         $_SESSION['email'] = $_POST['email'];
       header('Location:cancel.php?id='.$booking['book_id']); 

        }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>User login</title>
  <?php include('header.php'); ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="header.css">
  <style type="text/css">
    nav ul{
      margin-top: -30px;

    }
 .menu-btn {
  padding: 4px 8px;
}

    .brand1{
      background: #3390ff !important;
    }
    .brand-text{
      color:  #caa472 !important;
      text-align: left;
    }
    form{
      max-width: 600px;
      margin: 20px auto;
      padding: 50px; 
    }
  </style>
</head>
<body style="background-image: url('https://img.wallpapersafari.com/desktop/1280/1024/95/72/bOKL4C.png') !important;">
  <br><br><br>
  <section class="container">
    
    <form class="white" action="signup.php" method="POST">
      <h4 class="center grey-text">Login to view Registeration details</h4><br>
      <div>
      <label>Email-ID:</label>
      <input type="text" name="email" class="form-control" placeholder="Enter Email-ID *" value="<?php echo $email ?>">
      <div class="red-text"><?php echo $errors['email']; ?></div></div>
      <div>
      <label>Password:</label>
      <input type="Password" name="password" class="form-control" placeholder="Enter Password *" value="<?php echo $password ?>">
      <div class="red-text"><?php echo $errors['password']; ?></div></div>
      <div>
        <div class="center" style="margin-top: 40px">
        <input type="submit" name="submit" value="Sign-in" class="btn brand1 z-depth-2">
      </div></div>
      <div class="red-text"><?php echo $errors['incorrect']; ?></div>
    </form><br><br><br>
  </section>
</body>
</html>
<?php include('footer.php') ?>