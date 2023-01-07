<!DOCTYPE html>
<html lang="en">
<head>
	<title>GFG- Store Data</title>
	<style>h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 24px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: center;
  vertical-align:middle;
  font-weight: 300;
  font-size: 20px;
  color: #fff;

  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}





/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}</style>

</head>
<body>
<section>
  <!--for demo wrap-->
  <h1>Data</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
        
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
    $gender = $_REQUEST['gender'];
		$year = $_REQUEST['year'];
		$state = $_REQUEST['state'];
    $type = $_REQUEST['type'];
    $sql="SELECT s.statename, bs.stype, bg.gtype, bs.yrange, bs.dropout
    FROM states s
    JOIN byschool bs ON s.stateid = bs.sid
    JOIN bygender bg ON s.stateid = bg.sid;";

  
	 if ($gender == "#"){
      $sql = "SELECT s.statename,d.stype, d.yrange, d.dropout
      FROM states s
      JOIN byschool d ON s.stateid = d.sid WHERE d.yrange='$year' AND d.stype='$type' AND d.sid='$state'";
      $result = mysqli_query($conn,$sql);
      // LOOP TILL END OF DATA
      while($rows=$result->fetch_assoc())
      {
    ?>
    <tr>
      <!-- FETCHING DATA FROM EACH
        ROW OF EVERY COLUMN -->
      <td><?php echo $rows['statename'];?></td>
      <td><?php echo $rows['stype'];?></td>
              <td><?php echo $rows['yrange'];?></td>
              <td><?php echo $rows['dropout'];?></td>
      
    </tr>
    <?php
      }
    
    }
    else if ($type == "#"){
      $sql = "SELECT s.statename,d.gtype, d.yrange, d.dropout
      FROM states s
      JOIN bygender d ON s.stateid = d.sid WHERE d.yrange='$year' AND d.gtype='$gender' AND d.sid='$state'";
      $result = mysqli_query($conn,$sql);
      // LOOP TILL END OF DATA
      while($rows=$result->fetch_assoc())
      {
    ?>
    <tr>
      <!-- FETCHING DATA FROM EACH
        ROW OF EVERY COLUMN -->
      <td><?php echo $rows['statename'];?></td>
      <td><?php echo $rows['gtype'];?></td>
              <td><?php echo $rows['yrange'];?></td>
              <td><?php echo $rows['dropout'];?></td>
      
    </tr>
    <?php
      }
    
    }
    else{
      $sql="SELECT s.statename, bs.stype, bg.gtype, bs.yrange, bs.dropout
      FROM states s
      JOIN byschool bs ON s.stateid = bs.sid
      JOIN bygender bg ON s.stateid = bg.sid;";
      $result = mysqli_query($conn,$sql);
        // LOOP TILL END OF DATA
        while($rows=$result->fetch_assoc())
        {
      ?>
      <tr>
        <!-- FETCHING DATA FROM EACH
          ROW OF EVERY COLUMN -->
          <td><?php echo $rows['statename'];?></td>
          <td><?php echo $rows['stype'];?></td>
          <td><?php echo $rows['gtype'];?></td>
                  <td><?php echo $rows['yrange'];?></td>
                  <td><?php echo $rows['dropout'];?></td>
        
      </tr>
      <?php
        }
    }
		
	
		mysqli_close($conn);
		?>
	
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['statename'];?></td>
				<td><?php echo $rows['stype'];?></td>
        <td><?php echo $rows['gtype'];?></td>
                <td><?php echo $rows['yrange'];?></td>
                <td><?php echo $rows['dropout'];?></td>
				
			</tr>
			<?php
				}
			?>
		</table>

	</center>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      
    </table>
  </div>
</section>
</body>
</html>


<script>
  $(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
</script>
