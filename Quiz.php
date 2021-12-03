<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$one = $_POST["q1"];
$two = $_POST["q2"];
$three = $_POST["q3"];
$four = $_POST["q4"];
$five = $_POST["q5"];
$rightCount = 0;
echo "<h3>1) How many agents are there in Valorant currently?</h3>";
echo "You answered: " . $one . "<br>";
echo "Correct answer: 17<br>";

echo "<h3>2) What is the most recent map added to Valorant?</h3>";
echo "You answered: " . $two . "<br>";
echo "Correct answer: Fracture<br>";

echo "<h3>3) Which of these is NOT the name of a status effect in Valorant?</h3>";
echo "You answered: " . $three . "<br>";
echo "Correct answer: Stimulus<br>";

echo "<h3>4) Which of these is a \"controller\" agent?</h3>";
echo "You answered: " . $four . "<br>";
echo "Correct answer: Viper<br>";

echo "<h3>5) What is the name of Chamber's ultimate ability?</h3>";
echo "You answered: " . $five . "<br>";
echo "Correct answer: Tour De Force<br><br>";

if ($one == "17") {
	$rightCount++;
}

if ($two == "Fracture") {
	$rightCount++;
}

if ($three == "Stimulus") {
	$rightCount++;
}

if ($four == "Viper") {
	$rightCount++;
}

if ($five == "Tour De Force") {
	$rightCount++;
}

echo "<b>Total Score: " . $rightCount . "/5<br>";
echo "Percentage: " . ($rightCount/5)*100 . "%</b>";

?>
