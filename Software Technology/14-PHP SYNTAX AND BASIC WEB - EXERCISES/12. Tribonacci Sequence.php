<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
    <form>
        N: <input type="text" name="num" />
        <input type="submit" />
    </form>
	<?php
	$num=0;
	if (isset($_GET['num'])) {
		$num = intval($_GET['num']);

		$x = 0;
		$y = 1;
		$z=1;
		echo $y." ".$z;
		for ($i = 2; $i < $num; $i++) {
			$s = $x + $y+$z;
			echo " ".$s;
			$x = $y;
			$y = $z;
			$z=$s;
		}
	}
	?>
</body>
</html>