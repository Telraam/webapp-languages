<?php

return [

    'title'           => 'FAQ',

    'question-1'           => 'Can I trade-in my Telraam V1 and upgrade to a Telraam S2 device at a reduced price?',
	'answer-1'           => 'No, due to the technological step-up that the Telraam S2 device provides compared to the Telraam V1 sensor, we cannot offer a trade-in based price reduction on new Telraam S2 purchases for existing Telraam V1 owners. However, if you have a Telraam V1 you can always sell the components of your device (Raspberry Pi 3A+ computer and Raspberry Pi camera module) on the hobby electronics market to put towards the price of a new Telraam S2, or you can convince your local authority to set up a new, funded Telraam project and possibly get a new Telraam S2 device that way. In the meantime all Telraam V1 devices will keep working and you will be able to see data from your Telraam V1 device on the Telraam network also in the future. However there will be no further feature-upgrades coming to the Telraam V1 devices.',
 	 	'question-2'           => 'What kind of data is sent from a Telraam S2 device?',
 	'answer-2' 			=> 'Privacy is always a top priority for us at Telraam. AI-based image recognition and object tracking is strictly limited to the edge devices (meaning it happens on the device itself), and only the resulting aggregate count (and speed) data is sent to the Telraam server every 15 minutes. Since the data is aggregated, individual object parameters are not transmitted.',
 	 	'question-3'           => 'What kind of network connection is needed for the Telraam S2 to send data?',
 	'answer-3' 			=> 'Our Telraam S2 devices come with a built-in Thingstream SIM card providing low-energy mobile data connection using either the LTE-M or NB-IoT frequency band of local cellular network provider(s). While these technologies are available already almost everywhere around the globe, please consult the <a href="https://www.u-blox.com/en/iot-network-coverage" target="_blank">network coverage map</a> before purchasing a Telraam S2 device, to make sure that your new sensor will be able to send data to the Telraam servers. Telraam S2 does not need a wifi connection, and there is no possibility to use wifi instead of the provided mobile data link.',
 	 	'question-4'           => 'What kind of road users can the Telraam S2 see?',
 	'answer-4' 			=> 'The new AI chip in the Telraam S2 can distinguish between ten modes of traffic: pedestrians, strollers, bicycles, motorcycles, cars, light trucks, trailers, trucks, and buses. For the time being, the traffic data coming from Telraam S2 devices is visualised the same way as data from Telraam V1 devices has always been: counts are aggregated into the four categories of pedestrians, two-wheelers, cars, and large vehicles. In the background, data is already saved for each of the ten modes for Telraam S2 devices, and the web-interface and the traffic API will be updated in the near future to include all the new modes.',
 	 	'question-5'           => 'What is the accuracy and precision of the Telraam S2?',
 	'answer-5' 			=> 'The accuracy and precision of Telraam S2 is continuously validated and documented. Our documentations cover <a href="https://github.com/Telraam/Telraam-S2/blob/main/count-performance-validation.md" target="_blank">count accuracy</a>, <a href="https://github.com/Telraam/Telraam-S2/blob/main/count-consistency-validation.md" target="_blank">count precision</a>, and <a href="https://telraam.helpspace-docs.io/article/41/speed-measurements-with-telraam-s2" target="_blank">speed measurements</a>. For the time being these documents cover daytime performance only, and we will update them with night performance in the future. In general current daytime accuracy is typically 90-95% for a large sample of test-locations, with only pedestrians performing notably worse in some specific circumstances. Precision is not a limiting factor, as the device-to-device scatter is low. For optimal performance make sure your Telraam S2 is installed at a suitable location (see Where can I install a Telraam S2), and set an <a href="https://telraam.helpspace-docs.io/article/66/region-of-interest-roi-and-roi-selection-with-telraam-s2" target="_blank">text</a> during registration.',
 	 	'question-6'           => 'How does the Telraam S2 perform at night?',
 	'answer-6' 			=> 'While the design and hardware setup of Telraam S2 makes it possible for our new sensor to count motorised vehicles (mainly cars) at night, this functionality is currently not fully developed yet. While you might see some counts on your Telraam S2 during the night hours already, these counts are not yet calibrated or validated, and they will likely be very far from reality for the time being. We have a strong ambition to fully develop the night counting functionality before the end of 2023, and then parallel with the deployment of this feature we will publish validation documentation just like we did for the daytime counts to illustrate the typical accuracy and precision of our device.',
 	 	'question-7'           => 'Where can I install a Telraam S2?',
 	'answer-7' 			=> 'Telraam S2 devices should be installed 
<ul class="jump-in">
<li>in a window which provides a clear, unobstructed view onto the whole width of the street below (no large trees, no wide poles or railings, no extensive street furniture in the field of view)</li>
<li>along a road that runs parallel to the window, with no crossroads (corners, turns) in sight</li> 
<li>not on the ground floor so that the device can look at the traffic at a somewhat downwards angle (the first floor - a.k.a. the second floor by our American friends - will be optimal in most cases, while higher floors might work for very wide roads with multiple lanes, so that the traffic is seen at a 30-45 degrees angle).</li>
</ul> 
<br>
Some examples of good and bad locations are shown in our FAQ article <a href="https://telraam.helpspace-docs.io/article/3/requirements-for-the-installation-of-a-telraam-in-my-window"  target="_blank">Requirements for the installation of Telraam on my window</a>.',
 	 	'question-8'           => 'What is the difference between personal and professional Telraam S2 devices?',
 	'answer-8' 			=> 'There is no difference between the personal and professional Telraam S2 device. Telraam uses revenue from professional contracts to cover the costs of managing personal devices.  If you are an organisation involved in campaigning on, consulting for, or managing local transport and mobility projects, then please check out our <a href="https://telraam.net/en/shop"  target="_blank">Professional packages</a>.',
 	 	'question-9'           => 'Can I switch off the LCD screen on my Telraam S2 device?',
 	'answer-9' 			=> 'Yes! Simply press the button until the screen goes dark. Don’t worry, the device will keep counting with the screen off too. You can re-activate the screen by pushing the button again.',
 	 	'question-10'           => 'My Telraam S2 seems to miss some traffic. What can I do?',
 	'answer-10' 			=> 'First of all, make sure that your Telraam is installed correctly, and fix its region of interest if you had not done so during installation. If you have already done that, please check if the region of interest that was chosen actually covers the whole width of the road as it should. Even with the best setting it is often not possible for the device to see pedestrians walking right under the window, so don’t expect those road users to be counted by the Telraam S2. If an area of the road is not visible on the region of interest image, then road users passing by there will not be counted. Similarly if the sidewalk on the other side of the road is partially covered by a row of trees or parked cars, your Telraam will likely have trouble counting each pedestrian passing partially hidden by them. Very dense, large groups of pedestrians and cyclists will also prove to be very challenging to be counted accurately, simply due to the technological limitations of such a small device. If you think your Telraam should be counting more accurately even after considering all the aforementioned factors, then you can always record a stable (non-handheld), high resolution (minimum 1080p), wide angle (so that the whole street surface is visible) video with your smartphone or a GoPro camera containing 15 minutes of traffic from the window where your Telraam S2 is installed and send it to us. We can use this video to see why your device is underperforming, and we might be able to use it to improve our detection algorithm in the future.',
 	 	 	'question-11'           => 'Returns',
 	'answer-11' 			=> 'We offer a returns policy on all physical items returned in saleable condition within 14 days. Contact us through our support system or email <a href="mailto:support@telraam.net"  target="_blank">support@telraam.net</a>.
Upon approval you will receive a return label from us.  Please do not return items to us without contacting first, or we will not be able to trace where it came from on.
Our address is Telraam c/o returns, Diestsesteenweg 71, 3010 Leuven - Belgium
Please note we cannot accept returns on digital subscriptions.',
 		 	'question-12'           => 'Damages',
 	'answer-12' 			=> 'If your order arrives in an unsatisfactory condition, get in touch with <a href="mailto:support@telraam.net"  target="_blank">support@telraam.net</a> explaining what the problem is including a picture of the package. We may require you to return the faulty item(s) or send us other evidence of the issue. You will be reimbursed for any return postage. Please do not return faulty items to us without contacting us first.
We can not replace damages device after it has been installed, we do so only when the package arrives in a bad condition.
',
 	 		 	'question-13'           => 'Missing Packages',
 	'answer-13' 			=> 'Unfortunately, there can be delays in the post that are beyond our control, particularly when shipping outside the UK. We apologize sincerely for any inconvenience this may cause.
We ask that you allow up to 14 days for EU customers and 28 days for outside of the EU, from the date of dispatch, before we assume an item has been lost in the post. If your order has not arrived by then please do let us know, Contact <a href="mailto:support@telraam.net"  target="_blank">support@telraam.net</a>. We will also be sure to notify you if your order is returned to us for any reason.',
 	 		 	'question-14'           => 'Customs, Duties & Taxes',
 	'answer-14' 			=> 'When ordering from telraam.net, the addressee is responsible for assuring the product can be lawfully imported to the destination. Recipients of international shipments may be subject to import taxes, fees, and customs duties (hereafter, Import Fees), levied by the customs office of your shipping destination. Import fees vary according to the customs regulations of the destination country and at the moment we mainly experience custom charges when exporting to the UK.',

 	'text-final' 			=>'If you still have specific questions feel free to email us on <a href="mailto:support@telraam.net"  target="_blank">support@telraam.net</a>'
];
