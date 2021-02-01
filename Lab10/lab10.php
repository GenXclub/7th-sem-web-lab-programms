<!-- 
    Q10. Write a PHP program to sort the student records which are stored in the database using
        selection sort.
 -->

<!--
DATABASE SETUP
1. Go to phpmyadmin
2. Go to SQL tab
3. Type the below code:
CREATE DATABASE weblab;
CREATE TABLE student(usn varchar(10),name varchar(20),address varchar(20));
INSERT INTO `student` (`usn`, `name`, `address`) VALUES
('1RG17CS300', 'QWE', 'QWEaddress'),
('1RG17CS100', 'ABC', 'ABCaddress'),
('1RG17CS200', 'XYZ', 'XYZaddress'),
('1RG17CS250', 'MNO', 'MNOaddress');;
4. DATABASE READY NOW TYPE THE PHP CODE IN PHP FILE prg10.php -->

<!DOCTYPE html>
<html>
<body>
<style>
    table, td, th {
        border: 1px solid black;
        width: 33%;
        text-align: center;
        border-collapse:collapse;
        background-color:lightblue;
    }
    table {
        margin: auto;
    }
</style>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "weblab";
$a=[[]];
$b=[[]];

// Create connection
// Opens a new connection to the MySQL server
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection and return an error description from the last connection error, if any
if ($conn->connect_error)
die("Connection failed: " . $conn->connect_error);

$sql = "SELECT * FROM student";
// performs a query against thedatabase
$result = $conn->query($sql);
echo "<br>";
echo "<center> BEFORE SORTING</center>";
echo "<table border='2'>";
if($result) {
    echo"<tr><th>USN</th><th>NAME</th><th>Address</th></tr>";
    // output data of each row and fetches a result row as an associative array
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>". $row["usn"]."</td>";
        echo "<td>". $row["name"]."</td>";
        echo "<td>". $row["address"]."</td></tr>";
        array_push($a,[$row["usn"],$row["name"],$row["address"]]);
    }
    foreach ($a as $key => $rowSORT) {
    // replace 0 with the field's index/key
        if($key!=0){
            $b[$key] = $rowSORT[0];
        }
    }

    array_multisort($b, SORT_ASC, $a);
}
else echo "<center style='color:red'> Table is Empty</center>";
echo "</table>";
echo "<br>";

echo "<center> AFTER SORTING</center>";
echo "<table border='2'>";
if($result) {
    echo"<tr><th>USN</th><th>NAME</th><th>Address</th></tr>";
    $n=count($a);
    for ( $i = 0 ; $i<($n-1) ; $i++) {
        echo "<tr>";
        echo "<td>". $a[$i][0]."</td>";
        echo "<td>". $a[$i][1]."</td>";
        echo "<td>". $a[$i][2]."</td>";
        echo "</tr>";
    }
}
else echo "<center style='color:red'> Table is Empty</center>";
echo "</table>";
$conn->close();
?>
</body>
</html>