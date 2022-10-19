<?php

return [
    'nav-title'        => 'Device ready?',
    'workshop-title'    => ' I have my Telraam device ready',
    'workshop-intro'    => 'You have received your Telraam device. Continue here to go through the steps to install your Telraam, connect it to your wifi, activate it and start counting.',

                    // new
                        'big-steps-title' => 'What are the steps you need to take?',

                        'big-steps-1' => 'Indicate the location of your Telraam on the map',
                        'big-steps-2' => 'Give your Telraam power and aim your Telraam at the street.',
                        'big-steps-3' => 'Connect your Telraam to your wifi',
                        'big-steps-4' => 'Enter your Telraam serial number',

    'self-assembly-title' => 'How to assemble?',

    'assembly-software-title-0' => 'The components',

    'assembly-text-intro' => '
<ul class="checklist"><li>Black casing</li>
<li>Raspberry Pi (micro computer)</li>
<li>Raspberry Pi power cable</li>
<li>SD card in adapater</li>
<li>Camera</li>
<li>Camera holder</li>
<li>Cable to connect camera with black box- camera cable</li>
<li>Three types of adhesive tape: black, double-sided and normal adhesive tape</li>
<li>Pen</li>
<li>Scissors</li></ul>',
    'assembly-software-title-1' => 'Putting software onto the SD card',
    'assembly-software-more-0' => 'It is now time to install the software for your Telraam. You just need to follow a simple, straightforward procedure.  First your download the Telraam software to your own computer (it is supplied as a large ZIP file). Then you download a small utility program which you can then use to install the Telraam software directly onto your SD card.<br> Step by step:
<ul><li>Download the Telraam software</li>
<li>Download Etcher (a program to write data onto an SD card)</li>
<li>Write the Telraam software to the SD card</li></ul>',
    'assembly-software-step-1-title' => 'The black box',
    'assembly-software-step-2-title' => 'The camera',
    'assembly-software-step-3-title' => 'The camera cable',
    'assembly-software-more-1' => '<h4>Step 1: download the Telraam software</h4><br>
You can download the Telraam software <a href=" https://telraam-api.net/telraam-sd-image.zip"  target="_blank">here </a>. Remember where this big ZIP file (about 4 gigabytes) has been saved on your computer.<br><br>

<span class=tiny>For info: Telraam is supplied as a compressed image file that can be written straight onto the SD card. It contains a version of Linux specially designed for the Raspberry Pi, preconfigured to run the Telraam software automatically on startup. It therefore needs no screen, mouse or keyboard.</span>
',
    'assembly-software-more-2' => '<h4>Stp 2: download Etcher</h4><br>
Etcher is a program which you can use to copy the Telraam software in step 1 from your computer to your SD card. It works on Windows, Linux and MacOS.

You can <a href="https://www.balena.io/etcher/" target="_blank"> downlaod Etcher here</a>. Choose the right version for your operating system.',
    'assembly-software-more-3' => '<h4>Step 3: Write the Telraam software to the SD card</h4><br>
Put your SD card into the SD card reader on your computer (ignore any message that you get) and start the Etcher program. Click on "Select image".',
    'assembly-software-more-4' => 'In Etcher, click on “Select drive".',
    'assembly-software-more-5' => 'Select your SD card from the list.',
    'assembly-software-more-6' => 'Click on "Flash!"',
    'assembly-software-more-7' => 'Etcher then starts to write the large file to your SD card and check it. Depending on the speed of your SD card reader, this can take from half an hour to several hours. Wait until Etcher has completely finished.',
    'assembly-software-more-8' => 'When everything is ready, you can close Etcher, remove the SD card from your computer and put it into your Raspberry Pi.',


    'assembly-title-1' => 'Assembling Telraam in ten steps',
    'assembly-1' => 'Fit the Raspberry Pi into the black box. Make sure that the 4 little pins on the Raspberry Pi click into the black box.',
    'assembly-2' => 'Take the Micro SD card out of the adapter',
    'assembly-3' => 'Insert the Micro SD card into the Raspberry Pi in the correct direction. Check <a href=https://youtu.be/MgA4yUgnKrg target=_blank>instruction video</a> if needed.',
    'assembly-4' => 'Connect the camera cable to the camera',
    'assembly-5' => 'Fit the Raspberry Pi into the black box. Be careful of the four pins.  Insert the cable through the slot in the holder.<br><br>

Fit the cover onto the camera holder, but do not yet click it completely closed. The piece used to adjust the angle of the holder still has to be pushed inbetween.
<br><br>
Then click the camera holder fully together, with the angle piece inserted.',

    'assembly-6' => 'Plug the camera cable into the Raspberry Pi. The metal strip on the cable must touch the metal in the connection to the Raspberry Pi. Click the cable in place. ',

    'assembly-7' => 'Close the black box so that it shuts by clicking.',

    'assembly-8' => 'Colour the camera cable black (using adhesive tape or marker).',

    'assembly-9' => 'Put double-sided adhesive tape on the black box, camera cable and camera holder.',

    'assembly-10' => 'Your Telraam is ready! Follow the next steps to connect your Telraam to your wifi and to mount your Telraam.',

    'btn-save' => 'Ok, next!',


    /* new 11 june */
    'order-at-gotron-self-assemblage'  => 'Still having trouble finding the parts? Order your parts at <a href="https://www.gotron.be/je-wil-graag-weten-hoeveel-en-welk-verkeer-er-door-je-straat-komt.html" target="_blank">Gotron</a>. Gotron is a Belgian electronics specialist with technical services.',

    'gotron-title' => 'Ordering at Gotron',

    'order-at-gotron-package' => 'Order your Telraam here at <a href="https://www.gotron.be/https://www.gotron.be/telraampakket-pre-installed-version-voorafgemonteerd-en-flashed-sd-kaart.html" target="_blank">Gotron</a>.
At Gotron you can order a mounted version incl. software on SD card. Gotron is a Belgian electronics specialist with technical services.',
    'link-gotron' => 'https://www.gotron.be/telraampakket-pre-installed-version-voorafgemonteerd-en-flashed-sd-kaart.html',
    'btn-save-received-and-ready' => 'Ok, Telraam device received and ready!',

];
