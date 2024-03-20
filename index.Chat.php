<?php

require_once 'class.Chat.inc.php';

$felix = new Chat('Félix', 'persan', new DateTime('2021-1-1'));
$sylvestre = new Chat('Sylvestre', 'gouttière', new DateTime('2022-2-2'), 'Miaouu');
$isidore = new Chat('Isidore', 'siamois', new DateTime('2023-3-3'), 'Miaouuuuu');
$fripon = new Chat('Fripon', 'siamois', new DateTime('2024-4-4'), 'Miiiiiou');

$reponse = readline(" Quel est le nom du chat ? ");
switch($reponse) {
    case('felix'):
        echo $felix->decrire();
        break;
    case('sylvestre'):
        echo $sylvestre->decrire();
        break;
    case('isidore'):
        echo $isidore->decrire();
        break;
    case('fripon'):
        echo $fripon->decrire();
        break;

    default:
    echo "Le chat n'existe pas, seul felix, sylvestre, isidore et fripon sont présent";
}