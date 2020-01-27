<html>
<body>

<?php
include_once 'p_connection.php';
$id=$_GET['id'];



				 $sql= "select * from pin_code where p_id=$id;"; 
				 $result=mysqli_query($conn,$sql);
				 
				 while($row = mysqli_fetch_assoc($result))
				 {
					echo "<input type=text' name='l_city' value=".$row['p_city']." hidden=''>";
				 }
			    	
				?>
				<!-- <p id="demo"></p> -->
		
		
</body>
</html>