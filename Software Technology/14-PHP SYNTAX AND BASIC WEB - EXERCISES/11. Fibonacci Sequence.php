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
		echo $y;
		for ($i = 1; $i < $num; $i++) {
			$z = $x + $y;
			echo " ".$z;
			$x = $y;
			$y = $z;
		}
	}
	?>
</body>
</html>

