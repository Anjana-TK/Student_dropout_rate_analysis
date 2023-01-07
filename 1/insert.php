<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "dropout");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$Name = $_REQUEST['Name'];
		$StateName = $_REQUEST['StateName'];
		$gender = $_REQUEST['gender'];
		$address = $_REQUEST['address'];
		$email = $_REQUEST['email'];
		$Phoneno = $_REQUEST['Phoneno'];
		
		// Performing insert query execution
		// here our table name is volunteers
		$sql = "INSERT INTO volunteers VALUES ('$Name','$StateName','$gender','$address','$email',$Phoneno);";
		
		if(mysqli_query($conn, $sql)){
            echo "<img src='Volunteer-Thanks.png'>";
 
          
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
		$sql = " SELECT * FROM volunteers ";
		$result = mysqli_query($conn,$sql);
		// Close connection
		mysqli_close($conn);
		?>
		

	</center>
</body>

</html>
