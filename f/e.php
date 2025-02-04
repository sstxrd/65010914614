<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>อาทิตยา แสนมีมา (เปป)</title>
</head>

<body>
<h1>อาทิตยา แสนมีมา (เปป)</h1>
<h2> ฟอร์มรับราคาสินค้ารวม </h2>
<form method="post" action="">
ราคาสินค้า <input type="number"  name="a"min="0" autofocus required> 
<button type="submit" name="Submit">OK</button>
</form>
<hr>

<?php
if(isset($_POST['Submit'])){
$price = $_POST['a'];
if($price>=5000){
	$discount = $price * 0.15 ;
}else if ($price>=2000){
	$discount = $price * 0.10 ;
}else if($price>=1000){
	$discount = $price * 0.05 ;
}else{
	$discount = 0;
}
$net = $price - $discount;

echo "ราคาสินค้ารวม ".number_format($price,0)." บาท<br>";
echo "ส่วนลดที่ได้รับ ".number_format($discount,0)." บาท<br>";
echo "จำนวนเงินที่จ่ายจริง ".number_format($net,0)." บาท<br>";
}

?>

</body>
</html>
