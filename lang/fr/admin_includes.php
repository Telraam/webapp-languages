<?php

return [
    // Camera instances overview
    'camera-instances-header' => 'Instances de caméra',
    'current-installation' => 'Installation en cours',
    'network-device-installation' => 'Installation d\'appareil réseau',
    'old-installations' => 'Anciennes installations',
    'view-setup-page' => 'Voir la page d\'installation :name',

    // Camera instances overview row
    'no-date' => 'pas de date',
    'no-address-yet' => 'Pas encore d\'adresse',
    'no-serial-number' => 'Pas de numéro de série',
    'no-street-selected' => 'Aucune rue sélectionnée',
    'proceed-with-installation' => 'Poursuivre l\'installation',
    'segment-data' => 'Données du segment',
    'street-profile' => 'Profil de rue',
    'stop-installation' => 'Arrêter l\'installation',
    'make-public' => 'Rendre public',
    'make-private' => 'Rendre privé',
    'edit-details' => 'Modifier les détails',
    'edit-current-position' => 'Modifier la position actuelle',
    'new-remote-installation' => 'Nouvelle installation à distance avec cet appareil',
    'more' => 'Plus',

    // Modal: edit address typo
    'modal-address-typo-title' => 'Il y a une faute de frappe dans l\'adresse ou une autre information est incorrecte ?',
    'modal-address-typo-registered-address' => 'Adresse enregistrée :',
    'modal-address-typo-body' => 'Vous pouvez également télécharger une photo d\'en-tête publique pour ce segment ou fournir des informations supplémentaires sur la visibilité des modes de transport.',
    'modal-address-typo-confirm' => 'Oui, je veux modifier',

    // Modal: edit location
    'modal-edit-location-title' => 'Êtes-vous sûr que la position actuelle du Telraam sur la carte est incorrecte ?',
    'modal-edit-location-body' => 'En choisissant une nouvelle position, toutes les données liées à cette installation Telraam seront transférées vers le nouvel emplacement. Si le Telraam est déplacé, l\'utilisateur doit lancer une nouvelle installation pour s\'assurer que les données collectées jusqu\'à présent restent liées au bon emplacement.',
    'modal-edit-location-confirm' => 'Confirmer',

    // Modal: public/private
    'modal-make-public-title' => 'Êtes-vous sûr de vouloir rendre l\'installation publique ?',
    'modal-make-private-title' => 'Êtes-vous sûr de vouloir rendre l\'installation privée ?',
    'modal-currently-private-body' => 'L\'installation est actuellement privée. En la rendant publique, toutes les données collectées à partir de ce moment seront visibles du public sur la carte, la page publique et accessibles via l\'API publique.',
    'modal-currently-private-note' => 'Remarque : passer en public réduira le coût de 15 €/mois (3 crédits de moins).',
    'modal-currently-public-body' => 'L\'installation est actuellement publique. En la rendant privée, toutes les données collectées à partir de ce moment seront masquées et uniquement accessibles via le tableau de bord et l\'API avancée au niveau de l\'installation.',
    'modal-currently-public-note' => 'Remarque : une installation privée coûte 15 €/mois supplémentaires (3 crédits).',
    'modal-make-public-btn' => 'Rendre public',
    'modal-make-private-btn' => 'Rendre privé',

    // Modal: stop instance
    'modal-stop-title' => 'Êtes-vous sûr de vouloir arrêter l\'installation ?',
    'modal-stop-warning' => 'Veuillez agir avec précaution car cette action est irréversible.',
    'modal-stop-btn' => 'Arrêter l\'instance',

    // Shared modal
    'modal-cancel' => 'Oh non, annuler.',

    // Flag detail
    'flags-title' => 'Indicateurs',
    'flags-last-update' => 'Dernière mise à jour des indicateurs (UTC)',
    'flags-none' => 'Aucun indicateur disponible',
    'flag-firmware' => 'Firmware',
    'flag-hello-rate' => 'Taux Hello',
    'flag-avg-signal-quality' => 'Qualité moyenne du signal',
    'flag-completeness' => 'Complétude',
    'flag-uptime' => 'Disponibilité',
    'flag-uptime-day' => 'Disponibilité jour',
    'flag-uptime-night' => 'Disponibilité nuit',
    'flag-excellent' => 'Excellent',
    'flag-suboptimal' => 'Sous-optimal',
    'flag-poor' => 'Mauvais',

    // Network tracks dropdown
    'no-tracks-enabled' => 'Aucun parcours activé',

    // Status instance label
    'status-to-start' => 'À démarrer',
    'status-installing' => 'En cours d\'installation',
    'status-no-counts' => 'Installé, mais aucun comptage',
    'status-counting' => 'En train de compter',
    'status-counted-before' => 'A compté auparavant',
    'status-stopped' => 'Arrêté',
    'detail-active' => 'l\'instance est active',
    'detail-started-counting' => 'A commencé à compter',
    'detail-became-active' => 'Est devenu actif',
    'detail-active-after-non-active' => 'Actif après avoir été inactif',
    'detail-same-user-segment' => 'Même utilisateur & segment',
    'detail-diff-user-segment' => 'Utilisateur & segment différents',
    'detail-same-user-diff-segment' => 'Même utilisateur & segment différent',
    'detail-diff-user-same-segment' => 'Utilisateur différent & même segment',
    'detail-problematic' => 'Problématique',
    'detail-non-active-1day' => 'Inactif depuis 1+ jour',
    'detail-non-active-1week' => 'Inactif depuis 1+ semaine',
    'detail-non-active-2weeks' => 'Inactif depuis 2+ semaines',
    'detail-non-active-3weeks' => 'Inactif depuis 3+ semaines',
    'detail-non-active-4weeks' => 'Inactif depuis 4+ semaines',
    'detail-non-active' => 'Inactif',
    'detail-active-after-problematic' => 'Actif après période problématique',
    'detail-diff-mac' => 'Appareil différent',
    'detail-outboarded' => 'Utilisateur désinscrit',
    'detail-reason-unknown' => 'Raison inconnue',
    'detail-network-admin-stopped' => 'Arrêté par l\'administrateur réseau',
    'detail-user-new-setup' => 'L\'utilisateur a lancé une nouvelle installation, l\'ancienne a été arrêtée',

    // Status progress setup
    'status-other' => 'Autre',
];
