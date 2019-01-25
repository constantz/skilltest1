<?php
    $invoer = file('input.txt');
    $lijst = [];
    foreach($invoer as $inv){
        $aregel = explode(';', $inv);
        $naam =  $aregel[0];
        $score = (int)($aregel[1]);
        $lijst[]  = ['naam' => $naam, 'score' => $score   ];
    }
    uasort($lijst, function ($rija, $rijb) {
        return ($rija['score'] - $rijb['score']);
        }
    );
    $uitvoerString = "";
    foreach($lijst as $regel){
        $uitvoerString = $uitvoerString . $regel['naam'] . '; ' . $regel['score'] . "\n";
    }
    file_put_contents('output.txt', $uitvoerString);
?>