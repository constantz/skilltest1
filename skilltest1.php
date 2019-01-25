<?php
    // lees file input.txt
    $invoer = file('input.txt');

    var_dump($invoer);

    // zit nu in array index => 'naam; score'
    // zet in associative array [naam, score]
    
    $lijst = [];
    foreach($invoer as $inv){
        $aregel = explode(';', $inv);
        $naam =  $aregel[0];
        $score = (int)($aregel[1]);
        $lijst[]  = ['naam' => $naam, 'score' => $score   ];
    }
    var_dump($aregel);
    var_dump($lijst);

    function cmp($rija, $rijb) {
        if ($rija['score'] == $rijb['score']) {
            return 0;
        }
        return ($rija['score'] < $rijb['score']) ? -1 : 1;
    }

    uasort($lijst, 'cmp');
    // sorteer op score
    // $sorting = true;

    // while $sorting {
    //     $sorting = false;
    //     foreach($lijst as $element){
    //         if($element['score'])
    //     }


    // }



    // schrijf naar output.txt
    $uitvoerString = "";
    foreach($lijst as $regel){
        $uitvoerString = $uitvoerString . $regel['naam'] . '; ' . $regel['score'] . "\n";
    }
    file_put_contents('output.txt', $uitvoerString);
?>