<html>
	<head>
		<title> Task 3 </title>
		<link rel="stylesheet" href="style.css">
	</head>
 <body>
	<form class="awd" action="switch.php" method="get"> 
	Input: <input type="text" name="name">
		   <input type="submit">
	</form>
	
 </body>
</html>

<html>
	<body class="body">
	
	<?php
		// DAY 8 
		switch (isset($_GET)) {
			case $_GET["name"] == "Edmond";
				echo "Hello Edmond";
				break;
			case $_GET["name"] == "Janielle";
				echo "Hello! Janielle";
				echo "<meta http-equiv=\"refresh\" content=\"5;url=http://localhost/OJT/index.php\"/>";
				break;
			case $_GET["name"] == "Nikz";
				echo "Hello! Nikz";
				break;	
			default:
				echo "Wrong input or No input";
			}
	
	?>
	<br><br>
	</body>
</html>
