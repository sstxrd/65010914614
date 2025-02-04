<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>อาทิตยา แสนมีมา (เปป)</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai+Looped:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
<style>
	.ibm{
  font-family: "IBM Plex Sans Thai Looped", sans-serif;
  font-weight: 400;
  font-style: normal;
	}
</style>
</head>

<body>
<h1 class="ibm"> ยินดีต้อนรับเข้าสู่ร้านขายของอิเล็กทรอนิกส์เคลื่อนที่</h1>
<h1 class="ibm"> สมัครสมาชิก </h1>
<h2  class="ibm">กรุณากรอกข้อมูลให้ครบถ้วนและถูกต้องตามความเป็นจริง</h2>
<form method="post" action="">
ชื่อ- สกุล <br> <input type="text" name="Name" required></br>
เพศ 
 	<input type="radio" name="title" value="ชาย"> ชาย
    <input type="radio" name="title" value="หญิง"> หญิง
    <input type="radio" name="title" value="Lgbt+">Lgbt+<br>
เบอร์โทรศัพท์ <br> <input type="tel" name="Phone" required></br>
Email <br> <input type="email" name="Email" required></br>
ที่อยู่  <br> 
    <textarea name="address" cols="27" rows="4"></textarea></br>
จังหวัด <br>
    <select name="province">
    	<option value="Blank">      </option>
    	<option value="ขอนแก่น">ขอนแก่น</option>
        <option value="มหาสารคาม">มหาสารคาม</option>
        <option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
        <option value="อุดรธานี">อุดรธานี</option>
        </select></br>
วันเดือนปีเกิด <br> <input type="date" name="Birthday"> </br>
	<br>
    <button type="submit" name="Submit" >Finish</button>
    <button type="reset">Cancle</button>
    <button type="button"  onClick="window.print() ;">print</button>
</form>
<hr>
<?php
if(isset($_POST['Submit'])){
echo "ชื่อ-สกุล :   "  	.$_POST['Name']."<br>";
echo "เบอร์โทรศัพท์ :    " .$_POST['Phone']."<br>";
echo "Email :    " .$_POST['Email']."<br>";
echo "ที่อยู่ :    "	 .$_POST['address']."<br>";
echo "จังหวัด :    "	 .$_POST['province']."<br>";
echo "วันเดือนปีเกิด :    " .$_POST['Birthday']."<br>";
}
?>
</body>
</html>