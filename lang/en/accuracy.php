<?php

return [

    'title'      => 'Accuracy and precision',
    'subtitle'   => 'How to make sure your Telraam counts well<br> How to install the device correctly and avoid some common issues, to get the best results.',

    'location-title' => 'What is a suitable window or location?',

    'location-req-1-title' => 'Height and floor level',
    'location-txt-1-txt' => 'The device must be installed at least on the first floor (+1 above ground) or above 3-4m in height — ground floor locations are generally speaking not preferred.',

    'location-req-2-title' => 'Distance to street',
    'location-req-2-txt' => 'Must be far enough to fully capture large vehicles (e.g., vans), especially on narrow streets.
                If it\'s further away than 15m from the middle of the street the performance for pedestrians and cyclists on the far side weakens.',

    'location-req-3-title' => 'Clear line of sight',
    'location-req-3-txt' => 'No obstructions: trees, hedges, balconies, fly screens, parked high vehicles, etc. Ensure the road and footpath are fully visible.',

    'location-req-4-title' => 'No junctions',
    'location-req-4-txt' => ' The camera should exclusively view a straight segment of a street (perpendicular view) and must not include intersections,
            crossroads, playgrounds, or parking lots – only left‑to‑right or right‑to‑left moving traffic.',


    // how
    'how-title' => 'Will the sensor never miss a movement?',
    'how-txt' => 'Telraam S2 uses AI to detect objects and track movement. Objects are recognized and a probability score is given to each object.
                Every object needs a certain probability score to be taken into account.
                If an identified object enters on one side and leaves on the other side we register a count.
                <br>

                <br>
                No system is perfect. So what are difficult situations?<br>
                <ul class="jump-in">
                    <li>If objects are obscured or too distant, the device may struggle. </li>
                    <li>If the angle or distance is very different from the classic setup it might underperform.</li>
                    <li>Pedestrians or bikes, especially when there are individuals obscured because they are walking / cycling in groups or far away from the camera, may be wrongly classified or not correctly counted.</li>
                </ul>',

    // location more
    'location-more-title' => 'Want to read more about location requirements?',
    'location-more-txt' => 'If you\'re unsure, you can consult a <a href="https://faq.telraam.net/article/3/requirements-for-a-suitable-window-and-location">dedicated FAQ article for more details</a> or
                <a href="here https://faq.telraam.net/article/357/location-guidelines-for-telraam-s2-outdoor">a separate, comprehensive article about the Telraam S2 Outdoor requirements</a>.',


    // privacy
    'privacy-title' => 'Cloud based AI vs Privacy',
    'privacy-txt' => 'Unlike many more expensive camera systems, Telraam performs the classification and counting directly on the device itself. This is the only way we can truly ensure privacy
                and we believe that protecting privacy is essential.<br>
                The Telraam S2 includes a low resolution camera and does not store any images.<br>
                We do welcome validation counts to help us improve our algorithms.
                Feel free to read more in <a href="https://faq.telraam.net/article/265/objective-evaluation-of-the-results-of-your-quick-validation">our FAQ about the process.</a>',

    // tubes
    'tubes-title' => 'Tubes - vs - Unintrusive and multi-modal',
    'tubes-txt' => 'These days pneumatic tubes are the standard for traffic counting.
However independent real world tests showed even these have a <a href="https://nap.nationalacademies.org/read/22223/chapter/6#77" target="_blank">10-20% error margin</a><sup>1 2</sup>,
                mostly undercounts. We typically achieve at least the same accuracy with less hassle. Tube installations are labor intensive, need maintance, and have a short life span.
Telraam is easy to install, it counts all modes out of the box, and it will keep counting for a longer period without any maintenance.<br>
                <div class="tiny grey jump-in" style="line-height: 13px; margin-top: 20px;">
                    <sup style="top:0">1</sup>&nbsp;<a href="https://nap.nationalacademies.org/read/22223/chapter/6#77" target="_blank" class="tiny grey">Guidebook on Pedestrian and Bicycle Volume Data Collection. Washington, DC:
                                The National Academies Press.</a><br><br>
                    <sup style="top:0">2</sup>&nbsp; <a href="https://www.researchgate.net/publication/298805209_Accuracy_of_Bicycle_Counting_with_Pneumatic_Tubes_in_Oregon" class="tiny grey"  target="_blank">Accuracy of Bicycle Counting with Pneumatic Tubes in Oregon</a>
                </div>',

    // what to expect
    'result-title' => 'So, what can you expect?',
    'result-txt' => 'The accuracy of Telraam S2 is about <strong>90-95% for motorized traffic</strong>.
                    For active road users, such as pedestrians and cyclists, accuracy may be slightly lower and
                    objects may be misclassified, e.g., a pedestrian with a baby carriage as a cyclist.
                    Optimal performance hinges on appropriate positioning and setup.
                    Don\'t hesitate to <a href="/en/contact-us">get in touch</a> for advice or support.',

    // more/advanced part
    'more-title'    => 'More on accuracy, speed data, etc.',

    'more-1-title'  => 'Edge cases',
    'more-1-txt'    => ' If you\'d like to deepen your understanding further of what can cause inaccuracies with our sensors and how to avoid them, you can learn more in the
<a href="https://faq.telraam.net/article/43/potential-inaccuracies-with-telraam-s2">FAQ article about potentional edge cases</a>.',

    'more-2-title' => 'Speed',
    'more-2-txt' => 'Telraam S2 determines vehicle speed by measuring the elapsed time it takes a car to travel its own estimated length, based on average Belgian car
                dimensions, enabling distance‑independent speed estimates. Read more in the
<a href="https://faq.telraam.net/article/41/speed-measurements-with-telraam-s2">FAQ article about speed measurements</a>.',

    'more-3-title' => 'Performance tests by version',
    'more-3-txt' => 'For an overview of our own validation counts and experiments to evaluate the accuracy of the various versions of our AI model, see the 
                <a href="https://github.com/Telraam/Telraam-S2/blob/main/count-performance-validation.md">count performance tests of our current and previous K210 firmware versions</a>.',

];
