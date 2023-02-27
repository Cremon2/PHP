<!DOCTYPE html>
	<html> 
		<head> <title> DAY 1 </title> 
		<link rel="stylesheet" href="style.css"> 
	</head>
		<Header class=header> <h2>  Edmond Tabianan  12 ICT-2 </h2>  </header> 
			<body class=body> 
		<?php 
			echo "<b>This is syntax:</b>"," Is a script can be placed anywher in the document.<br><br>";
			echo '<img class="img" src="/OJT/image/syntax.jpg">',"<br><br> The default file extension for PHP files is (.php) <br><br>";
			echo "<p><b>Note:</b> PHP statement end with a semicolon <b> ( ; )</b> </br></br>";
			echo "<h2> PHP Case Sensitivity </h2><br><p> In PHP, keywords (e.g. if, else, while, echo, etc.), classes,
			functions, and user-defined function are not case-senstive. <br><br>";
			echo '<img class="img" src="/OJT/image/Sensitive.jpg">',"<br><br>"," <p><b> Note: </b> However; all variable names are case-sensitive!","<br><br>";
			echo "Look at the example below <br><br>";
			echo '<img class="img" src="/OJT/image/sensitive.jpg">',"<br><br>";
			echo "<h4>This is a Comment: </h4>","Let other understand your code <br><br>" , " Is a reminder to yourself about
			what you did because most of programmer have experienced coming back their own work a year",
			"or two later and having to re-figure out what they did. Comment can remind you of what you were thinking when you wrote the code. <br><br>";
			echo '<img class="img" src="/OJT/image/comment.jpg">',"<br><br>";
			echo "<h3> This is Variables: </h3> <p> In PHP, variable starts with the $ sign, followed by the name of the variable: <br><br> ";
			echo '<img class="img" src="/OJT/image/variable.jpg">',"<br><br>","<b>Notes: </b>Think of variables as container for storing data. <br><br> Remember that 
			PHP variable names are case-sensitive! <br><br>";
			echo "<b>This are the data types </br> ";
		?>
		
			
		<?php
			echo '<ul class="list";>
			<li> String </li>
			<li> Integer  </li>
			<li> Float (floating point numbers - also called double) </li>
			<li> Boolean </li>
			<li> Array </li>
			<li> Object </li>
			<li> NULL </li>
			<li> Resource </li>
			<br><br>'
			?>
		<?php 
			echo "<h2> PHP Strings </h2> ","<p> A string is a sequence of characters, like 'Hello world' <br><br>","
			strlen() - return the length of a string <br><br>","The PHP strlen() function returns the length of string <br>",
			" </h4><br>Example <br>";
			echo '<img class="img" src="/OJT/image/strlen.jpg">',"<br><br>";
			echo "<h3>str_word_count - Count Word in a string </h3>"," The PHP str_word_count() function counts the number of the words in a string. <br>",
			"Example <br><br>",
			"Count the number of the word in the string 'Hello world!':<br><br>";
			echo '<img class="img" src="/OJT/image/count.jpg">',"<br><br>";
			
			echo "<h3> strrev() - Reverse a String </h3>"," <p> The PHP strrev() function reverses a string.</p>","Reverse the string 'Hello world!': <br><br>";
			echo '<img class="img" src="/OJT/image/reverse.jpg">',"<br><br>";
			
			echo "<h3>strpos() - Search For a Text Within a String </h3>",
			"<p>The PHP strpos() function searches for a specific text within a string. If a match is found, the function returns the character 
			position of the first match. If no match is found, it will return FALSE.</p><br>","Search for the text 'world' in the string 'Hello world!':
			<br><br>","<br>";
			echo '<img src="/OJT/image/search.jpg">',"<br><br>","Tip: The first character position in a string is 0 (not 1). <br><br>";
			echo "<h3> str_replace() - Replace Text Within a String </h3>",
			"<p> The PHP str_replace() function replaces some characters with some other characters in a string <p>.",
			"Replace the text 'world' with 'Dolly':<br><br>";
			echo '<img class="img" src="/OJT/image/replace.jpg">';
			echo "<h3> This is numbers: </h3>";
		?>
			
			
		<?php	
			echo '<ol class="list"> 
					<li> Integer </li>
				</ol></br>
			'.'<ul class="list">
				<li> 2, 256, -256, 10358, -179567 are all integers. </li>
				<li> An integer must NOT have a decimal point </li>
				<li> An Integer can be either positive or negative. </li>
				<li> Integer can be specified in three format: decimal (10-based), hexadecimal (16-based - prefixed with 0x) 
					or octal (8-based - prefixed with 0) </li>
			</ul>'
		 . '<ol class="list">
			<li> </li>
			<li> Floats </li>
			<ul class="list"> 
			<li> 2.0, 256.4, 10.358, 7.64E+5, 5.56E-5 are all floats. </li>
			<li> The float data type can commonly store a value up to 1.7976931348623E+308 
			(platform dependent), and have a maximum precision of 14 digits.</li>'
			?>
		</ol><br>
		<?php echo 'Note: Another important thing to know is that even if 4 * 2.5 is 10, the result is stored as float, 
		because one of the operands is a float (2.5).;?><br><br>
			<ul class="list"> <h4> Here are some rules for integers: </h4>
				<li> An integer must have at least one digit </li>
				<li> An integer must NOT have a decimal point </li>
				<li> An integer can be either positive or negative </li>
				<li> Integers can be specified in three formats: decimal (10-based), hexadecimal (16-based - prefixed with 0x) or octal 
				(8-based - prefixed with 0) </li>
			</ul> <br><br>
			<ul class="list"><h4> PHP has the following predefined constants for integers: </h4>
				<li> PHP_INT_MAX - The largest integer supported </li>
				<li> PHP_INT_MIN - The smallest integer supported </li>
				<li> PHP_INT_SIZE -  The size of an integer in bytes </li>
			</ul>
				<ul class="list"> <h4> PHP has the following functions to check if the type of a variable is integer: </h4>
				<li> is_int() </li>
				<li>is_integer() - alias of is_int()</li>
				<li>is_long() - alias of is_int()</li><br><br>
				</ul>'
				?>
				<?php 
					echo " <h3> Example </h3> "," <p> Check if the type of a variable is integer: </p>";
					echo '<img class="img" src="/OJT/image/var.jpg">',"<br><br>Note: From PHP 7.0: The is_numeric() function will return FALSE for numeric strings in hexadecimal 
					form (e.g. 0xf4c3b00c), as they are no longer considered as numeric strings. <br><br>";
					echo "<h3>PHP Casting Strings and Floats to Integers</h3>";
					echo "Sometimes you need to cast a numerical value into another data type.<br><br>"," The (int), (integer), or intval() 
					function are often used to convert a value to an integer.";
				?>
				<?php 
					echo "<h3> PHP Floats </h3> <br>"," A float is a number with a decimal point or a number in exponential form.<br>",
					" 2.0, 256.4, 10.358, 7.64E+5, 5.56E-5 are all floats. <br>",
					"The float data type can commonly store a value up to 1.7976931348623E+308 (platform dependent), 
					and have a maximum precision of 14 digits.<br>","PHP has the following predefined constants for floats (from PHP 7.2): <br><br>";
					echo '<ul class="list"> 
					<li> PHP_FLOAT_MAX - The largest representable floating point number </li>
					<li> PHP_FLOAT_MIN - The smallest representable positive floating point number </li>
					<li> PHP_FLOAT_MAX - The smallest representable negative floating point number </li>
					<li> PHP_FLOAT_DIG - The number of decimal digits that can be rounded into a float and back without precision loss </li> 
					<li> PHP_FLOAT_EPSILON - The smallest representable positive number x, so that x + 1.0 != 1.0 </li>
						</ul><br><br>';
					echo '<ul class="list"> 
					<li> PHP has the following functions to check if the type of a variable is float: </li>
					<li> is_float() </li>
					<li> is_double() - alias of is_float() </li> <br><br> <h3> Example </h3>';
					echo '<img class="img" src="/OJT/image/float.jpg">',"<br><br>";
				?>
				<?php 
					echo "<h2> PHP Boolean </h2> <p> A Boolean represents two possible states: TRUE or FALSE.</p><br><br>";
					echo '<img class="img" src="/OJT/image/x.jpg">',"<br><br>";
					echo "Booleans are often used in conditional testing. You will learn more about conditional testing",
					"in a later chapter of this tutorial.<br><br>";
				?>
				<?php 
					echo "<h3>PHP Array </h3> <p>An array stores multiple values in one single variable.</p><br>";
					echo '<img src="/OJT/image/array.jpg">',"<br><br>";
					echo "<h3> PHP Object </h3>"," Classes and objects are the two main aspects of object-oriented programming. <br>",
					" A class is a template for objects, and an object is an instance of a class.<br><br>",
					" When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.<br><br><h3> Example </h3>";
					echo '<img class="img" src="/OJT/image/object.jpg">',"<br><br>";
				?>
				<?php
					echo "<h3>PHP NULL Value</h3>","Null is a special data type which can have only one value: NULL.<br><br>",
					" A variable of data type NULL is a variable that has no value assigned to it. <br><br> ",
					" Tip: If a variable is created without a value, it is automatically assigned a value of NULL. <br><br>",
					"Variables can also be emptied by setting the value to NULL:<br><br>";
					echo '<img class="img" src="/OJT/image/null.jpg">',"<br><br>";
				?>
				<?php
					echo "<h3> PHP Resource </h3>",
					" <p> The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP. </p><br><br> ",
					" A common example of using the resource data type is a database call.<br><br>",
					" We will not talk about the resource type here, since it is an advanced topic. <br><br>";
					
				?>

			
			<?php 
				echo "<b>This is constant: </b> <br>","constant are like variables except that once they are defined they be changed or undefined. <br>",
				"A constant is an identifier (name) for a simple value. The value cannot be changed during the script. <br>"," A valid constant name start with a letter or underscore (no $ sign before the constant name).",
				"<b>Note:</b> Unlike variables, constants are automatically global across the entire script.<br><br>";
				echo "<p>define(name, value, case-insensitive)","<h2> Example </h2>","<br>"; 
				echo '<img src="/OJT/image/constant.jpg">',"<br><br>";
				echo "<h3>This is operators</h3>";
			?>
			<?php  
				echo  '<ul class="list">
						<li>Arithmethic operators</li>
						<li>Assign operators</li>
						<li>Comparison operators</li>
						<li>Increment/Decrement operators</li>
						<li>Logical operators</li>
						<li>String operators</li>
						<li>Array operators</li>
						<li>Conditional assignment operators</li>
					  </ul>'
			?>	
				<?php 
				echo "<h3> PHP Arithmetic Operators </h3>"," The PHP arithmetic operators are used with numeric values to perform common arithmetical operations, such as addition, subtraction, multiplication etc. <br><br>";
				echo '<img class="img" src="/OJT/image/ari.jpg">',"<br><br>";
				?>
				<?php
				echo "<h3> PHP Assignment Operators </h3>",
				"The PHP assignment operators are used with numeric values to write a value to a variable.<br><br>",
				"The basic assignment operator in PHP is '='. It means that the left operand gets set to the value of the assignment expression on the right.";
				echo '<img class="img" src="/OJT/image/ass.jpg">',"<br><br>";
				// picture of assignment
				?>
				<?php 
				echo "<h3> PHP Comparison Operators </h3>"," The PHP comparison operators are used to compare two values (number or string): <br><br>";
				echo '<img class="img" src="/OJT/image/comp.jpg">',"<br><br>";
				// picture of comparison
				?>
				<?php
				echo "<h3> PHP Increment / Decrement Operators </h3>","The PHP increment operators are used to increment a variable's value.<br><br>"," The PHP decrement operators are used to decrement a variable's value.<br><br>";
				echo '<img class="img" src="/OJT/image/inc.jpg">',"<br><br>";
				// picture
				?>
				<?php 
				echo "<h3> PHP Logical Operators </h3>","The PHP logical operators are used to combine conditional statements.<br><br>";
				echo '<img class="img" src="/OJT/image/log.jpg">',"<br><br>";
				//pic
				?>
				<?php
				echo "<h3> PHP String Operators </h3>","PHP has two operators that are specially designed for strings.<br><br>";
				echo '<img class="img" src="/OJT/image/str.jpg">',"<br><br>";
				//pic 
				?>
				<?php
				echo "<h3> PHP Array Operators </h3> "," The PHP array operators are used to compare arrays.<br><br>";
				echo '<img class="img" src="/OJT/image/Ope.jpg">',"<br><br>";
				//pic 
				?>
				<?php 
				echo "<h3> PHP Conditional Assignment Operators </h3>","<p> The PHP conditional assignment operators are used to set a value depending on conditions: </p>";
				echo '<img class="img" src="/OJT/image/cond.jpg">',"<br><br>";	
				?>
				
				
				
				<button class="button"> <a href="class.php">page 2</a></button>
				
		</body>
	</html>