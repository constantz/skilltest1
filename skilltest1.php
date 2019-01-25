<?php
    // lees file input.txt
    $invoer = file('input.txt');

    //var_dump($invoer);

    // zit nu in array index => 'naam; score'
    // zet in associative array [naam, score]
    
    $i = 0;

    $lijst = [];
    foreach($invoer as $inv){
        $aregel = explode(';', $inv);
        
            $naam =  $aregel[0];
            $score = (int)($aregel[1]);
            $lijst[]  = ['naam' => $naam, 'score' => $score   ];
        $i++;

    }
    
    var_dump($lijst);


    // sorteer op score


    // schrijf naar output.txt
    $uitvoerString = "";
    foreach($lijst as $regel){
        $uitvoerString = $uitvoerString . $regel['naam'] . '; ' . $regel['score'] . "\n";
    }
    file_put_contents('output.txt', $uitvoerString);
?>