<html>
	<head> 
		<link rel="stylesheet" href="day3.css">
<body>
	<?php 
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
	
	?>
	<form action="h.php" method="get">
	Name: <input type="text" name="name"><br>
<input type="submit">
</form>
</body>
</html>