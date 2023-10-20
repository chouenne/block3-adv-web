<?php
$phaseToTest = "taco  ..cat.";

$forwards = "";
// $backwards = "";
for ($i = 0; $i < strlen($phaseToTest); $i++) {
    //will echo every letter in phrase taco ..cat.
    // echo $phaseToTest[$i];
    if ($phaseToTest[$i] == " " || $phaseToTest[$i] == ".") {
        echo "skip";
    } else {
        $forwards .= $phaseToTest[$i];
        // $forwards = $forwards . $phaseToTest[$i];
        // $x = $x + 2;
        // $x += 2;
        echo $forwards;
        // ttatactacoskipskipskipskiptacoctacocatacocatskip
    }

    // if ($phaseToTest[$i] != " " && $phaseToTest[$i] != ".") {
    //     $forwards .= $phaseToTest[$i];
    // }
}
