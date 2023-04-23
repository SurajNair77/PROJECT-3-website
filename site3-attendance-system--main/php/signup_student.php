<?php
	
       
	
	
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
	
		$sql = "INSERT INTO student (USN,sem,branch,email,passwordhash)
                 VALUES ('$_POST[fname]','$_POST[sem]','$_POST[branch];','$_POST[email]','$_POST[pass]')"; 
if (mysqli_query($conn, $sql)) {
  header("Location:./homepage-student.html");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


		
		
	
?>