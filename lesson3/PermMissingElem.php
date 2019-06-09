// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    // write your code in PHP7.0
    $max_num=count($A)+1;
    $check=array_fill(0, $max_num+1, 0);
    for($i = 0 ; $i < count($A); $i++):
        $element=$A[$i];
        $check[$element]=1;
    endfor;
    
    for($i = 1 ; $i <= $max_num; $i++):
        if($check[$i]==0):
            return $i;
        endif;
    endfor;

    
}
