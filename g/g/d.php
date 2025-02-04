<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>อาทิตยา แสนมีมา (เปป) </title>
</head>

<body>
<h1>อาทิตยา แสนมีมา (เปป)  </h1>
<form method="post" action="">
จำนวน <input type="number" name="a" required autofocus>
<button type="submit" name="Submit">OK</button>
</form><hr>

<?php
if (isset($_POST['Submit'])) {
	$count = $_POST['a'];
	echo "แสดงจำนวน $count รูป <br><br>";
	for($i=1; $i<=$count; $i++) {
?>
	
	<img src="samoyy.jfif" width="200"><br>พี่ฉาวคับ<br>
    
<?php 
										} // end for
} // end if 

?>
</body>
</html>
