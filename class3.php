<?php 
	$a = 30;      #if.  else 用法
	$b = 20;
	if ($a > $b) {
		echo "$a > $b";
	}

	echo("<br>");
	$score = 61;
	if ($score > 60) {
		echo "及格";
	}else{
		echo "不及格";
	}

	echo("<br>");
	$score = 53;
	if ($score > 90) {
		echo "優等";
	}elseif($score > 80){
		echo "甲等";
	}elseif($score > 60){
		echo "乙等";
	}else{
		echo "不及格";
	}

//----------------------------------------
	echo("<br>");       #switch
	$num = 2;           #假設num == case 
	switch ($num) {
		case 1:
			echo "case 1";
			break;
		case 2:
			echo "case 2";
			break;	
		case 3:
			echo "case 3";
			break;	
		
		default:
			echo 'default';
			break;
	}



 ?>