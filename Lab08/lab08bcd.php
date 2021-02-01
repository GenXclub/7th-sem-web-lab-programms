<!-- 
	Q8. Write the PHP programs to do the following:
		b. Find the transpose of a matrix.
		c. Multiplication of two matrices.
		d. Addition of two matrices
 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Program 8 B,C,D</title>
	<meta charset="UTF-8">
</head>
<body>
<form action="lab08bcd.php" method="post">
	<table>
		<tr><h5>Matrix 1</h5></tr>
		<tr>
			<td>Enter [0,0]:</td>
			<td><input type="text" name="M100" required /></td>
		</tr>
		<tr>
			<td>Enter [0,1]:</td>
			<td><input type="text" name="M101" required></td>
		</tr>
		<tr>
			<td>Enter [1,0]:</td>
			<td><input type="text" name="M110" required></td>
		</tr>
		<tr>
			<td>Enter [1,1]:</td>
			<td><input type="text" name="M111" required></td>
		</tr>
	</table>
	<table>
		<tr><h5>Matrix 2</h5></tr>
		<tr>
			<td>Enter [0,0]:</td>
			<td><input type="text" name="M200" required /></td>
		</tr>
		<tr>
			<td>Enter [0,1]:</td>
			<td><input type="text" name="M201" required></td>
		</tr>
		<tr>
			<td>Enter [1,0]:</td>
			<td><input type="text" name="M210" required></td>
		</tr>
		<tr>
			<td>Enter [1,1]:</td>
			<td><input type="text" name="M211" required></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="pop" value="Calculate"></td>
		</tr>
	</table>
</form>

<?php 
	if(isset($_POST["pop"])) {
		$M100 = $_POST["M100"];
		$M101 = $_POST["M101"];
		$M110 = $_POST["M110"];
		$M111 = $_POST["M111"];
		$M200 = $_POST["M200"];
		$M201 = $_POST["M201"];
		$M210 = $_POST["M210"];
		$M211 = $_POST["M211"];

		$matrix1 = array(array($M100, $M101), array($M110, $M111));
		$matrix2 = array(array($M200, $M201), array($M210, $M211));
		$rowCount1 = count($matrix1);
		$colCount1 = count($matrix1[0]);
		$rowCount2 = count($matrix2);
		$colCount2 = count($matrix2[0]);

		// show the entered matrix
		echo "<hr>";
		echo "<h4>Matrix 1</h4>";
		for ($r=0; $r < $rowCount1; $r++) { 
			echo "</br>";
			for ($c=0; $c < $colCount1; $c++) {
				echo $matrix1[$r][$c]. " ";
			}
		}
		echo "<h4>Matrix 2</h4>";
		for ($r=0; $r < $rowCount2; $r++) { 
			echo "</br>";
			for ($c=0; $c < $colCount2; $c++) {
				echo $matrix2[$r][$c]. " ";
			}
		}
		echo "<hr>";

		// sum of the matrix
		$sum = "";
		echo "<h4>The Sum of Matrix is:</h4>";
		for ($r=0; $r < $rowCount1; $r++) {
			echo "<br>";
			for ($c=0; $c < $colCount1; $c++) { 
				if(is_numeric($matrix1[$r][$c]) && is_numeric($matrix2[$r][$c])) {
					$val = $matrix1[$r][$c] + $matrix2[$r][$c];
					$sum = $sum . " " . $val;
				} else {
					echo "<h4>Enter numbers only</h4>";
					break;
				}
			}
			$sum = $sum . "<br>";
		}
		echo $sum;

		// Transpose of matrix
		echo "<hr>";
		echo "<h4>Transpose of matrix1: </h4>";
		for ($c=0; $c < $colCount1; $c++) {
			echo "</br>";
			for ($r=0; $r < $rowCount1; $r++) {
				echo $matrix1[$r][$c] . " ";
			}
		}
		echo "</br>";
		echo "<h4>Transpose of matrix2: </h4>";
		for ($c=0; $c < $colCount2; $c++) {
			echo "</br>";
			for ($r=0; $r < $rowCount2; $r++) {
				echo $matrix2[$r][$c] . " ";
			}
		}
		echo "<hr>";

		// matrix multiplication
		echo "<h4>Multiplication of matrix </h4>";
		$result = array();
		for ($i=0; $i < $rowCount1; $i++) { 
			for ($j=0; $j < $colCount2; $j++) { 
				$result[$i][$j] = 0;
				for ($k=0; $k < $rowCount2; $k++) { 
					$result[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
				}
			}
		}
		//print_r($result);	// prints in a wierd form use for loop to display only content
		for ($i=0; $i < $rowCount1; $i++) { 
			echo "</br>";
			for ($j=0; $j < $colCount2; $j++) { 
				echo $result[$i][$j] . " ";
			}
		}
		echo "<hr>";
	}
 ?>
</body>