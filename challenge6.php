<?php

function writeSecretSentence (string $animal, string  $chose) {

    return $animal ." s'incline face à " .$chose;

}

echo writeSecretSentence("chat", "lune");