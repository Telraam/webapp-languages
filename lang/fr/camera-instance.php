<?php

return [
    'title'        => 'Configuration de la caméra',

    'title-edit-mac' => 'Numéro de série:',
    'info-serial' => 'Chaque Telraam possède un numéro de série unique. Lorsque vous branchez votre Telraam, vous pouvez trouver le numéro de série de votre Telraam sur <a href="http://my.telraam.net">my.telraam.net</a>. Il contient 15 numéros. Les deux caractères supplémentaires fonctionnent comme des caractères de contrôle. Ils ne font pas partie de votre numéro de série Telraam.',

    'edit-position-segment' => 'Modifier le poste/segment actuel',
    'btn-edit-mac' => 'Modifiez votre numéro de série actuel (p.e. une faute de frappe)',
    'btn-new-mac' => 'A reçu un nouvel appareil',

    'btn-edit-address' => "Modifier l'adresse actuelle (p.e. une faute de frappe)",
    'btn-new-address' => 'Vous voulez commencer à compter sur une nouvelle adresse',


    'title-edit-address' => 'Votre adresse actuelle:',

    // what you see
    'title-edit-what-is-seen' => 'Ce que votre Telraam peut compter:',
    'edit-what-you-see' => 'Modifier ce que vous voyez',

    // page serial number /edit-serial-number
    'info-serial-extensive-v1' => 'Connectez-vous à votre appareil Telraam par le biais du hotspot et trouvez la série sur <a href=http://my.telraam.net>http://my.telraam.net</a>
Le numéro de série contient 15 chiffres et 2 caractères de validation.<br> <a href="https://faq-fr.telraam.net/article/197/verifier-le-numero-de-serie" class="tiny">Vérifier le numéro de série</a></ol>',
    'info-serial-extensive-S2' => 'Le numéro de série contient 15 chiffres et 2 caractères de validation qui se trouvent sous le code QR de votre appareil.',


    // page serial number /new-serial-number
    'title-new-mac' => 'Avez-vous reçu un nouvel appareil ?',
    'info-serial-extensive-with-new-device' => 'Chaque Telraam a un numéro de série unique. Lors du démarrage de votre Telraam, vous pouvez trouver votre numéro de série sur <a href="http://my.telraam.net">my.telraam.net</a>.  Il contient 15 numéros. Les deux caractères supplémentaires fonctionnent comme des caractères de contrôle. ',

    // move to new segment
    'title-moved-to-new-position' => 'Passer à un nouveau poste:',
    'info-new-position' => 'Vous souhaitez conserver vos anciennes données là où elles se trouvent, mais vous avez récemment déplacé votre
    Telraam ailleurs ?',
    'btn-header-start-new-location' => 'Démarrer une nouvelle installation',

    // modal
    'modal-are-you-sure-title' => 'Vous êtes sûr de vouloir commencer une nouvelle installation ?',
    'modal-are-you-sure-body' => "Créer un nouveau point d\'installation signifie que vous devrez refaire toutes les étapes de configuration.<br>
    Si vous souhaitez repositionner la caméra à un nouvel emplacement, c'est la procédure à suivre.<br> <br>
     Cependant, si vous souhaitez modifier les informations de l\'installation actuelle (par exemple, en raison d'une erreur), il est préférable d\'éditer l'instance existante.",
    'btn-start-new'     => 'Démarrer une nouvelle installation',
    'btn-cancel'        => 'Oh non, éditer.',

    // via admin pages
    'no-segment-selected-yet' => "Aucun segment de rue n'a encore été sélectionné",

    // new 5 FEB 2021
    'valid-counted-before'           => 'A reçu des données de ce mac',
    'seems-valid-not-counted-before' => "Le numéro semble correct mais aucune donnée n\'a encore été reçue,",
    'not-a-valid-number'            => 'Le numéro semble invalide. Nous attendons 15 numéros',

    // new 17 feb modals
    'info-edit-segment-title' => 'Position de la caméra',
    'info-edit-segment-info' => '<strong>Êtes-vous sûr que la position actuelle de la caméra sur la carte est incorrecte ?</strong><br> <br>
En choisissant une nouvelle position, vos données seront déplacées vers ce nouvel emplacement. Si vous avez vous-même changé l\'emplacement de la caméra, vous devez choisir une nouvelle configuration.',
    'info-edit-segment-btn-cancel' => 'Annuler',
    'info-edit-segment-btn-ok' => 'Confirmer',

    'info-new-camera-title' => 'Nouveau Telraam',
    'info-new-camera-info' => 'Vous avez reçu un nouveau capteur Telraam et souhaitez l\'installer à votre emplacement actuel ?',
    'info-new-camera-btn-cancel' => 'Annuler',
    'info-new-camera-btn-ok' => 'Confirmer',
    'info-new-camera-btn-new-v1' => 'J\'ai un nouveau capteur v1',
    'info-new-camera-btn-new-S2' => 'J\'ai un nouveau capteur S2',


    'info-new-setup-title' => 'Nouvelle configuration',
    'info-new-setup-info' => '<strong>Vous êtes sûr de vouloir commencer une nouvelle installation ?</strong><br>
Si votre caméra a des problèmes ou si vous ne l\'avez pas déplacée, il n\'est pas nécessaire de procéder à une nouvelle installation.<br><br>
Le démarrage d\'une nouvelle installation se fait lorsque vous commencez à compter sur un <strong>nouvel emplacement avec le même compte</strong>. Les données de l\'ancien site seront conservées de cette manière.',
    'info-new-setup-btn-cancel' => 'Annuler',
    'info-new-setup-btn-ok' => 'Confirmer',

    'info-edit-mac-title' => 'Modifier le numéro unique',
    'info-edit-mac-info' => 'Veuillez modifier le numéro unique de mac s\'il contient une erreur ou si le boulier ne se connecte pas. Vérifiez d\'abord le numéro avant de le changer. Si vous avez reçu un nouvel appareil, vous devez sélectionner "Recevoir un nouvel appareil".',

    'info-edit-address-title' => 'Modifiez l\'adresse ?',
    'info-edit-address-info' => 'Ne modifiez que si l\'adresse où vous mesurez actuellement est incorrecte.',



];
