<ul>
<?php
$count = 1;
while ($count <= 20) {
    if ($count%2!=0){
        ?><li><span  style="color:blue"><?php echo $count;?></span></li><?php
    }
    else{
		?><li><span  style="color:green"><?php echo $count;?></span></li><?php
    }
$count++;
}
?></ul>