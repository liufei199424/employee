<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>求</title>
    <div>
        <?php
            echo "男：敢问姑娘芳名啊，芳龄几许啊，可曾婚配啊，家居何所？双亲可曾安好？谈过几次恋爱啊？<br>";

            echo "{$nameone}：芳名{$nameone}，芳龄{$ageone}，家居南地，不曾婚约，父母健在，一次恋史。<br>";

            echo "男：姑娘似有心事？可跟在下说，说不定在下可以帮姑娘。<br>";

            echo "{$nameone}：真的吗？那就太感谢你了。老师让我背9x9乘法表，可是我只记得3x3哪里了，后面的都不记得了。怎么办啊？下午之前要是背不来，又得挨老师的骂了！哎！我真是笨啊！<br>";

            echo "男：我还以为是什么天大的事，原来就这个啊。这个好办，你可得好好听哦！我背来与你就是了！<br>";
            for ($i = 1; $i < 10; $i ++) {
                for ($j = 1; $j <= $i; $j ++) {
                    echo "{$i}x{$j}=" . $i * $j . " ";
                }
                echo "<br>";
            }

            echo "男：怎么样？没错吧！<br>";

            echo "{$nameone}：太厉害了你，快教教我啊！！！<br>";

            echo "男：只要你答应我一个条件。我就教你。<br>";

            echo "{$nameone}：好！莫说一个，就是一百个我也答应！快点教我吧！<br>";

            echo "男：哈哈！我的条件很简单，听好了：这个假期让我溜溜！！！<br>";

            echo "{$nameone}：汪汪汪。。。！！！<br>";

            echo "男：姑娘，我错了。有话好好说，别咬人啊！！！啊！！！<br>";
        ?>
    </div>
</head>
<body>

</body>
</html>