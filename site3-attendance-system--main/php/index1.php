<?php
  $fname = $_POST['fname'];
  $pass = $_POST['pass'];
  $error = "";
  $success = "";

$servername = "localhost";
$username = "bigwill";
$password = "Meinkampf123";
$dbname = "attendence02";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "Select * from student where email='$fname' and passwordHash = '$pass' " ;

$sql1 = "SELECT email, passwordhash FROM teacher WHERE email='$fname' and passwordhash='$pass'";

$result = $conn->query($sql);
$result1= mysqli_query($conn, $sql1);
if (mysqli_num_rows($result) > 0) {
header("Location:./homepage-student.html");}
else {if(mysqli_num_rows($result1) > 0){header("Location:./homepage-teachers.html");}
else{echo ' <script>window.location.replace( "./index1.html");alert("Wrong username/Password");</script>';}}

mysqli_close($conn);    
  
?>
