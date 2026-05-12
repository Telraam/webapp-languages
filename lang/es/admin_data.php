<?php

return [
    // data-trends.blade.php
    'trends-title' => 'Evolución de los promedios observados a lo largo del tiempo',
    'trends-description' => 'Las cifras a continuación muestran la evolución temporal de los volúmenes de tráfico horarios típicos (promedio) a lo largo del día para el modo, el intervalo de promediado y el día de la semana seleccionados. Las distintas fechas (o épocas) representan los momentos de cálculo de estos promedios. Por ejemplo, cuando se seleccionan "Coches", "Promedio estacional" y "Lunes", los datos etiquetados como 21 de julio de 2023 corresponden al tráfico promedio de coches los lunes entre el 21 de julio de 2023 y tres meses antes.',

    // monthly.blade.php
    'no-history' => 'sin historial',

    // includes/data-15min.blade.php
    'pedestrians' => 'Peatones',
    'two-wheelers' => 'Vehículos de dos ruedas',
    'cars' => 'Coches',
    'heavy-vehicles' => 'Vehículos pesados',
    'speed-v85' => 'Velocidad V85',
    'typical-average-footnote' => '* El promedio y su desviación estándar se basan en los últimos conteos estacionales. Los promedios varían según el día de la semana.',

    // includes/general.blade.php
    'pick-start-date' => 'Seleccione una fecha de inicio',
    'max-3-month-interval' => 'Intervalo máximo de 3 meses',
    'update' => 'Actualizar',

    // includes/header.blade.php
    'still-counting' => 'aún contando',
    'individual-installations-separator' => '----------- instalaciones individuales ---------',

    // includes/instance.blade.php
    'my-device' => '-- Mi dispositivo',

    // includes/subheader-segments.blade.php
    'segment-private' => 'Este segmento es privado. Los datos solo son visibles a nivel de instalación.',
    'segment-mixed-private' => 'Este segmento contiene instalaciones privadas y públicas (predeterminadas). Los datos privados nunca se utilizan para los datos de conteo a nivel de segmento.',
];
