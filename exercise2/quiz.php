<?php

  $score = 0;
  $percScore = 0;

  $q1Answer = $_POST["q1"];
  $q2Answer = $_POST["q2"];
  $q3Answer = $_POST["q3"];
  $q4Answer = $_POST["q4"];
  $q5Answer = $_POST["q5"];







 echo "Question 1) What is the capitol of Kansas: ";
echo "<br>";
 echo "You answered: ";
 echo $q1Answer;
echo "<br>";
 echo "Correct Answer: Topeka";
echo "<br>";
echo "<br>";

 echo "Question 2) What landmark is San Francisco known for: ";
echo "<br>";
 echo "You answered: ";
 echo $q2Answer;
echo "<br>";
 echo "Correct Answer: Golden Gate Bridge";
echo "<br>";
echo "<br>";

 echo "Question 3) What NFL Teams mascot is the Caridnals: ";
echo "<br>";
 echo "You answered: ";
 echo $q3Answer;
echo "<br>";
 echo "Correct Answer: Arizona";
echo "<br>";
echo "<br>";

  echo "Question 4) What is the tallest building in the world: ";
echo "<br>";
 echo "You answered: ";
 echo $q4Answer;
echo "<br>";
 echo "Correct Answer: Burj Khalifa";
  echo "<br>";
  echo "<br>";

 echo "Question 5) What is 55 * 100: ";
echo "<br>";
 echo "You answered: ";
 echo $q5Answer;
  echo "<br>";
 echo "Correct Answer: 5500";
echo "<br>";
echo "<br>";


if ($q1Answer == "Topeka") {
  $score++;

}
if ($q2Answer == "Golden Gate Bridge") {
    $score++;

}
if ($q3Answer == "Arizona") {
    $score++;
}
if ($q4Answer == "Burj Khalifa") {
    $score++;

}
if ($q5Answer == "5500") {
  $score++;
}


$percScore = ($score/5) * 100;

echo "Total Answered correctly: ";
echo $score;
echo "<br>";
echo "<br>";

echo "Percent Score: ";
echo $percScore;
echo "%";








?>
