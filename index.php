<?php

function randomColor(array $ignoredColors = [])
{
    $color = '#';

    for($i=0; $i<6; $i++) {
        $rNumber = rand(0,15);

        switch ($rNumber) {
            case 10:$rNumber = 'A';
                break;
            case 11:$rNumber = 'B';
                break;
            case 12:$rNumber = 'C';
                break;
            case 13:$rNumber = 'D';
                break;
            case 14:$rNumber = 'E';
                break;
            case 15:$rNumber = 'F';
                break;
        }

        $color .= $rNumber;
    }
    
    if (count($ignoredColors) > 0) {
        if (in_array($color, $ignoredColors)) {
            randomColor();
        }
    }

    return $color;
}

$ignoredColors = ['#FFFFFF', '#CCCCCC', '#65CEA5', '#9E12C1', '#ECDAD0', '#EFFCDB', '#D597B3', '#E5B89B', '#C41CF9', '#DB26EA', '#7BF8E5', '#FAE96E'];

include('view.php');