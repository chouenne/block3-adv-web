<?php

$phaseToTest = "taco  ..cat.";
// The first idea is to compare the $forwards and $backwards

// $forwards = "";
// $backwards = "";
// for ($i = 0; $i < strlen($phaseToTest); $i++) {
//     //will echo every letter in phrase taco ..cat.
//     // echo $phaseToTest[$i];
//     if ($phaseToTest[$i] == " " || $phaseToTest[$i] == ".") {
//         // echo "skip";
//     } else {
//         $forwards .= $phaseToTest[$i];
//         // $forwards = $forwards . $phaseToTest[$i];
//         // $x = $x + 2;
//         // $x += 2;

//     }
// }
// // echo $forwards;


// for ($i = strlen($phaseToTest) - 1; $i >= 0; $i--) {
//     if (!($phaseToTest[$i] == " " || $phaseToTest[$i] == ".")) {
//         $backwards .= $phaseToTest[$i];
//     }
// }
// // echo $backwards;

// if ($forwards == $backwards) {
//     echo "palindrome!";
// } else {
//     echo "$phaseToTest is not palindrome!";
// }



// The second way is to compare from the front AND from the back simultaneously
// keep track of my front index
// keep track of my back index SEPARATELY
// $iFront = 0;

for ($i = 0, $backIndex = strlen($phaseToTest) - 1; $i < strlen($phaseToTest); $i++, $backIndex--) {
    // while I have a space or a period, skip to the next index
    if ($backIndex < $i) {
        echo "Palindrome!";
        break;
    }
    // Skip spaces and periods from the front of the string
    while ($phaseToTest[$i] == " " || $phaseToTest[$i] == ".") {
        $i++;
    }
    // Skip spaces and periods from the end of the string
    while ($phaseToTest[$backIndex] == " " || $phaseToTest[$backIndex] == ".") {
        $backIndex--;
    }
    // Print the indices and characters for debugging purposes
    echo "$i, $phaseToTest[$i], $backIndex, $phaseToTest[$backIndex]";
    // check if front chracter and back character are the same
    if ($phaseToTest[$i] != $phaseToTest[$backIndex]) {
        echo ("not a palindrome");
        break;
    }
}
