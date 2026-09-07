<?php

$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)];

switch ($opponentWeapon) {

    case 'gun':
        $stevensonWeapon = 'whip';
        break;

    case 'fists':
        $stevensonWeapon = 'gun';
        break;

    case 'whip':
        $stevensonWeapon = 'fists';
        break;

}

    echo "oppenentWeapon : " .$opponentWeapon;
    echo "<br>";
    echo "stevensonWeapon : " .$stevensonWeapon;
