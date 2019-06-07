// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    // write your code in PHP7.0
    
    $num=0;
    $A_len=count($A);
    $check=array_fill(0, $A_len, 0);

    while($num < $A_len):
        
        if($check[$num]!=1):
            $num_search=$num;
            do
                $num_search++;
            while($num_search<$A_len && ($A[$num_search] != $A[$num] or $check[$num_search]==1));

            if($num_search == $A_len):
                $unpaiered=$A[$num];
                break 1;
            endif;
            
            $check[$num]=1;
            $check[$num_search]=1;
        endif;

        $num++;
    endwhile;
 
    return  $unpaiered;
}
