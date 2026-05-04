<?php

return [

    'title'           => 'Telraam V1',
    'subtitle'          => 'Nuestro primer sensor<br>
Una Raspberry Pi convertida en contador de tráfico<br>
Usted consigue las piezas, nosotros le proporcionamos el software y la plataforma de datos<br>',

    'warning' => ' <p>El Telraam V1 fue el primer sensor conceptual de Telraam, y dio inicio a una revolución en el conteo de tráfico que ahora ha alcanzado un nuevo nivel gracias a nuestro dispositivo Telraam S2 diseñado específicamente para este propósito.</p>
<p>
Aunque creemos que el Telraam S2 ofrece mayor exactitud, precisión y una mejor experiencia de usuario para la ciencia ciudadana,
 seguiremos dando soporte a los dispositivos Telraam V1 durante los próximos años.</p>',


    'section1-title'        => 'Historia',
    'section1-subtitle'     => 'Una historia original',

    'section1-text'        => '<p>Durante el verano de 2018, un equipo de ingenieros de transporte, científicos de datos y desarrolladores se reunió en
<a href="https://www.tmleuven.be/" target="_blank">TML</a>
 para idear un método capaz de proporcionar datos de tráfico a una escala local sin precedentes, funcionando de forma continua
 a una fracción del coste de los sistemas de monitorización de tráfico existentes.</p>

<p>La experiencia del equipo les llevó a centrarse en construir algo pequeño, sencillo y asequible, pero igualmente eficaz.
El dispositivo final tendría que poder instalarse en las ventanas de los ciudadanos, de modo que representara su verdadera "vista" de la calle,
 sin resultar intrusivo. De este modo, podría desplegarse en grandes cantidades para obtener una imagen completa de una amplia variedad de calles,
 incluidas las secundarias y residenciales, que los sistemas de conteo tradicionales no suelen cubrir.</p>

<p>El prototipo se construyó con componentes disponibles en el mercado, como un minicomputador Raspberry Pi y una cámara que cumplía los
criterios anteriores, aunque el algoritmo de detección fue desarrollado internamente. El desarrollo del sensor finalizó antes de que terminara
el verano; a continuación se construyeron desde cero un back-end y un front-end básicos, y el primer lote de 50 dispositivos se distribuyó
en Lovaina a principios de 2019. En el momento del lanzamiento del Telraam S2 en 2023, ya se habían vendido más de 5.000 dispositivos Telraam V1
 en todo el mundo.</p>',

    'section1-text-extra'        => 'Como la mayoría de nuestros usuarios solo quieren contar el tráfico y no necesariamente tienen los conocimientos técnicos necesarios para trabajar con Raspberry Pi, desde el lanzamiento del Telraam S2 en primavera de 2023 solo comercializamos este último. Sin embargo, sabemos que hay muchos aficionados a la tecnología que estarían encantados de ponerse manos a la obra, y para ellos el sensor V1 basado en Raspberry Pi sigue siendo una excelente herramienta. Por eso no solo seguimos dando soporte a los antiguos sensores V1 en funcionamiento, sino también a las instalaciones de nuevos dispositivos Telraam V1 construidos por los propios usuarios.
    Si desea contar el tráfico y no le asusta un proyecto con Raspberry Pi, ¡continúe leyendo!',

    'section2-title'        => 'Hágalo usted mismo',
    'section2-subtitle'     => '¿Qué se necesita para un Telraam V1?',
    'section2-text'        => 'El kit necesario para un Telraam V1 consta de los siguientes componentes (tenga en cuenta los modelos específicos requeridos):<br>
            <ul class="jump-in">
                <li>Raspberry Pi 3A+</li>
                <li>Módulo de cámara 2 para Raspberry Pi</li>
                <li>Soporte de cámara (puede adquirir cualquier soporte disponible para cámara RPI, pero también hemos creado un soporte impreso en 3D que aún puede comprar en nuestra <a href="https://buy.stripe.com/4gw4jXeOv3G8ePucMP">
                tienda</a>, o puede imprimirlo usted mismo utilizando los archivos en <a href="https://github.com/Telraam/camera-mount">
                GitHub</a>)</li>
                <li>Tarjeta SD de 16 GB con la imagen Telraam grabada (puede encontrar
                <a href="https://github.com/Telraam/Telraam-RPi">el software en GitHub aquí</a>)</li>
                <li>Adaptador de corriente</li>
                <li>Recomendado: una cubierta negra plegable para usarla como parasol para el módulo de cámara (contra los reflejos internos en la ventana)</li>
                <li>Opcional: carcasa para la Raspberry Pi para mejorar su aspecto</li>
            </ul>
        <br>
        Consulte nuestras preguntas frecuentes para obtener más información sobre
            <a href="https://faq.telraam.net/article/36/do-it-yourself-assemble-telraam-by-yourself">cómo montar su dispositivo</a>.</p>
',

    'section2-text-extra'        => '<b> El software y el firmware incluidos en la imagen de la tarjeta SD ofrecida fueron creados para
    estos componentes específicos y podrían no funcionar con una configuración diferente, por lo que le rogamos que se asegure de adquirir el hardware correcto.</b> La comunidad ha realizado algunos intentos para configurar dispositivos V1 utilizando otras versiones de RPi (véanse las entradas en nuestro GitHub), pero no podemos ofrecer soporte para este tipo de proyectos.',

    'section3-title'        => 'Preguntas frecuentes sobre Telraam V1',
    'section3-subtitle'     => '¿Qué cuenta y cómo lo hace el Telraam V1?',

    'section3-text'        => 'Telraam V1 utiliza visión por computador (OpenCV) para detectar objetos ante un fondo constante (mediana periódicamente
     recalculada). Los objetos se detectan en tiempo real en cada fotograma de baja resolución enviado por la cámara.
     Algunos parámetros básicos (como la posición en el fotograma, el ancho, el alto, el área, etc.) de los contornos de los objetos se almacenan en
     la memoria cada varios minutos hasta que un algoritmo los procesa (y posteriormente los elimina) para identificar y
     rastrear los objetos que se mueven a través del fotograma (y por tanto a lo largo de la calle). Al final de cada ciclo, los parámetros medios
     de los objetos rastreados correctamente se envían a los servidores de Telraam, donde posteriormente se clasifican
     en usuarios de la vía según sus parámetros observados, antes de agregarse en totales de conteo trimestral y horaria
     por modo y sentido de circulación.<br>
