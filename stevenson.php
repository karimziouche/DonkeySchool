<?php

$books = [
    "L'ile au trésor" => 1883,
    "Olalla" => 1885,
    "Fables" => 1895,
];

asort($books);

foreach ($books as $titles => $years){

    echo "> ";
    echo $years;
    echo " - ";
    echo $titles ."<br>";

}