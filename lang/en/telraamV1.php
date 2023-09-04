<?php

return [

    'title'           => 'Telraam V1',
    'subtitle'          => 'Our first sensor<br>
Raspberry Pi turned traffic counter<br>
You get the parts, we provide the software and the data platform<br>',

    'warning' => ' <p>Telraam V1 was Telraam\'s first sensor concept, and it started a traffic-counting revolution which is now
taken to the next level thanks to our purpose-made Telraam S2 device.</p>
<p>
While we believe that the Telraam S2 offers better accuracy, precision, and an improved user experience for citizen science,
 we will keep supporting Telraam V1 devices over the coming years.</p>',


    'section1-title'        => 'History, An origin(al) story',
    'section1-text'        => '<p>During the summer of 2018 a mix of transport engineers, data scientists, and developers sat
together at <a href="https://www.tmleuven.be/" target="_blank">TML</a>
continuously for the fraction of the cost of existing traffic monitoring systems.</p>

<p>The experience of the team led them to focus on building something small, simple and affordable, but fit for the purpose.
The final device would need be able to be fit in citizens’ windows, so that it would represent their actual ‘view’ of the street,
 but without being intrusive. This way it could be deployed in large numbers to get a complete picture of a wide range of streets,
  including minor and residential ones, not often covered by traditional counting setups.</p>

<p>The prototype was built using off-the shelf components such as a miniature Raspberry Pi computer and a camera that met the
above criteria, but the detection algorithm was developed in house. The development of the sensor was finished before the end
of the summer, then a basic backend and fronted were built from scratch, and the initial batch of 50 devices was distributed
in Leuven during early 2019. By the time the Telraam S2 was launched in 2023, more than 5000 Telraam V1 devices were sold
 around the world.</p>',

    'section1-text-extra'        => 'Having launched the S2 in spring 2023, Telraam no long sells the assembled V1, but if
    you wish to create your own device from the instructions below, it can still be connected to our network.',

    'section2-title'        => 'DIY/ What is required for a Telraam V1?',
    'section2-text'        => 'The kit required for a Telraam V1 consists of the following components:
            <ul class="jump-in">
                <li>Raspberry Pi 3A+</li>
                <li>Raspberry Pi Camera Module 2</li>
                <li>3D-printed camera bracket (you can still buy our custom-made and 3D printed
                camera brackets in our <a href="https://buy.stripe.com/4gw4jXeOv3G8ePucMP">
                shop</a>)</li>
                <li>16 GB SD card with the Telraam image flashed (you can find
                <a href="https://github.com/Telraam/Telraam-RPi">the software on GitHub here</a>)</li>
                <li>Power adapter</li>
                <li>Recommended: a black foldable cover to serve as a sun-shade for the camera module (against internal reflections on the window)</li>
                <li>Optional: casing for the Raspberry Pi to make it look pretty</li>
            </ul>
        <br><br>
        Please consult our FAQ for more information on
            <a href="https://telraam.helpspace-docs.io/article/36/do-it-yourself-assemble-telraam-by-yourself">how to assemble your device</a>.</p>
',

    'section2-text-extra'        => 'The Telraam detection algorithm and communication protocols were created for
    these specific components and may not work with more recent versions, so please make sure you source the correct components.',

    'section3-title'        => 'What & How Telraam counts',
    'section3-text'        => 'Telraam V1 uses computer vision (OpenCV) to detect objects in front of a constant (often
     recalculated median) background. Objects are detected in real time on each low resolution frame that is sent by the camera.
     Some basic parameters (such as position in the frame, width, height, area, etc.) of the objects\' contours are stored in
     the memory until every couple of minutes an algorithm processes (and later deletes) them in order to identify and
     track objects moving across the image frame (therefore along the street). At the end of each cycle the average
     parameters of the successfully tracked objects are sent to the Telraam servers, where they later get classified
     into road users based on their observed parameters, before being aggregated into quarterly and hourly count totals,
     per mode and direction of travel.<br>
<br>

The Telraam server classifies objects originating from Telraam V1 devices into four types of modes:
    <ul class="jump-in">
        <li>pedestrians</li>
        <li>two-wheelers (cyclists and motorbikes)</li>
        <li>cars </li>
        <li>heavy vehicles (anything bigger than a passenger vehicle)</li>
    </ul>
<br>
    What Telraam does not count:<br>
    <span class="cross">×</span> Telraam does not count when it is dark.<br>
    <span class="cross">×</span> Telraam does not recognise individual vehicles (nor number plates).<br>
    <span class="cross">×</span> Telraam V1 does not recognise individual people (nor faces).<br>
    <span class="cross">×</span> Telraam V1 cannot reliably count the exact number of vehicles over a
    very short (few minutes long) time period<br>
    <span class="cross">×</span> Telraam V1 is not a speed camera, and it cannot provide precise speed measurements..<br>

<p>For more information on the technical requirements, object classification, accuracy and potential limitations, data
calibration, and questions regarding the speed data, please
<a href="https://telraam.helpspace-docs.io/category/5/telraam-v1">visit our FAQ</a>.</p>',


];
