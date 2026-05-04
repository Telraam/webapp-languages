<?php

return [

    'title'      => 'Genauigkeit und Präzision',
    'subtitle'   => 'So erzielen Sie die besten Ergebnisse mit Ihrem Telraam S2<br> Wie Sie das Gerät korrekt installieren und einige häufige Probleme angehen',

    'intro' => 'Telraam-S2-Geräte bieten Flexibilität, einfache Installation und eine zuverlässige Genauigkeit von bis zu 90–95 % bei motorisierten Fahrzeugen, doch um optimale Ergebnisse zu erzielen, sind einige Anforderungen zu beachten.',
    // location
    'location-title' => 'Was ist ein geeignetes Fenster oder ein geeigneter Standort?',

    'location-req-1-title' => 'Höhe und Geschossebene',
    'location-req-1-txt' => 'Das Gerät muss mindestens im ersten Obergeschoss (+1 über dem Erdgeschoss) oder über 3–4 m Höhe installiert werden – Standorte im Erdgeschoss sind im Allgemeinen nicht zu bevorzugen.',

    'location-req-2-title' => 'Abstand zur Straße',
    'location-req-2-txt' => 'Muss weit genug entfernt sein, um große Fahrzeuge (z. B. Lieferwagen) vollständig zu erfassen, insbesondere bei schmalen Straßen.
                Wenn er weiter als 15 m von der Straßenmitte entfernt ist, lässt die Erfassung von Fußgängern und Radfahrern auf der gegenüberliegenden Seite nach.',

    'location-req-3-title' => 'Freie Sicht',
    'location-req-3-txt' => 'Keine Hindernisse: Bäume, Hecken, Balkone, Fliegengitter, geparkte hohe Fahrzeuge usw. Stellen Sie sicher, dass Straße und Gehweg vollständig sichtbar sind.',

    'location-req-4-title' => 'Keine Kreuzungen',
    'location-req-4-txt' => 'Die Kamera sollte ausschließlich einen geraden Straßenabschnitt (senkrechter Blick) erfassen und darf keine Kreuzungen,
            Straßenkreuzungen, Spielplätze oder Parkplätze einschließen – nur Verkehr, der sich von links nach rechts oder von rechts nach links bewegt.',


    // how
    'how-title' => 'Wird der Sensor niemals eine Bewegung verpassen?',
    'how-txt' => 'Telraam S2 nutzt KI, um Objekte zu erkennen und Bewegungen zu verfolgen. Objekte werden erkannt und jedem Objekt wird ein Wahrscheinlichkeitswert zugewiesen.
                Jedes Objekt benötigt einen bestimmten Wahrscheinlichkeitswert, um berücksichtigt zu werden.
                Wenn ein erkanntes Objekt auf einer Seite eintritt und auf der anderen Seite austritt, registrieren wir eine Zählung.
                <br>

                <br>
                Kein System ist perfekt. Welche Situationen sind also schwierig?<br>
                <ul class="jump-in">
                    <li>Wenn Objekte verdeckt oder zu weit entfernt sind, kann das Gerät Schwierigkeiten haben. </li>
                    <li>Wenn Winkel oder Abstand stark vom klassischen Setup abweichen, kann es zu Leistungseinbußen kommen.</li>
                    <li>Fußgänger oder Radfahrer können – insbesondere wenn Personen verdeckt sind, weil sie in Gruppen oder weit von der Kamera entfernt gehen/fahren – falsch klassifiziert oder nicht korrekt gezählt werden.</li>
                </ul>',

    // location more
    'location-more-title' => 'Möchten Sie mehr über die Standortanforderungen erfahren?',
    'location-more-txt' => 'Wenn Sie unsicher sind, können Sie einen <a href="https://faq.telraam.net/article/3/requirements-for-a-suitable-window-and-location">eigenen FAQ-Artikel mit weiteren Details</a> oder
                <a href="https://faq.telraam.net/article/357/location-guidelines-for-telraam-s2-outdoor">einen separaten, umfassenden Artikel zu den Anforderungen des Telraam S2 Outdoor</a> konsultieren.',


    // privacy
    'privacy-title' => 'Cloud-basierte KI vs. Datenschutz',
    'privacy-txt' => 'Im Gegensatz zu vielen teureren Kamerasystemen führt Telraam die Klassifizierung und Zählung direkt auf dem Gerät selbst durch. Nur so können wir die Privatsphäre wirklich gewährleisten,
                und wir glauben, dass der Schutz der Privatsphäre essenziell ist.<br>
                Der Telraam S2 enthält eine Kamera mit niedriger Auflösung und speichert keine Bilder.<br>
                Wir freuen uns über Validierungszählungen, die uns helfen, unsere Algorithmen zu verbessern.
                Lesen Sie gerne mehr in <a href="https://faq.telraam.net/article/265/objective-evaluation-of-the-results-of-your-quick-validation">unserer FAQ über den Prozess.</a>',

    // tubes
    'tubes-title' => 'Schläuche vs. unauffällig und multimodal',
    'tubes-txt' => 'Heutzutage sind pneumatische Schläuche der Standard für Verkehrszählungen.
Unabhängige Praxistests haben jedoch gezeigt, dass selbst diese eine <a href="https://nap.nationalacademies.org/read/22223/chapter/6#77" target="_blank">Fehlermarge von 10–20 %</a><sup>1&nbsp;2</sup> aufweisen,
                meist Untererfassungen. Wir erreichen typischerweise mindestens dieselbe Genauigkeit mit weniger Aufwand. Schlauchinstallationen sind arbeitsintensiv, wartungsbedürftig und haben eine kurze Lebensdauer.
Telraam ist einfach zu installieren, zählt von Haus aus alle Modi und zählt über einen längeren Zeitraum ohne Wartung weiter.<br>
                <div class="tiny grey jump-in" style="line-height: 13px; margin-top: 20px;">
                    <sup style="top:0">1</sup>&nbsp;<a href="https://nap.nationalacademies.org/read/22223/chapter/6#77" target="_blank" class="tiny grey">Guidebook on Pedestrian and Bicycle Volume Data Collection. Washington, DC:
                                The National Academies Press.</a><br><br>
                    <sup style="top:0">2</sup>&nbsp;<a href="https://www.researchgate.net/publication/298805209_Accuracy_of_Bicycle_Counting_with_Pneumatic_Tubes_in_Oregon" class="tiny grey"  target="_blank">Accuracy of Bicycle Counting with Pneumatic Tubes in Oregon</a>
                </div>',

    // what to expect
    'result-title' => 'Was können Sie also erwarten?',
    'result-txt' => 'Die Genauigkeit des Telraam S2 liegt bei etwa <strong>90–95 % für motorisierten Verkehr</strong>.
                    Bei aktiven Verkehrsteilnehmern wie Fußgängern und Radfahrern kann die Genauigkeit etwas geringer sein und
                    Objekte können falsch klassifiziert werden, z. B. ein Fußgänger mit Kinderwagen als Radfahrer.
                    Eine optimale Leistung hängt von der richtigen Positionierung und Einrichtung ab.
                    Zögern Sie nicht, sich für Beratung oder Unterstützung <a href="/en/contact-us">mit uns in Verbindung zu setzen</a>.',

    // more/advanced part
    'more-title'    => 'Mehr zu Genauigkeit, Geschwindigkeitsdaten usw.',

    'more-1-title'  => 'Grenzfälle',
    'more-1-txt'    => 'Wenn Sie Ihr Verständnis dafür vertiefen möchten, was zu Ungenauigkeiten bei unseren Sensoren führen kann und wie man diese vermeidet, können Sie mehr im
<a href="https://faq.telraam.net/article/43/potential-inaccuracies-with-telraam-s2">FAQ-Artikel über mögliche Grenzfälle</a> erfahren.',

    'more-2-title' => 'Geschwindigkeit',
    'more-2-txt' => 'Telraam S2 ermittelt die Fahrzeuggeschwindigkeit, indem es die Zeit misst, die ein Auto benötigt, um seine eigene geschätzte Länge zurückzulegen, basierend auf durchschnittlichen belgischen
                Fahrzeugabmessungen, was distanzunabhängige Geschwindigkeitsschätzungen ermöglicht. Lesen Sie mehr im
<a href="https://faq.telraam.net/article/41/speed-measurements-with-telraam-s2">FAQ-Artikel zu Geschwindigkeitsmessungen</a>.',

    'more-3-title' => 'Leistungstests nach Version',
    'more-3-txt' => 'Einen Überblick über unsere eigenen Validierungszählungen und Experimente zur Bewertung der Genauigkeit der verschiedenen Versionen unseres KI-Modells finden Sie in den
                <a href="https://github.com/Telraam/Telraam-S2/blob/main/count-performance-validation.md">Zählleistungstests unserer aktuellen und früheren K210-Firmware-Versionen</a>.',

];
