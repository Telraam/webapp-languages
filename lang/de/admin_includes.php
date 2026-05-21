<?php

return [
    // Camera instances overview
    'camera-instances-header' => 'Kamera-Instanzen',
    'current-installation' => 'Aktuelle Installation',
    'network-device-installation' => 'Netzwerkgeräte-Installation',
    'old-installations' => 'Alte Installationen',
    'view-setup-page' => 'Einrichtungsseite anzeigen :name',

    // Camera instances overview row
    'no-date' => 'kein Datum',
    'no-address-yet' => 'Noch keine Adresse',
    'no-serial-number' => 'Keine Seriennummer',
    'no-street-selected' => 'Keine Straße ausgewählt',
    'proceed-with-installation' => 'Mit der Installation fortfahren',
    'segment-data' => 'Segmentdaten',
    'street-profile' => 'Straßenprofil',
    'stop-installation' => 'Installation stoppen',
    'make-public' => 'Öffentlich machen',
    'make-private' => 'Privat machen',
    'edit-details' => 'Details bearbeiten',
    'edit-current-position' => 'Aktuelle Position bearbeiten',
    'new-remote-installation' => 'Neue Remote-Installation mit diesem Gerät',
    'more' => 'Mehr',

    // Modal: edit address typo
    'modal-address-typo-title' => 'Gibt es einen Tippfehler in der Adresse oder sind andere Informationen falsch?',
    'modal-address-typo-registered-address' => 'Registrierte Adresse:',
    'modal-address-typo-body' => 'Sie können auch ein öffentliches Kopfbild für dieses Segment hochladen oder zusätzliche Informationen zur Sichtbarkeit von Verkehrsmitteln bereitstellen.',
    'modal-address-typo-confirm' => 'Ja, ich möchte es ändern',

    // Modal: edit location
    'modal-edit-location-title' => 'Sind Sie sicher, dass die aktuelle Position des Telraam auf der Karte falsch ist?',
    'modal-edit-location-body' => 'Durch die Auswahl einer neuen Position werden alle mit dieser Telraam-Installation verknüpften Daten an den neuen Standort übertragen. Wenn das Telraam verschoben wird, muss der Benutzer eine neue Einrichtung starten, damit die bisher gesammelten Daten dem richtigen Standort zugeordnet bleiben.',
    'modal-edit-location-confirm' => 'Bestätigen',

    // Modal: public/private
    'modal-make-public-title' => 'Sind Sie sicher, dass Sie die Installation öffentlich machen möchten?',
    'modal-make-private-title' => 'Sind Sie sicher, dass Sie die Installation privat machen möchten?',
    'modal-currently-private-body' => 'Die Installation ist derzeit privat. Wenn Sie sie öffentlich machen, werden alle ab diesem Zeitpunkt gesammelten Daten auf der Karte, der öffentlichen Seite und über die öffentliche API sichtbar.',
    'modal-currently-private-note' => 'Hinweis: Der Wechsel zu öffentlich reduziert die Kosten um 15 €/Monat (3 Credits weniger).',
    'modal-currently-public-body' => 'Die Installation ist derzeit öffentlich. Wenn Sie sie privat machen, werden alle ab diesem Zeitpunkt gesammelten Daten ausgeblendet und sind nur über das Dashboard und die erweiterte API auf Installationsebene zugänglich.',
    'modal-currently-public-note' => 'Hinweis: Eine private Installation kostet zusätzlich 15 €/Monat (3 Credits).',
    'modal-make-public-btn' => 'Öffentlich machen',
    'modal-make-private-btn' => 'Privat machen',

    // Modal: stop instance
    'modal-stop-title' => 'Sind Sie sicher, dass Sie die Installation stoppen möchten?',
    'modal-stop-warning' => 'Bitte gehen Sie vorsichtig vor, da dieser Vorgang nicht rückgängig gemacht werden kann.',
    'modal-stop-btn' => 'Instanz stoppen',

    // Shared modal
    'modal-cancel' => 'Nein, abbrechen.',

    // Flag detail
    'flags-title' => 'Flags',
    'flags-last-update' => 'Letztes Flag-Update (UTC)',
    'flags-none' => 'Keine Flags verfügbar',
    'flag-firmware' => 'Firmware',
    'flag-hello-rate' => 'Hello Rate',
    'flag-avg-signal-quality' => 'Durchschnittliche Signalqualität',
    'flag-completeness' => 'Vollständigkeit',
    'flag-uptime' => 'Betriebszeit',
    'flag-uptime-day' => 'Betriebszeit Tag',
    'flag-uptime-night' => 'Betriebszeit Nacht',
    'flag-excellent' => 'Ausgezeichnet',
    'flag-suboptimal' => 'Suboptimal',
    'flag-poor' => 'Schlecht',

    // Network tracks dropdown
    'no-tracks-enabled' => 'Keine Tracks aktiviert',

    // Status instance label
    'status-to-start' => 'Noch nicht gestartet',
    'status-installing' => 'Wird installiert',
    'status-no-counts' => 'Installiert, wartend',
    'status-counting' => 'Zählt',
    'status-counted-before' => 'Hat bereits gezählt',
    'status-stopped' => 'Gestoppt',
    'detail-active' => 'Instanz ist aktiv',
    'detail-started-counting' => 'Zählung gestartet',
    'detail-became-active' => 'Wurde aktiv',
    'detail-active-after-non-active' => 'Aktiv nach Inaktivität',
    'detail-same-user-segment' => 'Gleicher Benutzer & Segment',
    'detail-diff-user-segment' => 'Anderer Benutzer & Segment',
    'detail-same-user-diff-segment' => 'Gleicher Benutzer & anderes Segment',
    'detail-diff-user-same-segment' => 'Anderer Benutzer & gleiches Segment',
    'detail-problematic' => 'Problematisch',
    'detail-non-active-1day' => 'Inaktiv seit 1+ Tag',
    'detail-non-active-1week' => 'Inaktiv seit 1+ Woche',
    'detail-non-active-2weeks' => 'Inaktiv seit 2+ Wochen',
    'detail-non-active-3weeks' => 'Inaktiv seit 3+ Wochen',
    'detail-non-active-4weeks' => 'Inaktiv seit 4+ Wochen',
    'detail-non-active' => 'Inaktiv',
    'detail-active-after-problematic' => 'Aktiv nach problematischem Zustand',
    'detail-diff-mac' => 'Anderes Gerät',
    'detail-outboarded' => 'Benutzer abgemeldet',
    'detail-reason-unknown' => 'Grund unbekannt',
    'detail-network-admin-stopped' => 'Durch Netzwerkadministrator gestoppt',
    'detail-user-new-setup' => 'Benutzer hat neue Einrichtung gestartet, ältere gestoppt',

    // Status progress setup
    'status-other' => 'Sonstiges',
];
