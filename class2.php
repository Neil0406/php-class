<?php 
	echo ("c:\\win");   #. \ 跳脫字元
	echo ("<br>");      #   換行
	echo ("I am \"jean\"");
	
	echo ("<br>");
	$var =  True;    #變數前要加$
	echo $var;            #引用也要加$
	echo gettype($var);   #看型態
	
	echo ("<br>");
	settype($var, "integer");  #轉換型別需打全名
	echo $var;

	echo ("<br>");
	$var =  True;
	intval($var);          #轉換型別2
//----------------------------------------
	echo ("<br>");
	$myName = "Neil";
	echo $myName;

	echo("<br>");
	define("pi", 3.14);     #常數（名稱, 值）
	echo pi;

	echo("<br>");
	define('x', 10 * 5);
	define('y', x + 5);
	echo 'define y:'.y;   #字串連結 .y
//----------------------------------------
	echo("<br>");
	$a = "php" ."5";
	echo("<br>");
	echo $a;

	echo("<br>");
	$x = 10;
	$y = 5;
	echo ++$x;
	echo("<br>");
	echo $y++;

	echo("<br>");
	$x = 10;
	$y = 5;
	echo --$x;
	echo("<br>");
	echo $y--;
	echo("<br>");
	echo $y;
//----------------------------------------
	echo("<br>");
	$x = 10;
	$y = 5;
	echo $x == $y;  #fales 不會print
	echo("<br>");
	echo $x != $y;
	echo("<br>");
	echo 3 == 3 && 4 == 4;
//----------------------------------------
	echo("<br>");
 	$a = `pwd`;    #路徑
 	echo $a;


 ?>