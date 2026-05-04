<?php

return [

    'title'      => 'Exactitud y precisión',
    'subtitle'   => 'Cómo obtener los mejores resultados de tu Telraam S2<br> Cómo instalar el dispositivo correctamente y abordar algunos problemas habituales',

    'intro' => 'Los dispositivos Telraam S2 ofrecen flexibilidad, facilidad de instalación y una exactitud fiable de hasta el 90-95 % para vehículos motorizados, pero hay algunos requisitos a tener en cuenta para obtener los mejores resultados.',
    // location
    'location-title' => '¿Qué es una ventana o ubicación adecuada?',

    'location-req-1-title' => 'Altura y planta',
    'location-req-1-txt' => 'El dispositivo debe instalarse al menos en la primera planta (+1 sobre el nivel de la calle) o por encima de los 3-4 m de altura — las ubicaciones a pie de calle, por lo general, no se recomiendan.',

    'location-req-2-title' => 'Distancia a la calle',
    'location-req-2-txt' => 'Debe estar lo suficientemente lejos como para captar por completo vehículos grandes (p. ej., furgonetas), especialmente en calles estrechas.
                Si está a más de 15 m del centro de la calle, el rendimiento para peatones y ciclistas en el lado más lejano disminuye.',

    'location-req-3-title' => 'Línea de visión despejada',
    'location-req-3-txt' => 'Sin obstrucciones: árboles, setos, balcones, mosquiteras, vehículos altos aparcados, etc. Asegúrate de que la calzada y la acera sean totalmente visibles.',

    'location-req-4-title' => 'Sin cruces',
    'location-req-4-txt' => 'La cámara debe enfocar exclusivamente un tramo recto de la calle (vista perpendicular) y no debe incluir intersecciones,
            cruces, parques infantiles ni aparcamientos – solo tráfico que se mueva de izquierda a derecha o de derecha a izquierda.',


    // how
    'how-title' => '¿El sensor nunca se pierde un movimiento?',
    'how-txt' => 'Telraam S2 utiliza IA para detectar objetos y seguir su movimiento. Los objetos se reconocen y se les asigna una puntuación de probabilidad.
                Cada objeto necesita una puntuación de probabilidad mínima para ser tenido en cuenta.
                Si un objeto identificado entra por un lado y sale por el otro, registramos un conteo.
                <br>

                <br>
                Ningún sistema es perfecto. Entonces, ¿cuáles son las situaciones difíciles?<br>
                <ul class="jump-in">
                    <li>Si los objetos quedan ocultos o están demasiado lejos, el dispositivo puede tener dificultades.</li>
                    <li>Si el ángulo o la distancia son muy diferentes a la configuración clásica, el rendimiento puede verse afectado.</li>
                    <li>Los peatones o las bicicletas, especialmente cuando hay personas ocultas porque caminan o pedalean en grupo o lejos de la cámara, pueden clasificarse incorrectamente o no contarse correctamente.</li>
                </ul>',

    // location more
    'location-more-title' => '¿Quieres saber más sobre los requisitos de ubicación?',
    'location-more-txt' => 'Si tienes dudas, puedes consultar un <a href="https://faq.telraam.net/article/3/requirements-for-a-suitable-window-and-location">artículo dedicado de las preguntas frecuentes para más detalles</a> o
                <a href="https://faq.telraam.net/article/357/location-guidelines-for-telraam-s2-outdoor">un artículo aparte y completo sobre los requisitos del Telraam S2 Outdoor</a>.',


    // privacy
    'privacy-title' => 'IA en la nube vs. privacidad',
    'privacy-txt' => 'A diferencia de muchos sistemas de cámaras más caros, Telraam realiza la clasificación y el conteo directamente en el propio dispositivo. Es la única forma de garantizar realmente la privacidad
                y creemos que protegerla es fundamental.<br>
                El Telraam S2 incluye una cámara de baja resolución y no almacena imágenes.<br>
                Damos la bienvenida a conteos de validación que nos ayuden a mejorar nuestros algoritmos.
                No dudes en leer más en <a href="https://faq.telraam.net/article/265/objective-evaluation-of-the-results-of-your-quick-validation">nuestras preguntas frecuentes sobre el proceso.</a>',

    // tubes
    'tubes-title' => 'Tubos vs. dispositivos no intrusivos y multimodales',
    'tubes-txt' => 'Hoy en día los tubos neumáticos son el estándar para el conteo de tráfico.
Sin embargo, pruebas independientes en condiciones reales han demostrado que incluso estos tienen un <a href="https://nap.nationalacademies.org/read/22223/chapter/6#77" target="_blank">margen de error del 10-20 %</a><sup>1&nbsp;2</sup>,
                principalmente por subconteos. Normalmente alcanzamos al menos la misma exactitud con menos complicaciones. Las instalaciones de tubos requieren mucha mano de obra, mantenimiento y tienen una vida útil corta.
Telraam es fácil de instalar, cuenta todos los modos de transporte de fábrica y seguirá contando durante un periodo más largo sin necesidad de mantenimiento.<br>
                <div class="tiny grey jump-in" style="line-height: 13px; margin-top: 20px;">
                    <sup style="top:0">1</sup>&nbsp;<a href="https://nap.nationalacademies.org/read/22223/chapter/6#77" target="_blank" class="tiny grey">Guidebook on Pedestrian and Bicycle Volume Data Collection. Washington, DC:
                                The National Academies Press.</a><br><br>
                    <sup style="top:0">2</sup>&nbsp;<a href="https://www.researchgate.net/publication/298805209_Accuracy_of_Bicycle_Counting_with_Pneumatic_Tubes_in_Oregon" class="tiny grey"  target="_blank">Accuracy of Bicycle Counting with Pneumatic Tubes in Oregon</a>
                </div>',

    // what to expect
    'result-title' => 'Entonces, ¿qué puedes esperar?',
    'result-txt' => 'La exactitud del Telraam S2 es de aproximadamente un <strong>90-95 % para el tráfico motorizado</strong>.
                    Para los usuarios activos de la vía, como peatones y ciclistas, la exactitud puede ser ligeramente menor y
                    los objetos pueden clasificarse erróneamente, p. ej., un peatón con un cochecito de bebé como ciclista.
                    Un rendimiento óptimo depende de un posicionamiento y una configuración adecuados.
                    No dudes en <a href="/en/contact-us">ponerte en contacto</a> para recibir asesoramiento o soporte.',

    // more/advanced part
    'more-title'    => 'Más sobre exactitud, datos de velocidad, etc.',

    'more-1-title'  => 'Casos límite',
    'more-1-txt'    => 'Si quieres profundizar aún más en lo que puede causar imprecisiones con nuestros sensores y cómo evitarlas, puedes obtener más información en el
<a href="https://faq.telraam.net/article/43/potential-inaccuracies-with-telraam-s2">artículo de las preguntas frecuentes sobre posibles casos límite</a>.',

    'more-2-title' => 'Velocidad',
    'more-2-txt' => 'Telraam S2 determina la velocidad del vehículo midiendo el tiempo que tarda un coche en recorrer su propia longitud estimada, basándose en las dimensiones medias
                de los coches belgas, lo que permite estimaciones de velocidad independientes de la distancia. Lee más en el
<a href="https://faq.telraam.net/article/41/speed-measurements-with-telraam-s2">artículo de las preguntas frecuentes sobre las mediciones de velocidad</a>.',

    'more-3-title' => 'Pruebas de rendimiento por versión',
    'more-3-txt' => 'Para ver un resumen de nuestros propios conteos de validación y experimentos para evaluar la exactitud de las distintas versiones de nuestro modelo de IA, consulta las
                <a href="https://github.com/Telraam/Telraam-S2/blob/main/count-performance-validation.md">pruebas de rendimiento de conteo de nuestras versiones de firmware K210 actuales y anteriores</a>.',

];
