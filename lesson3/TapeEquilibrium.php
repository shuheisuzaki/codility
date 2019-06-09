// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    // write your code in PHP7.0
    
    $A_len=count($A);
    $sum_first=(int)$A[0];
    $sum_second=(int)(array_sum($A) -$A[0]);
    $min_diff=abs($sum_first - $sum_second);
    for($p = 1; $p < $A_len; $p++):

        if(abs($sum_first - $sum_second) <$min_diff):
            $min_diff=abs($sum_first - $sum_second);
        endif;
        
        $sum_first= $sum_first +$A[$p];
        $sum_second= $sum_second -$A[$p];

    endfor;
    
    return $min_diff;
}
