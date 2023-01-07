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
		$conn = mysqli_connect("localhost", "root", "", "staff");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$gender = $_REQUEST['gender'];
		$address = $_REQUEST['address'];
		$email = $_REQUEST['email'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO college VALUES ('$first_name',
			'$last_name','$gender','$address','$email')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$first_name\n $last_name\n "
				. "$gender\n $address\n $email");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		$sql = " SELECT * FROM college ";
		$result = mysqli_query($conn,$sql);
		// Close connection
		mysqli_close($conn);
		?>
		<h1>User Data</h1>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Gender</th>
				<th>Address</th>
                <th>Email</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['first_name'];?></td>
				<td><?php echo $rows['last_name'];?></td>
				<td><?php echo $rows['gender'];?></td>
				<td><?php echo $rows['address'];?></td>
                <td><?php echo $rows['email'];?></td>
			</tr>
			<?php
				}
			?>
		</table>

	</center>
</body>

</html>
