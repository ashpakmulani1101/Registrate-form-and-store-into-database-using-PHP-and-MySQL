<?php
$insert=false;
if(isset($_POST['name'])){
$server="localhost";
$username="root";
$password="";
$con = mysqli_connect($server,$username,$password);
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$other=$_POST['disc'];
$phone=$_POST['phone'];
$sql="INSERT INTO `trip`.`trip` (`name`, `age`, `email`, `phone`, `gender`, `other`, `date`) VALUES ('$name', '$age', '$email', '$phone', '$gender', '$other', current_timestamp())";
if($con->query($sql)==TRUE){
    $insert=true;
    //echo "Successfully inserted into the database";
}
else{
   // echo "Error $sql <br> $con->error";
}
$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICMS Trip</title>
    
    <link rel="stylesheet" href="style.css">
    
<body>
    <img class="bg" src="sky3.jpg" alt="icms">
    <div class="container">
    <h1>Welcome to ICMS Trip Kasegaon</h1>
    <p>Enter your details and submitt the form to confirm your participation in the Trip.</p>
    <form action="index.php" method="post">
<input type="text" name="name" id="name" placeholder="Enter your name " size="10%">
<input type="text" name="age" id="age" placeholder="Enter your Age ">
<input type="email" name="email" id="email" placeholder="Enter your E-mail ">
<input type="phone" name="phone" id="phone" placeholder="Enter your phone no. ">
<input type="text" name="gender" id="gender" placeholder="Enter your gender ">
<textarea name="disc" id="disc" cools="30" rows="10"></textarea>
<button class="btn">Submit</button>
<?php
if($insert==true){
echo"<span id='submittMsg'>Thanks for submitting your information. We are happy to see you joining with us for the US Trip.</span>";
}
?>
    </form>
    </div>
    <script src="script.js"></script>
</head>
</body>
</html>