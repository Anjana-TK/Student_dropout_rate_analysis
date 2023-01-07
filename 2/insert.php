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
		$name = $_REQUEST['name'];
		$class = $_REQUEST['class'];
		$phone = $_REQUEST['phone'];
		$statename = $_REQUEST['statename'];
		
		
		// Performing insert query execution
		// here our table name is student
		$sql = "INSERT INTO student VALUES ('$name','$class','$phone','$statename');";
		
		if(mysqli_query($conn, $sql)){
            echo "<img src='pic.jpg'/>";
 
          
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
		$sql = " SELECT * FROM student ";
		$result = mysqli_query($conn,$sql);
		// Close connection
		mysqli_close($conn);
		?>
		

	</center>
</body>

</html>
