// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    // write your code in PHP7.0
    
	$pre2_element=0;
	$pre1_element=0;
	$nex1_element=$A[2];
	$count_decrease=0;
	$count=0;

	for($i = 1; $i < count($A) ; $i++):
		if($pre1_element > $A[$i]):

			$count_decrease++;
			if($count_decrease > 1):
				return 0;
			endif;

			if($pre1_element > $A[$i]):
				if($pre2_element <= $A[$i] ):
					$count++;
				endif;
				
				if($pre1_element <= $nex1_element || $i==count($A)-1):
					$count++;
				else:
					return 0;
				endif;
			endif;
			
			$count_decrease++;

		endif;
		
		$pre2_element=$pre1_element;
		$pre1_element=$A[$i];
		if ($i < count($A)-1 ):
			$nex1_element=$A[$i +2];			
		endif;
		

	endfor;

	if($count_decrease == 0):
		return count($A);
	endif;
	
	return $count;

}
