<?php
//Write a PhP program to solve quadratic equations. Ask the user for A, B, C.(AX2
+ BX + C).
//Find both roots; indicate if they are the same; discover how to deal with complex
roots.
//Place in a loop to run 5 times with different user inputs.
//Remember: X = ( -B +/- sqrt(B^2 - 4AC))/ 2A
for ($i = 0; $i < 5; $i++)
{//get from the user and use double so you can calculate complex root
echo "Enter the values for A, B, and C: ";
$a = readline();
$b = readline();
$c = readline();
//discriminant
$x = pow($b, 2) - (4 * $a * $c);
//means regualar root
if ($x >= 0)
{
$r1 = (-$b + sqrt($x)) / (2 * $a);
$r2 = (-$b - sqrt($x)) / (2 * $a);
echo "Root 1: " , $r1 , "\n";
echo "Root 2: " , $r2 , "\n";
//if root is the same number
if ($r1==$r2)
{
echo "The root is: ", $r1;
}//if root is not the same number
else
{
echo "The roots are :", $r1, "and ", $r2;
}
}
else //has to be a complex root, have to calculate
{
$roots = -$b / (2 * $a);
$complexRoots = sqrt(-$x) / (2 * $a);
echo "Complex roots: " , $roots , " + " , $complexRoots , "i and " , $roots , "
- " , $complexRoots , "i\n";
}
}
?>
