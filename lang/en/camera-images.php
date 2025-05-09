<?php

return [
    'nav-title'        => 'Camera Images',

    'no-image-available' => 'No image available',
    'no-images-available' => 'No images available yet',
    'no-images-available-advice' => 'Make sure the latest version of the Telraam software is installed on the Telraam and the image setting is enabled when you install the software. How to get the latest software installed:',
    'no-images-available-info' => '<ol><li>Download <a href="https://telraam-api.net/telraam-sd-image.zip">the latest software</a></li><li><a href="https://faq.telraam.net/article/37/updating-the-telraam-software-by-yourself:
<a href="https://faq-nl.telraam.net/article/136/de-telraam-software-zelf-updaten">Updating your own Telraam</a></li></ol>',

    'date-image'        => 'Date image',
    'camera-images'     => 'Camera image(s)',

    'roi-still-to-be-set' => 'ROI to be set',

    'what-are-the-camera-images' => 'The camera images are background images sent to our server to verify whether your camera position is still fine.
    An image is send after booting your Telraam and once a day when your Telraam is up and running. <br>
    <a href="https://faq.telraam.net/article/30/background-image">Read more info on our faq</a>',
    'not-receiving-data'         => "Seems like we're not receiving any data (yet) from your Telraam at the moment.",

    'software-version' => 'Software version installed device',

    // S2 ROI
    'roi-loading-title' => 'Loading...',
    'roi-loading-text' => 'Your S2 device is being reset to the full wide-angle view so we are downloading an image to help select your ROI. As the S2 device has a slow IoT connection this may take 30-90 seconds.<br>
Make sure to complete the process and select one of the predefined ROI settings to help ensure improved accuracy.',

    'roi-loaded-title' => 'Select zoom',
    'roi-loaded-text' => 'In most cases the wide field of view  is unnecessary, as traffic occurs in a much narrower range,
    and Telraam does not need to monitor areas which are free of traffic. An optimally set ROI will provide the highest accuracy numbers in terms of
    road user counts. <br>
    The idea is to "cut" away as much as possible the regions were no traffic is or should be possible.<br>
Each square represents a possible zoom for the S2.<br>
<i class="heroicon heroicon-information" style="border:0"></i> <a href="https://faq.telraam.net/article/66/region-of-interest-roi-and-roi-selection-with-telraam-s2">Read all about in this FAQ</a>.',
    'roi-focus-on-top' => 'Focus on top',
    'roi-focus-on-center' => 'Focus on center',
    'roi-focus-on-bottom' => 'Focus on bottom',

    'what-are-the-camera-images-S2' => 'Telraam S2 devices are built in a robust way, with a fixed camera, meaning that there is no reason to monitor the field of view daily
after the initial region of interest (ROI) was set either automatically by the camera, or manually by the user or network administrator. Only the last ROI image is saved and kept for a maximum of 1 year.<br>
    <a href="https://faq.telraam.net/article/30/background-image-">Read more info on our faq</a>',

    'roi-set-to' => 'Roi set to',
    'on' => 'on',

    'device-not-available-for-roi' => 'Device is not online at the moment. Try again later.',

];
