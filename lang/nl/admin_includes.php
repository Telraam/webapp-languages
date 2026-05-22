<?php

return [
    // Camera instances overview
    'camera-instances-header' => 'Camera-instanties',
    'current-installation' => 'Huidige installatie',
    'network-device-installation' => 'Netwerktoestel-installatie',
    'old-installations' => 'Oude installaties',
    'view-setup-page' => 'Installatiepagina bekijken :name',

    // Camera instances overview row
    'no-date' => 'geen datum',
    'no-address-yet' => 'Nog geen adres',
    'no-serial-number' => 'Geen serienummer',
    'no-street-selected' => 'Geen straat geselecteerd',
    'proceed-with-installation' => 'Ga verder met de installatie',
    'segment-data' => 'straatsegmentdata',
    'street-profile' => 'Straatprofiel',
    'stop-installation' => 'Installatie stoppen',
    'make-public' => 'Openbaar maken',
    'make-private' => 'Privé maken',
    'edit-details' => 'Details bewerken',
    'edit-current-position' => 'Huidige positie bewerken',
    'new-remote-installation' => 'Nieuwe installatie op afstand met dit toestel',
    'more' => 'Meer',

    // Modal: edit address typo
    'modal-address-typo-title' => 'Er is een typefout in het adres of andere informatie klopt niet?',
    'modal-address-typo-registered-address' => 'Geregistreerd adres:',
    'modal-address-typo-body' => 'Je kunt ook een openbare kopiefoto voor dit straatsegment uploaden of aanvullende informatie geven over de zichtbaarheid van vervoersmodi.',
    'modal-address-typo-confirm' => 'Ja, ik wil wijzigen',

    // Modal: edit location
    'modal-edit-location-title' => 'Weet je zeker dat de huidige positie van de Telraam op de kaart incorrect is?',
    'modal-edit-location-body' => 'Door een nieuwe positie te kiezen, worden alle gegevens gekoppeld aan deze Telraam-installatie overgedragen naar de nieuwe locatie. Als de Telraam is verplaatst, moet de gebruiker een nieuwe installatie starten om ervoor te zorgen dat de tot nu toe verzamelde data aan de juiste locatie gekoppeld blijft.',
    'modal-edit-location-confirm' => 'Bevestigen',

    // Modal: public/private
    'modal-make-public-title' => 'Weet je zeker dat je de installatie openbaar wil maken?',
    'modal-make-private-title' => 'Weet je zeker dat je de installatie privé wil maken?',
    'modal-currently-private-body' => 'De installatie is momenteel privé. Door hem openbaar te maken, worden alle gegevens die vanaf nu worden verzameld zichtbaar voor het publiek op de kaart, de openbare pagina en toegankelijk via de openbare API.',
    'modal-currently-private-note' => 'Let op: Overschakelen naar openbaar verlaagt de kosten met €15/maand (3 credits minder).',
    'modal-currently-public-body' => 'De installatie is momenteel openbaar. Door hem privé te maken, worden alle gegevens die vanaf nu worden verzameld verborgen en alleen toegankelijk via het dashboard en de geavanceerde API op installatieniveau.',
    'modal-currently-public-note' => 'Let op: Een privé-installatie kost extra €15/maand (3 credits).',
    'modal-make-public-btn' => 'Openbaar maken',
    'modal-make-private-btn' => 'Privé maken',

    // Modal: stop instance
    'modal-stop-title' => 'Weet je zeker dat je de installatie wil stoppen?',
    'modal-stop-warning' => 'Ga voorzichtig te werk, want dit kan niet ongedaan worden gemaakt.',
    'modal-stop-btn' => 'Instantie stoppen',

    // Shared modal
    'modal-cancel' => 'O nee, annuleren.',

    // Flag detail
    'flags-title' => 'Vlaggen',
    'flags-last-update' => 'Laatste vlagupdate (UTC)',
    'flags-none' => 'Geen vlaggen beschikbaar',
    'flag-firmware' => 'Firmware',
    'flag-hello-rate' => 'Hello Rate',
    'flag-avg-signal-quality' => 'Gemiddelde signaalkwaliteit',
    'flag-completeness' => 'Volledigheid',
    'flag-uptime' => 'Uptime',
    'flag-uptime-day' => 'Uptime dag',
    'flag-uptime-night' => 'Uptime nacht',
    'flag-excellent' => 'Uitstekend',
    'flag-suboptimal' => 'Suboptimaal',
    'flag-poor' => 'Slecht',

    // Network tracks dropdown
    'no-tracks-enabled' => 'Geen tracks ingeschakeld',

    // Status instance label
    'status-to-start' => 'Te starten',
    'status-installing' => 'Aan het installeren',
    'status-no-counts' => 'Geïnstalleerd, maar geen tellingen',
    'status-counting' => 'Aan het tellen',
    'status-counted-before' => 'Eerder geteld',
    'status-stopped' => 'Gestopt',
    'detail-active' => 'instantie is actief',
    'detail-started-counting' => 'Begonnen met tellen',
    'detail-became-active' => 'Actief geworden',
    'detail-active-after-non-active' => 'Actief na inactief te zijn geweest',
    'detail-same-user-segment' => 'Zelfde gebruiker & straatsegment',
    'detail-diff-user-segment' => 'Andere gebruiker & straatsegment',
    'detail-same-user-diff-segment' => 'Zelfde gebruiker & ander straatsegment',
    'detail-diff-user-same-segment' => 'Andere gebruiker & zelfde straatsegment',
    'detail-problematic' => 'Problematisch',
    'detail-non-active-1day' => 'Inactief 1+ dag',
    'detail-non-active-1week' => 'Inactief 1+ week',
    'detail-non-active-2weeks' => 'Inactief 2+ weken',
    'detail-non-active-3weeks' => 'Inactief 3+ weken',
    'detail-non-active-4weeks' => 'Inactief 4+ weken',
    'detail-non-active' => 'Inactief',
    'detail-active-after-problematic' => 'Actief na problematisch',
    'detail-diff-mac' => 'Ander toestel',
    'detail-outboarded' => 'Gebruiker uitgestapt',
    'detail-reason-unknown' => 'Reden onbekend',
    'detail-network-admin-stopped' => 'Gestopt door netwerkbeheerder',
    'detail-user-new-setup' => 'Gebruiker startte nieuwe installatie, vorige gestopt',

    // Status progress setup
    'status-other' => 'Overig',
];
