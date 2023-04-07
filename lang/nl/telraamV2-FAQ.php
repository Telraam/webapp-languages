<?php

return [

    'question-1'           => 'Is het mogelijk om een Telraam v1 om te wisselen voor een S2 toestel?',
	'answer-1'           => 'Het omruilen van de hardware van een reeds gekocht Telraam V1-toestel naar een Telraam S2 wordt niet aangeboden. Moest je toch over Telraam S2 willen beschikken, kan je de hardware aankopen via onze <a href="https://telraam.net/nl/shop"  target="_blank">webshop</a>. Of je kan je lokaal bestuur trachten te overtuigen om een gefinancierd Telraam project op poten te zetten, en zo mogelijkerwijs een gratis toestel bekomen. Het Telraam v1 toestel wordt nog steeds ondersteund, maar we zullen geen verbeteringen meer toevoegen aan de bestaande software. Daarnaast is het Telraam v1 gebaseerd op de Raspberry Pi (3A+) en kan je dit desgewenst steeds hergebruiken voor andere toepassingen.'
 	'question-2'           => 'Hoe wordt de data doorgestuurd vanop het Telraam S2 toestel? Welke verbinding is hiervoor nodig?',
 	'answer-2' 			=> 'Het Telraam S2 stuurt geen beelden door naar de Telraam servers. Omwille van privacy redenen, vinden we het uiterst belangrijk dat het effectieve tellen enkel gebeurt op het toestel zelf. Het S2 toestel stuurt de teltotalen door elke 15 minuten naar de Telraam database, gebruikmakend van het LTE-M of NB-IoT netwerk. Daarom beschikt elk S2 toestel over een simkaart en een Thingstream abonnement. Dit geeft het Telraam S2 toestel een (bijna) <ahref="https://www.u-blox.com/en/iot-network-coverage"  target="_blank">wereldwijde connectiviteit</a>. Eender waar het LTE-M of NB-IoT netwerk beschikbaar is, is het mogelijk om te tellen met een S2 toestel. Het is niet mogelijk om het Telraam S2 te verbinden via wifi.',
 	 	'question-3'           => 'Wat is de nauwkeurigheid van de nachtellingen van het Telraam S2?',
 	'answer-3' 			=> 'Met het lanceren van de Telraam S2 hardware is het nu mogelijk geworden om ‘s nachts nachttellingen, tijdens duisternis, uit te voeren voor auto’s. Deze functionaliteit is momenteel nog niet geactiveerd, omdat er nog bijkomend werk vereist is in het dubbelchecken en valideren van telprestaties van de S2 sensors tijdens deze nachtelijke uren. We hebben een duidelijke ambitie om deze functionaliteit te activeren tegen de herfst van 2023, op het moment dat de relevantie van nachtelijke tellingen zich opnieuw aandient omwille van de kortere dagtellingen.',
 	 	'question-4'           => 'Welke vervoersmodi worden gevisualiseerd?',
 	'answer-4' 			=> 'Het Telraam S2 toestel kan een onderscheid maken tussen de volgende 10 vervoersmodi: 
Voetgangers, kinderwagens, fietsen, motorfietsen, auto’s, lichte vrachtwagens, aanhangwagens, vrachtwagens en bussen. Op dit moment, wordt de teldata van de S2 toestellen nog steeds gevisualiseerd op dezelfde manier als voor de V1 toestellen: de data is gegroepeerd in de 4, reeds bestaande, categorieën (voetgangers, tweewielers, auto’s, zwaar verkeer). Binnenkort wordt de interface bijgewerkt, hetgeen voor de S2 toestellen zal toelaten dat alle modi afzonderlijk worden gevisualiseerd.',
 	 	'question-5'           => 'Wat is de nauwkeurigheid in het detecteren van de verschillende modi?',
 	'answer-5' 			=> 'We voerden reeds een uitgebreid test en validatie uit alvorens de Telraam S2 sensor te lanceren. Volgens de test op verschillende locatie, verwachten we een nauwkeurigheid voor auto’s/bussen/trucks van 90-95% en voor voetgangers/fietsen rond 80-85%. De presentatie hangt ook af van de locatie van jouw Telraam. Meer info hierover onze <ahref="https://faq-nl.helpspace-docs.io/article/103/mogelijke-onnauwkeurigheden-met-telraam-s2"  target="_blank">FAQ/a>. Meer gedetailleerde resultaten van onze tests op het terrein kan je vinden in dit <ahref="https://github.com/Telraam/Telraam-S2/blob/main/count-consistency-validation.md"  target="_blank">artikel</a>',
 	 	'question-6'           => 'Wat zijn de vereisten van Telraam S2 met betrekking op het zicht? Wat is een goede locatie? Wat is een slechte locatie?',
 	'answer-6' 			=> 'Om een Telraam S2 te kunnen is vereist: 
<ul>
<li>Een vrij en ongehinderd zicht op de rijbaan</li>
<li>De mogelijkheid om het installeren aan de binnenkant van een raam op de 1ste of 2de verdieping.</li> 
<li>Een wegsegment met een eenvoudig links-rechts verkeerspatroon (geen kruispunten)</li>
</ul> 
<BR><BR>
Je vindt gedetailleerde voorbeelden in dit FAQ artikel: <a href="https://faq-nl.helpspace-docs.io/article/75/vereisten-voor-de-plaatsing-van-mijn-telraam-foto-op-het-deelnameformulier"  target="_blank">Vereisten voor de plaatsing van mijn Telraam</a>',
 	 	'question-7'           => 'Wat is het verschil tussen persoonlijke en professionele Telraam S2 toestellen?',
 	'answer-7' 			=> 'Er is geen verschil tussen het persoonlijke en professionele Telraam S2 toestel. Telraam gebruikt de inkomsten van professionele opdrachten om de beheerskosten voor persoonlijke toestellen te dekken. Indien je een organisatie bent die betrokken is in campagne voeren, consultancy of het managen van de lokale mobiliteit en mobiliteitsprojecten, dan nodigen we je uit onze  <a href="https://telraam.net/en/shop"  target="_blank">professionele pakketten</a> te bekijken.',
 	 	'question-8'           => 'Kan ik het LCD scherm van mijn Telraam S2 toestel uitschakelen? ',
 	'answer-8' 			=> 'Ja! Druk op de knop voor enkele seconden en het scherm zal donker worden. Het toestel blijft wel tellen, maar zal de tellingen niet visualiseren op het scherm. Je kan het scherm heractiveren door opnieuw op de knop te drukken.',

 	'text-final' 			=>'Indien er toch specifieke vragen blijven, gelieve ons te contacteren via mail op <a href="mailto:support@telraam.net"  target="_blank">support@telraam.net</a>'
];
