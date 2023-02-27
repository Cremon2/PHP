 <html>
	<head> 
		<title> Form </title>
		<link rel="stylesheet" href="style.css">
	</head>
 <body class="body">
	<?php 
	class Person {
		
		public $firstname;
		public $middlename;
		public $lastname;
		public $schoolname;
		public $grade;
		public $section;
		public $address;
		public $birthdate;
		public $number;
		
		
	function set_firstname($firstname) {
		$this->firstname = $firstname;
		}
	function get_firstname() {
		return $this->firstname;
		}
	function set_middlename($middlename) {
		$this->middlename = $middlename;
		}
	function get_middlename() {
		return $this->middlename;
		}
	function set_lastname($lastname) {
		$this->lastname = $lastname;
		}
	function get_lastname() {
		return $this->lastname;
		}
	function set_schoolname($schoolname) {
		$this->schoolname=$schoolname;
		}
	function get_schoolname() {
		return $this->schoolname;
		}
		function set_grade( $grade) {
		$this->grade =  $grade;
		}
	function get_grade() {
		return $this->grade;
		}
	function set_section( $section) {
		$this->section =  $section;
		}
	function get_section() {
		return $this->section;
		}
	function set_add( $add) {
		$this->add =  $add;
		}
	function get_add() {
		return $this->add;
		}
		function set_birth( $birth) {
		$this->birth =  $birth;
		}
	function get_birth() {
		return $this->birth;
		}
	function set_number($number) {
		$this->number =  $number;
		}
	function get_number() {
		return $this->number;
		}
	}
	
	
	
	
	$name = new Person();
	$name->set_firstname('Edmond');
	$name->set_middlename('Latorre');
	$name->set_lastname('Tabianan');
	$name->set_schoolname('ECLARO ACADEMY');
	$name->set_grade(' Grade 12');
	$name->set_section(' ICT-2');
	$name->set_add(' brgy. Bagong Silangan Quezon City');
	$name->set_birth('April 22, 2002');
	$name->set_number('09771997449');
	?>
 </body>
 </html>
 
 <html class="body">
 <body>
	<div class="awd">
	<form class="form" action="ifelse.php" method="get"> 
	Input: <input type="text" name="input">
		   <input type="submit" name="submit"><br><br>
	</form>
	</div>
 </body>
 </html>
 
 <html>
 <body class="body">
	<?php
	
		
	if (empty($_GET["input"])) {
		  echo "Please Input";
	} elseif ($_GET["input"] == "OJT") {
	// I put it one by one because i cant call the class 
		  echo	"Name: " . $name->get_firstname() . " " . $name->get_middlename().
				" " . $name->get_lastname() . "<br><br>" . "School: " . $name->get_schoolname() 
				. "<br><br>" . "Grade: " . $name->get_grade() . "<br><br>" . "Section: " 
				. $name->get_section() . "<br><br>" . "Address: " . $name->get_add() . "<br><br>" 
				. "Birthdate: " . $name->get_birth() . "<br><br>" . "Contact Number: " . $name->get_number();
				
	} elseif ($_GET["input"] == "Successful") {
		  echo "Congrats OJT";
	} elseif ($_GET["input"] != "OJT"){
		  echo "Wrong Input";
	}	
		echo "<br><br><br>";
		echo '<br><button class="button"> <a href="class.php">back</a></button>';
		echo '<br><button class="button"> <a href="ifelse.php">clear</a></button>';
	?>
		
</body>
</html>