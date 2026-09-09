<?php

return [
    'all'        => 'Alle',
    'pedestrian' => 'Voetgangers',
    'bike'       => 'Tweewielers',
    'car'        => 'Auto\'s',
    'lorry'      => 'Grote voertuigen',
    'heavy'      => 'Grote voertuigen',
    'night'      => 'Nacht',

    // singular labels for the 10 fine-grained (AI-detected) modes, used by the
    // pie chart and 10-modes bar charts -- kept separate from the plural
    // legacy-4-mode labels above, which are also used as group headings.
    'fine' => [
        'pedestrian' => 'Voetganger',
        'stroller'   => 'Kinderwagen',
        'bicycle'    => 'Fiets',
        'motorcycle' => 'Motor',
        'car'        => 'Auto',
        'lighttruck' => 'Lichte vrachtwagen',
        'tractor'    => 'Tractor',
        'bus'        => 'Bus',
        'trailer'    => 'Aanhangwagen',
        'truck'      => 'Vrachtwagen',
    ],
];
