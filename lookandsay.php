<?php
$result = 1;
for($i = 0; $i<10; $i++){
	
	$result = countDigit($result);	
	echo $result.'<br>';
}
function countDigit($arg){
	$string = $arg;
	$i = 0;
	$count = 1;
	$new_string = "";
	while($i < strlen($string) ){
	$hold = $string[$i];		
		while($i+1 <= strlen($string)){ 		
			$next = isset($string[$i+1])?$string[$i+1]:-1;		
			if($next==$hold){		
				$count++;		
			}else{
				$new_string .= $count.$hold;	
				$hold = $next;
				$count = 1;	
				break;
			}
			$i++;		
		}
	$i++;	
}
	return $new_string;	
}

