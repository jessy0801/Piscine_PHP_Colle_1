<?php
function colle($x, $y){
if($x < 0 || $y < 0){echo "Erreur !\n";}
$a = array();
$p = 0;
$f = $x * $y + $y - 1;
$h = $x * $y + $y - $x;
    for($i=1;$i<=$y;$i++){
        for($j=1;$j<=$x;$j++){
            if(($i==1 || $i==$y) || ($j==1 || $j==$x)){
		$p++;
                $a[$p] = "B";
		$a[1] = "A";
		$a[$x] = "C";
		$a[$f] = "C";
		$a[$h] = "A";
		echo $a[$p];
            }
            else{
		$p++;
                $a[$p] = " ";
		echo $a[$p];
            }
        }
	$p++;
        $a[$p] = "\n";
	echo $a[$p];
    }
}
colle(100, 100);
?>
