<?php

return [

    'title' => 'Herramienta de colocación en exteriores',
    'subtitle' => 'Posicionamiento de tu Telraam S2 Outdoor',

    'near-side' => 'Distancia del poste a la calle',
    'width-street' => 'Anchura de la calle',
    'mount-height' => 'Altura del dispositivo',


    // 1. near side
    'val-block-1-title' => 'Lado cercano',
    'val-block-1-info' => '¿Puede mi Telraam S2 Outdoor detectar objetos en el lado cercano?',

    'val-block-1-good-title' => 'La distancia es de al menos 2 m Y el ángulo respecto al lado más cercano del área de monitorización es de al menos 20°',
    'val-block-1-good-info' => 'Todos los objetos en el lado cercano están en el campo de visión y son reconocibles.',

    'val-block-1-poor-title' => 'La distancia es de 1 a 2 metros O el ángulo respecto al lado más cercano del área de monitorización es de 10° a 20°',
    'val-block-1-poor-info' => 'Es posible que se te escapen algunos objetos en el lado cercano.',

    'val-block-1-bad-title' => 'La distancia es inferior a 1 m O el ángulo respecto al lado más cercano del área de monitorización es inferior a 10°',
    'val-block-1-bad-info' => 'Se te escaparán la mayoría de los objetos en el lado cercano.',

    // 2. blocking view
    'val-block-2-title' => 'Vista bloqueada',
    'val-block-2-info' => '¿Existe riesgo de que los objetos del lado cercano bloqueen los del lado lejano?',

    'val-block-2-good-title' => 'El ángulo respecto al centro de la calzada es de 30° a 60°',
    'val-block-2-good-info' => 'Muy poco riesgo de que los objetos del lado cercano bloqueen los del lado lejano.',

    'val-block-2-poor-title' => 'El ángulo respecto al centro de la calzada es > 60° o < 30°',
    'val-block-2-poor-info' => 'El tráfico denso en los carriles más cercanos al Telraam S2 Outdoor puede impedir el conteo preciso de objetos en los carriles más alejados, carriles bici y aceras.',

    // 3. far side
    'val-block-3-title' => 'Lado lejano',
    'val-block-3-info' => '¿Verá mi Telraam S2 Outdoor todos los objetos en el lado lejano?',

    'val-block-3-good-title' => 'Los objetos están a menos de 25 m',
    'val-block-3-good-info' => 'Todos los objetos serán lo suficientemente grandes para ser detectados por Telraam.',

    'val-block-3-poor-title' => 'Los objetos están entre 25 m y 40 m',
    'val-block-3-poor-info' => 'Es posible que se te escapen algunos objetos en el lado lejano, especialmente los más pequeños como peatones.',

    'val-block-3-bad-title' => 'Los objetos están a más de 40 m',
    'val-block-3-bad-info' => 'los objetos en el lado lejano serán demasiado pequeños y, lo más probable, no serán detectados.',

    // 4. far side
    'val-block-4-title' => 'Altura del dispositivo',
    'val-block-4-info' => '¿Está mi Telraam S2 Outdoor instalado lo suficientemente alto para evitar el vandalismo?',

    'val-block-4-good-title' => 'La instalación está por encima de los 3 m',
    'val-block-4-good-info' => 'Bien fuera de alcance; esta altura requiere una acción y un equipo deliberados para que los vándalos retiren/rompan la unidad.',

    'val-block-4-bad-title' => 'La instalación está por debajo de los 3 m',
    'val-block-4-bad-info' => ' Demasiado bajo, tu Telraam S2 Outdoor podría ser vandalizado fácilmente.',

    // warning
    'warning' => "No todas las advertencias son determinantes. Evalúa cada una en función de lo que más importa para tus objetivos de conteo de tráfico."


];
