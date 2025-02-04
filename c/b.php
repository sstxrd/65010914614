<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>อาทิตยา แสนมีมา(เปป)</title>
</head>

<body>
<h1>อาทิตยา แสนมีมา(เปป)</h1>
<form method="post" action="">
	ตัวเลข <input type="number" name="a" min="0" max="100" required autofocus><br>
    ชื่อ-สกุล <input type="text" name="b" required><br>
    จังหวัด 
    <select name="province">
    	<option value="ขอนแก่น">ขอนแก่น</option>
        <option value="มหาสารคาม">มหาสารคาม</option>
        <option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
        <option value="อุดรธานี">อุดรธานี</option>
        </select>
    <br>
    วันเดือนปีเกิด <input type="date" name="Birthday"> 
    <br>
    <button type="submit" name="Submit" >OK</button>
    <button type="reset">Cancle</button>
    <button type="button"  onClick="window.print() ;">print</button>
</form>
<hr>

<?php
if(isset($_POST['Submit'])){
echo "ตัวเลข :   "  	.$_POST['a']."<br>";
echo "ชื่อ-สกุล :    " .$_POST['b']."<br>";
echo "จังหวัด :    "	 .$_POST['province']."<br>";
echo "วันเดือนปีเกิด :    " .$_POST['Birthday']."<br>";
}
?>

</body>
</html>