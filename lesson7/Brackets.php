// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($S) {
    // write your code in PHP7.0

	if(empty($S[0])) return 1;

	$left = array('{','[','(');
	$right = array('}',']',')');
	$nest = array('{'=>'}','['=>']','('=>')');
	$stack = array();

	for($i = 0; $i<strlen($S); $i++):
		if(in_array($S[$i], $left)):
			$stack[] = $S[$i];
		endif;
		if(in_array($S[$i],$right)):
			if(empty($stack)) return 0;
			if($nest[array_pop($stack)] != $S[$i]) return 0;
		endif;
	endfor;
	
	if(empty($stack)) return 1;
	else return 0;
}
