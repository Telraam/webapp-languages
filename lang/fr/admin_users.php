<?php

return [
    // Header
    'users-devices' => 'Utilisateurs et appareils',
    'counted-or-counting' => 'qui ont compté ou comptent encore',
    'add-device' => 'Ajouter un appareil',
    'invite-users' => 'Inviter des utilisateurs',
    'export' => 'Exporter',

    // Subheader
    'overview' => 'Aperçu',
    'mails' => 'E-mails',
    'reports' => 'Rapports',

    // Overview filters
    'all-users-devices' => 'Tous les utilisateurs et appareils (:count)',
    'to-start' => 'À démarrer (:count)',
    'installing' => 'En cours d\'installation (:count)',
    'installed-no-counts' => 'Installé, mais aucun comptage (:count)',
    'is-counting' => 'En train de compter (:count)',
    'counted-before' => 'A compté auparavant (:count)',
    'stopped' => 'Arrêté (:count)',
    'did-counting' => 'Compte, a compté et arrêté (:count)',
    'archived' => 'Archivé (:count)',
    'all-postal-codes' => 'Tous les codes postaux',
    'all-tracks' => 'Tous les parcours',
    'no-tracks-enabled' => 'Aucun parcours activé',
    'search' => 'Rechercher par nom, e-mail, rue...',
    'filter' => 'Filtrer',

    // Table headers
    'col-date' => 'Date',
    'col-name' => 'Nom',
    'col-device-status' => 'Statut de l\'appareil',
    'col-address' => 'Adresse',

    // Overview row labels
    'new-device-sent' => 'Nouvel appareil envoyé',
    'device-returned-repair' => 'Appareil retourné pour réparation',
    'device-returned' => 'Appareil retourné',
    'new-sd-sent' => 'Nouvelle carte SD envoyée',
    'outboarded' => 'Désinscrit',
    'network-label' => 'Réseau',
    'segment' => 'Segment :',
    'more' => 'Plus',
    'edit-details' => 'Modifier et détails',
    'login-as' => 'Se connecter en tant que :name',
    'dearchive' => 'Désarchiver',
    'archive' => 'Archiver',
    'nothing-found' => 'Aucun résultat',
    'nothing-found-dots' => 'Aucun résultat...',
    'empty-info' => 'Un utilisateur possède un compte Telraam. Un compte utilisateur comprend des identifiants de connexion (e-mail, mot de passe) ainsi que toutes les informations relatives à l\'utilisateur. Dans la plupart des cas, un utilisateur avait ou a un appareil Telraam. Un utilisateur ne peut avoir qu\'un seul appareil actif à la fois.',

    // Add device modal
    'add-network-device-title' => 'Ajouter un appareil géré par le réseau',
    'add-network-device-body' => 'Un appareil géré par le réseau est installé et géré par vous en tant qu\'administrateur réseau. Cette fonctionnalité n\'est disponible que pour les appareils avec un abonnement réseau.',
    'read-more-faq' => 'En savoir plus dans la FAQ',
    'start-setup' => 'Démarrer la configuration',

    // Invite modal
    'invite-title' => 'Vous souhaitez inviter des citoyens dans votre réseau ?',
    'invite-body' => 'Telraam fonctionne mieux grâce aux réseaux locaux et aux citoyens. En utilisant le lien ci-dessous, vous pouvez facilement inviter des citoyens à rejoindre votre réseau.',
    'copy' => 'Copier',
    'ok' => 'Ok',
    'link-copied' => 'Lien copié dans le presse-papiers !',

    // Edit page
    'no-public-page' => 'Pas encore de page publique',
    'setup-page' => 'Page de configuration',
    'network-header' => 'Réseau',
    'tab-general' => 'Général',
    'tab-device' => 'Appareil',
    'tab-installation' => 'Installation',
    'tab-email' => 'E-mail',
    'tab-roi' => 'ROI',
    'tab-advanced' => 'Avancé',
    'sub-tab-config' => 'Config',
    'sub-tab-diagnostics' => 'Diagnostics',
    'sub-tab-log' => 'Journal',

    // Edit block (user)
    'language' => 'Langue',
    'network' => 'Réseau',
    'track' => 'Parcours',
    'quality-remark' => 'Remarque sur la qualité',
    'quality-remark-note' => 'Seul Telraam peut mettre à jour ceci',
    'quality-no-remark' => 'Aucune remarque, qualité normale (par défaut)',
    'quality-low-accuracy' => 'Problème général de précision',
    'quality-bad-connectivity' => 'Problème lié à la connectivité',
    'quality-hardware-issue' => 'Problème matériel ou firmware',
    'quality-testing-device' => 'Appareil de test en cours d\'utilisation',
    'member-since' => 'Membre depuis',
    'street-segment' => 'Segment de rue',
    'no-street-segment' => "L'utilisateur n'a pas encore sélectionné de segment de rue",
    'linked-candidate' => 'Candidat associé',
    'status-selected' => 'Sélectionné',
    'status-not-selected' => 'Non sélectionné',
    'status-waitinglist' => 'Liste d\'attente',
    'no-candidate-link' => 'Aucun lien officiel de candidat trouvé',
    'save' => 'Enregistrer',

    // Edit support block
    'outboarding' => 'Désinscription',
    'device-handed-back' => 'Appareil rendu',
    'candidate' => 'Candidat',
    'received-device' => 'a reçu l\'appareil',
    'on' => 'le',
    'on-unknown-date' => 'à une date inconnue',
    'status' => 'Statut',
    'status-active' => 'Statut actif',
    'status-outboarded' => 'Statut désinscrit / inactif',
    'outboarding-url' => 'URL de désinscription',
    'user-outboarded' => 'L\'utilisateur est désinscrit',
    'wants-to-send-back' => 'Souhaite renvoyer le Telraam',
    'did-not-outboard' => 'N\'a pas effectué de désinscription',
    'support' => 'Support',
    'new-sd-card-sent' => 'Nouvelle carte SD envoyée',

    // Internal name / network block
    'internal-setup-info' => 'Informations de configuration internes',
    'internal-setup-description' => 'Ce sont des champs supplémentaires pour stocker des informations sur la configuration gérée par le réseau, non visibles du public mais uniquement pour un usage interne',
    'internal-name' => 'Nom interne',
    'internal-name-placeholder' => 'Nom pour votre référence uniquement',
    'internal-info' => 'Informations internes',
    'internal-info-note' => '(ex. procédure de configuration, ...)',
    'photo-setup' => 'Photo de la configuration',
    'photo-setup-note' => '(la meilleure photo est celle où la route, la batterie et le panneau solaire sont visibles)',

    // ROI tab
    'roi-title' => 'Images et ROI de l\'appareil',
    'roi-not-active' => 'Cet appareil n\'est pas actif (statut : :status). Le ROI ne peut être défini que sur les appareils actifs.',
    'roi-set-button' => 'Définir la région d\'intérêt (ROI)',
    'roi-request-image' => 'Demander une image',
    'roi-explicitly-set' => 'ROI explicitement défini à',
    'roi-set' => 'ROI défini à',

    // Diagnostics
    'diagnostics' => 'Diagnostics',

    // Mail person
    'send' => 'Envoyer',

    // ROI limit
    'limit-reached' => 'Limite atteinte',
    'roi-limit-message' => 'Veuillez attendre au moins un jour avant de définir un nouveau ROI',

    // Batch mail
    'who-receives-email' => 'Qui doit recevoir l\'e-mail ?',
    'check-all' => 'Tout cocher',
    'uncheck-all' => 'Tout décocher',
    'message' => 'Message',
    'save-send-draft' => 'Enregistrer et m\'envoyer un brouillon',
    'save-send' => 'Enregistrer et envoyer',

    // Batch mail overview
    'batch-mail-counting' => 'E-mail groupé pour les utilisateurs qui comptent ou ont compté',
    'batch-mail-counting-subtitle' => 'Utilisateurs ayant installé Telraam avec succès.',
    'batch-mail-all-counted' => 'E-mail groupé pour tous les utilisateurs ayant compté',
    'batch-mail-all-counted-subtitle' => 'Tous les utilisateurs qui comptent et ne comptent pas.',
    'send-new-mail' => 'Envoyer un nouvel e-mail',
    'users-count' => ':count utilisateurs',

    // Overview export / reports
    'report-counting-title' => 'Utilisateurs qui comptent ou ont compté',
    'report-counting-subtitle' => 'Combien d\'utilisateurs ayant compté une fois comptent encore ou quelle était la stabilité de leur connexion au cours des 30 derniers jours',
    'report-counting-detail' => 'Ce rapport affiche le temps de disponibilité de tous les utilisateurs du réseau ayant compté au cours des 30 derniers jours. Chaque après-midi, une requête vérifie le statut de tous les utilisateurs. L\'aperçu donne une idée du temps de disponibilité général du réseau.',
    'see-report' => 'Voir le rapport détaillé',
    'report-not-counting-title' => 'Utilisateurs du réseau qui n\'ont jamais compté',
    'report-not-counting-subtitle' => 'Combien d\'utilisateurs se sont inscrits mais n\'ont pas complété la procédure',
    'report-not-counting-detail' => 'Les utilisateurs qui se sont inscrits mais n\'ont pas complété la procédure d\'installation.',
    'col-user-id' => 'ID utilisateur',
    'col-user' => 'Utilisateur',
    'col-email' => 'E-mail',
    'col-street' => 'Rue',
    'col-counting-days' => 'Jours de comptage',
    'col-status' => 'Statut',
    'status-not-started' => 'Pas commencé',

    // Export table headers
    'export-date' => 'Date',
    'export-track' => 'Parcours',
    'export-first-name' => 'Prénom',
    'export-last-name' => 'Nom',
    'export-email' => 'E-mail',
    'export-official-member' => 'Membre officiel',
    'export-disabled' => 'Désactivé',
    'export-did-count' => 'A déjà compté ?',
    'export-initialized' => 'Telraam initialisé',
    'export-is-counting' => 'Compte actuellement ?',
    'export-latest-package' => 'Dernier paquet de données (utc)',
    'export-street' => 'Rue',
    'export-zip' => 'Code postal',
    'export-city' => 'Ville',
    'export-country' => 'Pays',
    'export-segment' => 'ID segment et position',
    'export-lat' => 'Latitude adresse',
    'export-lng' => 'Longitude adresse',
    'export-timezone' => 'Fuseau horaire',
    'export-stop-form' => 'Désinscription : formulaire d\'arrêt rempli',
    'export-promised-back' => 'Désinscription : a promis de renvoyer',
    'export-sent-back' => 'Désinscription : a renvoyé le Telraam',
    'network-managed-installation' => 'Installation gérée par le réseau',

    // User edit (user-edit section)
    'forum-title' => 'Forum Telraam Talks',
    'premium-tier' => 'Premium',
    'timezone-label' => 'Fuseau horaire',

    // Config tab
    'fw-up-to-date' => 'FW à jour',
    'fw-upgrade-pending' => 'Mise à jour FW en attente',
    'device-config-title' => 'Configuration de l\'appareil',
    'update-config-btn' => 'Mettre à jour la configuration',
    'firmware-config-title' => 'Configuration du firmware',
    'firmware-config-note' => 'un champ à la fois',
    'upgrade-in-progress' => 'Mise à jour en cours',
    'upgrade-polling' => 'Mise à jour en cours — vérification toutes les 30 s',
];
