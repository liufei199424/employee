<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List</title>
</head>
<body>
    <?php
        foreach ($list as $people) {
            echo $people->id . "<br>";
            echo $people->createtime . "<br>";
            echo $people->updatetime . "<br>";
            echo $people->name . "<br>";
        }
    ?>
</body>
</html>