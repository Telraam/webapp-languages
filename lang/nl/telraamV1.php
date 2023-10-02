<?php

return [

    'title'           => 'Telraam V1',
    'subtitle'          => 'Onze allereerste sensor<br>
Een Raspberry Pi omgevormd naar verkeersteller<br>
U haalt de onderdelen, wij de software en het dataplatform<br>',

    'warning' => ' <p>Het Telraam V1 was de eerste concept-sensor van Telraam en startte een revolutie op het gebied van verkeerstellen. Deze hebben we nu naar een hoger niveau getild dankzij onze speciaal gebouwde Telraam S2 sensor.</p>
<p>
Hoewel we geloven dat de Telraam S2 sensor meer nauwkeurigheid en precisie biedt alsook een sterk verbeterde gebruikerservaring biedt voor citizen science, zullen we de komende jaren ook de bestaande Telraam V1-apparaten blijven ondersteunen.</p>',


    'section1-title'        => 'Achtergrond',
    'section1-subtitle'     => 'Een unieke ontstaansgeschiedenis',

    'section1-text'        => '<p>Tijdens de zomer van 2018 zat een groepje transportingenieurs, datawetenschappers en ontwikkelaars samen bij <a href="https://www.tmleuven.be/" target="_blank">TML</a>
 om een nieuwe methode te bedenken voor het aanleveren van verkeersgegevens: een focus op het voorheen onontdekte lokale schaal, met continuë gegevens én voor een fractie van de kosten van bestaande verkeersmonitoringsystemen.</p>

<p>De ervaring van het team leidde hen ertoe zich te focussen op het bouwen van iets kleins, eenvoudigs en betaalbaars, maar nog steeds geschikt voor het beoogde doel. Het uiteindelijke toestel zou bij de burgers op de ramen moeten kunnen leven, om daar dan het werkelijke \'uitzicht\' op de straat weer te kunnen geven, en dit zonder als indringer over te komen. Op deze manier zou het in grote aantallen kunnen worden ingezet om een voleldig beeld te krijgen in een breed scala aan straten, inclusief kleine straten en woonwijken, die vaak niet door traditionele telopstellingen gedekt worden.</p>

<p>Het prototype werd gebouwd met kant-en-klare componenten zoals een Raspberry Pi microcomputer en een camera die aan de bovenvermelde criteria voldeed, het detectiealgoritme werd daarentegen wel intern ontwikkeld. De ontwikkeling van de sensor was klaar voor het einde van de zomer (2018), waarna een basis back-end en front-end vanaf nul werden opgebouwd en de eerste batch van 50 sensoren begin 2019 in Leuven werd uitgerold. Tegen de tijd dat de Telraam S2 in maart 2023 werd gelanceerd, waren er wereldwijd al meer dan 5000 Telraam V1-apparaten verkocht.</p>',

    'section1-text-extra'        => 'Omdat de meeste van de Telraam gebruikers enkel verkeer willen tellen en niet noodzakelijkerwijs technisch onderlegd zijn om met Raspberry Pi\'s te werken, verkopen we sinds de release in het voorjaar van 2023 alleen nog de Telraam S2. We weten echter dat er ook nog genoeg techneuten zijn die graag aan de slag willen, en voor hen blijft de V1-sensor met Raspberry Pi een geweldig hulpmiddel om mee te spelen. Daarom ondersteunen blijven we niet alleen de bestaande V1-sensoren op het terrein ondersteunen, maar ook de nieuwe installaties met zelfgebouwde Telraam V1-apparaten. Als je verkeer wilt tellen en niet bang bent voor een Raspberry Pi-project, lees dan verder!',

    'section2-title'        => 'Doe-het-zelf',
    'section2-subtitle'     => 'Wat heb ik nodig voor een Telraam V1 project?',
    'section2-text'        => 'Het zelfbouwpakket voor een Telraam V1 bestaat uit de volgende onderdelen (let op de specifieke modellen die nodig zijn):<br>
            <ul class="jump-in">
                <li>Raspberry Pi 3A+</li>
                <li>Raspberry Pi Camera Module 2</li>
                <li>Camerahouder (je kan elke beschikbare RPI camerahouder gebruiken, maar we maakten ook zelf een ge-3D-printe houder, die nog steeds kan kopen in onze <a href="https://buy.stripe.com/4gw4jXeOv3G8ePucMP">
                shop</a>, of zelf kan printen gebruikmakend van de bestanden op <a href="https://github.com/Telraam/camera-mount">
                GitHub</a>)</li>
                <li>16 GB SD-kaart met de Telraam image erop geflasht (je vindt                <a href="https://github.com/Telraam/Telraam-RPi"> de software op GitHub hier </a>)</li>
                <li>Stroomadapter</li>
                <li>Aanbevolen: een zwart plooibare afdekhoes dat dient als een zonnewering voor de camera moduel (tegen de refelecties aan de binnenkant van het raam)</li>
                <li>Optioneel: een casing om de Raspberry Pi er mooier te laten uitzien</li>
            </ul>
        <br>
        Raadpleeg onze FAQ voor meer meer info over
            <a href="https://faq-nl.helpspace-docs.io/article/135/do-it-yourself-je-telraam-v1-zelf-assembleren">hoe een v1-toestel zelf te assembleren</a>.</p>
',

    'section2-text-extra'        => '<b> De software en firmware die wordt aangeboden op SD-kaartimage zijn ontwikkeld voor deze specifieke componenten en werken mogelijk niet met een andere configuratie, dus zorg ervoor dat je de juiste hardware gebruikt.</b> Er zijn door de online community pogingen gedaan om V1-toestellen te gebruiken met verschillende RPi versies (lees meer op GitHub), maar we kunnen geen ondersteuning bieden voor zulke pogingen.',

    'section3-title'        => 'Telraam V1 FAQ',
    'section3-subtitle'     => 'Wat en hoe telt het Telraam V1?',

    'section3-text'        => 'Telraam V1 gebruikt computer vision (OpenCV) om objecten te detecteren met een constante (periodiek herberekende mediaan) achtergrond. Objecten worden in realtime gedetecteerd op elk frame met een lage resolutie dat vanuit de camera worden doorgestuurd. Enkele basisparameters (zoals positie in het frame, breedte, hoogte, oppervlakte, enz.) van de contouren van de objecten worden om de paar minuten opgeslagen in het geheugen totdat een algoritme ze verwerkt (en later verwijdert) om zo objecten die over het beeldframe bewegen (dus langs de straat) te identificeren en te volgen. Aan het einde van elke cyclus worden de gemiddelde parameters van de objecten die met succes zijn getraceerd naar de Telraam-servers gestuurd, waar ze later worden ingedeeld in weggebruikers op basis van hun waargenomen parameters, voordat ze worden samengevoegd tot kwartier- en uurtotalen per vervoerswijze en rijrichting.<br>
<br>

De Telraam server classificeert objecten die afkomstig zijn van Telraam V1 apparaten in vier soorten modi:
    <ul class="jump-in">
        <li>voetgangers</li>
        <li>tweewielers (fietsers en bromfietsen)</li>
        <li>auto\'s </li>
        <li>zwaar verkeer (alles groter dan een personenwagen)</li>
    </ul>
<br>
    Wat telt Telraam niet:<br>
    <span class="cross">×</span> Telraam telt niet bij duisternis.<br>
    <span class="cross">×</span> Telraam herkent geen individuele voertuigen (nog nummerplaten).<br>
    <span class="cross">×</span> Telraam herkent geen individuën (noch gezichten).<br>
    <span class="cross">×</span> Het Telraam V1 kan niet betrouwbaar het exacte aantal voertuigen tellen over een zeer korte (enkele minuten) tijdsperiode<br>
    <span class="cross">×</span> Telraam V1 is geen flitspaal en kan geen nauwkeurige snelheidsmetingen uitvoeren.<br>

<p>Voor meer informatie over de technische vereisten, objectclassificatie, nauwkeurigheid en mogelijke beperkingen, gegevenskalibratie en vragen over de snelheidsgegevens kunt u terecht op
<a href="https://faq-nl.helpspace-docs.io/category/17/telraam-v1">onze FAQ</a>.</p>',


];
