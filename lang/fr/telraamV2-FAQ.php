
<?php

return [

    'question-1'           => 'Proposez-vous une reprise d’un Telraam V1 à la S2?',
	'answer-1'           => 'Non, nous ne proposons pas d\'échange de matériel pour les Telraam v1 déjà achetés contre des Telraam S2. Si vous souhaitez utiliser le nouveau capteur Telraam S2, vous devrez acheter le nouveau matériel via la boutique en ligne <a href="https://telraam.net/fr/shop"  target="_blank">la boutique en ligne</a>. Vous pouvez également convaincre vos autorités locales de mettre en place un projet financé et d\'obtenir votre appareil gratuitement. 
Le dispositif Telraam v1 est toujours pris en charge, mais nous n\'apporterons aucune amélioration au logiciel. Cependant, le capteur Telraam v1 est un système basé sur Raspberry Pi (3A+) et vous pouvez certainement le réutiliser pour d\'autres usages.'
 	'question-2'           => 'Comment les données sont-elles envoyées par le dispositif Telraam S2 ? Quelle est la connexion nécessaire ?',
 	'answer-2' 			=> 'Le Telraam S2 n\'envoie pas d\'images aux serveurs Telraam. Pour des raisons de confidentialité, nous pensons qu\'il est très important que le comptage lui-même se fasse uniquement sur l\'appareil. Le S2 transmet les totaux de comptage toutes les 15 minutes à la base de données Telraam en utilisant le réseau LTE-M ou NB-IoT. C\'est pourquoi chaque S2 est équipé d\'une carte SIM et d\'un abonnement Thingstream. Cela permet au Telraam S2 d\'avoir une <ahref="https://www.u-blox.com/en/iot-network-coverage"  target="_blank">connectivité</a>(presque) mondiale. Partout où le réseau LTE-M ou NB-IoT est disponible, vous pouvez compter sur un appareil S2. Pour la Telraam S2, il n\'y a pas de possibilité de se connecter via wifi.',
 	 	'question-3'           => 'Quelle est la précision des comptages nocturnes effectués par Telraam S2 ?',
 	'answer-3' 			=> 'Avec l\'arrivée du dispositif Telraam S2, il est désormais possible d\'effectuer des comptages de voitures pendant les heures de nuit (obscurité). Cette fonctionnalité n\'est pas encore activée, car elle nécessite un travail supplémentaire pour vérifier et valider les performances de comptage du capteur S2 pendant les heures nocturnes. L\'ambition est de pouvoir activer cette fonctionnalité d\'ici l\'automne 2023, lorsque la pertinence des comptages nocturnes refait surface pour compenser les comptages diurnes plus courts.',
 	 	'question-4'           => 'Quels modes de transport sont comptabilisés?',
 	'answer-4' 			=> 'Le Telraam S2 peut distinguer les 10 modes de circulation suivants : piétons, poussettes, bicyclettes, motos, voitures, camionnettes, remorques, camions et bus. Pour l\'instant, les données de comptage des appareils S2 sont encore visualisées de la même manière que pour les appareils V1 : les données sont regroupées dans les 4 mêmes catégories qui existaient auparavant (piétons, deux-roues, voitures, gros véhicules). Bientôt, l\'interface sera mise à jour, permettant pour les appareils S2 la visualisation de tous les modes séparément.',
 	 	'question-5'           => 'Quelle est la précision de la détection des différents modes?',
 	'answer-5' 			=> 'Nous avons effectué de nombreux tests et validations avant de lancer le capteur Telraam S2. D\'après nos tests sur différents sites, nous prévoyons une précision de 90 à 95 % pour les voitures/bus/camions et de 80 à 85 % pour les piétons/vélo. La performance dépend également de l\'emplacement de votre Telraam. Vous trouverez plus d\'informations dans notre <ahref="https://faq-fr.helpspace-docs.io/article/142/potential-inaccuracies-with-telraam-s2"  target="_blank">FAQ/a>. Vous trouverez d\'autres résultats détaillés de tests sur le terrain dans cet <ahref="https://github.com/Telraam/Telraam-S2/blob/main/count-consistency-validation.md"  target="_blank">article</a>.',
 	 	'question-6'           => 'Quelles sont les exigences de Telraam S2 en matière de vue ? Qu\'est-ce qu\'un bon emplacement ? Qu\'est-ce qu\'un mauvais emplacement ?',
 	'answer-6' 			=> 'Pour pouvoir installer un dispositif Telraam S2, vous devez: <ul>
<li>Une vue claire et dégagée sur la route.</li>
<li>La possibilité d\'installer le dispositif à l\'intérieur d\'une fenêtre au premier ou au deuxième étage.</li> 
<li>Un tronçon de route avec une circulation simple gauche-droite (pas de carrefour).</li> 
</ul> 
<BR><BR>
Vous trouverez des exemples détaillés dans l\'article faq :<a href="https://faq-fr.helpspace-docs.io/article/147/conditions-a-respecter-pour-lemplacement-de-ma-fenetre-photo-a-uploader-lors-de-lenregistrement"  target="_blank">Conditions à respecter pour l\'emplacement de ma fenêtre</a>.',
 	 	'question-7'           => 'Quelle est la différence entre les dispositifs Telraam S2 personnels et professionnels?',
 	'answer-7' 			=> 'Il n\'y a pas de différence entre le dispositif Telraam S2 personnel et professionnel. Telraam utilise les revenus des contrats professionnels pour couvrir les coûts de gestion des appareils personnels.  Si vous êtes une organisation impliquée dans des campagnes, des consultations ou la gestion de projets locaux de transport et de mobilité, nous vous invitons à consulter nos forfaits <a href="https://telraam.net/fr/shop"  target="_blank">Professionels</a>.',
 	 	'question-8'           => 'Puis-je éteindre l\'écran LCD de mon appareil Telraam S2 ?',
 	'answer-8' 			=> 'Oui ! Appuyez sur le bouton pendant plusieurs secondes et l\'écran s\'éteint. L\'appareil continue à compter, mais n\'affiche pas les chiffres à l\'écran. Vous pouvez réactiver l\'écran en appuyant à nouveau sur le bouton.',

 	'text-final' 			=>'Si vous avez encore des questions spécifiques, n\'hésitez pas à nous envoyer un courriel à l\'adresse suivante :<a href="mailto:support@telraam.net"  target="_blank">support@telraam.net</a>'
];
