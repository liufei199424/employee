<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List</title>
</head>
<body>
    <?php
        if ($one instanceof People) {
            echo $one->name . "<br>";
        } else {
            echo "差无耻人<br>";
        }

        foreach ($list as $people) {
            echo $people->id . "<br>";
            echo $people->createtime . "<br>";
            echo $people->updatetime . "<br>";
            echo $people->name . "<br>";
        }
    ?>
</body>
</html>