<?php
    // lees file input.txt
    $invoer = file('input.txt');

    //var_dump($invoer);

    // zit nu in array index => 'naam; score'
    // zet in associative array naam => score
    // of 2 dim. array index [naam, score]
    $i = 0;
    $a;

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

?>