<br>

El servidor de Telraam clasifica los objetos procedentes de dispositivos Telraam V1 en cuatro tipos de modos:
    <ul class="jump-in">
        <li>peatones</li>
        <li>vehículos de dos ruedas (ciclistas y motocicletas)</li>
        <li>coches </li>
        <li>vehículos pesados (todo lo que sea mayor que un turismo)</li>
    </ul>
<br>
    Lo que Telraam no cuenta:<br>
    <span class="cross">×</span> Telraam no cuenta cuando está oscuro.<br>
    <span class="cross">×</span> Telraam no reconoce vehículos individuales (ni matrículas).<br>
    <span class="cross">×</span> Telraam no reconoce personas individuales (ni rostros).<br>
    <span class="cross">×</span> El Telraam V1 no puede contar de forma fiable el número exacto de vehículos en un
    período de tiempo muy corto (de pocos minutos de duración).<br>
    <span class="cross">×</span> El Telraam V1 no es un radar de velocidad y no puede proporcionar mediciones de velocidad precisas.<br>

<p>Para más información sobre los requisitos técnicos, la clasificación de objetos, la exactitud y las posibles limitaciones, la calibración de datos
y las preguntas relacionadas con los datos de velocidad, por favor
<a href="https://faq.telraam.net/category/5/telraam-v1">visite nuestras preguntas frecuentes</a>.</p>',


];
