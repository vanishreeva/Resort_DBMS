<?php  
    
    $conn = mysqli_connect('localhost','vani','vani@123','resort');
if(!$conn){
    echo 'Connection error: '.mysqli_connect_error();
}

  if(isset($_POST['submit'])){
    
    $name = mysqli_real_escape_string($conn,$_POST['name']);
     $email = mysqli_real_escape_string($conn,$_POST['email']);
     $comments = mysqli_real_escape_string($conn,$_POST['comments']);
     $rating = mysqli_real_escape_string($conn,$_POST['rating']);
    $id = mysqli_real_escape_string($conn,$_POST['id']);
    
    

    $sql = "INSERT INTO feedback(feed_id,book_id,name,email,comments,rating) VALUES (NULL,'$id','$name','$email','$comments','$rating')";
  
     if(mysqli_query($conn,$sql)){
      header("Location:thanks.php");

      } else{

            echo 'query error: ' . mysqli_error($conn);
        }
}
?>

<?php include("header.php"); ?>




<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css2?family=El+Messiri&family=Philosopher:wght@700&display=swap" rel="stylesheet">

<title>Feedback</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
body {font-family: El Messiri;
  background-image: url("images/bgimg.png");
 }
* {box-sizing: border-box;}
nav ul li{
  margin-top: -70px;
}
nav ul{
  
  float: right; 
}
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
   margin-top: 40px;
 margin-left: 85px;
}

input[type=submit]:hover {
  background-color: #45a049;

}

.container {

  width: 500px;
  border-radius: 5px;
  justify-content: center;
  background-color: #f2f2f2;
  margin-left: 520px;
  padding: 12px;
  margin-top: 40px;
  margin-bottom: 40px;

 }
h2{
/*margin-top: 10px;
 margin-bottom: -50px;*/
  text-align: center;
  font-weight: bold;
}
label{
  font-weight: bold;
}
.rating {
  float: left;
  margin-left: -15px;
  padding: 0 1rem;
  text-align: center;
 line-height: 25px;
}
 .rating input[type=radio]{
 
} 
.footer{
  margin-bottom: -20px;
}

</style>
</head>
<body>
  <div class="container">
<h2>Feedback</h2>


<form action="feedback.php" method="POST">
  <?php if (isset($_GET['id'])) { $id = mysqli_real_escape_string($conn, $_GET['id']);}?>
  <input type="hidden" name="id" value="<?php echo $id ;?>">
    <label for="fname">Name</label>
    <input type="text"  name="name" placeholder="Your name" required>
    <label for="form_email">Email</label>
    <input type="text" id="form_email" type="text" name="email" placeholder="Your Email ID" required>
    <label for="subject">Comments</label>
    <textarea id="subject" name="comments" placeholder="Please share your experience during your stay at Serenehood" style="height:200px" required></textarea>
    <label>How would you like to rate us? (1=Terrible, 5=Amazing)</label><br>
<div class="rating">
  <label for="myChoice1">1<br />
  <input type="radio" id="myChoice1" title="Terrible" name="rating" value="1" />
</label>

<label for="myChoice2">2<br />
  <input type="radio" id="myChoice2" title="Average" name="rating" value="2" />
</label>

<label for="myChoice3">3<br />
  <input type="radio" id="myChoice3" title="Good" name="rating" value="3" />
</label>

<label for="myChoice4">4<br />
  <input type="radio" id="myChoice4" title="Very Good" name="rating" value="4" />
</label>

<label for="myChoice5">5<br>
  <input type="radio" id="myChoice5" title="Amazing" name="rating" value="5" />
</label> <br>
</div> 



<br/><a href="thanks.php"> <input type="submit" name="submit" value="Submit"></a>
  </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

<?php include("footer.php"); ?>