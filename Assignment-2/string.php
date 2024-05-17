<?php 
$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
      $vowelCount = 0;

    $vowels = ['a', 'e', 'i', 'o', 'u'];

    $stringLower = strtolower($string); 

    for ($i = 0; $i < strlen($stringLower); $i++) {

        if (in_array($stringLower[$i], $vowels)) {

            $vowelCount++;

        }

    }
    $reversedString = strrev($string);

    echo "Original String: {$string}, Vowel Count: {$vowelCount}, Reversed String: {$reversedString}\n";

}

