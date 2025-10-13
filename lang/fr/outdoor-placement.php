<?php

return [

    'title' => 'Outil de placement extérieur',
    'subtitle' => 'Votre emplacement est-il adapté ?',

    'near-side' => 'Distance entre le poteau et la rue',
    'width-street' => 'Largeur de la rue',
    'mount-height' => 'Hauteur de l\'appareil',


    // 1. near side
    'val-block-1-title' => 'Côté proche',
    'val-block-1-info' => 'Mon Telraam S2 Outdoor peut-il détecter les objets du côté proche?',

    'val-block-1-good-title' => 'Distance d’au moins 2 m ET angle vers le côté le plus proche de la zone de surveillance d’au moins 20°',
    'val-block-1-good-info' => 'Tous les objets du côté proche sont dans le champ de vision et reconnaissables.',

    'val-block-1-poor-title' => 'Distance inférieure à 1 m OU angle inférieur à 10°',
    'val-block-1-poor-info' => 'Certains objets du côté proche peuvent être manqués.',

    'val-block-1-bad-title' => 'Distance is less than 1 m OR the angle to the nearest side of the monitoring area is less than 10°',
    'val-block-1-bad-info' => 'La plupart des objets du côté proche seront manqués.',

    // 2. blocking view
    'val-block-2-title' => 'Obstruction de la vue',
    'val-block-2-info' => 'Risque que les objets du côté proche masquent ceux du côté éloigné?',

    'val-block-2-good-title' => 'Angle vers le centre de la chaussée de 30° à 60°',
    'val-block-2-good-info' => 'Très peu de risque que les objets du côté proche masquent ceux du côté éloigné.',

    'val-block-2-poor-title' => 'Angle vers le centre de la chaussée supérieur à 60°',
    'val-block-2-poor-info' => 'Un trafic dense sur les voies proches du Telraam S2 Outdoor peut empêcher un comptage précis des objets sur les voies plus éloignées, les pistes cyclables et les trottoirs.',

    // 3. far side
    'val-block-3-title' => 'Côté lointain',
    'val-block-3-info' => 'Mon Telraam S2 Outdoor voit-il tous les objets du côté éloigné?',

    'val-block-3-good-title' => 'Objets à moins de 25 m',
    'val-block-3-good-info' => 'Tous les objets sont suffisamment grands pour être détectés.',

    'val-block-3-poor-title' => 'Objets entre 25 m et 40 m',
    'val-block-3-poor-info' => 'certains objets, en particulier les plus petits comme les piétons, peuvent être manqués.',

    'val-block-3-bad-title' => 'Objets au-delà de 40 m',
    'val-block-3-bad-info' => 'Les objets du côté éloigné seront trop petits et ne seront probablement pas détectés.',

    // 4. far side
    'val-block-4-title' => 'Dispositif de hauteur',
    'val-block-4-info' => 'Mon Telraam S2 Outdoor est-il installé assez haut?',

    'val-block-4-good-title' => 'Installation au-delà de 3 m',
    'val-block-4-good-info' => 'Bien hors de portée; à cette hauteur, il faut une action délibérée et du matériel pour retirer ou endommager l’appareil.',

    'val-block-4-bad-title' => 'Installation en dessous de 3 m',
    'val-block-4-bad-info' => 'Trop bas ; votre Telraam S2 Outdoor est facilement vulnérable au vandalisme.',

    // warning
    'warning' => "Toutes les alertes ne sont pas rédhibitoires. Évaluez chacune d'entre elles en fonction de ce qui importe le plus pour vos objectifs en matière de comptage du trafic."


];
