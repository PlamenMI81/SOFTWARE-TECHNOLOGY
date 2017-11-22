<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
    <style>
        div {
            display: inline-block;
            margin: 5px;
            width: 20px;
            height: 20px;
        }
    </style> 
</head>
<body>
    <?php
        $color=0;
        for ($r=1;$r<=5;$r++){
            for ($c=1;$c<=10;$c++){?>
                <div style="background-color: rgb(<?=$color?>,<?=$color?>,<?=$color?>)"></div><?php
                $color+=5;
            }
            $color+=1;
            echo "</br>\n";
        }
    ?>
</body>
</html>