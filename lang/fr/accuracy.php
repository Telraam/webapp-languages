<?php

return [

    'title'      => 'Exactitude et précision',
    'subtitle'   => 'Obtenir les meilleurs résultats avec votre Telraam S2<br> Comment installer correctement l\'appareil et résoudre les problèmes les plus courants',

    'intro' => 'Les dispositifs Telraam S2 offrent flexibilité, facilité d\'installation et une précision fiable allant jusqu\'à 90-95% pour les véhicules motorisés, mais il y a certaines exigences à prendre en compte pour obtenir les meilleurs résultats.',
    // location
    'location-title' => 'Qu\'est-ce qu\'une fenêtre ou un emplacement approprié ?',

    'location-req-1-title' => 'Hauteur et niveau du sol',
    'location-req-1-txt' => 'L\'appareil doit être installé au moins au premier étage (+1 au-dessus du sol) ou à une hauteur supérieure à 3-4 m - les emplacements au rez-de-chaussée ne sont généralement pas privilégiés.',

    'location-req-2-title' => 'Distance par rapport à la rue',
    'location-req-2-txt' => 'Il doit être suffisamment éloigné pour capturer entièrement les véhicules de grande taille
    (par exemple, les camionnettes), en particulier dans les rues étroites.
S\'il est éloigné de plus de 15 m du milieu de la rue, les performances pour les piétons et les cyclistes du côté le plus éloigné s\'affaiblissent.',

    'location-req-3-title' => 'Ligne de vue dégagée',
    'location-req-3-txt' => 'Pas d\'obstacles : arbres, haies, balcons, moustiquaires, véhicules hauts stationnés, etc. Veiller à ce que la route et le chemin piétonnier soient parfaitement visibles.',

    'location-req-4-title' => 'Pas de jonction',
    'location-req-4-txt' => 'La caméra doit exclusivement observer un segment droit d\'une rue (vue perpendiculaire) et ne doit pas inclure les intersections, les carrefours, les terrains de jeux ou les parkings - uniquement la circulation de gauche à droite ou de droite à gauche.',


    // how
    'how-title' => 'Le capteur ne manquera-t-il jamais un mouvement ?',
    'how-txt' => 'Telraam S2 utilise l\'IA pour détecter les objets et suivre les mouvements. Les objets sont reconnus et un score de probabilité est attribué à chaque objet.
Chaque objet a besoin d\'un certain score de probabilité pour être pris en compte.
                Si un objet identifié entre d\'un côté et sort de l\'autre, nous enregistrons un comptage.
                <br>

                <br>
               Aucun système n\'est parfait. Quelles sont les situations difficiles ? <br>
                <ul class="jump-in">
                     <li>Si les objets sont masqués ou trop éloignés, l\'appareil peut rencontrer des difficultés. </li>
                    <li>Si l\'angle ou la distance est très différent de la configuration classique, les performances peuvent être insuffisantes.</li>
                    <li>Les piétons ou les vélos, en particulier lorsque des individus sont masqués parce qu\'ils marchent ou font du vélo en groupe ou loin de la caméra, peuvent être mal classés ou ne pas être correctement comptés.</li>
                </ul>',

    // location more
    'location-more-title' => 'Vous voulez en savoir plus sur les exigences en matière de localisation ?',
    'location-more-txt' => 'Si vous n\'êtes pas sûr, vous pouvez consulter <a href="https://faq-fr.telraam.net/article/147/conditions-a-respecter-pour-une-fenetre-et-la-location-ideale">un article de la FAQ pour plus de détails</a> ou
 <a href="https://faq-fr.telraam.net/article/373/directives-dinstallation-pour-telraam-s2-outdoor">un article séparé et complet sur les exigences Telraam S2 Outdoor</a>..',


    // privacy
    'privacy-title' => 'IA vs. protection de la vie privée',
    'privacy-txt' => 'Contrairement à de nombreux systèmes de caméras plus coûteux, Telraam effectue la classification et le comptage directement sur l\'appareil lui-même.
    C\'est la seule façon de garantir la confidentialité et nous pensons que la protection de la vie privée est essentielle. C\'est la seule façon de garantir la protection de la vie privée
 et nous pensons que la protection de la vie privée est essentielle.<br>
La Telraam S2 comprend une caméra à faible résolution et ne stocke aucune image.<br>
Nous acceptons les comptages de validation pour nous aider à améliorer nos algorithmes.
N\'hésitez pas à consulter <a href="https://faq-fr.telraam.net/article/270/validations-des-comptages-telraam-s2-un-guide-etape-par-etape">notre FAQ pour en savoir plus sur le processus.</a>',

    // tubes
    'tubes-title' => 'Tubes vs. non-intrusive et multimodaux',
    'tubes-txt' => 'De nos jours, les tubes pneumatiques sont la norme pour le comptage du trafic.
Cependant, des tests indépendants en conditions réelles ont montré que même ces tubes ont une  <a href="https://nap.nationalacademies.org/read/22223/chapter/6#77" target="_blank">marge d\'erreur de 10 à 20 %</a><sup>1&nbsp;2</sup>,
                 la plupart des sous-comptes. Nous obtenons généralement au moins la même précision avec moins d\'inconvénients. Les installations de tubes nécessitent beaucoup de
                 travail, d\'entretien et ont une courte durée de vie.
Le Telraam est facile à installer, il compte tous les modes dès sa sortie de l\'emballage et il continuera à compter pendant une longue période sans aucune maintenance..<br>
                <div class="tiny grey jump-in" style="line-height: 13px; margin-top: 20px;">
                    <sup style="top:0">1</sup>&nbsp;<a href="https://nap.nationalacademies.org/read/22223/chapter/6#77" target="_blank" class="tiny grey">Guidebook on Pedestrian and Bicycle Volume Data Collection. Washington, DC:
                                The National Academies Press.</a><br><br>
                    <sup style="top:0">2</sup>&nbsp;<a href="https://www.researchgate.net/publication/298805209_Accuracy_of_Bicycle_Counting_with_Pneumatic_Tubes_in_Oregon" class="tiny grey"  target="_blank">Accuracy of Bicycle Counting with Pneumatic Tubes in Oregon</a>
                </div>',

    // what to expect
    'result-title' => 'So, what can you expect?',
    'result-txt' => 'La précision de Telraam S2 est d\'environ <strong>90-95%</strong> pour le trafic motorisé.
Pour les usagers actifs de la route, tels que les piétons et les cyclistes, la précision peut être légèrement inférieure et les objets
 peuvent être mal classés, par exemple un piéton avec une voiture d\'enfant en tant que cycliste.
                    Les performances optimales dépendent d\'un positionnement et d\'une configuration appropriés.
                  N\'hésitez pas à <a href="/fr/contact-us">prendre contact</a> pour obtenir des conseils ou du soutien,',

    // more/advanced part
    'more-title'    => 'Plus d\'informations sur la précision, les données de vitesse, etc.',

    'more-1-title'  => 'Cas limites',
    'more-1-txt'    => 'Si vous souhaitez approfondir votre compréhension de ce qui peut causer des imprécisions avec nos capteurs et comment les éviter,
     vous pouvez en savoir plus en consultant l\'article
<a href="https://faq-fr.telraam.net/article/142/imprecisions-potentielles-de-telraam-s2">FAQ sur les cas limites potentiels</a>.',

    'more-2-title' => 'Vitesse',
    'more-2-txt' => 'Telraam S2 détermine la vitesse du véhicule en mesurant le temps écoulé par une voiture pour parcourir sa propre longueur estimée, sur la base des
    dimensions moyennes des voitures belges, ce qui permet d\'estimer la vitesse indépendamment de la distance. Pour en savoir plus, consultez l\'article de
<a href="https://faq-fr.telraam.net/article/141/mesures-de-la-vitesse-avec-telraam-s2">FAQ sur les mesures de vitesse</a>.',

    'more-3-title' => 'Tests de performance par version',
    'more-3-txt' => 'Pour un aperçu de nos propres comptages de validation et expériences visant à évaluer la précision des différentes versions de notre modèle d\'IA, voir
<a href="https://github.com/Telraam/Telraam-S2/blob/main/count-performance-validation.md">tests de performance de comptage de nos versions actuelles et antérieures du micrologiciel K210</a>.',

];
