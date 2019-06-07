// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($N) {
    // write your code in PHP7.0
    $max_bin_gap=0;
    $N_binrep=decbin($N);
    $N_binrep_len=strlen($N_binrep);
    
    $num=0;
    $pre_bit=1;
    $count=0;
    while($num <  $N_binrep_len):
    $target_bit=substr($N_binrep,$num,1);
    
    if($pre_bit==0):
        if    ($target_bit==0):
            $count++;
        elseif($target_bit==1):
            if($count > $max_bin_gap):
                $max_bin_gap=$count;
            endif;
        endif;
    elseif($pre_bit==1):
        if    ($target_bit==0):
            $count=1;
        elseif($target_bit==1):
        endif;
    endif;

    $pre_bit=$target_bit;
    $num++;    
    endwhile;
    
    print "N_binrep_len=".$N_binrep_len."\n";
    print "num=".$num."\n";
    print "target_bit=".$target_bit."\n";
    print "N_binrep=".$N_binrep."\n";
    print "max_bin_gap=".$max_bin_gap."\n";
    
    return $max_bin_gap;
}
