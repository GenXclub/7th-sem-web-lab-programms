<!-- 
	Q8. Write the PHP programs to do the following:
		a. Implement simple calculator operations.
 -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Simple PHP Calculator</title>
</head>
<body>
	<h1>Simple Calculator using PHP</h1>
	<form action="lab08a.php" method="post">
		<table>
			<tr>
				<td>1st Number</td>
				<td><input type="number" name="first" required /></td>
			</tr>
			<tr>
				<td>2st Number</td>
				<td><input type="number" name="second" required /></td>
			</tr>

			<tr>
				<td>Select Operator</td>
				<td>
					<select name="op">
						<option>Select Operation</option>
						<option value="+">Addition</option>
						<option value="-">Subtraction</option>
						<option value="*">Multiplication</option>
						<option value="/">Division</option>
						<option value="%">Remainder</option>
				</select></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="pop" value="Perform"></td>
			</tr>
		</table>
	</form>

	<?php
		if(isset($_POST["pop"])){
			echo "<h2>Result: </h2>";
			$num1 = $_POST["first"];
			$num2 = $_POST["second"];
			$op = $_POST["op"];
			
			switch ($op) {
				case '+':
					echo "<h3>Addition value is " . ($num1+$num2) . "</h3>";
					break;
				case '-':
					echo "<h3>Subtraction value is " . ($num1-$num2) . "</h3>";
					break;
				case '*':
					echo "<h3>Multiplication value is " . ($num1*$num2) . "</h3>";
					break;
				case '/':
					if($num2 == 0){
						echo "<h3>UNDEFINED</h3>";
						break;
					}
					echo "<h3>Division value is " . ($num1/$num2) . "</h3>";
					break;
				case '%':
					if($num2 == 0){
						echo "<h3>UNDEFINED</h3>";
						break;
					}
					echo "<h3>Remainder value is " . ($num1%$num2) . "</h3>";
					break;
				default:
					echo "Retry";
					break;
			}
		}
	?>
</body>
</html>