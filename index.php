<?php

function randomColor(array $ignoredColors = [])
{
    $color = '#';

    for($i=0; $i<6; $i++) {
        $randomNumber = rand(0,15);

        switch ($randomNumber) {
            case 10:$randomNumber = 'A';
                break;
            case 11:$randomNumber = 'B';
                break;
            case 12:$randomNumber = 'C';
                break;
            case 13:$randomNumber = 'D';
                break;
            case 14:$randomNumber = 'E';
                break;
            case 15:$randomNumber = 'F';
                break;
        }

        $color .= $randomNumber;
    }
    
    if (count($ignoredColors) > 0) {
        if (in_array($color, $ignoredColors)) {
            randomColor($ignoredColors);
        }
    }

    return $color;
}

$ignoredColors = [
    '#FFFFFF',
    '#EFEFEF'
];

include('view.php');