<?php

return [
    'all'        => 'Alle',
    'pedestrian' => 'Fußgänger',
    'bike'       => 'Zweiräder',
    'car'        => 'Autos',
    'lorry'      => 'Schwere Fahrzeuge',
    'heavy'      => 'Schwere Fahrzeuge',
    'night'      => 'Nacht',

    // singular labels for the 10 fine-grained (AI-detected) modes, used by the
    // pie chart and 10-modes bar charts -- kept separate from the plural
    // legacy-4-mode labels above, which are also used as group headings.
    'fine' => [
        'pedestrian' => 'Fußgänger',
        'stroller'   => 'Kinderwagen',
        'bicycle'    => 'Fahrrad',
        'motorcycle' => 'Motorrad',
        'car'        => 'Auto',
        'lighttruck' => 'Leichter Lkw',
        'tractor'    => 'Traktor',
        'bus'        => 'Bus',
        'trailer'    => 'Anhänger',
        'truck'      => 'Lkw',
    ],
];
