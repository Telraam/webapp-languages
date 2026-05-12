<?php

return [
    // data-trends.blade.php
    'trends-title' => 'Entwicklung der beobachteten Durchschnittswerte über die Zeit',
    'trends-description' => 'Die nachstehenden Abbildungen zeigen die zeitliche Entwicklung der typischen (durchschnittlichen) stündlichen Verkehrsmengen im Tagesverlauf für den ausgewählten Modus, das Mittelungsintervall und den Wochentag. Die verschiedenen Daten (oder Epochen) stellen die Berechnungszeitpunkte dieser Durchschnittswerte dar. Wenn zum Beispiel „Autos", „Saisonaler Durchschnitt" und „Montag" ausgewählt sind, entsprechen die mit 21. Juli 2023 gekennzeichneten Daten dem durchschnittlichen Montags-Autoverkehr zwischen dem 21. Juli 2023 und drei Monaten zuvor.',

    // monthly.blade.php
    'no-history' => 'kein Verlauf',

    // includes/data-15min.blade.php
    'pedestrians' => 'Fußgänger',
    'two-wheelers' => 'Zweiräder',
    'cars' => 'Autos',
    'heavy-vehicles' => 'Schwere Fahrzeuge',
    'speed-v85' => 'Geschwindigkeit V85',
    'typical-average-footnote' => '* Der Durchschnitt und seine Standardabweichung basieren auf den letzten saisonalen Zählungen. Die Durchschnittswerte variieren je nach Wochentag.',

    // includes/general.blade.php
    'pick-start-date' => 'Startdatum wählen',
    'max-3-month-interval' => 'Maximal 3 Monate Intervall',
    'update' => 'Aktualisieren',

    // includes/header.blade.php
    'still-counting' => 'zählt noch',
    'individual-installations-separator' => '----------- einzelne Installationen ---------',

    // includes/instance.blade.php
    'my-device' => '-- Mein Gerät',

    // includes/subheader-segments.blade.php
    'segment-private' => 'Dieses Segment ist privat. Daten sind nur auf Installationsebene sichtbar.',
    'segment-mixed-private' => 'Dieses Segment enthält private und öffentliche (Standard-)Installationen. Private Daten werden niemals für Zähldaten auf Segmentebene verwendet.',
];
