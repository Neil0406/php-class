<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<form method="post" action="class4-03-1.php">
  姓&nbsp;&nbsp;&nbsp;名：<input type="text" name="UserName" size="40"><br>
  E-Mail：<input type="text" name="UserMail" size="40" value="username@mailserver"><br>
  年&nbsp;&nbsp;齡：
  <input type="radio" name="UserAge" value="Age1">未滿20歲
  <input type="radio" name="UserAge" value="Age2" checked>20~29
  <input type="radio" name="UserAge" value="Age3">30~39
  <input type="radio" name="UserAge" value="Age4">40~49
  <input type="radio" name="UserAge" value="Age5">50歲以上<br>
  您使用過哪些廠牌的手機？
  <input type="checkbox" name="UserPhone[]" value="hTC" checked>hTC
  <input type="checkbox" name="UserPhone[]" value="Apple">Apple
  <input type="checkbox" name="UserPhone[]" value="ASUS">ASUS
  <input type="checkbox" name="UserPhone[]" value="acer">acer<br>
  您使用手機時最常碰到哪些問題？<br>
  <textarea name="UserTrouble" cols="45" rows="4">上網速度不夠快</textarea><br>
  您使用過哪些電信業者的門號？(可複選)
  <select name="UserNumber[]" size="4" multiple>
    <option value="中華電信">中華電信
    <option value="台灣大哥大" selected>台灣大哥大
    <option value="遠傳">遠傳
    <option value="亞太電信">亞太電信
  </select><br>
  <input type="submit" value="提交">
  <input type="reset" value="重新輸入">
</form>

	
</body>
</html>
