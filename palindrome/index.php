<?php

// <style>
//     .even {
//         background-color: aqua;
//     }

//     p:nth-child(even) {
//         background-color: aliceblue;
//     }
// </style> 

// $x = 17;
// $y = 5;
// echo $x % $y;

// if($x % $y) {
//     echo "Odd";}

// $sampleArray = array(1, 2, 3, "red", "yellow", "blue");

// for ($i = 0; $i < count($sampleArray); $i++) {
//     $class = ($i) % 2 ? "odd" : "even";
//     echo "<p class='$class'>index $i contains: $sampleArray[$i]</p>";
// }

//crate a function that checks if a word is a palindrome, using only basics

// function palindromeWord($word)
// {
//     // if ($word[0] == $word[length]) & ($word[1] == $word[length-1])

//     $length = strlen($word);
//     for ($i = 0; $i < $length / 2; $i++) {
//         if ($word[$i] != $word[($length - 1) - $i]) {
//             return false;
//         }
//     }
//     return true;
// }

// $word = "mbgvfm";
// // echo strlen($word);
// // echo $word[2];
// // echo $word[3];

// if (palindromeWord($word)) {
//     echo "$word is a palindrome.";
// } else {
//     echo "$word is not a palindrome.";
// }


function isPalindrome($str)
{
    // Remove spaces and punctuation and convert to lowercase
    $cleanedStr = strtolower(preg_replace('/[^a-z]+/', '', $str));

    // Check if the cleaned string is the same forwards and backwards
    return $cleanedStr === strrev($cleanedStr);
}

// Example usage
$sentence = "A man, a plan, a canal: Panama";
if (isPalindrome($sentence)) {
    echo "The sentence is a palindrome!";
} else {
    echo "The sentence is not a palindrome.";
}
