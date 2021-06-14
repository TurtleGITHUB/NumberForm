<!-- Exercise on Page 210-211 -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Number Form</title>
</head>
<body>
	<h2>Number Form</h2>
	<h3>Enter a number and we will square it for you!</h3>
	<?php 
		$DisplayForm = TRUE;
		$Number = "";

		if(isset($_POST["Submit"])){
			$Number = $_POST["Number"];
			// Check if the field contains a number value before moving on
			if(is_numeric($Number)){
				$DisplayForm = FALSE;
			}
			else {
				echo "<p>You need to enter a numeric value!</p>\n";
				$DisplayForm = TRUE;
			}
		}

		// If $DisplayForm is TRUE, we should have the script display the form on the page
		if($DisplayForm){
			?>
			<form name="NumberForm" action="NumberForm.php" method="post">
				<p>Please enter a number: <input type="text" name="Number" value="<?php echo $Number; ?>" /></p>
				<p><input type="reset" value="Clear Form" />&nbsp;&nbsp;<input type="submit" name="Submit" value="Send Form" /></p>
			</form>
			<?php
		}
		else {
			echo "<p>Thank you for entering a number!</p>\n";
			echo "<p>Your number, $Number, squared is " , ($Number*$Number), ".</p>\n";
			echo "<p><a href=\"NumberForm.php\">Try again?</a></p>\n";
		}
	?>

</body>
</html>