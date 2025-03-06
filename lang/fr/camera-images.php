<?php

return [
    'nav-title'             => 'Images de la caméra',
    'no-image-available'    => 'Aucune image disponible',
    'no-images-available'   => "Aucune image n'est encore disponible",
    'no-images-available-advice' => 'Assurez-vous que la dernière version du logiciel Telraam est installée et que le paramètre d\'image est activé lors de l\'installation',
    'date-image'            => 'Date de l\'image',
    'camera-images'         => 'Image(s) de la caméra',

    'roi-still-to-be-set' => 'ROI à définir',

    'what-are-the-camera-images' => 'Les images capturées par la caméra servent uniquement de fond et sont envoyées à notre serveur pour vérifier si la position de votre caméra est toujours correcte. Une première image est envoyée au démarrage de votre Telraam,
et ensuite une image est envoyée une fois par jour lorsque votre Telraam fonctionne normalement.<br> Pour en savoir plus,
    <a href="https://faq.telraam.net/article/30/background-image" target="_blank"> lisez cet article</a>',
    'not-receiving-data'         => "Il semble que nous ne recevions pas encore de données de votre Telraam.",

    'software-version' => 'Version du logiciel installé sur le dispositif',

    // S2 ROI
    'roi-loading-title' => 'Loading...',
    'roi-loading-text' => '
Votre capteur S2 est en train d\'être réinitialisé pour retrouver son champ de vision grand-angle complet. Une image est en cours de téléchargement pour vous permettre de sélectionner votre zone d\'intérêt (ROI).
<br>Comme le S2 utilise une connexion IoT à faible débit, cette opération peut encore prendre 30 à 90 secondes. Assurez-vous de compléter le processus et de choisir l\'un des paramètres prédéfinis de ROI afin d\'optimiser la précision des comptages.',

    'roi-loaded-title' => 'Sélectionner le zoom',
    'roi-loaded-text' => 'Dans la plupart des cas, le champ de vision large n\'est pas nécessaire, car la circulation se concentre sur une
    zone plus restreinte. Telraam n\'a pas besoin de surveiller les espaces où il n\'y a pas de trafic. Un ROI bien défini garantit une meilleure précision des comptages des usagers de la route.. <br>
    L\'objectif est de réduire au maximum les zones où aucun trafic n\'a lieu ou ne devrait avoir lieu.<br>
Chaque carré représente un niveau de zoom possible pour le S2.<br>
<i class="heroicon heroicon-information" style="border:0"></i> <a href="https://faq.telraam.net/article/66/region-of-interest-roi-and-roi-selection-with-telraam-s2">Read all about in this FAQ</a>.',
    'roi-focus-on-top' => 'Focus sur le haut',
    'roi-focus-on-center' => 'Focus sur le centre',
    'roi-focus-on-bottom' => 'Se concentrer sur le fond',

    'what-are-the-camera-images-S2' => 'Les capteurs Telraam S2 sont conçus de manière robuste, avec une caméra fixe, ce qui signifie
    qu\'il n\'est pas nécessaire de surveiller quotidiennement le champ de vision
après la configuration initiale de la zone d\'intérêt (ROI). Le ROI peut être défini automatiquement par la caméra ou manuellement par l\'utilisateur ou l\'administrateur du réseau. Seule la dernière image du ROI est conservée et stockée pour une durée maximale d\'un an.<br>
    <a href="https://faq.telraam.net/article/30/background-image-">Pour en savoir plus, consultez notre FAQ</a>',

    'roi-set-to' => 'Roi prêt à',
    'on' => 'sur',

    'device-not-available-for-roi' => 'L\'appareil n\'est pas en ligne pour le moment. Réessayez plus tard.',


];
