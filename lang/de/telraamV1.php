<?php

return [

    'title'           => 'Telraam V1',
    'subtitle'          => 'Unser erster Sensor<br>
Raspberry Pi als Verkehrszähler<br>
Sie beschaffen die Teile, wir liefern die Software und die Datenplattform<br>',

    'warning' => ' <p>Der Telraam V1 war Telraams erstes Konzeptsensor und hat eine Verkehrszählrevolution ausgelöst, die dank unseres zweckgebauten Telraam S2-Geräts nun auf die nächste Ebene gehoben wurde.</p>
<p>
Obwohl wir überzeugt sind, dass der Telraam S2 eine bessere Genauigkeit, Präzision und ein verbessertes Nutzererlebnis für die Bürgerwissenschaft bietet,
 werden wir Telraam V1-Geräte in den kommenden Jahren weiterhin unterstützen.</p>',


    'section1-title'        => 'Geschichte',
    'section1-subtitle'     => 'Eine (Ursprungs-)Geschichte',

    'section1-text'        => '<p>Im Sommer 2018 saßen ein Team aus Verkehrsingenieuren, Datenwissenschaftlern und Entwicklern bei
<a href="https://www.tmleuven.be/" target="_blank">TML</a>
 zusammen, um eine Methode zu entwickeln, die Verkehrsdaten auf einem bisher beispiellosen lokalen Maßstab liefern konnte – kontinuierlich
 und zu einem Bruchteil der Kosten bestehender Verkehrsüberwachungssysteme.</p>

<p>Die Erfahrung des Teams führte dazu, etwas Kleines, Einfaches und Erschwingliches zu bauen, das dennoch seinen Zweck erfüllt.
Das endgültige Gerät müsste in den Fenstern von Bürgern wohnen können, damit es deren tatsächliche „Sicht" auf die Straße repräsentiert,
 ohne aufdringlich zu sein. Auf diese Weise könnte es in großer Stückzahl eingesetzt werden, um ein vollständiges Bild einer Vielzahl von Straßen zu erhalten,
 einschließlich kleiner Nebenstraßen und Wohnstraßen, die von traditionellen Zählsystemen selten erfasst werden.</p>

<p>Der Prototyp wurde aus handelsüblichen Komponenten wie einem Miniatur-Raspberry-Pi-Computer und einer Kamera gebaut, die die
obigen Kriterien erfüllten, während der Erkennungsalgorithmus intern entwickelt wurde. Die Entwicklung des Sensors war vor Ende
des Sommers abgeschlossen; anschließend wurden ein einfaches Back-End und Front-End von Grund auf neu entwickelt. Die erste Charge von 50 Geräten wurde
Anfang 2019 in Leuven verteilt. Bis zum Start des Telraam S2 im Jahr 2023 wurden weltweit mehr als 5.000 Telraam V1-Geräte verkauft.</p>',

    'section1-text-extra'        => 'Da die meisten unserer Nutzer einfach nur Verkehr zählen möchten und nicht unbedingt technisch versiert genug sind, um mit Raspberry Pi zu arbeiten, verkaufen wir seit der Markteinführung des Telraam S2 im Frühjahr 2023 ausschließlich diesen. Wir wissen jedoch, dass es viele Technikbegeisterte gibt, die gerne loslegen würden, und für diese ist der Raspberry-Pi-basierte V1-Sensor nach wie vor ein tolles Werkzeug zum Experimentieren.
    Aus diesem Grund unterstützen wir nicht nur die alten V1-Sensoren im Feld, sondern auch die Installation neuer selbst gebauter Telraam V1-Geräte.
    Wenn Sie Verkehr zählen möchten und sich vor einem Raspberry-Pi-Projekt nicht scheuen, lesen Sie weiter!',

    'section2-title'        => 'Selbst bauen',
    'section2-subtitle'     => 'Was wird für einen Telraam V1 benötigt?',
    'section2-text'        => 'Das für einen Telraam V1 erforderliche Kit besteht aus folgenden Komponenten (bitte beachten Sie die spezifisch benötigten Modelle):<br>
            <ul class="jump-in">
                <li>Raspberry Pi 3A+</li>
                <li>Raspberry Pi Kameramodul 2</li>
                <li>Kamerahalterung (Sie können jede verfügbare RPI-Kamerahalterung kaufen, wir haben jedoch auch eine selbst 3D-gedruckte Halterung entwickelt, die Sie noch in unserem <a href="https://buy.stripe.com/4gw4jXeOv3G8ePucMP">
                Shop</a> kaufen können, oder Sie können sie selbst drucken, indem Sie die Dateien auf <a href="https://github.com/Telraam/camera-mount">
                GitHub</a> verwenden)</li>
                <li>16-GB-SD-Karte mit dem aufgespielten Telraam-Image (die
                <a href="https://github.com/Telraam/Telraam-RPi">Software finden Sie hier auf GitHub</a>)</li>
                <li>Netzteil</li>
                <li>Empfohlen: eine schwarze faltbare Abdeckung als Sonnenschutz für das Kameramodul (gegen interne Reflexionen am Fenster)</li>
                <li>Optional: Gehäuse für den Raspberry Pi für eine ansprechende Optik</li>
            </ul>
        <br>
        Bitte konsultieren Sie unsere FAQ für weitere Informationen dazu,
            <a href="https://faq.telraam.net/article/36/do-it-yourself-assemble-telraam-by-yourself">wie Sie Ihr Gerät zusammenbauen</a>.</p>
',

    'section2-text-extra'        => '<b> Die Software und Firmware des angebotenen SD-Karten-Images wurden für
    diese spezifischen Komponenten erstellt und funktionieren möglicherweise nicht mit einer anderen Konfiguration. Bitte stellen Sie daher sicher, dass Sie die korrekte Hardware beschaffen.</b> Es gibt einige Community-Bemühungen, V1-Geräte mit anderen RPi-Versionen einzurichten (siehe Einträge auf unserem GitHub), aber wir sind nicht in der Lage, für solche Vorhaben Support zu leisten.',

    'section3-title'        => 'Telraam V1 FAQ',
    'section3-subtitle'     => 'Was und wie zählt der Telraam V1?',

    'section3-text'        => 'Der Telraam V1 verwendet Computer Vision (OpenCV), um Objekte vor einem konstanten (periodisch
     neu berechneten medianen) Hintergrund zu erkennen. Objekte werden in Echtzeit auf jedem niedrig aufgelösten Bild erkannt, das von der Kamera gesendet wird.
     Einige grundlegende Parameter (wie Position im Bild, Breite, Höhe, Fläche usw.) der Objektkonturen werden alle paar Minuten im
     Speicher abgelegt, bis ein Algorithmus sie verarbeitet (und später löscht), um Objekte zu identifizieren und
     zu verfolgen, die sich durch den Bildausschnitt (und damit die Straße) bewegen. Am Ende jedes Zyklus werden die durchschnittlichen
     Parameter der erfolgreich verfolgten Objekte an die Telraam-Server gesendet, wo sie anschließend anhand ihrer beobachteten Parameter in
     Verkehrsteilnehmer klassifiziert werden, bevor sie in vierteljährliche und stündliche Zählsummen
     je Modus und Fahrtrichtung aggregiert werden.<br>
