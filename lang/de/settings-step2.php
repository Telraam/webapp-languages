<?php

return [
    'nav-title'        => 'Gerät bereit?',
    'workshop-title'    => ' Ich habe mein Telraam-Gerät bereit',
    'workshop-intro'    => 'Sie haben Ihr Telraam-Gerät erhalten. Fahren Sie hier fort, um die Schritte zur Installation Ihres Telraam, zum Verbinden mit Ihrem WLAN, zur Aktivierung und zum Start der Zählung durchzuführen.',

                    // new
                        'big-steps-title' => 'Welche Schritte müssen Sie unternehmen?',

                        'big-steps-1' => 'Geben Sie den Standort Ihres Telraam auf der Karte an',
                        'big-steps-2' => 'Versorgen Sie Ihren Telraam mit Strom und richten Sie ihn auf die Straße aus.',
                        'big-steps-3' => 'Verbinden Sie Ihren Telraam mit Ihrem WLAN',
                        'big-steps-4' => 'Geben Sie die Seriennummer Ihres Telraam ein',

    'self-assembly-title' => 'Wie wird montiert?',

    'assembly-software-title-0' => 'Die Komponenten',

    'assembly-text-intro' => '
<ul class="checklist"><li>Schwarzes Gehäuse</li>
<li>Raspberry Pi (Mikrocomputer)</li>
<li>Raspberry Pi-Netzkabel</li>
<li>SD-Karte im Adapter</li>
<li>Kamera</li>
<li>Kamerahalterung</li>
<li>Kabel zur Verbindung von Kamera und schwarzem Gehäuse – Kamerakabel</li>
<li>Drei Arten von Klebeband: schwarzes, doppelseitiges und normales Klebeband</li>
<li>Stift</li>
<li>Schere</li></ul>',
    'assembly-software-title-1' => 'Software auf die SD-Karte spielen',
    'assembly-software-more-0' => 'Jetzt ist es Zeit, die Software für Ihren Telraam zu installieren. Sie müssen nur einem einfachen, unkomplizierten Verfahren folgen. Zuerst laden Sie die Telraam-Software auf Ihren Computer herunter (sie wird als große ZIP-Datei bereitgestellt). Dann laden Sie ein kleines Hilfsprogramm herunter, mit dem Sie die Telraam-Software direkt auf Ihre SD-Karte installieren können.<br> Schritt für Schritt:
<ul><li>Telraam-Software herunterladen</li>
<li>Etcher herunterladen (ein Programm zum Schreiben von Daten auf eine SD-Karte)</li>
<li>Telraam-Software auf die SD-Karte schreiben</li></ul>',
    'assembly-software-step-1-title' => 'Das schwarze Gehäuse',
    'assembly-software-step-2-title' => 'Die Kamera',
    'assembly-software-step-3-title' => 'Das Kamerakabel',
    'assembly-software-more-1' => '<h4>Schritt 1: Telraam-Software herunterladen</h4><br>
Sie können die Telraam-Software <a href=" https://telraam-api.net/telraam-sd-image.zip"  target="_blank">hier </a> herunterladen. Merken Sie sich, wo diese große ZIP-Datei (ca. 4 Gigabyte) auf Ihrem Computer gespeichert wurde.<br><br>

<span class=tiny>Zur Information: Telraam wird als komprimiertes Image-File geliefert, das direkt auf die SD-Karte geschrieben werden kann. Es enthält eine speziell für den Raspberry Pi angepasste Linux-Version, die so vorkonfiguriert ist, dass die Telraam-Software beim Start automatisch ausgeführt wird. Es werden daher kein Bildschirm, keine Maus und keine Tastatur benötigt.</span>
',
    'assembly-software-more-2' => '<h4>Schritt 2: Etcher herunterladen</h4><br>
Etcher ist ein Programm, mit dem Sie die Telraam-Software aus Schritt 1 von Ihrem Computer auf Ihre SD-Karte kopieren können. Es funktioniert unter Windows, Linux und macOS.

Sie können <a href="https://www.balena.io/etcher/" target="_blank"> Etcher hier herunterladen</a>. Wählen Sie die richtige Version für Ihr Betriebssystem.',
    'assembly-software-more-3' => '<h4>Schritt 3: Telraam-Software auf die SD-Karte schreiben</h4><br>
Stecken Sie Ihre SD-Karte in den SD-Kartenleser Ihres Computers (ignorieren Sie etwaige Meldungen) und starten Sie das Etcher-Programm. Klicken Sie auf „Select image".',
    'assembly-software-more-4' => 'Klicken Sie in Etcher auf „Select drive".',
    'assembly-software-more-5' => 'Wählen Sie Ihre SD-Karte aus der Liste.',
    'assembly-software-more-6' => 'Klicken Sie auf „Flash!"',
    'assembly-software-more-7' => 'Etcher beginnt nun damit, die große Datei auf Ihre SD-Karte zu schreiben und zu überprüfen. Je nach Geschwindigkeit Ihres SD-Kartenlesers kann dies zwischen einer halben Stunde und mehreren Stunden dauern. Warten Sie, bis Etcher vollständig fertig ist.',
    'assembly-software-more-8' => 'Wenn alles fertig ist, können Sie Etcher schließen, die SD-Karte aus Ihrem Computer entfernen und in Ihren Raspberry Pi einsetzen.',


    'assembly-title-1' => 'Telraam in zehn Schritten zusammenbauen',
    'assembly-1' => 'Setzen Sie den Raspberry Pi in das schwarze Gehäuse ein. Stellen Sie sicher, dass die 4 kleinen Stifte des Raspberry Pi in das schwarze Gehäuse einrasten.',
    'assembly-2' => 'Nehmen Sie die Micro-SD-Karte aus dem Adapter',
    'assembly-3' => 'Stecken Sie die Micro-SD-Karte in der richtigen Ausrichtung in den Raspberry Pi. Schauen Sie sich bei Bedarf das <a href=https://youtu.be/MgA4yUgnKrg target=_blank>Anleitungsvideo</a> an.',
    'assembly-4' => 'Schließen Sie das Kamerakabel an die Kamera an',
    'assembly-5' => 'Setzen Sie den Raspberry Pi in das schwarze Gehäuse ein. Achten Sie auf die vier Stifte. Führen Sie das Kabel durch den Schlitz in der Halterung.<br><br>

Setzen Sie die Abdeckung auf die Kamerahalterung, aber klicken Sie sie noch nicht vollständig ein. Das Winkelstück zur Einstellung der Halterung muss noch dazwischen geschoben werden.
<br><br>
Klicken Sie dann die Kamerahalterung mit dem eingefügten Winkelstück vollständig zusammen.',

    'assembly-6' => 'Stecken Sie das Kamerakabel in den Raspberry Pi. Der Metallstreifen am Kabel muss das Metall in der Verbindung zum Raspberry Pi berühren. Klicken Sie das Kabel fest.',

    'assembly-7' => 'Schließen Sie das schwarze Gehäuse, indem Sie es einrasten lassen.',

    'assembly-8' => 'Färben Sie das Kamerakabel schwarz (mit Klebeband oder Marker).',

    'assembly-9' => 'Bringen Sie doppelseitiges Klebeband an Gehäuse, Kamerakabel und Kamerahalterung an.',

    'assembly-10' => 'Ihr Telraam ist fertig! Folgen Sie den nächsten Schritten, um Ihren Telraam mit Ihrem WLAN zu verbinden und zu montieren.',

    'btn-save' => 'Ok, weiter!',


    /* new 11 june */
    'order-at-gotron-self-assemblage'  => 'Haben Sie Schwierigkeiten, die Teile zu finden? Bestellen Sie Ihre Teile bei <a href="https://www.gotron.be/je-wil-graag-weten-hoeveel-en-welk-verkeer-er-door-je-straat-komt.html" target="_blank">Gotron</a>. Gotron ist ein belgischer Elektronikspezialist mit technischen Serviceleistungen.',

    'gotron-title' => 'Bestellung bei Gotron',

    'order-at-gotron-package' => 'Bestellen Sie Ihren Telraam hier bei <a href="https://www.gotron.be/https://www.gotron.be/telraampakket-pre-installed-version-voorafgemonteerd-en-flashed-sd-kaart.html" target="_blank">Gotron</a>.
Bei Gotron können Sie eine montierte Version inkl. Software auf SD-Karte bestellen. Gotron ist ein belgischer Elektronikspezialist mit technischen Serviceleistungen.',
    'link-gotron' => 'https://www.gotron.be/telraampakket-pre-installed-version-voorafgemonteerd-en-flashed-sd-kaart.html',
    'btn-save-received-and-ready' => 'Ok, Telraam-Gerät empfangen und bereit!',

];
