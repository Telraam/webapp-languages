<?php

return [
    'nav-title'        => '¿Dispositivo listo?',
    'workshop-title'    => ' Tengo mi dispositivo Telraam listo',
    'workshop-intro'    => 'Ha recibido su dispositivo Telraam. Continúe aquí para seguir los pasos de instalación de su Telraam, conectarlo a su wifi, activarlo y comenzar a contar.',

                    // new
                        'big-steps-title' => '¿Cuáles son los pasos a seguir?',

                        'big-steps-1' => 'Indique la ubicación de su Telraam en el mapa',
                        'big-steps-2' => 'Conecte su Telraam a la corriente y apúntelo hacia la calle.',
                        'big-steps-3' => 'Conecte su Telraam a su wifi',
                        'big-steps-4' => 'Introduzca el número de serie de su Telraam',

    'self-assembly-title' => '¿Cómo montarlo?',

    'assembly-software-title-0' => 'Los componentes',

    'assembly-text-intro' => '
<ul class="checklist"><li>Carcasa negra</li>
<li>Raspberry Pi (microcomputador)</li>
<li>Cable de alimentación para Raspberry Pi</li>
<li>Tarjeta SD con adaptador</li>
<li>Cámara</li>
<li>Soporte para la cámara</li>
<li>Cable para conectar la cámara con la caja negra (cable de cámara)</li>
<li>Tres tipos de cinta adhesiva: negra, de doble cara y cinta adhesiva normal</li>
<li>Bolígrafo</li>
<li>Tijeras</li></ul>',
    'assembly-software-title-1' => 'Instalar el software en la tarjeta SD',
    'assembly-software-more-0' => 'Ha llegado el momento de instalar el software para su Telraam. Solo tiene que seguir un procedimiento sencillo y directo. Primero descarga el software de Telraam en su propio ordenador (se proporciona como un archivo ZIP de gran tamaño). A continuación, descarga un pequeño programa de utilidad que puede usar para instalar el software de Telraam directamente en su tarjeta SD.<br> Paso a paso:
<ul><li>Descargar el software de Telraam</li>
<li>Descargar Etcher (un programa para escribir datos en una tarjeta SD)</li>
<li>Escribir el software de Telraam en la tarjeta SD</li></ul>',
    'assembly-software-step-1-title' => 'La caja negra',
    'assembly-software-step-2-title' => 'La cámara',
    'assembly-software-step-3-title' => 'El cable de la cámara',
    'assembly-software-more-1' => '<h4>Paso 1: descargar el software de Telraam</h4><br>
Puede descargar el software de Telraam <a href=" https://telraam-api.net/telraam-sd-image.zip"  target="_blank">aquí </a>. Recuerde dónde se ha guardado este archivo ZIP de gran tamaño (aproximadamente 4 gigabytes) en su ordenador.<br><br>

<span class=tiny>Para su información: Telraam se suministra como un archivo de imagen comprimida que puede escribirse directamente en la tarjeta SD. Contiene una versión de Linux especialmente diseñada para la Raspberry Pi, preconfigurada para ejecutar el software de Telraam automáticamente al arrancar. Por tanto, no requiere pantalla, ratón ni teclado.</span>
',
    'assembly-software-more-2' => '<h4>Paso 2: descargar Etcher</h4><br>
Etcher es un programa que puede usar para copiar el software de Telraam del paso 1 desde su ordenador a su tarjeta SD. Funciona en Windows, Linux y MacOS.

Puede <a href="https://www.balena.io/etcher/" target="_blank"> descargar Etcher aquí</a>. Elija la versión correcta para su sistema operativo.',
    'assembly-software-more-3' => '<h4>Paso 3: escribir el software de Telraam en la tarjeta SD</h4><br>
Inserte su tarjeta SD en el lector de tarjetas SD de su ordenador (ignore cualquier mensaje que aparezca) e inicie el programa Etcher. Haga clic en "Select image".',
    'assembly-software-more-4' => 'En Etcher, haga clic en "Select drive".',
    'assembly-software-more-5' => 'Seleccione su tarjeta SD de la lista.',
    'assembly-software-more-6' => 'Haga clic en "Flash!"',
    'assembly-software-more-7' => 'Etcher comenzará a escribir el archivo de gran tamaño en su tarjeta SD y a verificarlo. Dependiendo de la velocidad de su lector de tarjetas SD, esto puede tardar desde media hora hasta varias horas. Espere hasta que Etcher haya finalizado completamente.',
    'assembly-software-more-8' => 'Cuando todo esté listo, puede cerrar Etcher, retirar la tarjeta SD de su ordenador e insertarla en su Raspberry Pi.',


    'assembly-title-1' => 'Montar el Telraam en diez pasos',
    'assembly-1' => 'Coloque la Raspberry Pi en la caja negra. Asegúrese de que los 4 pequeños pines de la Raspberry Pi encajen en la caja negra.',
    'assembly-2' => 'Extraiga la tarjeta Micro SD del adaptador',
    'assembly-3' => 'Inserte la tarjeta Micro SD en la Raspberry Pi en la dirección correcta. Consulte el <a href=https://youtu.be/MgA4yUgnKrg target=_blank>vídeo de instrucciones</a> si es necesario.',
    'assembly-4' => 'Conecte el cable de la cámara a la cámara',
    'assembly-5' => 'Coloque la Raspberry Pi en la caja negra. Tenga cuidado con los cuatro pines. Pase el cable por la ranura del soporte.<br><br>

Encaje la tapa en el soporte de la cámara, pero no la cierre completamente todavía. La pieza utilizada para ajustar el ángulo del soporte aún debe introducirse en el medio.
<br><br>
A continuación, cierre completamente el soporte de la cámara con la pieza de ángulo insertada.',

    'assembly-6' => 'Conecte el cable de la cámara a la Raspberry Pi. La tira metálica del cable debe tocar el metal en la conexión a la Raspberry Pi. Fije el cable en su posición.',

    'assembly-7' => 'Cierre la caja negra hasta que encaje con un clic.',

    'assembly-8' => 'Pinte de negro el cable de la cámara (con cinta adhesiva o rotulador).',

    'assembly-9' => 'Coloque cinta adhesiva de doble cara en la caja negra, el cable de la cámara y el soporte de la cámara.',

    'assembly-10' => '¡Su Telraam está listo! Siga los pasos a continuación para conectar su Telraam al wifi y montarlo.',

    'btn-save' => '¡De acuerdo, siguiente!',


    /* new 11 june */
    'order-at-gotron-self-assemblage'  => '¿Sigue teniendo dificultades para encontrar las piezas? Haga su pedido en <a href="https://www.gotron.be/je-wil-graag-weten-hoeveel-en-welk-verkeer-er-door-je-straat-komt.html" target="_blank">Gotron</a>. Gotron es un especialista belga en electrónica con servicios técnicos.',

    'gotron-title' => 'Hacer el pedido en Gotron',

    'order-at-gotron-package' => 'Realice su pedido de Telraam en <a href="https://www.gotron.be/https://www.gotron.be/telraampakket-pre-installed-version-voorafgemonteerd-en-flashed-sd-kaart.html" target="_blank">Gotron</a>.
En Gotron puede encargar una versión montada que incluye el software en la tarjeta SD. Gotron es un especialista belga en electrónica con servicios técnicos.',
    'link-gotron' => 'https://www.gotron.be/telraampakket-pre-installed-version-voorafgemonteerd-en-flashed-sd-kaart.html',
    'btn-save-received-and-ready' => '¡De acuerdo, dispositivo Telraam recibido y listo!',

];
