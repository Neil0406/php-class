<?php 
	$city = array('東京','台北','紐約');

	foreach ($city as $value) {
		echo $value ."<br>";
	}
	echo "<br>";
//----------------------------------------
	$city2 = array('japan' => '東京', 'taiwan'=>'台北', 'usa'=> '紐約');
	foreach ($city2 as $key => $value) {
		echo "key : $key, value: $value <br>";
	}
	echo "<br>";

//----------------------------------------
	#json 編碼，解碼
	
	$city3 = array('japan' => urlencode('東京'), 'taiwan'=>urlencode('台北'), 'usa'=>urlencode('紐約'));
	foreach ($city3 as $key => $value) {
		echo "key : $key, value: $value <br>";
	}

	$jsoncity = json_encode($city3); #編碼
	echo urldecode($jsoncity); #解碼
	echo "<br>";
//----------------------------------------


 ?>