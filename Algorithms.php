<?php
class Algorithms{
    function linearSearch($arr, $x)
    {
        $n = sizeof($arr);
        for($i = 0; $i < $n; $i++)
        {
            if($arr[$i] == $x)
                return $i;
        }
        return -1;  
    }

    function binarySearch(Array $arr, $x)
    {
    // check for empty array
        if (count($arr) == 0) 
            return false;
        $low = 0;
        $high = count($arr) - 1;
      
        while ($low <= $high) {
          
            // calculate middle index
            $mid = floor(($low + $high) / 2);
   
            // element found at mid
            if($arr[$mid] == $x) {
                return true;
            }
  
            if ($x < $arr[$mid]) {
                // search the left side of the array
                $high = $mid -1;
            }
            else {
                // search the right side of the array
                $low = $mid + 1;
            }
        }
        // If we reach here element x doesnt exist
        return false;
    }

    function interpolationSearch($list, $data) {
        $low = 0;
        $high = count($list) - 1;
        $index = -1;

        while ($low <= $high) {
            $mid = (int)($low + ((($high - $low) / ($list[$high] - $list[$low])) * 
                    ($data - $list[$low])));

            if ($list[$mid] == $data) {
                $index = $mid;
                break;
            }
            else {
                if ($list[$mid] < $data)
                    $low = $mid + 1;
            }
        }
        return $index;

    }

    function insertion_sort($my_array){
        $length=count($my_array);
        for($i=0;$i<$length;$i++){
            $value=$my_array[$i];
            $j=$i-1;
            while($j>=0 && $my_array[$j] >$value){
                $my_array[$j+1] = $my_array[$j];
                $j--;
            }
            $my_array[$j+1] = $value;
        }
        return $my_array;
    }

    function merge_sort($my_array){
        if(count($my_array) == 1)
            return $my_array;
        $mid = count($my_array) / 2;
        $left = array_slice($my_array, 0, $mid);
        $right = array_slice($my_array, $mid);
        $left = $this->merge_sort($left);
        $right = $this->merge_sort($right);
        return $this->merge($left, $right);
    }
    function merge($left, $right){
        $res = array();
        while(count($left) > 0 && count($right) > 0){
            if($left[0] > $right[0]){
			    $res[] = $right[0];
			    $right = array_slice($right , 1);
		    } else {
			    $res[] = $left[0];
			    $left = array_slice($left, 1);
		    }
	    }
	    while (count($left) > 0){
		    $res[] = $left[0];
		    $left = array_slice($left, 1);
	    }
	    while (count($right) > 0){
		    $res[] = $right[0];
		    $right = array_slice($right, 1);
	    }
	    return $res;   
    }
}

?>