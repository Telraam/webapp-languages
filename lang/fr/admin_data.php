<?php

return [
    // data-trends.blade.php
    'trends-title' => 'Évolution des moyennes observées au fil du temps',
    'trends-description' => 'Les chiffres ci-dessous montrent l\'évolution temporelle des volumes de trafic horaires typiques (moyens) tout au long de la journée pour le mode, l\'intervalle de calcul de moyenne et le jour de la semaine sélectionnés. Les différentes dates (ou époques) représentent les moments de calcul de ces moyennes. Par exemple, lorsque « Voitures », « Moyenne saisonnière » et « Lundi » sont sélectionnés, les données étiquetées au 21 juillet 2023 correspondent au trafic moyen de voitures le lundi entre le 21 juillet 2023 et trois mois auparavant.',

    // monthly.blade.php
    'no-history' => 'aucun historique',

    // includes/data-15min.blade.php
    'pedestrians' => 'Piétons',
    'two-wheelers' => 'Deux-roues',
    'cars' => 'Voitures',
    'heavy-vehicles' => 'Véhicules lourds',
    'speed-v85' => 'Vitesse V85',
    'typical-average-footnote' => '* La moyenne et son écart-type sont basés sur les derniers comptages saisonniers. Les moyennes varient selon le jour de la semaine.',

    // includes/general.blade.php
    'pick-start-date' => 'Choisir une date de début',
    'max-3-month-interval' => 'Intervalle maximal de 3 mois',
    'update' => 'Mettre à jour',

    // includes/header.blade.php
    'still-counting' => 'compte toujours',
    'individual-installations-separator' => '----------- installations individuelles ---------',

    // includes/instance.blade.php
    'my-device' => '-- Mon appareil',

    // includes/subheader-segments.blade.php
    'segment-private' => 'Ce segment est privé. Les données sont uniquement visibles au niveau de l\'installation.',
    'segment-mixed-private' => 'Ce segment contient des installations privées et publiques (par défaut). Les données privées ne sont jamais utilisées pour les données de comptage au niveau du segment.',
];
