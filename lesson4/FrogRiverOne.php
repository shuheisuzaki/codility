// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($X, $A) {
    // write your code in PHP7.0
    
    $check_array=array_fill(1,$X,0);
    $leaf_count=0;
    for($i = 0; $i < count($A); $i++):
        
        $leaf_posi=$A[$i];
        if($check_array[$leaf_posi]==0):
            $check_array[$leaf_posi]=1;
            $leaf_count++;
        endif;

        if($leaf_count==$X):
            return $i;
        endif;
    endfor;

    return -1;
}
