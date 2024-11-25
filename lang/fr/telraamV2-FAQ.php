
<?php

return [

    'title'           => 'FAQ',

    'question-1'           => 'Puis-je échanger mon Telraam V1 et passer à un appareil Telraam S2 à un prix réduit ?',
	'answer-1'           => 'Non, en raison de l\'avancée technologique que représente le dispositif Telraam S2 par rapport au capteur Telraam V1, nous ne pouvons pas offrir de réduction de prix basée sur la reprise sur les nouveaux achats de Telraam S2 pour les propriétaires existants de Telraam V1. D\'autre part, si vous possédez un Telraam V1, vous pouvez toujours vendre les composants (ordinateur Raspberry Pi 3A+ et module caméra Raspberry Pi) de votre appareil sur le marché de l\'électronique de loisir pour contribuer au prix d\'un nouveau Telraam S2, ou vous pouvez convaincre votre autorité locale de mettre en place un nouveau projet Terlaam financé et éventuellement obtenir un nouvel appareil Telraam S2 gratuitement dans ce cadre. Entre-temps, tous les appareils Telraam V1 continueront à fonctionner et vous serez en mesure de voir les données de votre appareil Telraam V1 sur le réseau Telraam à l\'avenir également. Cependant, il n\'y aura plus de mise à jour des fonctionnalités des appareils Telraam V1.',

 	'question-2'           => 'Quel type de données est envoyé par un appareil Telraam S2 ?',
 	'answer-2' 			=> 'La protection de la vie privée est toujours une priorité absolue pour Telraam. La reconnaissance d\'images et le suivi d\'objets basés sur l\'IA sont strictement limités aux appareils périphériques, et seules les données agrégées de comptage (et de vitesse) sont envoyées au serveur Telraam toutes les 15 minutes. Les données étant agrégées, les paramètres individuels des objets ne sont pas transmis.',

 	 	'question-3'           => 'Quel type de connexion réseau est nécessaire pour que le Telraam S2 puisse envoyer des données ?',
 	'answer-3' 			=> 'Nos appareils Telraam S2 sont équipés d\'une carte SIM Thingstream intégrée fournissant une connexion de données mobiles à faible consommation d\'énergie en utilisant la bande de fréquence LTE-M ou NB-IoT du ou des fournisseurs de réseaux cellulaires locaux. Bien que ces technologies soient déjà disponibles presque partout dans le monde, veuillez consulter  <ahref="https://www.u-blox.com/en/iot-network-coverage"  target="_blank">la carte de couverture du réseau/a> avant d\'acheter un appareil Telraam S2, pour vous assurer que votre nouveau capteur sera en mesure d\'envoyer des données aux serveurs Telraam. Le Telraam S2 ne nécessite pas de connexion wifi, et il n\'est pas possible d\'utiliser le wifi à la place de la liaison de données mobiles fournie.',

 	 	'question-4'           => '4 Quel type d\'usagers de la route le Telraam S2 peut-il voir ?',
 	'answer-4' 			=> 'La nouvelle puce d\'intelligence artificielle du Telraam S2 peut distinguer dix modes de circulation : piétons, poussettes, vélos, motos, voitures, camionnettes, remorques, camions et bus. Pour l\'instant, les données de trafic provenant des appareils Telraam S2 sont visualisées de la même manière que les données provenant des appareils Telraam V1 : les comptages sont agrégés dans les quatre catégories suivantes : piétons, deux-roues, voitures et gros véhicules. Entre-temps, les données sont déjà sauvegardées pour chacun des dix modes pour les appareils Telraam S2, et l\'interface web et l\'API trafic seront mises à jour dans un futur proche pour inclure tous les nouveaux modes.',
 	 	'question-5'           => 'Quelles sont l\'exactitude et la précision du Telraam S2 ?',
 	'answer-5' 			=> 'L\'exactitude et la précision du Telraam S2 sont continuellement validées et documentées. Nos documentations couvrent <ahref="https://github.com/Telraam/Telraam-S2/blob/main/count-performance-validation.md"  target="_blank">l’exactitude du comptage</a>,  <ahref="https://github.com/Telraam/Telraam-S2/blob/main/count-consistency-validation.md"  target="_blank">la précision du comptage</a> et  <ahref="https://faq-fr.helpspace-docs.io/article/141/mesures-de-la-vitesse-avec-telraam-s2"  target="_blank">les mesures de vitesse</a>.
En général, la précision diurne actuelle est de 90 à 95 % pour un large échantillon de sites d\'essai, seuls les piétons ayant des performances nettement inférieures dans certaines circonstances spécifiques. La précision n\'est pas un facteur limitant, car la dispersion d\'un appareil à l\'autre est faible. Pour une performance optimale, assurez-vous que votre Telraam S2 est installée à un endroit approprié (voir Où puis-je installer une Telraam S2), et  <ahref="https://faq-fr.helpspace-docs.io/article/144/region-dinteret-roi-et-selection-de-roi-avec-telraam-s2"  target="_blank">définissez une région d\'intérêt optimale</a> lors de l\'enregistrement.',

  	 	'question-7'           => 'Où puis-je installer un Telraam S2 ?',
 	'answer-7' 			=> 'Les appareils Telraam S2 doivent être installés
 	<ul class="jump-in">
<li>dans une fenêtre qui offre une vue claire et dégagée sur toute la largeur de la rue en contrebas (pas d\'arbres, pas de poteaux larges ou de garde-corps dans le champ de vision)</li>
<li>le long d\'une route parallèle à la fenêtre, sans croisements (coins, virages) en vue</li>
<li>pas au rez-de-chaussée, de sorte que l\'appareil puisse observer le trafic sous un angle quelque peu descendant (le premier étage sera optimal dans la plupart des cas, tandis que les étages supérieurs pourront convenir pour les routes très larges avec plusieurs voies, de sorte que le trafic soit vu sous un angle de 30 à 45 degrés).</li>
</ul>
<br>
Des exemples de bons et de mauvais emplacements sont présentés dans notre article de la FAQ intitulé  <ahref="https://faq-fr.helpspace-docs.io/article/147/conditions-a-respecter-pour-lemplacement-de-ma-fenetre-photo-a-uploader-lors-de-lenregistrement"  target="_blank">Conditions à respecter pour l’emplacement de ma fenêtre</a>',

 	'question-8'           =>'Puis-je éteindre l\'écran LCD de mon appareil Telraam S2 ?',
 	'answer-8' 			=> 'Oui ! Il suffit d\'appuyer sur le bouton jusqu\'à ce que l\'écran s\'éteigne. Ne vous inquiétez pas, l\'appareil continuera
 	à compter même si l\'écran est éteint. Vous pouvez réactiver l\'écran en appuyant à nouveau sur le bouton.',

 	'question-9'           =>'Mon Telraam S2 semble manquer de trafic. Que dois-je faire ?',
 	'answer-9' 			=> 'Tout d\'abord, assurez-vous que votre Telraam est correctement installé, et
<ahref="https://faq-fr.helpspace-docs.io/article/144/region-dinteret-roi-et-selection-de-roi-avec-telraam-s2"  target="_blank">fixez sa région d\'intérêt</a> si
vous ne l\'avez pas encore fait lors de l\'installation. Si vous l\'avez déjà fait, vérifiez que la région d\'intérêt choisie couvre bien toute la largeur de la route.
Même avec les meilleurs réglages, il est souvent impossible pour l\'appareil de voir les piétons qui marchent juste sous la fenêtre. Ne vous attendez donc pas à
ce que ces usagers de la route soient comptés par le Telraam S2. Si une partie de la route n\'est pas visible sur l\'image de la région d\'intérêt, les
usagers de la route qui passent à cet endroit ne seront pas comptés. De même, si le trottoir de l\'autre côté de la route est partiellement couvert par
une rangée d\'arbres ou de voitures garées, votre Telraam aura probablement des difficultés à compter chaque piéton passant partiellement caché par ces
 arbres ou ces voitures. Les grands groupes très denses de piétons et de cyclistes s\'avéreront également très difficiles à compter avec précision, simplemen
 t en raison des limites technologiques d\'un appareil aussi petit. Si vous pensez que votre Telraam devrait compter plus précisément même après avoir pris en
  compte tous les facteurs mentionnés ci-dessus, vous pouvez toujours enregistrer une vidéo stable (non portable), haute résolution (minimum 1080p), grand
  angle (de sorte que toute la surface de la rue soit visible) avec votre smartphone ou une caméra GoPro contenant 15 minutes de trafic depuis la fenêtre où
  votre Telraam S2 est installé et nous l\'envoyer. Nous pourrons utiliser cette vidéo pour comprendre pourquoi votre appareil n\'est pas performant, et nous
  pourrons peut-être l\'utiliser pour améliorer notre algorithme de détection à l\'avenir.',

 	'text-final' 			=>'Si vous avez encore des questions spécifiques, n\'hésitez pas à nous envoyer un courriel à l\'adresse
suivante: <a href="mailto:support@telraam.net"  target="_blank">support@telraam.net</a>',


     'disclaimer' => 'L\'appareil est livré avec une carte SIM et un plan de données qui se connecte au réseau mobile LTE-m ou NB-iot.
     Dans certains pays, cette technologie de communication n\'est pas encore disponible. Contactez votre opérateur local en cas d\'incertitude.
      <br>
<br>
L\'appareil est homologué CE et <a href="/downloads/FCC-certificate.pdf" target="_blank">FCC</a>.<br>
<br>
L\'appareil est livré avec un petit support à fixer sur la fenêtre. Les résidus de colle peuvent être enlevés.<br>',

];
