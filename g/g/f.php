<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>อาทิตยา แสนมีมา (เปป) </title>
</head>

<body>
<h1>อาทิตยา แสนมีมา (เปป) สูตรคูณ while  </h1>
<form method="post" action="">
แม่สูตรคูณ <input type="number" min="2" max="1000" name="a" required autofocus>
<button type="submit" name="Submit">OK</button>
</form><hr>

<?php
if (isset($_POST['Submit'])) 	{
	$m = $_POST['a'];
	$i = 1;
	while($i<=12) {
		$X = $m * $i
?>
        <?=$m;?>  X  <?=$i;?> = <?=$X;?><br>
<?php
	$i++;
	}
} // end if
?>

</body>
</html>
