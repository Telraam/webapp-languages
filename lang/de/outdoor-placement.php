<?php

return [

    'title' => 'Outdoor-Platzierungstool',
    'subtitle' => 'Positionierung Ihres Telraam S2 Outdoor',

    'near-side' => 'Abstand Mast zur Straße',
    'width-street' => 'Straßenbreite',
    'mount-height' => 'Höhe des Geräts',


    // 1. near side
    'val-block-1-title' => 'Nahe Seite',
    'val-block-1-info' => 'Kann mein Telraam S2 Outdoor Objekte auf der nahen Seite erkennen?',

    'val-block-1-good-title' => 'Abstand beträgt mindestens 2 m UND der Winkel zur nächsten Seite des Überwachungsbereichs beträgt mindestens 20° ',
    'val-block-1-good-info' => 'Alle Objekte auf der nahen Seite sind im Sichtfeld und sind erkennbar.',

    'val-block-1-poor-title' => 'Abstand beträgt 1 bis 2 Meter ODER der Winkel zur nächsten Seite des Überwachungsbereichs beträgt 10° bis 20°',
    'val-block-1-poor-info' => 'Sie könnten einige Objekte auf der nahen Seite verpassen.',

    'val-block-1-bad-title' => 'Abstand beträgt weniger als 1 m ODER der Winkel zur nächsten Seite des Überwachungsbereichs beträgt weniger als 10°',
    'val-block-1-bad-info' => 'Sie werden die meisten Objekte auf der nahen Seite verpassen..',

    // 2. blocking view
    'val-block-2-title' => 'Sichtblockierung',
    'val-block-2-info' => 'Besteht das Risiko, dass Objekte auf der nahen Seite Objekte auf der fernen Seite verdecken?',

    'val-block-2-good-title' => 'Der Winkel zur Straßenmitte beträgt 30° bis 60°',
    'val-block-2-good-info' => 'Sehr geringes Risiko, dass Objekte auf der nahen Seite Objekte auf der fernen Seite verdecken.',

    'val-block-2-poor-title' => 'Der Winkel zur Straßenmitte beträgt > 60° oder < 30',
    'val-block-2-poor-info' => 'Reger Verkehr in den Spuren näher am Telraam S2 Outdoor kann eine genaue Zählung von Objekten auf den ferneren Spuren, Radwegen und Gehwegen verhindern.',

    // 3. far side
    'val-block-3-title' => 'Ferne Seite',
    'val-block-3-info' => 'Wird mein Telraam S2 Outdoor alle Objekte auf der fernen Seite sehen?',

    'val-block-3-good-title' => 'Objekte sind innerhalb von 25 m',
    'val-block-3-good-info' => 'Alle Objekte sind groß genug, um von Telraam erkannt zu werden.',

    'val-block-3-poor-title' => 'Objekte sind zwischen 25 m und 40 m',
    'val-block-3-poor-info' => 'Sie könnten einige Objekte auf der fernen Seite verpassen, insbesondere kleinere Objekte wie Fußgänger.',

    'val-block-3-bad-title' => 'Objekte sind weiter als 40 m entfernt ',
    'val-block-3-bad-info' => 'Objekte auf der fernen Seite werden zu klein sein und werden höchstwahrscheinlich nicht erkannt.',

    // 4. far side
    'val-block-4-title' => 'Höhe des Geräts',
    'val-block-4-info' => 'Ist mein Telraam S2 Outdoor hoch genug installiert, um Vandalismus zu verhindern?',

    'val-block-4-good-title' => 'Installation über 3 m',
    'val-block-4-good-info' => 'Außerhalb der Reichweite; diese Höhe erfordert vorsätzliche Handlungen und Ausrüstung, damit Vandalen das Gerät entfernen/zerstören können.',

    'val-block-4-bad-title' => 'Installation unter 3 m',
    'val-block-4-bad-info' => ' Zu niedrig, Ihr Telraam S2 Outdoor könnte leicht beschädigt werden.',

    // warning
    'warning' => "Nicht alle Warnungen sind Ausschlusskriterien. Bewerten Sie jede danach, was für Ihre Verkehrszählziele am wichtigsten ist."


];
