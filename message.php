<?php

$message = "0@sn9sirppa@#?ia’jgtvryko1";
$message2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
$message3 = "aopi?sgnirts@#?sedhtg+p9l!";

$length = strlen($message);
$key = $length / 2;

    echo $key ."<br>";
    echo "<br>";

$length2 = strlen($message2);
$key2 = $length2 / 2;

    echo $key2 ."<br>";
    echo "<br>";

$length3 = strlen($message3);
$key3 = $length3 / 2;

    echo $key3 ."<br>";
    echo "<br>";

$part1 = substr($message, 5, $key);
    
    echo $part1 ."<br>";
    echo "<br>";

$part2 = substr ($message2, 5, $key2);

    echo $part2 ."<br>";
    echo "<br>";

$part3 = substr ($message3, 5, $key3);

    echo $part3 ."<br>";
    echo "<br>";

$replace = str_replace("@#?"," ", $part1);

    echo $replace ."<br>";
    echo "<br>";

$replace2 = str_replace("@#?", " ",$part2);

    echo $replace2 ."<br>";
    echo "<br>";

$replace3 = str_replace("@#?", " ", $part3);

    echo $replace3 ."<br>";
    echo "<br>";

$reverseMessage = strrev($replace);

    echo $reverseMessage ."<br>";
    echo "<br>";

$reverseMessage2 = strrev($replace2);

    echo $reverseMessage2 ."<br>";
    echo "<br>";

$reverseMessage3 = strrev($replace3);

    echo $reverseMessage3 ."<br>";
    echo "<br>";