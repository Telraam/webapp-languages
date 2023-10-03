<?php

return [

    'title'           => 'Telraam V1',
    'subtitle'          => 'Notre premier capteur<br>
Raspberry Pi transformé en compteur de trafic<br>
Vous fournissez les composants, nous fournissons le logiciel et la plateforme de données<br>',

    'warning' => ' <p>Le Telraam V1 était le premier capteur conceptuel de Telraam, et il a lancé une révolution dans le comptage du trafic qui a maintenant été portée au niveau supérieur grâce à notre appareil Telraam S2 spécialement conçu.</p>
<p>
Bien que nous croyions que le Telraam S2 offre une meilleure précision, une meilleure exactitude et une meilleure expérience utilisateur pour la science citoyenne, nous continuerons à soutenir les appareils Telraam V1 au cours des prochaines années.</p>',


    'section1-title'        => 'Histoire',
    'section1-subtitle'     => 'Une histoire originale',

    'section1-text'        => '<p>Pendant l\'été 2018, un groupe d\'ingénieurs en transport, de scientifiques des données et de développeurs se sont réunis chez <a href="https://www.tmleuven.be/" target="_blank">TML</a> pour trouver une méthode pouvant fournir des données sur le trafic à une échelle locale jamais atteinte auparavant, fonctionnant en continu pour une fraction du coût des systèmes de surveillance de la circulation existants.</p>

<p>L\'expérience de l\'équipe les a amenés à se concentrer sur la construction de quelque chose de petit, de simple et d\'abordable, mais toujours adapté à l\'usage. Le dispositif final devrait pouvoir être installé dans les fenêtres des citoyens, de sorte qu\'il représente leur vue réelle de la rue, mais sans être intrusif. De cette façon, il pourrait être déployé en grand nombre pour obtenir une image complète d\'une large gamme de rues, y compris celles qui sont moins fréquentées et résidentielles, rarement couvertes par les installations de comptage traditionnelles.</p>

<p>Le prototype a été construit à l\'aide de composants disponibles dans le commerce, tels qu\'un mini-ordinateur Raspberry Pi et une caméra répondant aux critères ci-dessus, mais l\'algorithme de détection a été développé en interne. Le développement du capteur a été achevé avant la fin de l\'été, puis une interface utilisateur de base a été construite à partir de zéro, avec la première série de 50 appareils distribués à Louvain au début de 2019. Lorsque le Telraam S2 a été lancé en 2023, plus de 5000 appareils Telraam V1 avaient été vendus dans le monde entier.</p>',

    'section1-text-extra'        => 'Comme la plupart de nos utilisateurs veulent simplement compter le trafic et ne sont pas nécessairement des techniciens qualifiés pour travailler avec des Raspberry Pi, nous ne vendons que le Telraam S2 depuis sa sortie au printemps 2023. Cependant, nous savons qu\'il y a beaucoup de passionnés de technologie qui aimeraient se lancer, et pour eux, le capteur V1 basé sur Raspberry Pi est toujours un excellent outil pour jouer. C\'est pourquoi nous continuons à prendre en charge les anciens capteurs V1 sur le terrain, ainsi que les installations de nouveaux capteurs Telraam V1 auto-assemblés. Si vous voulez compter le trafic et que vous n\'avez pas peur d\'un projet Raspberry Pi, lisez la suite !',

    'section2-title'        => 'Faites-le vous-même',
    'section2-subtitle'     => 'De quoi avez-vous besoin pour un Telraam V1?',
    'section2-text'        => 'Le kit requis pour un Telraam V1 se compose des composants suivants (veuillez noter les modèles spécifiques requis) :<br>
            <ul class="jump-in">
                <li>Raspberry Pi 3A+</li>
                <li>Module de caméra 2 pour Raspberry Pi</li>
                <li>Système de fixation de la caméra (vous pouvez acheter n\'importe quel support de caméra RPI disponible, mais nous avons également fabriqué un support imprimé en 3D nous-mêmes, que vous pouvez toujours acheter dans notre <a href="https://buy.stripe.com/4gw4jXeOv3G8ePucMP">
                boutique</a>, ou vous pouvez l\'imprimer vous-même en utilisant les fichiers sur <a href="https://github.com/Telraam/camera-mount">
                GitHub</a>)</li>
                <li>Carte SD de 16 Go avec l\'image Telraam flashée (vous pouvez trouver
                <a href="https://github.com/Telraam/Telraam-RPi">le logiciel sur GitHub ici</a>)</li>
                <li>Adaptateur d\'alimentation</li>
                <li>Recommandé : une housse pliable noir pour servir de pare-soleil pour le module caméra (contre les réflexions internes sur la fenêtre)</li>
                <li>Facultatif : boîtier pour le Raspberry Pi pour le rendre esthétique</li>
            </ul>
        <br>
        Veuillez consulter notre FAQ pour plus d\'informations sur
            <a href="https://telraam.helpspace-docs.io/article/36/do-it-yourself-assemble-telraam-by-yourself">comment assembler votre appareil</a>.</p>
