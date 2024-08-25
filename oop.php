<?php

function countVowels($string) {
    $lowercaseString = strtolower($string);
    
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    
    $vowelCount = 0;
    
    foreach (str_split($lowercaseString) as $char) {
        if (in_array($char, $vowels)) {
            $vowelCount++;
        }
    }
    
    return $vowelCount;
}

function reverseString($string) {
    return strrev($string);
}

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    $vowelCount = countVowels($string);
    
    $reversedString = reverseString($string);
    
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}

?>
