<?php 

include('connectdb.php');

$uname = $password = '';

$errors = array('uname'=>'','password'=>'','incorrect'=>'');

if(isset($_POST['submit'])){

    if(empty($_POST['uname'])){
        $errors['uname'] = 'Employee-ID is required';
    }
    else{
        $uname=$_POST['uname'];
    }
    if(empty($_POST['password'])){
        $errors['password'] = 'Password is required';
    }
    else{
        $password=$_POST['password'];
    }
    
    $sql = "SELECT * FROM adminlogin WHERE emp_id='$uname' AND password='$password' ";
    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);
    if($count != 1){

      if(!empty($_POST['password'])&&!empty($_POST['uname'])){
        $errors['incorrect'] = 'Incorrect values entered';}
    }
    else{
       header('Location:adhome.php'); 
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <style type="text/css">
    .brand1{
      background: #3390ff !important;
    }
    .brand-text{
      color:  #caa472 !important;
      text-align: left;
    }
    .brand{
      background: #caa472 !important;
      color: #432711;
    }
    nav{
        display: flex;
        height: 80px;
        width: 100%;
        background-color: #432711;opacity: 0.8 !important;
        align-items: center;
        justify-content: space-between;
        padding: 0 50px 0 100px;
        flex-wrap: wrap;
        z-index: 10000;
        position: relative;
        top: 0;
        }
    form{
      max-width: 600px;
      margin: 20px auto;
      padding: 50px; 
    }
  </style>
</head>
<body style="background-image: url('https://img.wallpapersafari.com/desktop/1280/1024/95/72/bOKL4C.png') !important;">
    <nav>
      <img src="adlogo.png" style="width: 300px;" class="brand-logo brand-text" >
    <div class="container">
      <ul id="nav-mobile" class="right hide-on-small-and-down">
        <li><a href="adlogin.php" class="btn brand z-depth-2"><b>Log In</b></a></li>
      </ul>
    </div>
  </nav>
  <br><br><br>
  <section class="container">
    
    <form class="white" action="adlogin.php" method="POST">
      <div>
      <label>Employee ID:</label>
      <input type="text" name="uname" class="form-control" placeholder="Enter Employee-ID *" value="<?php echo $uname ?>">
      <div class="red-text"><?php echo $errors['uname']; ?></div></div>
      <div>
      <label>Password:</label>
      <input type="Password" name="password" class="form-control" placeholder="Enter Password *" value="<?php echo $password ?>">
      <div class="red-text"><?php echo $errors['password']; ?></div></div>
      <div>
        <div class="center" style="margin-top: 40px">
        <input type="submit" name="submit" value="Login" class="btn brand1 z-depth-2">
        <div class="red-text"><br><?php echo $errors['incorrect']; ?></div>
      </div></div>
    </form>
  </section>
</body>
</html>
<?php include('adfoot.php'); ?>