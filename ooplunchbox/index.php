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
    $lunchbag01 = new LunchBag("Roots", "gray", "8L");
    // echo $lunchbag01->brand;
    // $lunchbag02 = new LunchBag("Columbie", "black");
    // echo $lunchbag01->volume;
    // echo $lunchbag01->getLunchBagInfo();
    // echo $lunchbag01->volume;
    echo $lunchbag01->setBrand("columbie");
    echo $lunchbag01->getBrand();
    ?>

</body>

</html>