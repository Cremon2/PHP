<?php 
	session_start(); // needs to be before anything else on page to use $_SESSION
	 
	 
	 
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
	
	echo "Name: " . $name->get_firstname() ." " . $name->get_middlename(). " " . $name->get_lastname();
	echo "<br><br>";
	echo "School: " . $name->get_schoolname();
	echo "<br><br>";	
	echo "Grade: " . $name->get_grade();
	echo "<br><br>";
	echo "Section: " . $name->get_section();
	echo "<br><br>";	
	echo "Address: " . $name->get_add();
	echo "<br><br>";
	echo "Birthdate: " . $name->get_birth();
	echo "<br><br>";
	echo "Contact Number: " . $name->get_number();
	echo "<br><br> "; 
	
?>

<form action="tootherpage.php" method="post">
    <input type="hidden" value="<?php echo $name->get_firstname();?>" name="firstname" />
	<input type="hidden" value="<?php echo $name->get_middlename();?>" name="middlename" />
	<input type="hidden" value="<?php echo $name->get_lastname();?>" name="lastname" />
	<input type="hidden" value="<?php echo $name->get_schoolname();?>" name="schoolname" />
	<input type="hidden" value="<?php echo $name->get_grade();?>" name="grade" />
	<input type="hidden" value="<?php echo $name->get_section();?>" name="section" />
	<input type="hidden" value="<?php echo $name->get_add();?>" name="add" />
	<input type="hidden" value="<?php echo $name->get_birth();?>" name="birth" />
	<input type="hidden" value="<?php echo $name->get_number();?>" name="number" />
	<input type="submit">
</form>
