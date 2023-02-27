<html>
	<head>
		<title> While Loop </title>
		<link rel="stylesheet" href="style.css">
	</head>
		<body class="body">
		<?php 
		$bqwl = "09771997449";
		for ($czcw = 0; $czcw < 20; $czcw++) {
		  if ($czcw == 6) {
			break;
		  }
		  echo "Contact Number: $bqwl <br>";
		}
		?>
		<br><br>
		<?php 
		$bqwl = "09771997449";
		for ($czcw = 0; $czcw < 20; $czcw++) {
		  if ($czcw == 6) {
			continue;
		  }
		  echo "Contact Number: $bqwl <br>";
		  echo "<meta http-equiv=\"refresh\" content=\"2;url=http://localhost/OJT/index.php\"/>";
		}
		  
		?>
		</body>
</html>