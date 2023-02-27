<html>
	<head> 
		<title> Task 2 </title>
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
	echo "<br>";
	echo $name->get_Firstname(). " " . $name->get_middlename(). " " . $name->get_lastname() . "<br><br>"; 
	echo $name->get_schoolname() . "<br><br>";
	echo $name->get_grade() . "<br><br>";
	echo $name->get_section() . "<br><br>";
	echo $name->get_add() . "<br><br>";
	echo $name->get_birth(). "<br><br>";
	echo $name->get_number() . "<br><br>";
		
		echo '<form> <button class="button"> <a href="index.php">page 1</a></button>    <button class="button"> <a href="ifelse.php">page 3</a></button></form>';
		echo '<form> <button class="button"> <a href="while.php"> while </a></button>    <button class="button"> <a href="dowhile.php">do while</a></button></form>';
		echo '<form> <button class="button"> <a href="for.php"> for </a></button>    <button class="button"> <a href="foreach.php">foreach</a></button></form>';
		echo '<form> <button class="button"> <a href="breakandcontinue.php">break and continue </a></button>    <button class="button"> <a href="http://localhost/OJT/switch.php?name=">switch</a></button></form>';
		echo '<form> <button class="button"> <a href="transfervalue.php">transfer value</a></button>';
		
	?>
	
 </body>
 </html>