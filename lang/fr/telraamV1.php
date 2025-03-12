<?php

return [

    'title'           => 'Telraam V1',
    'subtitle'          => 'Notre premier capteur<br>
Raspberry Pi transformé en compteur de trafic<br>
Vous fournissez les composants, nous fournissons le logiciel et la plateforme de données<br>',

    'warning' => ' <p>Le Telraam V1 était le premier capteur conçu par Telraam, déclenchant une révolution dans le comptage du trafic, aujourd\'hui portée à un autre niveau avec notre capteur Telraam S2, spécialement conçu pour cet usage.</p>
<p>
Bien que nous estimions que le Telraam S2 offre une meilleure précision et une expérience utilisateur améliorée pour la science citoyenne, nous continuerons à assurer le support des capteurs Telraam V1 dans les années à venir.</p>',


    'section1-title'        => 'Histoire',
    'section1-subtitle'     => 'Une histoire originale',

    'section1-text'        => '<p>À l\'été 2018, une équipe mêlant ingénieurs en transport, data scientists et de développeurs s\'est réuni au sein de <a href="https://www.tmleuven.be/" target="_blank">TML</a> pour imaginer une méthode permettant de collecter des données de trafic à une échelle locale inédie, en continu et à une fraction du coût des systèmes de comptage traditionnels.</p>

<p>L\'expérience de l\'équipe les a conduits à concevoir un dispositif compact, simple et abordable, tout en restant efficace. L\'idée était de placer les capteurs aux fenêtres des citoyens, offrant une vue fidèle de la rue sans être intrusif. Cette approche permettait un déploiement en grand nombre afin d\'obtenir une vision complète du trafic sur une diversité de rues, y compris les rues résidentielles, rarement couvertes par les méthodes classiques.</p>

<p>Le prototype a été dévelooppé avec des composants disponibles sur le marché, comme un mini-ordinateur Raspberry Pi et une caméra répondant aux critères définis. L\'algorithme de détection a, quand à lui, été entièrement développé en interne. En quelques mois, le capteur était prêt, accompagné d\'une plateforme web développé de zéro. Début 2019, les 50 premiers capteurs ont été déployés à Louvain. Lorsque Telraam S2 a été lancé en 2023, plus de 5000 capteurs Telraam V1 avaient déjà été vendus dans le monde.</p>',

    'section1-text-extra'        => 'La plupart de nos utilisateurs souhaitent simplement compter le trafic et n\'ont pas nécessairement les compétences techniques pour manipuler un Raspberry Pi. C\'est pourquoi, depuis le lancement du Telraam S2 au printemps 2023, nous ne vendons plus que ce modèle. Toutefois, nous savons que de nombreux passionnés de technologie aiment expérimenter. Pour eux, le capteur V1 basé sur Raspberry Pi reste une excellente option. Nous continuons donc à assurerle support des anciens capteurs V1 déjà installés, mais aussi des nouvelles installations auto-construites. Si vous voulez vous lancer dans un projet de comptage de trafic avec un Raspberry Pi, lisez la suite !',

    'section2-title'        => 'Faites-le vous-même',
    'section2-subtitle'     => 'De quoi avez-vous besoin pour un Telraam V1 ?',
    'section2-text'        => 'Le kit Telraam V1 comprend les éléments suivants (attention aux modèles spécifiques requis) :<br>
            <ul class="jump-in">
                <li>Raspberry Pi 3A+</li>
                <li>Module de caméra 2 pour Raspberry Pi</li>
                <li>Système de fixation de la caméra (vous pouvez acheter n\'importe quel support pour caméra RPI disponible, mais nous avons aussi conçu un support imprimé en 3D, disponible dans notre <a href="https://buy.stripe.com/4gw4jXeOv3G8ePucMP">
                boutique</a>, ou à imprimer soi-même via <a href="https://github.com/Telraam/camera-mount">
                GitHub</a>)</li>
                <li>Carte SD de 16 Go avec l\'image Telraam préinstallée (vous pouvez trouver
                <a href="https://github.com/Telraam/Telraam-RPi">le logiciel sur GitHub ici</a>)</li>
                <li>Adaptateur d\'alimentation</li>
                <li>Recommandé : un cache pliable noir pour protéger des reflets sur la vitre  pour le module caméra</li>
                <li>Optionnel : un boîtier pour le Raspberry Pi pour un rendu plus esthétique</li>
            </ul>
        <br>
        Consultez notre FAQ pour savoir 
            <a href="https://faq.telraam.net/article/36/do-it-yourself-assemble-telraam-by-yourself">comment assembler votre appareil</a>.</p>
',

    'section2-text-extra'        => '<b>Le logiciel et le firmware inclus dans l\'image de carte SD ont été dévelooppés pour
    ces composants spécifiques et pourraient ne pas fonctionner avec une configuration différente. Assurez-vous de choisir les bons composants.</b> Certaines initiatives communautaires ont tenté d\'adapter le V1 à d\'autres versions de RPi (voir sur notre GitHub), mais nous pouvons pas assurer de support pour ces configurations.',

    'section3-title'        => 'FAQ sur Telraam V1',
    'section3-subtitle'     => 'Que compte le capteur Telraam V1 et comment ?',

    'section3-text'        => 'Le Telraam V1 utilise la vision par ordinateur (OpenCV) pour détecter les objets en mouvement sur une image de fond statique (mise à jour périodiquement). Chaque image en basse résolution envoyée par la caméra est analysée en temps réel.
 Les contours des objets détectés sont mémorisés, puis traités par un algorithme qui suit leur déplacement dans l\'image et les classe en différentes catégories d\'usagers.
 À la fin de chaque cycle, les données des objets suivis sont envoyées aux serveurs de Telraam, où ils sont classifiés et agrégés en comptages trimestriels et horaires, par mode de transport et par direction.
<br>
<br>

Le serveur Telraam classe les objets détectés par les Telraam V1 en quatre catégories :
    <ul class="jump-in">
        <li>Piétons</li>
        <li>Deux-roues (cyclistes et motocyclistes)</li>
        <li>Voitures</li>
        <li>Véhicules lourds (tout véhicule plus grands qu\'une voiture particulière)</li>
    </ul>
<br>
    Ce que Telraam ne compte pas :<br>
    <span class="cross">×</span> Telraam ne compte pas lorsqu\'il fait nuit.<br>
    <span class="cross">×</span> Telraam ne reconnaît pas les véhicules individuels (ni les plaques d\'immatriculation).<br>
    <span class="cross">×</span> Telraam ne reconnaît pas les personnes individuelles (ni les visages).<br>
    <span class="cross">×</span> Le Telraam V1 ne fournit pas des comptages précis sur de très courtes périodes (quelques minutes).<br>
    <span class="cross">×</span> Le Telraam V1 n\'est pas un radar et ne mesure pas précisément la vitesse des véhicules.<br>

<p>Pour en savoir plus sur les exigences techniques, la classification des objets, la précision et les éventuelles limitations, consultez notre <a href="https://faq.telraam.net/category/5/telraam-v1">FAQ</a>.</p>',


];
