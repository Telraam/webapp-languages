<?php

return [
    'all'        => 'Todos',
    'pedestrian' => 'Peatones',
    'bike'       => 'Vehículos de dos ruedas',
    'car'        => 'Coches',
    'lorry'      => 'Vehículos pesados',
    'heavy'      => 'Vehículos pesados',
    'night'      => 'Noche',

    // singular labels for the 10 fine-grained (AI-detected) modes, used by the
    // pie chart and 10-modes bar charts -- kept separate from the plural
    // legacy-4-mode labels above, which are also used as group headings.
    'fine' => [
        'pedestrian' => 'Peatón',
        'stroller'   => 'Cochecito',
        'bicycle'    => 'Bicicleta',
        'motorcycle' => 'Motocicleta',
        'car'        => 'Coche',
        'lighttruck' => 'Camión ligero',
        'tractor'    => 'Tractor',
        'bus'        => 'Autobús',
        'trailer'    => 'Remolque',
        'truck'      => 'Camión',
    ],
];
