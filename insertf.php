<!DOCTYPE html>
<html lang="en">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/main.css">
   <title>Blood Donation</title>

<head>
	<title>Blood Camp Records</title>
</head>

<body>
	<br>
	<br>
	<center>
		<h1>BLOOD DONATION CAMP PATIENT RECORDS</h1>

		<br>
		<br>
	    <form action="insert2.php" method="post">
						
        <p>
	        <label for="Patient_ID">Patient_ID:</label>
	        <input type="text" name="Patient_ID" id="Patient_ID">
        </p>
		
        <p>
		    <label for="Name">Name:</label>
		    <input type="text" name="Name" id="Name">
	    </p>
			
        <p>
		    <label for="Phone">Phone:</label>
		    <input type="text" name="Phone" id="Phone">
	    </p>
		
        <p>
		    <label for="Gender">Gender:</label>
		    <input type="text" name="Gender" id="Gender">
	    </p>
		
        <p>
		    <label for="Blood_Group">Blood_Group:</label>
		    <input type="text" name="Blood_Group" id="Blood_Group">
	    </p>
        <p>
		    <label for="ID_Verification">ID_Verification:</label>
		    <input type="text" name="ID_Verification" id="ID_Verification">
	    </p>
			
		<input type="submit" value="Submit">
		</form>	
	</center>

	
</body>
</html> 