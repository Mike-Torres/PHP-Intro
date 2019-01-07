
<!--
<form method="GET">
  <input type="text" name="person">
  <button>Submit</button>
</form>
-->
<?php
/*
 $name = $_GET['person'];
 echo  $name." is a handsome fellow <br> <br>"; // br has to go within strings
echo "Mike is awesome";
---------------------------------------------------------------------------------------------------------------
In house Function Methods

echo strlen("Hi Mike"); // string length - PHP function
echo "<br>";
echo "<br>";
echo str_word_count("Hi Mike"); // String words amount - PHP function
echo "<br>";
echo "<br>";
echo strrev("Hi Mike"); // String Reverse - PHP function
echo "<br>";
echo "<br>";
echo strpos("Hi Mike", "Mike"); // indexing
echo "<br>";
echo "<br>";
echo str_replace("Hi Mike", "Mike","Daniel"); // indexing
--------------------------------------------------------------------------------------------------------------------
                                                      DATA TYPES
//String
$name = "coding is fun"; // single/double quotes JS rules still apply

//integers
$name = 20; // integer
$name = 20.53123; // float has decimals

/*booleans
true = 1;
false = 0; */
/*
array
$names = array("Daniel","Mike","JIMBOB");
echo $names['0'];
*/



/* Arithmetic Operators
  echo 5+5;  Same as JS
  echo 8%5;  Remainder - same as JS
  echo 5**5;  Squaring
 */
//---------------------------------------------------------------------------------------------------------------------------------------------
/*                                                     Assignment Operators

$x = 100;
$x += 20;

echo $x;
*/

// ---------------------------------------------------------------------------------------------------------------------
/*                                                       Comparison Operators
$x = 5;
$y = 10;


if($x === $y) {
  echo "true!";
} else {
  echo "false";
}
 -----------------------------------------------------------------------------------------
/*                                           increment/decrement
$x = 10;

echo $x++;
echo $x--;
-----------------------------------------------------------------------------------------
/*                                            Logical Operators

$x = 10;
$y = 20;

if($x == $y || 1 == 1){
  echo "true";

  if($x == $y xor 1 == 1){ // only one can be true
    echo "true";

$x = 2;
if($x == 1) {
  echo "true!";
} elseif($x == 2) {
  echo  "kinda true!";
} else{
echo "false";
}
*/
/*
 $x = "";

switch($x){
  case 1:
    echo "The answer is 1";
  break;

  case "number":
    echo "The answer is number";
  break;

  default:
    echo "There is no answer";

}
 ------------------------------------------------------------------------
//                                                    LOOPS
//While Loops  KNOW THIS FOR LOCK IN SYSTEM DATABASES
// Do While loops
// For Loop
// foreach Loop
*/

/*                                         While Loop
$x = 0;

while($x < 5){
  echo "True <br>";
   $x++;
}  ------------------------------------------------------------------
                                       Do While Loop
$x = 1;
do {
  echo "Hello<br>";
    $x++;
}
while ($x <= 5);
-------------------------------------------------------------------------
                                        For Loop


for($x = 0; $x <= 10 ; $x++){
    echo "Hello <br>";
}
-------------------------------------------------------------------------
                                        ForEach Loop


for($x = 0; $x <= 10 ; $x++){
    echo "Hello <br>";
}


$array = array("Mike", "Anthony", "Rob", "Aaron");

foreach ($array as $loopdata) {
  echo "My Name is ".$loopdata."<br>";
}
*/

?>
