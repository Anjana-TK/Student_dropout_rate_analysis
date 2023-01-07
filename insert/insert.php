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
		$conn = mysqli_connect("localhost", "root", "", "test_db");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$uid = $_REQUEST['UID'];
		$name = $_REQUEST['Nname'];
		$uname = $_REQUEST['Uname'];
		$pwd = $_REQUEST['pwd'];
		
		
		// Performing insert query execution
		// here our table name is volunteers
		$sql = "INSERT INTO users VALUES ('$uid','$uname','$pwd','$name');";
		
		if(mysqli_query($conn, $sql)){
            echo "<h1>Created new admin</h1>";
 
          
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
		
		
		// Close connection
		mysqli_close($conn);
		?>
		

	</center>
</body>

</html>
