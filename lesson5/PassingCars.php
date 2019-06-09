// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    // write your code in PHP7.0

    $count_pairs=0;
    $count_p_pattern=0;
    for($i = 0; $i < count($A); $i++):
        if($A[$i] == 0):
            $count_p_pattern++;
        else:
            $count_pairs = $count_pairs + $count_p_pattern;
        endif;
        
        if($count_pairs > 1000000000):
            return -1;
        endif;
    endfor;

    return $count_pairs;
}
