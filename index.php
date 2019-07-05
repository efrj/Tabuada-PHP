<?php

require 'vendor/autoload.php';

Flight::route('/', function(){
    $title = 'Tabuada PHP';
    $colors = [
        '#cb3d00',
        '#336699',
        '#521515',
        '#478244',
        '#8f2525',
        '#4e5b6e',
        '#ff5a36',
        '#004b26',
        '#295398',
        '#6f0000'
    ];
    
    Flight::render('tabuada.php', ['colors' => $colors, 'title' => $title]);
});

Flight::start();