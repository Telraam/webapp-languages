<?php

return [
    'nav-title'        => 'Imágenes de la cámara',

    'camera-images'     => 'Imagen(es) de la cámara',

    'roi-still-to-be-set' => 'ROI pendiente de configurar',

    'what-are-the-camera-images' => 'Las imágenes de la cámara son imágenes de fondo enviadas a nuestro servidor para verificar si la posición de tu cámara sigue siendo correcta.
    Se envía una imagen tras encender tu Telraam y una vez al día cuando tu Telraam está en funcionamiento. <br>
    <a href="https://faq.telraam.net/article/30/background-image">Lee más información en nuestras preguntas frecuentes</a>',
    'software-version' => 'Versión del software instalado en el dispositivo',

    // S2 ROI
    'roi-loading-title' => 'Cargando...',
    'roi-loading-text' => 'Tu dispositivo S2 se está restableciendo a la vista completa de gran angular, así que estamos descargando una imagen para ayudar a seleccionar tu ROI. Como el dispositivo S2 tiene una conexión IoT lenta, esto puede tardar entre 30 y 90 segundos.<br>
Asegúrate de completar el proceso y seleccionar uno de los ajustes de ROI predefinidos para garantizar una mejor exactitud.',

    'roi-loaded-title' => 'Selecciona el zoom',
    'roi-loaded-text' => 'En la mayoría de los casos, el campo de visión amplio es innecesario, ya que el tráfico se produce en un rango mucho más estrecho,
    y Telraam no necesita monitorizar zonas sin tráfico. Una ROI configurada de forma óptima proporcionará los números de mayor exactitud en cuanto a
    conteos de usuarios de la vía. <br>
    La idea es "recortar" tanto como sea posible las regiones donde no hay o no debería haber tráfico.<br>
Cada cuadrado representa un zoom posible para el S2.<br>
<i class="heroicon heroicon-information" style="border:0"></i> <a href="https://faq.telraam.net/article/66/region-of-interest-roi-and-roi-selection-with-telraam-s2">Lee todo al respecto en estas preguntas frecuentes</a>.',
    'roi-focus-on-top' => 'Centrar en la parte superior',
    'roi-focus-on-center' => 'Centrar en el medio',
    'roi-focus-on-bottom' => 'Centrar en la parte inferior',

    'what-are-the-camera-images-S2' => 'Los dispositivos Telraam S2 están construidos de forma robusta, con una cámara fija, lo que significa que no hay razón para monitorizar el campo de visión a diario
una vez establecida la región de interés (ROI) inicial, ya sea automáticamente por la cámara o manualmente por el usuario o el administrador de la red. Solo se guarda la última imagen ROI y se conserva durante un máximo de 1 año.<br>
    <a href="https://faq.telraam.net/article/30/background-image-">Lee más información en nuestras preguntas frecuentes</a>',

    'roi-set-to' => 'ROI configurada en',

    'device-not-available-for-roi' => 'El dispositivo no está en línea en este momento. Inténtalo de nuevo más tarde.',

];
