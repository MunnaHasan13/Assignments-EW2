<?php

$strings=["Hello", "World", "PHP", "Programming"];

function countVowels($string)
{
    $vowels=['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $count=0;
    
    for ($i=0; $i<strlen($string); $i++) {
        if (in_array($string[$i], $vowels)) {
            $count++;
        }
    }
    return $count;
}
foreach ($strings as $str) {
    $vowelCount = countVowels($str);
    $reversedStr = strrev($str);
    echo "Original String: $str, Vowel Count: $vowelCount, Reversed String: $reversedStr\n";
}
