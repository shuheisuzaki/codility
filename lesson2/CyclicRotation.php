// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A, $K) {
    // write your code in PHP7.0
    $result=array();
    $A_len=count($A);
    foreach($A as $id => $element):
        if($id + $K < $A_len):
            $result[$id +$K]= $A[$id];
        else:
            $result[($id +$K)%$A_len]=$A[$id];
        endif;
    endforeach;
    
    return $result;
}
