<?php
	$Name = $_POST['Name'];
	$Department = $_POST['Department'];
	$EmailID = $_POST['email'];
	$Password = $_POST['pass'];
	$Renter_Password = $_POST['reenter'];
        $servername = "localhost";
$username = "bigwill";
$password = "Meinkampf123";
$dbname = "attendence02";


	// Database connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

	
		$sql = "INSERT INTO teacher (Name,dept,email,passwordhash)
                 VALUES ('$Name','$Department','$EmailID','$Password')"; 
if (mysqli_query($conn, $sql)) {
  header("Location:./homepage-teachers.html");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


		
		
	
?>