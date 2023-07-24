<?php

$filename = 'sample.txt';
$wordCount = countWordInAFile($filename);
echo "The number of words of {$filename} is: {$wordCount}";



function countWordInAFile($filename)
{
    $content = file_get_contents($filename);
    $contentWithoutWhiteSpacesAndPunctuation = preg_replace('/[^\p{L}\p{N}]+/u', ' ', $content);
    $words = explode(' ', trim($contentWithoutWhiteSpacesAndPunctuation));

    $words = array_filter(
        $words, function ($word) {
            return !empty($word);
        }
    );
    $wordCount = count($words);
    return $wordCount;
}
