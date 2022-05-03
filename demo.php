<?php
$VoitureType = 'trick';
$nbpneu = 3;

$RéductionF1 = (100 - 15)/ 100;
$RéductionF2 = (100 - 25)/100;


switch($nbpneu) {
    case 2:
        echo ' pour 2 pneux F1'.' '. 2*60 . '€ les pneux        ';
        echo ' pour 2 pneux F2'.' '. 2*75 . '€ les pneux'; 
            break;
    case 3:
        echo ' pour 3 pneux F1'.' '. 3*60 . '€ les pneux        ';
        echo ' pour 3 pneux F2 '.' '. ((3*75)*$RéductionF2) . '€ les pneux'; 
            break;
    case 4:
        echo ' pour 4 pneux F1'.' '. ((4*60)*$RéductionF1) . '€ les pneux       ';
        echo ' pour 4 pneux F2'.' '. ((4*75)*$RéductionF2) . '€ les pneux'; 
            break;
    default:
        echo 'calcule non pris en compte';
};