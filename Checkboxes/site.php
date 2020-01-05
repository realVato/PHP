<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="site.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apples">
        Oranges: <input type="checkbox" name="fruits[]" value="Oranges">
        Pears: <input type="checkbox" name="fruits[]" value="Pears">
        <button type="submit">Submit</button>
    </form>

    <?php
        $fruits = $_POST["fruits"];
        echo $fruits[0];
    ?>

</body>

</html>