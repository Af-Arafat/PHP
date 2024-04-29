<?php
$fname = "Isaac";
$lname = "Newton";
$mname = "Apple";

printf('His name is %2$s %3$s %1$s', $lname, $fname, $mname);
echo "\n";

$output = sprintf('His name is %2$s %3$s %1$s', $lname, $fname, $mname);
echo $output;
echo "\n";

// printf("The binary equivalent of %d is %b", 12, 12);
printf('The binary equivalent of %1$d is %1$b', 12);
echo "\n";

$n = 45.234;
printf("%.2f", $n);
echo "\n";

$m = 123; //0123
$n = 12; //0012

printf("%04d \n", $m);
printf("%04d \n", $n);