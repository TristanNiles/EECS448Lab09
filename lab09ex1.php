<?php
echo "<table>";
for ($i=0; $i<=101; $i++) { //i=row 
	echo "<tr>";
	for ($j=0; $j<=101; $j++){ //j=col 
		if ($i == 0) {
			if ($j==0) {
				echo "<th></th>";
			}
			else {
				echo "<th style = 'text-align: left'>" . ($j-1) . "</th>";
			}
		}
		else if ($j==0) {
			echo "<td><b>" . ($i-1) . "</b></td>";
		}
		else {
			echo "<td>" . ($j-1)*($i-1) . "</td>";
		}
	}
	echo "</tr>";

}  
echo "</table>";

?>
