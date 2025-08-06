<?php

return [

    'title'      => 'Exactitude et précision',
    'subtitle'   => 'Obtenez les meilleurs résultats avec votre Telraam S2<br> Comment bien installer votre appareil et éviter les erreurs courantes',

    'intro' => 'Les capteurs Telraam S2 sont simples à installer, flexibles et offrent une précision fiable, allant jusqu’à 90 à 95 % pour les véhicules motorisés. Toutefois, certaines conditions doivent être réunies pour garantir une performance optimale.',
    // location
    'location-title' => 'Qu\’est-ce qu’un bon emplacement ?',

    'location-req-1-title' => 'Hauteur et élévation',
    'location-req-1-txt' => 'L\’appareil doit être placé au moins à un étage au-dessus du sol(idéalement entre 3 et 4 mètres de hauteur). Les installations au rez-de-chaussée sont généralement déconseillées.',

    'location-req-2-title' => 'Distance par rapport à la rue',
    'location-req-2-txt' => 'Il est important d’être suffisamment proche pour détecter tous les usagers (y compris les piétons et cyclistes) mais aussi assez éloigné pour capturer en entier les véhicules plus grands (camionnettes, SUV…). Si l’appareil est situé à plus de 15 m du centre de la rue, la détection des usagers du côté opposé peut être moins fiable.',

    'location-req-3-title' => 'Champ de vision dégagé',
    'location-req-3-txt' => 'Assurez-vous que la vue sur la rue est claire, sans obstacles tels que : arbres, haies, balcons
     moustiquaires, rideaux et véhicules stationnés de grande taille',

    'location-req-4-title' => 'Pas de carrefour ou d\'intersection',
    'location-req-4-txt' => 'La caméra doit surveiller un tronçon rectiligne de rue, perpendiculairement, sans jonctions, passages piétons, parkings ou aires de jeux dans le champ de vision.',


    // how
    'how-title' => 'Le capteur peut-il manquer des mouvements ?',
    'how-txt' => 'Telraam S2 utilise une intelligence artificielle embarquée pour détecter, suivre et classifier les objets. Chaque objet est reconnu avec un score de probabilité : s’il franchit la scène de détection avec un score suffisant, il est comptabilisé.
                <br>

                <br>
              Aucune solution n\'est parfaite. Les cas problématiques incluent :<br>
                <ul class="jump-in">
                     <li>Objets partiellement masqués ou très éloignés</li>
                    <li>Angles de vue non optimaux</li>
                    <li>Groupes de piétons ou de cyclistes mal différenciés. Par exemple : un piéton avec une poussette détecté comme cycliste</li>
                </ul>',

    // location more
    'location-more-title' => 'Besoin de précisions sur les exigences de localisation ?',
    'location-more-txt' => 'Si vous avez des doutes sur l’emplacement idéal, consultez notre 
<a href="https://faq-fr.telraam.net/article/147/conditions-a-respecter-pour-une-fenetre-et-la-location-ideale">article de FAQ sur les conditions requises pour une fenêtre adaptée</a>, 
ou explorez 
<a href="https://faq-fr.telraam.net/article/373/directives-dinstallation-pour-telraam-s2-outdoor">notre guide complet d’installation pour le Telraam S2 Outdoor</a>.',

    // privacy
    'privacy-title' => 'IA embarquée & protection de la vie privée',
    'privacy-txt' => 'Contrairement à d’autres solutions plus coûteuses, Telraam traite toutes les données localement, sur le capteur lui-même. Aucune image n’est stockée, et la caméra est en basse résolution, garantissant ainsi une protection totale de la vie privée. <br>
Nous pouvons utiliser des comptages manuels pour améliorer nos algorithmes. Consultez <a href="https://faq-fr.telraam.net/article/270/validations-des-comptages-telraam-s2-un-guide-etape-par-etape">notre FAQ </a> pour plus d’infos.',

    // tubes
    'tubes-title' => 'Tubes pneumatiques vs. Telraam : une nouvelle norme ?',
    'tubes-txt' => 'Les tubes pneumatiques sont souvent utilisés pour le comptage du trafic, mais des études indépendantes ont montré qu’ils peuvent avoir une <a href="https://nap.nationalacademies.org/read/22223/chapter/6#77" target="_blank">marge d\'erreur de 10 à 20 %</a><sup>1&nbsp;2</sup> notamment par sous-comptage :,
                
                Telraam S2 combine une précision équivalente, voire supérieure, avec une installation rapide ne nécessitant aucune intervention sur la voirie. Il permet le comptage multimodal – voitures, cyclistes, piétons, camions – tout en offrant une autonomie durable sans maintenance régulière.<br>
                <div class="tiny grey jump-in" style="line-height: 13px; margin-top: 20px;">
                    <sup style="top:0">1</sup>&nbsp;<a href="https://nap.nationalacademies.org/read/22223/chapter/6#77" target="_blank" class="tiny grey">Guidebook on Pedestrian and Bicycle Volume Data Collection. Washington, DC:
                                The National Academies Press.</a><br><br>
                    <sup style="top:0">2</sup>&nbsp;<a href="https://www.researchgate.net/publication/298805209_Accuracy_of_Bicycle_Counting_with_Pneumatic_Tubes_in_Oregon" class="tiny grey"  target="_blank">Accuracy of Bicycle Counting with Pneumatic Tubes in Oregon</a>
                </div>',

    // what to expect
    'result-title' => 'Que pouvez-vous attendre comme résultats ?',
    'result-txt' => 'Pour le trafic motorisé, la précision se situe entre <strong> 90 et 95 % </strong>. Pour les piétons et les cyclistes, elle peut être légèrement inférieure. Les performances dépendent toujours du positionnement et de la configuration de l\'appareil. <a href="/fr/contact-us">Contactez-nous</a> pour obtenir un avis personnalisé.',

    // more/advanced part
    'more-title'    => 'Informations complémentaires : précision, vitesse, tests…',

    'more-1-title'  => 'Cas limites',
    'more-1-txt'    => 'Vous souhaitez mieux comprendre les sources potentielles d’imprécision et savoir comment les éviter ?
Consultez <a href="https://faq-fr.telraam.net/article/142/imprecisions-potentielles-de-telraam-s2">notre article</a> dédié dans la
FAQ sur les cas limites.',

    'more-2-title' => 'Mesure de la vitesse',
    'more-2-txt' => 'Telraam S2 calcule la vitesse d’un véhicule en mesurant le temps nécessaire pour qu’il traverse la scène de détection,
sur la base d’une longueur moyenne estimée (véhicules belges standards). Ce système permet d’obtenir des vitesses fiables, indépendamment de la distance.
Plus de détails dans <a href="https://faq-fr.telraam.net/article/141/mesures-de-la-vitesse-avec-telraam-s2">notre article sur la mesure de la vitesse</a>.',

    'more-3-title' => 'Tests de performance',
    'more-3-txt' => 'Nous réalisons régulièrement des tests de validation pour évaluer la précision des différentes versions de notre modèle d’IA.
Les résultats sont accessibles publiquement sur GitHub : <a href="https://github.com/Telraam/Telraam-S2/blob/main/count-performance-validation.md">voir les résultats de performance des versions actuelles et précédentes</a>.',

];