<br>

Der Telraam-Server klassifiziert Objekte von Telraam V1-Geräten in vier Typen:
    <ul class="jump-in">
        <li>Fußgänger</li>
        <li>Zweiräder (Radfahrer und Motorräder)</li>
        <li>Autos </li>
        <li>Schwerlastfahrzeuge (alles, was größer als ein Personenkraftwagen ist)</li>
    </ul>
<br>
    Was Telraam nicht zählt:<br>
    <span class="cross">×</span> Telraam zählt nicht bei Dunkelheit.<br>
    <span class="cross">×</span> Telraam erkennt keine einzelnen Fahrzeuge (auch keine Kennzeichen).<br>
    <span class="cross">×</span> Telraam erkennt keine einzelnen Personen (auch keine Gesichter).<br>
    <span class="cross">×</span> Der Telraam V1 kann die genaue Anzahl von Fahrzeugen über einen sehr kurzen (nur wenige Minuten langen) Zeitraum nicht zuverlässig zählen.<br>
    <span class="cross">×</span> Der Telraam V1 ist kein Geschwindigkeitsmessgerät und kann keine präzisen Geschwindigkeitsmessungen liefern.<br>

<p>Weitere Informationen zu den technischen Anforderungen, zur Objektklassifizierung, zur Genauigkeit und möglichen Einschränkungen, zur Datenkalibrierung und zu Fragen bezüglich der Geschwindigkeitsdaten finden Sie in
<a href="https://faq.telraam.net/category/5/telraam-v1">unserer FAQ</a>.</p>',


];
