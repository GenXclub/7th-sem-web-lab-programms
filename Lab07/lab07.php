<!-- 
	Q7. Write a PHP program to display a digital clock which displays the current time of the server.
 -->
<!DOCTYPE html>
<html>
<head>
	<title>Current Time</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Display Current Date & Time</h1>
	<h2>
		<?php 
			echo "Server Time: <span style='color: purple;'>". date("h:i:s a") ."</span>";
			echo "<br /><br>";
			echo "Today's date is: ".date("d-m-y");
			echo "<br><br>";
			date_default_timezone_set('Asia/Kolkata');
			echo "<span style='color: red;'>Current time: ". date("h:i:s a") . "</span>";
		?>
	</h2>
</body>
</html>