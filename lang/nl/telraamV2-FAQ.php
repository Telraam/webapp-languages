<?php

return [

    'question-1'           => 'Do you offer an upgrade from V1 to S2 or trade-in?',
	'answer-1'           => 'No, we are not offering hardware swaps for already bought Telraam v1’s to Telraam S2’s . If you want to have the new Telraam S2 sensor, you’ll have to buy the new hardware via the <a href="https://telraam.net/en/shop"  target="_blank">webshop</a>. Or convince your local authority to set up a funded project and possibly get your device for free. 
The Telraam v1 device is still supported, but we won’t be making any improvements to the software. However, the Telraam v1 sensor is a Raspberry Pi based system (3A+) and you can definitely repurpose it for other uses.',
 	'question-2'           => 'How is the data sent by the Telraam S2 device? What connection is needed?',
 	'answer-2' 			=> 'The Telraam S2 does not send images to the Telraam servers. For privacy reasons, we think it is very important that the counting itself only happens on the device. The S2 transmits counting totals every 15 minutes to the Telraam database using the LTE-M or NB-IoT network. Therefore every S2 includes a SIM card and a Thingstream subscription. This allows Telraam S2 (almost) <a href="https://www.u-blox.com/en/iot-network-coverage"  target="_blank">worldwide connectivity</a> (). Wherever the LTE-M or NB-IoT network is available, you can count with an S2 device. For the Telraam S2 there is no possibility to connect via wifi. ',
 	 	'question-3'           => 'What is the accuracy for the night counts carried out by Telraam S2?',
 	'answer-3' 			=> 'With the arrival of the Telraam S2 hardware there is now the possibility to carry out counts for cars during nighttime (dark) hours. This functionality is currently not yet activated, as this requires some additional work to double check and validate the counting performance of the S2 sensor during the nighttime hours. There is a strong ambition to be able to activate this functionality by fall 2023 when the relevance of nighttime counting is resurfacing to compensate for shorter daytime counts.',
 	 	'question-4'           => 'Which modes will we see?',
 	'answer-4' 			=> 'The Telraam S2 hardware can distinguish between the following 10 modes of traffic: pedestrians, strollers, bicycles, motorcycles, cars, light trucks, trailers, trucks and buses. For now, the counting data of S2 devices data is still visualised the same way as for V1 devices: the data is grouped in the same 4, previously-existing, categories (pedestrians, two-wheelers, cars, large vehicles). Soon, the interface will be updated, enabling for S2 devices the visualisation of all modes separately. ',
 	 	'question-5'           => 'What is the accuracy in the detection of the different modes?',
 	'answer-5' 			=> 'We did extensive testing and validation before launching the Telraam S2 sensor. From our tests on various locations, we expect accuracy for cars/buses/trucks to be 90-95% and for pedestrians/bikes around 80-85%. The performance also depends on the location of your Telraam. You can find more info in our <a href="https://telraam.helpspace-docs.io/article/43/potential-inaccuracies-with-telraam-s2"  target="_blank">FAQ/a>. You find further detailed results of tests in the field in this <a href="https://github.com/Telraam/Telraam-S2/blob/main/count-consistency-validation.md"  target="_blank">article</a>  ',
 	 	'question-6'           => '',
 	'answer-6' 			=> '',
 	 	'question-7'           => '',
 	'answer-7' 			=> '',
 	 	'question-7'           => '',
 	'answer-7' 			=> '',
 	 	'question-7'           => '',
 	'answer-7' 			=> '',
];