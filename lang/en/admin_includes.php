<?php

return [
    // Camera instances overview
    'camera-instances-header' => 'Camera Instances',
    'current-installation' => 'Current installation',
    'network-device-installation' => 'Network device installation',
    'old-installations' => 'Old installations',
    'view-setup-page' => 'View setup page :name',

    // Camera instances overview row
    'no-date' => 'no date',
    'no-address-yet' => 'No address yet',
    'no-serial-number' => 'No serial number',
    'no-street-selected' => 'No street selected',
    'proceed-with-installation' => 'Proceed with the installation',
    'segment-data' => 'Segment data',
    'street-profile' => 'Street Profile',
    'stop-installation' => 'Stop installation',
    'make-public' => 'Make public',
    'make-private' => 'Make private',
    'edit-details' => 'Edit details',
    'edit-current-position' => 'Edit current position',
    'new-remote-installation' => 'New remote installation with this device',
    'more' => 'More',

    // Modal: edit address typo
    'modal-address-typo-title' => 'There is a typo in the address or some other information is incorrect?',
    'modal-address-typo-registered-address' => 'Registered address:',
    'modal-address-typo-body' => 'You can also upload a public header photo for this segment or provide additional information about the visibility of transport modes.',
    'modal-address-typo-confirm' => 'Yes, let me change',

    // Modal: edit location
    'modal-edit-location-title' => 'Are you sure the current position of the Telraam on the map is incorrect?',
    'modal-edit-location-body' => 'By choosing a new position, all data linked to this Telraam installation will be transferred to the new location. If the Telraam is moved, the user must initiate a new setup to ensure data collected up until now stays linked to the right location.',
    'modal-edit-location-confirm' => 'Confirm',

    // Modal: public/private
    'modal-make-public-title' => 'Are you sure you want make the installation public?',
    'modal-make-private-title' => 'Are you sure you want make the installation private?',
    'modal-currently-private-body' => 'The installation is currently private. By making it public, any data collected from this point forward will become visible to the public on the map, the public page, and accessible via the public API.',
    'modal-currently-private-note' => 'Note: Switching to public will reduce the cost by €15/month (3 credits less).',
    'modal-currently-public-body' => 'The installation is currently public. By making it private, any data collected from this point forward will be hidden and only accessible via the dashboard and advanced API at the installation level.',
    'modal-currently-public-note' => 'Note: A private installation costs an additional €15/month (3 credits).',
    'modal-make-public-btn' => 'Make it public',
    'modal-make-private-btn' => 'Make it private',

    // Modal: stop instance
    'modal-stop-title' => 'Are you sure you want to stop the installation?',
    'modal-stop-warning' => 'Please handle with care as this can not be undone.',
    'modal-stop-btn' => 'Stop the instance',

    // Shared modal
    'modal-cancel' => 'Oh no, cancel.',

    // Flag detail
    'flags-title' => 'Flags',
    'flags-last-update' => 'Last flag update (UTC)',
    'flags-none' => 'No flags available',
    'flag-firmware' => 'Firmware',
    'flag-hello-rate' => 'Hello Rate',
    'flag-avg-signal-quality' => 'Avg Signal Quality',
    'flag-completeness' => 'Completeness',
    'flag-uptime' => 'Uptime',
    'flag-uptime-day' => 'Uptime Day',
    'flag-uptime-night' => 'Uptime Night',
    'flag-excellent' => 'Excellent',
    'flag-suboptimal' => 'Suboptimal',
    'flag-poor' => 'Poor',

    // Network tracks dropdown
    'no-tracks-enabled' => 'No tracks enabled',

    // Status instance label
    'status-to-start' => 'To start',
    'status-installing' => 'Installing',
    'status-no-counts' => 'Installed, but no counts',
    'status-counting' => 'Is counting',
    'status-counted-before' => 'Counted before',
    'status-stopped' => 'Stopped',
    'detail-active' => 'instance is active',
    'detail-started-counting' => 'Started counting',
    'detail-became-active' => 'Became active',
    'detail-active-after-non-active' => 'Active after being non active',
    'detail-same-user-segment' => 'Same user & segment',
    'detail-diff-user-segment' => 'Diff. user & segment',
    'detail-same-user-diff-segment' => 'Same user & diff. segment',
    'detail-diff-user-same-segment' => 'Diff. user & same segment',
    'detail-problematic' => 'Problematic',
    'detail-non-active-1day' => 'Non active 1+ day',
    'detail-non-active-1week' => 'Non active 1+ week',
    'detail-non-active-2weeks' => 'Non active 2+ weeks',
    'detail-non-active-3weeks' => 'Non active 3+ weeks',
    'detail-non-active-4weeks' => 'Non active 4+ weeks',
    'detail-non-active' => 'Non active',
    'detail-active-after-problematic' => 'Active after problematic',
    'detail-diff-mac' => 'Different device',
    'detail-outboarded' => 'User Outboarded',
    'detail-reason-unknown' => 'Reason unknown',
    'detail-network-admin-stopped' => 'Network Admin Stopped',
    'detail-user-new-setup' => 'User started new setup, older stopped',

    // Status progress setup
    'status-other' => 'Other',
];
