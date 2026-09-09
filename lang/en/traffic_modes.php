<?php

return [
    'all'        => 'All',
    'pedestrian' => 'Pedestrians',
    'bike'       => 'Two-wheelers',
    'car'        => 'Cars',
    'lorry'      => 'Heavy vehicles',
    'heavy'      => 'Heavy vehicles',
    'night'      => 'Night',

    // singular labels for the 10 fine-grained (AI-detected) modes, used by the
    // pie chart and 10-modes bar charts -- kept separate from the plural
    // legacy-4-mode labels above, which are also used as group headings.
    'fine' => [
        'pedestrian' => 'Pedestrian',
        'stroller'   => 'Stroller',
        'bicycle'    => 'Bicycle',
        'motorcycle' => 'Motorcycle',
        'car'        => 'Car',
        'lighttruck' => 'Light truck',
        'tractor'    => 'Tractor',
        'bus'        => 'Bus',
        'trailer'    => 'Trailer',
        'truck'      => 'Truck',
    ],
];
