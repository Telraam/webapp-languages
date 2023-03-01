<?php

return [
    'nav-title'                 => 'Camera beelden',
    'no-image-available'        => 'Geen beelden beschikbaar',
    'no-images-available'       => 'Geen beelden beschikbaar',
    'no-images-available-advice' => 'Zorg ervoor dat de laatste versie van de Telraam software is geïnstalleerd op je Telraam en dat de "images" instelling vervolgens is aangevinkt tijdens de nieuwe installatie. Hoe doe je dat?',

    'no-images-available-info' => '<ol><li>Download <a href="https://telraam-api.net/telraam-sd-image.zip">de laatste software</a></li><li>Installeer deze software op je Telraam: <a href="https://telraam.zendesk.com/hc/nl/articles/360028846211-Telraam-zelf-updaten">Telraam zelf updaten</a></li></ol>',
    'date-image'        => 'Datum beeld',
    'last-camera-image' => 'Laatste camera beeld',
    'last-days'         => 'Laatste dagen',
    'camera-images'     => 'Camera beeld(en)',

    'roi-still-to-be-set' => 'ROI vast te leggen',

    'what-are-the-camera-images' => 'De camerabeelden zijn achtergrondbeelden die naar onze server worden gestuurd om te controleren of uw camerapositie nog in orde is.
    Een beeld wordt verstuurd na het opstarten van uw Telraam en eenmaal per dag als uw Telraam in werking is. <br>
    <a href="https://telraam.helpspace-docs.io/article/30/background-image">Lees meer info op onze faq</a>',
    'not-receiving-data'         => 'Het lijkt erop dat we op dit moment (nog) geen gegevens van uw Telraam ontvangen.',

    'software-version' => 'Softwareversie geïnstalleerd apparaat',

    // S2 ROI
    'roi-loading-title' => 'Laden...',
    'roi-loading-text' => 'We moeten eerst het groothoekbeeld laden van het S2-apparaat.<br>Aangezien het S2-apparaat een trage IoT-verbinding heeft, kan dit tot 30-60 seconden duren.',

    'roi-loaded-title' => 'Zoom selecteren',
    'roi-loaded-text' => 'In de meeste gevallen is het brede gezichtsveld niet nodig, omdat het verkeer zich in een veel beperkter gebied afspeelt,
    en Telraam hoeft geen gebieden te bewaken die vrij zijn van verkeer. Een optimaal ingestelde ROI levert de hoogste nauwkeurigheid in termen van
    tellingen van weggebruikers. <br>
    Het idee is om de gebieden waar geen verkeer mogelijk is of zou moeten zijn zoveel mogelijk weg te "snijden".<br>
Elk vierkant vertegenwoordigt een mogelijke zoom voor de S2.<br>
<i class="heroicon heroicon-information" style="border:0"></i> <a href="https://telraam.helpspace-docs.io/article/66/region-of-interest-roi-and-roi-selection-with-telraam-s2">Read all about in this FAQ</a>.',
    'roi-focus-on-top' => 'Focus op bovenkant',
    'roi-focus-on-center' => 'Focus op centrum',
    'roi-focus-on-bottom' => 'Focus op onderkant',

    'what-are-the-camera-images-S2' => 'Telraam S2-apparaten zijn robuust gebouwd, met een vaste camera, wat betekent dat er geen reden is om het gezichtsveld dagelijks te controleren
nadat het initiële interessegebied (ROI) automatisch door de camera of handmatig door de gebruiker of netwerkbeheerder is ingesteld. Alleen het laatste ROI-beeld wordt opgeslagen en maximaal 1 jaar bewaard.<br>
    <a href="https://telraam.helpspace-docs.io/article/30/background-image-">Lees meer info op onze faq</a>',

];
