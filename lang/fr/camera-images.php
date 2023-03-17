<?php

return [
    'nav-title'             => 'Images de la caméra',
    'no-image-available'    => 'Aucune image disponible',
    'no-images-available'   => "Aucune image n'est encore disponible",
    'no-images-available-advice' => 'Assurez-vous que la dernière version du Telraam est installée et que le paramètre est activé',
    'date-image'            => 'Date de l\'image',
    'camera-images'         => 'Image(s) de la caméra',

    'roi-still-to-be-set' => 'ROI à définir',

    'what-are-the-camera-images' => 'Les images de la caméra que vous retrouvez ici sont des images prises quotidiennement qui
sont envoyées à notre serveur afin de vérifier si le positionnement de votre caméra est toujours adéquat. Une première image de la caméra est envoyée lorsque vous lancez votre Telraam,
et ensuite une fois par jour lorsque votre Telraam fonctionne.<br> Pour en savoir plus,
    <a href="https://telraam.helpspace-docs.io/article/30/background-image" target="_blank"> lisez cet article</a>',
    'not-receiving-data'         => "Il semble que nous ne recevons pas (encore) de données de votre Telraam pour le moment.",

    'software-version' => 'Version du logiciel installé sur le dispositif',

    // S2 ROI
    'roi-loading-title' => 'Loading...',
    'roi-loading-text' => 'Nous devons d\'abord charger l\'image grand angle depuis l\'appareil S2.. <br>Comme l\'appareil S2 a une connexion IoT lente, cela peut prendre 30 à 60 secondes..',

    'roi-loaded-title' => 'Sélectionner le zoom',
    'roi-loaded-text' => 'Dans la plupart des cas, le large champ de vision n\'est pas nécessaire, car le trafic se produit dans une
    zone beaucoup plus étroite,  et Telraam n\'a pas besoin de surveiller des zones exemptes de trafic. Un ROI réglé de manière
     optimale fournira les chiffres les plus précis en termes de comptage des usagers de la route.. <br>
    L\'idée est de "couper" autant que possible les régions où aucun trafic n\'est ou ne devrait être possible.<br>
Chaque carré représente un zoom possible pour le S2.<br>
<i class="heroicon heroicon-information" style="border:0"></i> <a href="https://telraam.helpspace-docs.io/article/66/region-of-interest-roi-and-roi-selection-with-telraam-s2">Read all about in this FAQ</a>.',
    'roi-focus-on-top' => 'Focus sur le haut',
    'roi-focus-on-center' => 'Focus sur le centre',
    'roi-focus-on-bottom' => 'Se concentrer sur le fond',

    'what-are-the-camera-images-S2' => 'Les dispositifs Telraam S2 sont construits de manière robuste, avec une caméra fixe, ce qui signifie
    qu\'il n\'y a aucune raison de contrôler quotidiennement le champ de vision
après que la région d\'intérêt (ROI) initiale ait été définie soit automatiquement par la caméra, soit manuellement par l\'utilisateur
ou l\'administrateur réseau. Seule la dernière image de la région d\'intérêt est enregistrée et conservée pendant un an au maximum.<br>
    <a href="https://telraam.helpspace-docs.io/article/30/background-image-">Pour en savoir plus, consultez notre FAQ</a>',

    'roi-set-to' => 'Roi prêt à',
    'on' => 'sur',


];
