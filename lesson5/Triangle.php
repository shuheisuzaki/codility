// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    // write your code in PHP7.0
    sort($A);
    for($i=2; $i<count($A); $i++):
        if($A[$i-2]+$A[$i-1] > $A[$i]):
            return 1;
        endif;
    endfor;

    return 0;
    
}