',

    'section2-text-extra'        => '<b>Le logiciel et le firmware inclus dans l\'image de carte SD offerte ont été créés pour
    ces composants spécifiques et peuvent ne pas fonctionner avec une configuration différente, alors assurez-vous de choisir les bons composants.</b> Certains efforts communautaires ont été faits pour configurer des appareils V1 en utilisant différentes versions de RPi (voir les entrées sur notre GitHub), mais nous ne sommes pas en mesure de fournir un soutien pour de telles initiatives.',

    'section3-title'        => 'FAQ sur Telraam V1',
    'section3-subtitle'     => 'Qu\'est-ce que Telraam V1 compte et comment ?',

    'section3-text'        => 'Le Telraam V1 utilise la vision par ordinateur (OpenCV) pour détecter les objets devant un arrière-plan constant (périodiquement
 recalculé). Les objets sont détectés en temps réel sur chaque trame à basse résolution envoyée par la caméra.
 Certains paramètres de base (tels que la position dans la trame, la largeur, la hauteur, la surface, etc.) des contours des objets sont stockés en
 mémoire toutes les quelques minutes jusqu\'à ce qu\'un algorithme les traite (et les supprime ultérieurement) afin d\'identifier et de
 suivre les objets se déplaçant à travers la trame de l\'image (par conséquent, le long de la rue). À la fin de chaque cycle, les paramètres moyens des objets qui ont été suivis avec succès sont envoyés aux serveurs Telraam, où ils sont ensuite classifiés
 en utilisant leurs paramètres observés, avant d\'être agrégés en totaux de comptage trimestriels et horaires par mode et direction de déplacement.<br>
<br>

Le serveur Telraam classe les objets provenant des appareils Telraam V1 en quatre types de modes :
    <ul class="jump-in">
        <li>piétons</li>
        <li>deux-roues (cyclistes et motocyclistes)</li>
        <li>voitures</li>
        <li>véhicules lourds (plus gros qu\'un véhicule de tourisme)</li>
    </ul>
<br>
    Ce que Telraam ne compte pas :<br>
    <span class="cross">×</span> Telraam ne compte pas lorsqu\'il fait noir.<br>
    <span class="cross">×</span> Telraam ne reconnaît pas les véhicules individuels (ni les plaques d\'immatriculation).<br>
    <span class="cross">×</span> Telraam ne reconnaît pas les personnes individuelles (ni les visages).<br>
    <span class="cross">×</span> Le Telraam V1 ne peut pas compter de manière fiable le nombre exact de véhicules sur une période de
    très courte durée (quelques minutes).<br>
    <span class="cross">×</span> Le Telraam V1 n\'est pas un radar de vitesse et il ne peut pas fournir de mesures de vitesse précises.<br>

<p>Pour plus d\'informations sur les exigences techniques, la classification des objets, la précision et les limitations potentielles, l\'étalonnage des données et les questions concernant les données de vitesse, veuillez consulter notre <a href="https://telraam.helpspace-docs.io/category/5/telraam-v1">FAQ</a>.</p>',


];
