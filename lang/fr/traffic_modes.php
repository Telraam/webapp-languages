<?php

return [
    'all'        => 'Tous',
    'pedestrian' => 'Piétons',
    'bike'       => 'Deux-roues',
    'car'        => 'Voitures',
    'lorry'      => 'Véhicules grands',
    'heavy'      => 'Véhicules grands',
    'night'      => 'Nuit',

    // singular labels for the 10 fine-grained (AI-detected) modes, used by the
    // pie chart and 10-modes bar charts -- kept separate from the plural
    // legacy-4-mode labels above, which are also used as group headings.
    'fine' => [
        'pedestrian' => 'Piéton',
        'stroller'   => 'Poussette',
        'bicycle'    => 'Vélo',
        'motorcycle' => 'Moto',
        'car'        => 'Voiture',
        'lighttruck' => 'Camion léger',
        'tractor'    => 'Tracteur',
        'bus'        => 'Bus',
        'trailer'    => 'Remorque',
        'truck'      => 'Camion',
    ],
];
