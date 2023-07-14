<?php

return [

    'title'           => 'FAQ',

    'question-1'           => 'Kan ik mijn Telraam V1 wisselen en upgraden naar een Telraam S2 toestel aan reductietarief? ',
	'answer-1'           => 'Nee, vanwege de technologische verbetering die het Telraam S2 apparaat biedt ten opzichte van de Telraam V1 sensor, kunnen we geen inruilkorting bieden voor de aankoop van een nieuwe Telraam S2 sensor voor bestaande Telraam V1 eigenaren. Aan de andere kant, als u een Telraam V1 hebt, kunt u altijd de onderdelen (Raspberry Pi 3A+ computer en Raspberry Pi cameramodule) van uw apparaat verkopen op de hobby-elektronicamarkt om uw nieuwe Telraam S2 te sponsoren. Of u kunt uw gemeente overtuigen om een nieuw, gefinancierd Telraam-project op te zetten en op die manier mogelijk een nieuw Telraam S2-apparaat gratis te krijgen. In de tussentijd blijven alle Telraam V1-toestellen werken en zult u ook in de toekomst gegevens van uw Telraam V1-toestel op het Telraam-netwerk kunnen zien. Er komen echter geen feature-upgrades meer naar de Telraam V1 toestellen.',
 	'question-2'           => 'Welke soort data wordt doorgestuurd vanop een Telraam S2 toestel?',
 	'answer-2' 			=> 'Privacy is altijd een topprioriteit voor ons bij Telraam. AI-gebaseerde beeldherkenning en het tracken van objecten gebeurt strikt beperkt tot de edge devices, en alleen de hieruit resulterende geaggregeerde tel- (en snelheids-)gegevens worden elke 15 minuten naar de Telraam-server verzonden. Aangezien de gegevens worden geaggregeerd, worden individuele objectkenmerken niet verzonden.',
 	 	'question-3'           => 'Welk soort netwerkverbinding is vereist voor het Telraam S2 om gegevens te kunnen doorsturen?',
 	'answer-3' 			=> 'Onze Telraam S2-apparaten worden geleverd met een ingebouwde Thingstream SIM-kaart die een energiezuinige mobiele dataverbinding biedt via de LTE-M- of NB-IoT-frequentieband van de lokale mobiele netwerkprovider(s). Hoewel deze technologieën al bijna overal ter wereld beschikbaar zijn, kunt u voordat u een Telraam S2-apparaat koopt de <a href="https://www.u-blox.com/en/iot-network-coverage"  target="_blank">netwerkdekkingskaart</a> raadplegen om er zeker van te zijn dat uw nieuwe sensor gegevens naar de Telraam-servers kan verzenden. Telraam S2 heeft geen wifi-verbinding nodig, en er is geen mogelijkheid om wifi te gebruiken in plaats van de meegeleverde mobiele dataverbinding.',
 	 	'question-4'           => 'Welke typen weggebruikers kan het Telraam S2 identificeren?',
 	'answer-4' 			=> 'De nieuwe AI-chip in de Telraam S2 kan onderscheid maken tussen tien soorten weggebruikers: voetgangers, kinderwagens, fietsen, motorfietsen, auto\'s, lichte vrachtwagens, aanhangwagens, vrachtwagens en bussen. Voorlopig worden de verkeersgegevens afkomstig van Telraam S2-toestellen op dezelfde manier gevisualiseerd als dit voor de gegevens van de Telraam V1-toestellen gebeurde. Namelijk, de tellingen worden geaggregeerd in vier categorieën: voetgangers, tweewielers, auto\'s en grote voertuigen. Ondertussen worden voor de Telraam S2-apparaten wel al gegevens opgeslagen voor elk van deze tien vervoersmodi, en de webinterface en de verkeers-API zullen in de nabije toekomst worden bijgewerkt om alle nieuwe modi op te nemen.',
 	 	'question-5'           => 'Wat is de nauwkeurigheid en precisie van het Telraam S2?',
 	'answer-5' 			=> 'De nauwkeurigheid en precisie van Telraam S2 wordt voortdurend gevalideerd en gedocumenteerd. Deze artikels hebben betrekking op de <a href="https://github.com/Telraam/Telraam-S2/blob/main/count-performance-validation.md"  target="_blank">nauwkeurigheid van de tellingen</a> en <a href="https://github.com/Telraam/Telraam-S2/blob/main/count-consistency-validation.md"  target="_blank">precisie van de tellingen</a> en <a href="https://faq-nl.helpspace-docs.io/article/102/snelheidsmetingen-met-telraam-s2"  target="_blank">de snelheidsmetingen</a>. Voorlopig hebben deze artikels alleen betrekking op de prestaties overdag; in de toekomst zullen we ze bijwerken met de prestaties \'s nachts. In het algemeen is de huidige nauwkeurigheid overdag 90-95% voor een groot aantal testlocaties, waarbij alleen voetgangers in bepaalde specifieke omstandigheden beduidend slechter presteren. Precisie is geen beperkende factor, aangezien de spreiding tussen apparaten gering is. Voor optimale prestaties moet u ervoor zorgen dat uw Telraam S2 op een geschikte locatie is geïnstalleerd (zie: Waar kan ik een Telraam S2 installeren) en tijdens de registratieprocedure een <a href="https://faq-nl.helpspace-docs.io/article/104/interessegebied-roi-en-roi-selectie-met-telraam-s2"  target="_blank">correct interessegebied (ROI)</a> specifiek voor uw Telraam in te stellen.',
 	 	'question-6'           => 'Hoe presteert het Telraam S2 \'s nachts?',
 	 	 	'answer-6' 			=> 'Hoewel het ontwerp en de hardware setup van Telraam S2 het mogelijk maakt voor onze nieuwe sensor om \'s nachts gemotoriseerde voertuigen (voornamelijk auto\'s) te tellen, is deze functionaliteit momenteel nog niet volledig ontwikkeld. Hoewel u misschien al enkele tellingen op uw Telraam S2 ziet tijdens de nachtelijke uren, zijn deze tellingen nog niet gekalibreerd of gevalideerd, en zullen ze waarschijnlijk voorlopig nog ver van de werkelijkheid verwijderd zijn. We hebben een sterke ambitie om de functionaliteit voor nachttellingen volledig te ontwikkelen voor het einde van 2023, en dan zullen we parallel met de uitrol van deze functie validatiedocumentatie publiceren, net zoals we hebben gedaan voor de dagtellingen om de typische nauwkeurigheid en precisie van ons apparaat te illustreren.',
 	 	'question-7'           => 'Waar kan ik een Telraam S2 installeren? ',
 	'answer-7' 			=> 'Telraam S2-toestellen moeten worden geïnstalleerd
<ul class="jump-in">
<li>in een raam dat een vrij en onbelemmerd zicht biedt op de gehele breedte van de straat beneden (geen bomen, geen brede palen of leuningen in het gezichtsveld)</li>
<li>langs een weg die parallel aan het raam loopt, zonder kruispunten (hoeken, bochten) in het zicht</li>
<li>niet op de begane grond, zodat het apparaat het verkeer onder een enigszins neerwaartse hoek kan zien (de eerste verdieping zal in de meeste gevallen optimaal zijn, terwijl hogere verdiepingen kunnen werken voor zeer brede wegen met meerdere rijstroken, zodat het verkeer onder een hoek van 30-45 graden wordt gezien).</li>
</ul>
<br>
Enkele voorbeelden van goede en slechte locaties staan in ons FAQ-artikel: <a href="https://faq-nl.helpspace-docs.io/article/75/vereisten-voor-de-plaatsing-van-mijn-telraam-foto-op-het-deelnameformulier"  target="_blank">Vereisten voor de plaatsing van mijn Telraam</a>',
 	 	'question-8'           => 'Wat is het verschil tussen persoonlijke en professionele Telraam S2 toestellen?',
 	'answer-8' 			=> 'Er is geen verschil tussen het persoonlijke en het professionele Telraam S2-toestel. Telraam gebruikt inkomsten uit professionele contracten om de kosten van het beheer van persoonlijke apparaten te dekken.  Als u als organisatie betrokken bent bij campagnes, advies of beheer van lokale vervoers- en mobiliteitsprojecten, bekijk dan onze <a href="https://telraam.net/nl/shop"  target="_blank">professionele pakketten</a>.',
	 	'question-9'           => 'Kan ik het LCD scherm van mijn Telraam S2 toestel uitschakelen?',
 	'answer-9' 			=> 'Ja! Druk op de knop voor enkele seconden en het scherm zal donker worden. Het toestel blijft wel tellen, maar zal de tellingen niet visualiseren op het scherm. Je kan het scherm heractiveren door opnieuw op de knop te drukken.',
 		 	'question-10'           => 'Mijn Telraam S2 lijkt wat verkeer te missen. Wat kan ik doen?',
 	'answer-10' 			=> 'Controleer allereerst of uw Telraam correct is geïnstalleerd en stel <a href="https://faq-nl.helpspace-docs.io/article/104/interessegebied-roi-en-roi-selectie-met-telraam-s2">het interessegebied (ROI)</a> in als u dat tijdens de installatie nog niet hebt gedaan. Als u dat al hebt gedaan, controleer dan of het gekozen interessegebied daadwerkelijk de hele breedte van de weg bestrijkt zoals het hoort. Zelfs met de beste instelling is het vaak onmogelijk voor het apparaat om voetgangers te zien die vlak onder het raam lopen, dus verwacht niet dat die weggebruikers door de Telraam S2 worden geteld. Als een deel van de weg niet zichtbaar is op het beeld van het interessegebied, dan worden voorbijrijdende weggebruikers daar niet geteld. Ook als het trottoir aan de andere kant van de weg gedeeltelijk wordt bedekt door een rij bomen of geparkeerde auto\'s, zal uw Telraam waarschijnlijk moeite hebben om elke passerende voetganger te tellen die daar gedeeltelijk door wordt verborgen. Zeer dichte, grote groepen voetgangers en fietsers zullen ook zeer moeilijk nauwkeurig te tellen zijn, eenvoudigweg vanwege de technologische beperkingen van zo\'n klein apparaat. Als u denkt dat uw Telraam nauwkeuriger zou moeten tellen, zelfs na het overwegen van alle bovengenoemde factoren, dan kunt u altijd een stabiele (niet-handheld), hoge resolutie (minimaal 1080p), groothoek (zodat het hele straatoppervlak zichtbaar is) video opnemen met uw smartphone of een GoPro camera met 15 minuten verkeer vanuit het raam waar uw Telraam S2 is geïnstalleerd en deze naar ons sturen. We kunnen deze video gebruiken om te zien waarom uw apparaat ondermaats presteert, en we kunnen het misschien gebruiken om ons detectie algoritme in de toekomst te verbeteren.',
 		 	 	'question-11'           => 'Retours',
 	'answer-11' 			=> 'We bieden een retours aan voor alle fysieke artikelen die binnen 14 dagen in verkoopbare staat worden geretourneerd. Neem contact met ons op via onze helpdesk of stuur een e-mail naar <a href="mailto:support@telraam.net"  target="_blank">support@telraam.net</a>.
Na goedkeuring ontvang je van ons een retourlabel.  Stuur geen artikelen naar ons terug zonder eerst contact met ons op te nemen, anders kunnen we niet achterhalen waar het vandaan komt.
Ons adres is: Telraam c/o retourzendingen, Diestsesteenweg 71, 3010 Leuven - België.
Let op: het omwisselen van het Telraam abonnement wordt niet geaccepteerd.',
 		 	'question-12'           => 'Schade',
 	'answer-12' 			=> 'Als je bestelling in ontoereikende staat aankomt, neem dan contact op met <a href="mailto:support@telraam.net"  target="_blank">support@telraam.net</a>. Leg uit wat het probleem is en stuur een foto van het pakket mee. Het kan zijn dat we je vragen om het/de defecte artikel(en) terug te sturen of ons ander bewijs van het probleem te sturen. De verzendkosten voor het retourneren worden vergoed. Stuur geen defecte artikelen naar ons terug zonder eerst contact met ons op te nemen.
We kunnen een beschadigd apparaat niet vervangen nadat het is geïnstalleerd, we doen dit alleen als het pakket in slechte staat aankomt.',
 	 		 	'question-13'           => 'Vermiste pakketten',
 	'answer-13' 			=> 'Helaas kunnen er vertragingen optreden bij de post waar wij geen invloed op hebben, voornamelijk bij verzending buiten de EU. Onze oprechte excuses voor het ongemak dat dit kan veroorzaken.
We vragen je rekening te houden met 14 dagen voor klanten binnen de EU en 28 dagen voor klanten buiten de EU, vanaf de datum van verzending, voordat we aannemen dat een artikel zoek is geraakt in de post. Als je bestelling dan nog niet is aangekomen, laat het ons dan weten. Neem contact op met <a href="mailto:support@telraam.net"  target="_blank">support@telraam.net</a>. We zullen je ook zeker op de hoogte stellen als jouw bestelling, om wat voor reden dan ook, naar ons wordt teruggestuurd.',
 	 		 	'question-14'           => 'Douane, invoerrechten en belastingen',
 	'answer-14' 			=> 'Wanneer u bij telraam.net bestelt, is de geadresseerde ervoor verantwoordelijk dat het product legaal op de plaats van bestemming kan worden geïmporteerd. Ontvangers van internationale zendingen kunnen worden onderworpen aan invoerbelastingen, heffingen en douanerechten (hierna invoerkosten genoemd), geheven door het douanekantoor van uw verzendbestemming. Invoerrechten variëren afhankelijk van de douaneregelgeving van het land van bestemming en op dit moment hebben we voornamelijk te maken met invoerrechten bij export naar het Verenigd Koninkrijk.',
 	
 	'text-final' 			=>'Indien er toch specifieke vragen blijven, gelieve ons te contacteren via mail op <a href="mailto:support@telraam.net"  target="_blank">support@telraam.net</a>'
];
