
<?php

return [

    'title'           => 'FAQ',

    'question-1'           => 'Puis-je échanger mon Telraam V1 et passer à un Telraam S2 à un prix réduit ?',
	'answer-1'           => 'Non, en raison de l\'évolution technologique significative du Telraam S2 par rapport au capteur Telraam V1, nous ne proposons pas de réduction basée sur un échange pour l\'achat d\'un nouveau Telraam S2. Cependant, si vous possédez un Telraam V1, vous pouvez toujours revendre ses composants (Raspberry Pi 3A+ et module caméra Raspberry Pi) sur le marché de l\'électronique pour contribuer au financement d\'un nouveau Telraam S2. Vous pouvez également encourager votre collectivité locale à mettre en place un projet Telraam financé, ce qui pourrait vous permettre d\'obtenir un nouveau capteur Telraam S2. En attendant, tous les capteurs Telraam V1 continueront de fonctionner et vous pourrez toujours consulter leurs données sur le réseau Telraam. Cependant, aucune nouvelle mise à jour de fonctionnalités ne sera développée pour ces  appareils.',

 	'question-2'           => 'Quels types de données sont envoyés par un Telraam S2 ?',
 	'answer-2' 			=> 'La confidentialité est toujours une priorité chez Telraam. La reconnaissance d\'images par l\'IA et le suivi d\'objets sont entièrement réalisés sur l\'appareil lui-même. Seuls les résultats agrégées des comptages (et des vitesses) sont envoyées au serveur Telraam toutes les 15 minutes. Comme les données sont déjà agrégées, aucun paramètre individuel des objets détectés n\'est transmis.',

 	 	'question-3'           => 'Quel type de connexion réseau est nécessaire pour envoyer les données du Telraam S2 ?',
 	'answer-3' 			=> 'Les capteurs Telraam S2 sont équipés d\'une carte SIM intégrée  intégrée, qui assure une connexion mobile basse consommation via les bandes LTE-M ou NB-IoT des réseaux cellulaires locaux. Bien que ces technologies soient déjà disponibles dans de nombreuses régions du monde, nous vous recommandons de vérifier la  <ahref="https://www.u-blox.com/en/iot-network-coverage"  target="_blank">carte de couverture réseau</a> avant d\'acheter un Telraam S2, afin de vous assurer que votre  capteur pourra bien transmettre ses données aux serveurs Telraam. Le Telraam S2 ne nécessite pas de connexion Wi-Fi, et il n\'est pas possible d\'utiliser le Wi-Fi à la place de la connexion mobile fournie.',

 	 	'question-4'           => '4 Quel type d\'usagers de la route le Telraam S2 peut-il détecter ?',
 	'answer-4' 			=> 'Le nouveau processeur IA du Telraam S2 est capable de distinguer dix types d\'usagers : piétons, poussettes, vélos, motos, voitures, camionnettes, remorques, camions et bus. Pour l\'instant, les données de trafic issues des capteurs Telraam S2 sont visualisées de la même manière que celles des capteurs Telraam V1, avec un regroupement en quatre catégories : piétons, deux-roues, voitures et gros véhicules. Entre-temps, les données sont déjà sauvegardées pour chacun des dix modes pour les appareils Telraam S2, et l\'interface web et l\'API trafic seront mises à jour dans un futur proche pour inclure tous les nouveaux modes.',
 	 	'question-5'           => 'Quelle est la précision et l\'exactitude du Telraam S2 ?',
 	'answer-5' 			=> 'L\'exactitude et la précision du Telraam S2 sont continuellement évaluées et documentées. Nos rapports couvrent : <ahref="https://github.com/Telraam/Telraam-S2/blob/main/count-performance-validation.md"  target="_blank">l’exactitude des comptages</a>,  <ahref="https://github.com/Telraam/Telraam-S2/blob/main/count-consistency-validation.md"  target="_blank">la précision des comptages</a> et  <ahref="https://faq-fr.telraam.net/article/141/mesures-de-la-vitesse-avec-telraam-s2"  target="_blank">les mesures de vitesse</a>.
En général, l\'xactitude en journée est comprise entre 90 à 95 % sur un large échantillon de sites tests, bien que les piétons puissent être comptés avec une précision moindre dans certaines situations spécifiques. La précision n\'est pas un facteur limitant, car la variabilité entre les appareils est faible. Pour des performances optimales, veillez à installer votre Telraam S2 dans un emplacement approprié (voir Où puis-je installer un Telraam S2 ?), et  <ahref="https://faq-fr.telraam.net/article/144/region-dinteret-roi-et-selection-de-roi-avec-telraam-s2"  target="_blank">définir une région d\'intérêt optimale</a> lors de l\'enregistrement.',

  	 	'question-7'           => 'Où puis-je installer un Telraam S2 ?',
 	'answer-7' 			=> 'Les capteurs Telraam S2 doivent être installés :
 	<ul class="jump-in">
<li>dans une fenêtre offrant une vue dégagée sur toute la largeur de la rue, sans obstacles majeurs comme des arbres, poteaux larges ou mobilier urbain bloquant le champ de vision.</li>
<li>Le long d\'une route parallèle à la fenêtre, sans intersections visibles (pas d\'angles ou des virages dans le champ de vision).</li>
<li>À un étage élevé, de préférence au premier étage (ou second étage selon la terminologie nord-américaine) pour bénéficier d\'un angle de vue descendant optimal. Les étages plus élevés peuvent convenir pour des routes très larges avec plusieurs voies, où l\'angle d\'observation reste compris entre 30 à 45 degrés.</li>
</ul>
<br>
Consultez notre article <ahref="https://faq-fr.telraam.net/article/147/conditions-a-respecter-pour-lemplacement-de-ma-fenetre-photo-a-uploader-lors-de-lenregistrement"  target="_blank">Conditions à respecter pour l’emplacement d\'un Telraam sur ma fenêtre</a> pour voir des exemples d\'emplacements adaptés ou non.',

 	'question-8'           =>'Puis-je éteindre l\'écran LCD de mon Telraam S2 ?',
 	'answer-8' 			=> 'Oui ! Il suffit d\'appuyer sur le bouton jusqu\'à ce que l\'écran s\'éteigne. Pas d\'inquiètude, l\'appareil continuera
 	de compter même avec l\'écran éteint. Vous pouvez rallumer l\'écran en appuyant de nouveau sur le bouton.',

 	'question-9'           =>'Mon Telraam S2 semble manquer certains véhicules. Que puis-je faire ?',
 	'answer-9' 			=> 'Tout d\'abord, assurez-vous que votre Telraam est correctement installé, et que vous avez défini une 
<ahref="https://faq-fr.telraam.net/article/144/region-dinteret-roi-et-selection-de-roi-avec-telraam-s2"  target="_blank"> région d\'intérêt</a> lors de l\'installation. Si c\'est déjà le cas, vérifiez que cette région couvre bien toute la largeur de la chaussée.
Notez que même dans des conditions optimales, le Telraam S2 ne pourra pas détecter les piétons qui marchent directement sous la fenêtre. Si une partie de la route n\'est pas visible sur l\'image de la région d\'intérêt, les usagers de la route qui passent à cet endroit ne seront pas comptés. De même, si le trottoir de l\'autre côté de la route est partiellement couvert par
 des arbres ou de voitures garées, votre Telraam aura probablement des difficultés à compter chaque piéton passant partiellement caché par ces
 arbres ou ces voitures. Les foules très denses de piétons ou de cyclistes s\'avéreront également très difficiles à compter avec précision, simplement en raison des limites technologiques d\'un appareil aussi petit. 
 Si vous pensez que votre Telraam devrait être plus précis malgré ces limitations, vous pouvez enregistrer une vidéo stable (non portable) en haute résolution (minimum 1080p) et grand
  angle (montrant toute la chaussée) depuis votre fenêtre avec un smartphone ou une caméra GoPro. Envoyez-nous cette vidéo, et nous l\'analyserons pour comprendre les éventuels problèmes et améliorer notre algorithme de détection.',

 	'text-final' 			=>'Si vous avez encore des questions spécifiques, n\'hésitez pas à nous contacter par e-mail via l\'adresse
suivante: <a href="mailto:support@telraam.net"  target="_blank">support@telraam.net</a>',


     'disclaimer' => 'L\'appareil est fourni avec une carte SIM et un abonnement data utilisant les réseaux mobiles LTE-m ou NB-IoT.
     Dans certains pays, ces technologies ne sont pas encore disponible. Si vous avez un doute, contactez votre opérateur local.
      <br>
<br>
L\'appareil est homologué CE et <a href="/downloads/FCC-certificate.pdf" target="_blank">FCC</a>.<br>
<br>
Un support de fixation est inclus pour l\'installation sur la fenêtre. Les résidus de colle sont facilement nettoyables.<br>',

];
