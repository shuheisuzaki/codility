// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    // write your code in PHP7.0
    
    sort($A);
    $only_positive_result = $A[count($A)-1] * $A[count($A)-2] * $A[count($A)-3];
    $with_2_negative_result=$A[count($A)-1] * $A[0] * $A[1];
    
    return max($only_positive_result, $with_2_negative_result);
    
}
