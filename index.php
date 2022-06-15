<?php

$title = 'Tabuada PHP';

function randomColor(){
    $rcolor = '#';
    for($i=0;$i<6;$i++) {
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
        $rcolor .= $rNumber;
    }
    
    return $rcolor;
}

include('tabuada.php');