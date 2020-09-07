<?php 
	
	$myarray = array('東京','台北','紐約');
	echo $myarray[0];

	
	echo "<br>";
	$myarray2 = array('japan' => '東京', 'taiwan'=>'台北', 'usa'=> '紐約');

	echo $myarray2['usa'];

//----------------------------------------
	#function
	echo "<br>";
	function convertF($degreeC){
		return $degreeC *1.8 +32;
	}
	echo convertF(3);
	

 ?>