<!DOCTYPE html>
<html>

<head>
	<title>Insert Page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => blood_camp
		$conn = mysqli_connect("localhost", "root", "", "blood_camp");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 6 values from the form data(input)
		$Patient_ID = $_REQUEST['Patient_ID'];
		$Name = $_REQUEST['Name'];
		$Phone = $_REQUEST['Phone'];
		$Gender = $_REQUEST['Gender'];
		$Blood_Group = $_REQUEST['Blood_Group'];
        $ID_Verification = $_REQUEST['ID_Verification'];
		
		// Performing insert query execution
		$sql = "INSERT INTO patient_info VALUES ('$Patient_ID',
			'$Name','$Phone','$Gender','$Blood_Group','$ID_Verification')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Entered data is stored in our database successfully</h3>";

			echo nl2br("\n$Patient_ID\n $Name\n "
				. "$Phone\n $Gender\n $Blood_Group\n $ID_Verification");
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