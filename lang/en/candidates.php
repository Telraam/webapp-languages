<?php

return [

    'title' => 'Do you want to join this counting network?',
    'title-form' => 'Your candidacy',

    'first-name'        => 'First name',
    'last-name'         => 'Last name',
    'email'             => 'Email address',
    'street'            => 'Street',
    'nr'                => 'Number',
    'street_extra'      => 'Extra Street',
    'send'              => 'Send',
    'zip'               => 'Zip code',
    'city'              => 'City',
    'how-do-you-want-to-participate' => 'How do you want to participate in the network?',
    'participate-as-volunteer' => 'I want to participate as a (occasional) volunteer.',
    'participate-as-counter' => 'I want to install a Telraam.',
    'participate-checkbox-mandatory' => 'Please specify how to want to participate',

    'select-network'      => 'Select you network.',
    'no-active-networks'   => 'No active networks for the moment.',

    'thanks-title' => 'Thank you for registering.',
    'thanks-duplicate-title' => 'Seems like you are already in the list.',

    'other-network'     => 'Other or unknown network',

    'gender-question' => 'Gender',
    'age-level-question' => 'What is your age?',
    'birthday-question' => 'What is your year of birth? (YYYY)',

    'employment-question' => 'What job do you currently do, or did you do when you worked? ',
    'education-question' => 'What is your highest level of education? ',
    'ethnicity-question' => 'What is your ethnicity?',
    'nationality-question'  => 'What is your nationality?',


    'error' => 'Error',
    'error-file' => 'Picture needs to be uploaded as a jpg or png with a maximum size of 5MB',
    'error-file-format' => 'Photo needs to saved and uploaded in a jpg or png format.',
    'error-file-size' => 'Please limit the size of your photo to 5MB',

    'gender-female' => 'Female',
    'gender-male' => 'Male',
    'gender-x' => 'Other ',
    'prefer-not-to-say' => 'Prefer not to say',

    'what_do_you_want_to_learn' => 'What do you want to learn?',
    'privacy-checkbox'     => 'I agree with the <a href="/en/privacy-policy" target="_blank">privacy policy</a>',
    'nav-main-title'     => 'Installation of the Telraam',
    'nav-title-1'     => 'Address',
    'step1-btn'         => 'Confirm and next ',
    'confirm'         => 'Confirm',
    'image_street'  => 'Picture of your street taken from the 1st or 2nd floor window where you will place your Telraam. Take the picture perpendicular,
from a bird\'s eye view, facing the street <a href="https://faq.telraam.net/article/3/requirements-for-the-installation-of-a-telraam-in-my-window" target="_blank">See also the examples</a>.<br> Limit file size and upload as jpg or png.',


    'admin_form1' => 'Form #1 intro',
    'admin_form2' => 'Form #2 intro',

    'info_note_mail' => '[registerUrl]insert here your register link text[/registerUrl] to use the personal register url.',


    // form #1
    'form_default_public_intro'                => 'We are working on a new mobility plan together with the citizens and with the help of Telraam. Would you like to count the traffic in your street? Then sign up here for Telraam. Would you rather think along with us about the data coming from Telraam and what actions and measures are needed? Sign up as a volunteer. ',
    'form_default_public_intro_thanks'         => 'Thank you for registering. You will receive an e-mail soon with more information. ',
    'form_default_public_intro_thanks_but_duplication'         => 'Thank you for registering, however we a found previous registration from you with the same email address. You will get more news soon.',


    // form #2
    'form_default_public_intro_form_2'         => ' We would like to ask you some additional information. This information is important to make a good selection of counters and to make a solid traffic analysis.',
    'update_extrainfo_error'                   => 'We can not find you in our registration list.',
    'update_extrainfo_thanks'                  => 'Thank you for this additional information.',

    // auto reply direct na invullen van eerste formulier
    'form_default_email_autoreply_interested_body' => 'Dear, <br><br>We have received your registration. <br>Thank you that you are interested in collaboration.
    We will contact you again soon with more information.
<br>
Greetings,<br>
Team Telraam', // en naam netwerk eventueel? vb. gemeente Zandhoven

    // de standaard mails die trainers / admins die vooraf ingevuld staan. Ze kunnen dit direct editeren
    'form_default_email_telraam_interested_counter' => 'Dear, <br><br>We have received your registration for a Telraam. Thank you that you are intesested in counting traffic in your neighbourhood. <br>
We are asking you for additional information [formUrl]via this extra form[/formUrl] such as your address and a picture of the view of the window where you want to install your Telraam.<br>

This additional information we need to process yoyr registration. The selection of the Telraam-counters is based on location and the view from the window. <br><br>
<br>
Soon we will inform you if you are selected. If you are selected you will receive an invitation for a workshop where we will explain Telraam and how to install the Telraam at home.
<br><br>
When you are not selected, you are still able to check Telraam data via <a href="www.telraam.net" target="_blank">www.telraam.net</a>. <br>
If you really want to count yourself, <a href="https://telraam.net/nl/network/mijn-eigen-telraam" target="_blank">you can also buy a Telraam.</a>
<br><br>
Greetings,<br>
Team Telraam',

    'form_default_email_telraam_interested_volunteer' => 'Dear, <br><br>You volunteered for our counting network. Your details are listed. Thank you for this! Nice of you to think along and cooperate.
    We will contact you again when activities are planned. In the meantime, be sure to check out the <a href="www.telraam.net" target="_blank">Telraam-website</a> and the growing counting network in your community.
<br><br>
Greetings,<br>
Team Telraam',

    'form_default_email_telraam_selected'         => 'Dear, <br><br>Good news! You have been selected based on your location and image to install a Telraam.
   <br>We invite you to the workshop at xxxxxxx . There you will receive your Telraam and we will explain what this Telraam can do and how to install it at home.
  After the workshop we ask you to register your Telraam via the [registerUrl]Register page[/registerUrl].
   <br><br>
   Team Telraam',
    'form_default_email_telraam_not_selected'    => 'Dear, <br><br>Unfortunately, you have not been selected based on your location and image to install a Telraam.
   Don not worry. The data of all Telraams are visible to everyone at <a href="www.telraam.net" target="_blank">www.telraam.net</a>. <br>
   If you really want to count yourself,  you can <a href="https://telraam.net/nl/network/mijn-eigen-telraam" target="_blank">buy a Telraam.</a>
   <br><br>
Team Telraam ',
   'form_default_email_telraam_waiting'   => 'Dear,
   <br><br>You have not been selected to install a Telraam for the time being. However, you are on the reserve list. If the selected counter in your area drops out, we will contact you again.
The data of all Telraams are visible for everyone on <a href="www.telraam.net" target="_blank">www.telraam.net</a>. <br>
Yet not selected and would you really like to count yourself, you can <a href="https://telraam.net/nl/network/mijn-eigen-telraam" target="_blank">buy a Telraam.</a>
   <br><br>Het Telraam-team ',


    // new
    'privacy-checkbox-sentence-1' => 'I agree with the',
    'privacy-checkbox-link-text' => 'privacy policy',

    'mobile' => 'Mobile number',
    'remark' => 'Remark',

    'motivation-question' => 'What motivates you to take part in this project?',
    'motivation-question-other'  => 'Can you elaborate other?',

    // new 17 feb
    'form-is-closed' => 'The candidates form is closed',
    'form-is-not-visible' => 'The candidates form is not published yet',

    // 11 feb 2025
    'registration-is-closed' => 'L\'inscription est close',

];

