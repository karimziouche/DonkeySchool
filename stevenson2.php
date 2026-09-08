<?php

$movies = [
    "L'ile au trésor" => ["Bobby Driscoll, ", "Robert Newton, ", " Basil Sydney, ", " Finlay Currie."],
    "La planète au trésor des muppets" => ["Tim Curry, ", " Billy Connolly, ", " Jennifer Saunders, ", "Kevin Bishop, ", " Dave Goelz."],
    "Docteur Jekyll et Mister Hyde" => ["Spencer Tracy, ", " Ingrid Bergman, ", " Lana Turner."],
];

foreach ($movies as $titles => $names) {

    echo "Dans le film " .$titles;
    echo ", les principaux acteurs sont: ";

foreach ($names as $actors) {
    
    echo $actors;

    }
    echo "<br>";
    echo "<br>";
}