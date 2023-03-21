<?php

return [

    'title'           => 'Telraam V1',
    'subtitle'          => 'Our original, DIY sensor',

    'warning' => ' <p>The V1 is still supported, and those that are active are still gathering data. We\'ll support the V1 for many years to come.
However, it is no longer sold by Telraam, but you can still build your own.</p>
    We believe our S2 offers a much better user experience and performance for citizen science.',


    'section1-title'        => 'Origins',
    'section1-text'        => '<p>Our "V1" device is the original device that launched in [2019] and was a result of a
‘hackathon’ by developers and transport engineers at <a href="https://www.tmleuven.be/en/">TML</a> who needed a better
and more flexible way of capturing traffic
data for their projects. We gradually improved it and ended distribution in march 2023 when the S2 came out.</p>

The experience of the team led them to focus on building something small, simple, affordable and fit-for-purpose based on the widely available Raspberry Pi platform. It needed to be able to be put in many citizens’ windows, so that it was representing their actual ‘view’, but was not intrusive, and could be deployed in larger numbers to get a true picture of a wide range of streets, including minor and residential ones, not usually covered by traditional means.

5000+ Telraam V1 devices were sold around the world in total.
</p>',

    'section2-title'        => 'What is required for a Telraam V1?',
    'section2-text'        => 'The kit required for a Telraam V1 consists of the following components:
            <ul class="jump-in">
            <li>Raspberry Pi v3A+</li>
            <li>Raspberry Pi Camera Module 2</li>
            <li>3D-printed camera holder</li>
            <li>Casing (Pi & Camera)</li>
            <li>16GB SD-card</li>
            <li>Power adapter</li>
            </ul>

            <p>If you have access to a Raspberry Pi v3A+ and wish to build this unit,
            you can find <a href="https://github.com/Telraam/Telraam-RPi">the software on GitHub here</a>.</p>

            <p>The FAQ also provides additional information on
            <a href="https://telraam.helpspace-docs.io/article/36/do-it-yourself-assemble-telraam-by-yourself">how to assemble your device</a>.</p>

            <p>You can still buy our custom-made and 3D printed camera brackets
            in <a href="https://buy.stripe.com/4gw4jXeOv3G8ePucMP">our shop.</a></p>',

    'section3-title'        => 'What & How Telraam counts',
    'section3-text'        => 'The Telraam V1 breaks down objects into four types of modes:
    <ul class="jump-in">
        <li>pedestrians</li>
        <li>(motor) cyclists a.k.a. “two-wheelers”</li>
        <li>cars </li>
        <li>heavy vehicles</li>
    </ul>
<br>
    What Telraam doesn\'t count:<br>
    <span class="cross">×</span> Telraam does not count when it is dark.<br>
    <span class="cross">×</span> Telraam does not recognise individual vehicles (number plates).<br>
    <span class="cross">×</span> Telraam does not recognise faces.<br>
    <span class="cross">×</span> Telraam does not count an EXACT number of vehicles over a very short period<br>
    <span class="cross">×</span> Telraam is not a speed camera.<br>

<p>For more information on the data processing, potential limitations and accuracy of the Telraam V1,
<a href="https://telraam.helpspace-docs.io/category/5/telraam-v1">visit our FAQ</a>.</p>',


];
