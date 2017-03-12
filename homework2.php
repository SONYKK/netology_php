<?php

$x = rand(0,100);
echo "Число:"." ".$x .'</br>';
$num1 = 1;
$num2 = 1; 

if ($num1 > $x) {
	echo "Задуманное число НЕ входит в числовой ряд" .'</br>';
		
}
else {
	while ($num1 <= $x) {
		if ($num1 != $x) {
			$num3 = $num1;
			$num1 = $num1 + $num2;
			$num2 = $num3;
		}
		else {
			echo "Задуманное число входит в числовой ряд" .'</br>';
			break;
			}
	}


}