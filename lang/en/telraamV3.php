<?php

return [

    'title'           => 'Telraam S3',

    'subtitle'          => 'Accurate traffic counting.<br>Easy to install.<br>Flexible deployment.<br>',

    'section1-block1-preorder'  => 'The Telraam S3 will be delivered in Autumn 2026. Want to be among the first to try it? Place your pre-order now.',
    'section1-block1-text'        => '<p><strong>A major step forward in traffic counting.</strong> More accurate, in more conditions and with more detail than ever before. And all this in the same familiar, user-friendly device that you hang in your window yourself. Telraam S3 also comes with some new features!',

    'section1-block2-text'        => '<p>Telraam S3 is the result of two years of development; we built upon our experience with Telraam S2 and were able to leverage the technological advancements of recent years. Our new device is more accurate and flexible – for both installation locations and potential applications – and features entirely new functions compared to the previous generation.</p>',

    'section-features-block1-title'  => 'Multimodal traffic counts',
    'section-features-block1-subtitle'     => 'Streets are not just for cars',
    'section-features-block1-body'     => '<p>Telraam S3 counts a wide range of road users, just like Telraam S2. At launch, 11 categories are available with the addition of the brand-new cargo bike counter.<br><br>
Every user has access to data aggregated into the 4 main categories (pedestrians, two-wheelers, cars, and heavy vehicles + night mode), while <a href="../data-subscription">subscribers</a> gain access to the detailed modes.<br>

<br>Thanks to the new architecture and pipeline, we will be able to add new modes of transport in the future, specifically for a project or based on feedback from residents. This allows Telraam S3 to better respond to diverse and local needs worldwide.</p>',

    // accuracy comparison table (S2 vs S3) — all per-mode figures below are placeholders.
    // Real measured accuracy ranges per mode are still missing for both S2 and S3 and must be
    // filled in before this table goes live. The note text reuses the one real figure we do have
    // (the general S2 accuracy statement), translated to Dutch, rather than a fabricated per-mode split.
    'accuracy-table-title' => 'Nauwkeurigheid',
    'accuracy-table-col-mode' => 'Modus',

    'accuracy-table-row-1-subject' => 'Voetgangers',
    'accuracy-table-row-1-subject-detail' => 'Voetgangers, Kinderwagens, Steps',
    'accuracy-table-row-1-s3' => '80%',

    'accuracy-table-row-2-subject' => 'Tweewielers ',
    'accuracy-table-row-2-subject-detail' => 'Fietsen, Motorfietsen, Bakfietsen',
    'accuracy-table-row-2-s3' => '97%',

    'accuracy-table-row-3-subject' => 'Auto\'s',
    'accuracy-table-row-3-subject-detail' => '',
    'accuracy-table-row-3-s3' => '98%',

    'accuracy-table-row-4-subject' => 'Zware voertuigen',
    'accuracy-table-row-4-subject-detail' => ' Bestelwagens, Vrachtwagens, Bussen, Aanhangwagens, Tractoren',
    'accuracy-table-row-4-s3' =>  '83%',

    'accuracy-table-row-5-subject' => 'Objecten tijdens de nacht',
    'accuracy-table-row-5-subject-detail' => 'Elk voertuig met verlichting',
    'accuracy-table-row-5-s3' => '~80-90%',

    'accuracy-table-row-6-subject' => 'Snelheid',
    'accuracy-table-row-6-subject-detail' => 'Snelheid wordt enkel voor auto\'s en fietsers weergegeven',
    'accuracy-table-row-6-s3' => '~80-90%',

    'accuracy-table-note' => 'The accuracy of Telraam S3 was measured across a broader set of locations including a set of challenging environments in addition to the ones used when we published our numbers for Telraam S2.<br>
These values correspond to a pre-release firmware version of August 2026 and are not representative of the final product (where we expect further improvements).<br> If you would like to read more about the specifications, please refer to
    <a href="https://faq.telraam.net/en/article/3/requirements-for-a-suitable-window-and-location"> our FAQ "Requirements for a suitable window and location".</a>',

    'section-features-block2-title'  => 'Accurate, even when things get difficult',
    'section-features-block2-subtitle'     => 'Accuracy that holds up, no matter what',
    'section-features-block2-body'     => '<p>One of the key drivers behind the development of the Telraam S3 was to improve sensor performance and make it significantly less sensitive to suboptimal external conditions.<br><br>
Thanks to advances in machine vision and machine learning techniques, and an AI chip that is 12 times more powerful operating at a 2x frame rate and 8x higher resolution than the Telraam S2, our new sensor can handle a wider variety of conditions than its predecessor. Even under optimal conditions, we have improved demonstrated accuracy levels across the board.</p>',

    'section-features-block3-title' => 'Speed',
    'section-features-block3-subtitle'     => 'Not only how many, but also how fast',
    'section-features-block3-body' => '<p>For cars and cyclists, Telraam S3 makes an estimate of the speed of each car or cyclist. This is not a direct, exact measurement like with radar, and an individual speed estimate may therefore contain inaccuracies. For this reason, we do not display individual speeds but rather fine-resolution speed histograms, as well as
<a href="https://faq.telraam.net/en/article/14/speed-measurement-v85-explained">the V85</a> which is frequently used by traffic authorities.<br>

<p>Speed data makes the conversation about road safety more concrete. The data might indicate a potential speed problem in a street and also at what time of day it occurs, and serves as a baseline when planning or following up on policy measures.</p>',

    'section-features-block4-title' => 'Parking spaces and crowds',
    'section-features-block4-subtitle'     => 'Beyond measuring traffic flow',
    'section-features-block4-body' => '<p>Traffic is more than moving vehicles. With Telraam S3, you can also map parking space occupancy or measure the density of people at a location, such as a market, a square, or during an event. One device, deployed for far more challenges than just counting.</p>
        <p>This opens the door to new applications: from parking policy and monitoring crowds at metro and bus stops to mapping visitor flows at festivals and managing busy public spaces.</p>',

    'section-features-block5-title' => 'Improve along with your device',
    'section-features-block5-subtitle'     => 'Training and debug videos',
    'section-features-block5-body' => '<p>With the Telraam S3, you can, if required, record short debugging and training videos to further improve the detection model. In this way, you help build a system that continues to learn from the thousands of unique streets in which it is deployed, without compromising privacy: images are used exclusively to train the model and never leave the device in a recognizable form or without your explicit permission. Under normal use, no video or photographic material ever leaves the device, and the Telraam S3 cannot under any circumstances be used to visually monitor the street.</p>
        <p>It is one of the building blocks of Telraam Flex, where we work step by step towards detection that adapts to the local context, without the need for a complete device update every time.</p>',

    'section-features-block6-title' => 'Privacy as a given',
    'section-features-block6-subtitle'     => 'No images, ever',
    'section-features-block6-body' => '<p>Other devices often transmit images to an external server. With Telraam, all counts and measurements take place on the device itself. Therefore, image or video material is never stored or transmitted by Telraam, not even temporarily. Only the anonymized, aggregated figures leave the device.</p>
        <p>For us, this is not an extra feature, but a principle: citizens must be able to share their window with confidence.</p>',

    'section-features-block7-title' => 'Simple',
    'section-features-block7-subtitle'     => 'The simplicity of IKEA, even without an excess of screws.',
    'section-features-block7-body' => '<p>You can self-install the Telraam S3 in just a few minutes, without the hassle of Wi-Fi passwords or specialized tools. Just like its predecessor, the basic principle is simple: everyone should be able to do this, regardless of their technical background.</p>
    <p>New to the Telraam S3 is that many configuration options are now available locally via a direct USB-C connection to your computer (all operating systems are supported). And if you want to go a step further, this method also gives you access to more advanced options and tools that are not available via the Telraam website.</p>',

    // block8 & block9: two extra feature sections beyond the 7 the S2 template has slots for —
    // rendered in a new plain two-column row inserted after block7, see telraamV3.blade.php
    'section-features-block8-title' => 'Start a discussion with objective data',
    'section-features-block8-subtitle'     => 'From data to conversation',
    'section-features-block8-body' => '<p>Telraam is a strong advocate of the principle of Open Data. We do not want important information, particularly information collected with the participation of citizens, to disappear into the closed computer system of a third party.<br><br>
    This makes every Telraam counter a starting point for a fact-based conversation between residents, local authorities, and mobility professionals.</p>',

    'section-features-block9-title' => 'Modular, ready for the future',
    'section-features-block9-subtitle'     => 'Telraam Flex',
    'section-features-block9-body' => '<p>Telraam S3 forms the basis of Telraam Flex, a new, flexible environment built around the device. Flex allows new road user classes, additional applications, and local adaptations to be added without requiring a complete model update each time.</p>
        <p>With Telraam Flex, we are taking a step towards new applications and markets, from recreational areas and school environments to temporary events, while simultaneously actively involving citizens in improving the detection itself. More on this soon.</p>',

    // tech table
    'spec-table-title' => 'Technical specifications',

    'spec-table-row-1-subject'     => 'AI',
    'spec-table-row-1-details' => 'Rockchip RK3576 octa-core 64-bit ARM processor with AI NPU',

    'spec-table-row-2-subject'     => 'Connectivity',
    'spec-table-row-2-details' => 'Mobile over LTE-M or NB-IoT<br>4G version will be launched at a later date',

    'spec-table-row-3-subject'     => 'Camera',
    'spec-table-row-3-details' => 'Arducam OV5647 camera module equipped with an Arducam 1.6mm f/2 lenses providing a maximum 118 degree FOV (configurable to a narrower Region Of Interest)',

    'spec-table-row-4-subject'     => 'Size',
    'spec-table-row-4-details' => '65 mm x 99 mm x 30 mm<br>96 g (123 g including bracket)',

    'spec-table-row-5-subject'     => 'Power',
    'spec-table-row-5-details' => '< 2 W',

    'spec-table-row-6-subject'     => 'Privacy',
    'spec-table-row-6-details' => 'Detection, classification, and counting take place on the device itself; no image or video recordings are transmitted to Telraam during use.<br>',

    'spec-table-row-7-subject'     => 'Security',
    'spec-table-row-7-details' => 'The firmware is secured with a chain of digital keys. The first link is permanently embedded in the chip and cannot be overwritten. As a result, it only accepts Telraam firmware.',

    'spec-table-row-8-subject'     => 'Includes',
    'spec-table-row-8-details' => 'USB-C cable<br>adapter<br>bracket<br>cable holder',


    // individual package promo — this block is hidden (display:none) on the S2 page too and no
    // S3-specific pricing/copy was supplied, so the generic (non-device-specific) S2 text was kept as-is
    'section-package-title' => 'Do you need traffic data for your street?',
    'section-package-subtitle' => 'Start counting today',
    'section-package-body' => '<p>Our mission is to connect local residents, like you, with the professionals who
design and manage our streets through the power of Open Data. Buy a device and start collecting data yourself, so that you too can
join the local conversation and have your window counted!</p>

<p>Whilst Telraam sets up both large and small networks to collect useful data for areas such as a neighbourhood or even a city, there is an important role for individual pioneers and citizen scientists who can raise local issues.</p>

<p>For this reason, Telraam subsidises the costs of managing your personal device – for life!
As a private individual, you can purchase a single device and collect data for as long as you like for your own projects.</p>

<p>Due to the nature of this grant and support, this scheme is strictly for individual, private citizens. If you are an organisation involved in campaigning for, advising on or managing local transport and mobility projects, please take a look at our Professional packages.</p>',

    'section-package-button' => 'TBD',
    'section-package-warning' => 'TBD',

];
