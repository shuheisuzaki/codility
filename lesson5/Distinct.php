// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    // write your code in PHP7.0
    $A_distinct=array_unique($A);
    return count($A_distinct);
}
