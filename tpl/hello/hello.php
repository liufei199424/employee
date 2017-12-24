<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>静态页面</title>
    <div>
        梅花香自苦寒来！！！
        <?php
            echo "<br>";
            for ($i = 1; $i < 10; $i ++) {
                for ($j = 1; $j <= $i; $j ++) {
                    echo "{$i}x{$j}=" . $i * $j . " ";
                }
                echo "<br>";
            }
        ?>
    </div>
</head>
<body>

</body>
</html>