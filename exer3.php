<?php

$us=array(
		
	 "Los Angeles, CA"=>3792621,
	"Chicago IL"=>2695598,
	"Houston TX"=>2100263,
	"Philadelphia PA"=>1526006,
	"Phoenix AZ"=>1445632,
	"San Antonio TX"=>1327407,
	"San Diego"=>1307402,
	"Dallas"=>1197816,
	"San Jose"=>945942
);

$a= array_sum($us);
echo "<table border=1>";
echo "<th>City</th>";
echo "<th>Population</th>";
asort($us);

foreach($us as $key => $value) {
  echo"
	<tr>
		<td>$key</td>
		<td>$value</td>
	</tr>";
	
}
echo "<th>total</th>";
echo "<th>$a</th>";
echo "</table>";

echo "<br>";

echo "<table border=1>";
echo "<th>City</th>";
echo "<th>Population</th>";
ksort($us);

foreach($us as $key => $value) {
  echo"
	<tr>
		<td>$key</td>
		<td>$value</td>
	</tr>";
	
}
echo "<th>total</th>";
echo "<th>$a</th>";
echo "</table>";


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<tr>
		<td></td>
	</tr>
</table>
</body>
</html>