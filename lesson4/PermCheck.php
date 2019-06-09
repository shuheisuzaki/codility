// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    // write your code in PHP7.0
    
    $check=array_fill(1,count($A)+1,0);
    
    for($i = 0 ; $i < count($A) ; $i++ ):
        $element=$A[$i];
        $check[$element]=1;
    endfor;

    for($i = 1 ; $i < count($A)+1 ; $i++ ):
        if($check[$i] != 1):
            return 0;
        endif;
    endfor;
    
    return 1;
}
