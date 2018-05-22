<?php
  function fiva($number){
		//echo substr("Hello world",-2)."<br>";
		//die();
		$sufix=$number+1;
		$prefix=$number-1;
		
		for($i=$number; $i >= 0; $i--){
			//echo "*";
			$temp1="";
			$temp2="";
			for($j=$i; $j >= 1; $j--){
				//echo (string)$sufix;
				
				$temp1=$temp1.(string)$prefix;
				$temp2=$temp2.(string)$sufix;
			}
			$temp1= substr($temp1,-2);
			if ($i!=1){
				echo $temp1.$temp2;
			}else{
				echo "0".$temp1.$temp2;
			}
			
			$temp="";
			$temp2="";
			$prefix--;
			$sufix --;
			echo "</br>";
				//echo $i;
		}
		
		
	}
	
	fiva(5);
?>