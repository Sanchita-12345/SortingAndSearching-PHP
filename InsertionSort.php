<?php

function insertion_Sort($my_array)
{
	for($i=0; $i<count($my_array); $i++) {
		$val = $my_array[$i];
		$j = $i - 1;
		while ($j >= 0 && $my_array[$j] > $val) {
			$my_array[$j+1] = $my_array[$j];
			$j--;
		}
		$my_array[$j+1] = $val;
	}
return $my_array;
}
$test_array = array(10, 7, 8, 3, 1, 4, 2);
echo "Original Array : \n";
echo implode(', ',$test_array );
echo "\nSorted Array : \n";
echo implode(', ',insertion_sort($test_array))."\n";