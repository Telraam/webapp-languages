<?php

return [
    'title'        => 'Camera Setup',

    'title-edit-mac' => 'Serial number:',
    'info-serial' => 'Every Telraam has an unique serial number. When plugging in your Telraam, you can find your Telraam serial on <a href="http://my.telraam.net">my.telraam.net</a>. It contains 15 numbers. The two extra characters function as control characters. These are not a part of your Telraam serial number.',

    'edit-position-segment' => 'Edit current position/segment',
    'btn-edit-mac' => 'Edit your current serial number (e.g. typo)',
    'btn-new-mac' => 'Received a new device',

    'btn-edit-address' => 'Edit current address (e.g. typo)',

    'title-edit-address' => 'Your current address:',

    // what you see
    'title-edit-what-is-seen' => 'What your Telraam can count:',
    'edit-what-you-see' => 'Edit what you see',

    // page serial number /edit-serial-number
    'info-serial-extensive-v1' => 'Connect with your Telraam device through the hotspot and find the serial on <a href=http://my.telraam.net>http://my.telraam.net</a>
The serial number contains 15 numbers and 2 validation characters.<br> <a href="https://faq.telraam.net/article/57/verify-serial-number" class="tiny">Verify serial number</a></ol>',
    'info-serial-extensive-S2' => 'The serial number contains 15 numbers and 2 validation characters found below the QR code on your device.',

    // page serial number /new-serial-number
    'title-new-mac' => 'You received a new Telraam device?',

    // move to new segment
    'title-moved-to-new-position' => 'Move to a new position:',
    'info-new-position' => 'You want to keep your old data where it is, but recently moved your Telraam to somewhere else?',
    'btn-header-start-new-location' => 'Start new setup',

    // via admin pages
    'no-segment-selected-yet' => 'No street segment selected yet',

    // new 5 FEB 2021
    'valid-counted-before'          => 'Received data from this mac/serial number',
    'seems-valid-not-counted-before' => 'Number seems correct but no data received yet',
    'not-a-valid-number'            => 'Seem to be an invalid number. We expect 15 numbers.',

    // new 17 feb modals
    'info-edit-segment-title' => 'Camera position',
    'info-edit-segment-info' => '<strong>Are you sure that the current position of the camera on the map is not correct?</strong><br> <br>
By choosing a new position, your data will be moved to the new location. If you have given the camera a new location yourself, you need to choose a new setup.',
    'info-edit-segment-btn-cancel' => 'Cancel',
    'info-edit-segment-btn-ok' => 'Confirm',
    'info-new-camera-btn-new-v1' => 'I have a new v1',
    'info-new-camera-btn-new-S2' => 'I have a new S2',

    'info-new-camera-title' => 'New Telraam',
    'info-new-camera-info' => 'You have received a new device and want to install it at your current location?',

    'info-new-setup-title' => 'New setup',
    'info-new-setup-info' => '<strong>Are you sure you want to start a new setup?</strong>  <br>
    If your camera has problems or you have not moved the camera, it is not necessary to perform a new setup. <br>
    When you start <strong>counting on a new location with the same account</strong>, a new setup is the way to go.',
    'info-new-setup-btn-cancel' => 'Cancel',
    'info-new-setup-btn-ok' => 'Confirm',

    // new 17 feb new info
    'info-edit-mac-title' => 'Edit serial number',
    'info-edit-mac-info' => 'Please modify the unique serial number if it contains an error or if the Telraam does not connect. Please check the number before changing it. If you have received a new device, you need to select "Receive a new device".',

    'info-edit-address-title' => 'Edit current address?',
    'info-edit-address-info' => 'Please adjust only if the address where you are currently measuring is not correct (eg typo).',


];
