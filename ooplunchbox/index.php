<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once 'Classes/LunchBoxClass.php';
    $lunchbag01 = new LunchBag(8.5, 5.5, 2, 5.87, 5.75, 1.97);
    echo $lunchbag01->getLunchBagSize() . "<br>";
    echo $lunchbag01->getContainerSize() . "<br>";;
    echo $lunchbag01->compareSize() . "<br>";


    $lunchbag02 = new LunchBag(9.4, 6.7, 7.3, 6, 5.25, 5.25);
    echo $lunchbag02->getLunchBagSize() . "<br>";
    echo $lunchbag02->getContainerSize() . "<br>";;
    echo $lunchbag02->compareSize();
    ?>

</body>

</html>