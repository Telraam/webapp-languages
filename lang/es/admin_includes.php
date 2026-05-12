<?php

return [
    // Camera instances overview
    'camera-instances-header' => 'Instancias de cámara',
    'current-installation' => 'Instalación actual',
    'network-device-installation' => 'Instalación de dispositivo de red',
    'old-installations' => 'Instalaciones antiguas',
    'view-setup-page' => 'Ver página de configuración :name',

    // Camera instances overview row
    'no-date' => 'sin fecha',
    'no-address-yet' => 'Aún sin dirección',
    'no-serial-number' => 'Sin número de serie',
    'no-street-selected' => 'Ninguna calle seleccionada',
    'proceed-with-installation' => 'Continuar con la instalación',
    'segment-data' => 'Datos del segmento',
    'street-profile' => 'Perfil de calle',
    'stop-installation' => 'Detener instalación',
    'make-public' => 'Hacer público',
    'make-private' => 'Hacer privado',
    'edit-details' => 'Editar detalles',
    'edit-current-position' => 'Editar posición actual',
    'new-remote-installation' => 'Nueva instalación remota con este dispositivo',
    'more' => 'Más',

    // Modal: edit address typo
    'modal-address-typo-title' => '¿Hay un error tipográfico en la dirección u otra información incorrecta?',
    'modal-address-typo-registered-address' => 'Dirección registrada:',
    'modal-address-typo-body' => 'También puede cargar una foto de encabezado pública para este segmento o proporcionar información adicional sobre la visibilidad de los modos de transporte.',
    'modal-address-typo-confirm' => 'Sí, quiero cambiar',

    // Modal: edit location
    'modal-edit-location-title' => '¿Está seguro de que la posición actual de Telraam en el mapa es incorrecta?',
    'modal-edit-location-body' => 'Al elegir una nueva posición, todos los datos vinculados a esta instalación de Telraam se transferirán a la nueva ubicación. Si se ha movido el Telraam, el usuario debe iniciar una nueva configuración para garantizar que los datos recopilados hasta ahora queden vinculados a la ubicación correcta.',
    'modal-edit-location-confirm' => 'Confirmar',

    // Modal: public/private
    'modal-make-public-title' => '¿Está seguro de que desea hacer pública la instalación?',
    'modal-make-private-title' => '¿Está seguro de que desea hacer privada la instalación?',
    'modal-currently-private-body' => 'La instalación es actualmente privada. Al hacerla pública, cualquier dato recopilado a partir de este momento será visible para el público en el mapa, la página pública y accesible a través de la API pública.',
    'modal-currently-private-note' => 'Nota: Cambiar a público reducirá el coste en €15/mes (3 créditos menos).',
    'modal-currently-public-body' => 'La instalación es actualmente pública. Al hacerla privada, cualquier dato recopilado a partir de este momento estará oculto y solo será accesible a través del panel y la API avanzada a nivel de instalación.',
    'modal-currently-public-note' => 'Nota: Una instalación privada tiene un coste adicional de €15/mes (3 créditos).',
    'modal-make-public-btn' => 'Hacerla pública',
    'modal-make-private-btn' => 'Hacerla privada',

    // Modal: stop instance
    'modal-stop-title' => '¿Está seguro de que desea detener la instalación?',
    'modal-stop-warning' => 'Por favor, proceda con cuidado ya que esta acción no se puede deshacer.',
    'modal-stop-btn' => 'Detener la instancia',

    // Shared modal
    'modal-cancel' => 'Oh no, cancelar.',

    // Flag detail
    'flags-title' => 'Indicadores',
    'flags-last-update' => 'Última actualización de indicador (UTC)',
    'flags-none' => 'No hay indicadores disponibles',
    'flag-firmware' => 'Firmware',
    'flag-hello-rate' => 'Frecuencia de saludo',
    'flag-avg-signal-quality' => 'Calidad de señal promedio',
    'flag-completeness' => 'Completitud',
    'flag-uptime' => 'Tiempo activo',
    'flag-uptime-day' => 'Tiempo activo diurno',
    'flag-uptime-night' => 'Tiempo activo nocturno',
    'flag-excellent' => 'Excelente',
    'flag-suboptimal' => 'Subóptimo',
    'flag-poor' => 'Deficiente',

    // Network tracks dropdown
    'no-tracks-enabled' => 'No hay rutas habilitadas',

    // Status instance label
    'status-to-start' => 'Por iniciar',
    'status-installing' => 'Instalando',
    'status-no-counts' => 'Instalado, pero sin conteos',
    'status-counting' => 'Está contando',
    'status-counted-before' => 'Contó anteriormente',
    'status-stopped' => 'Detenido',
    'detail-active' => 'la instancia está activa',
    'detail-started-counting' => 'Empezó a contar',
    'detail-became-active' => 'Se activó',
    'detail-active-after-non-active' => 'Activo tras estar inactivo',
    'detail-same-user-segment' => 'Mismo usuario y segmento',
    'detail-diff-user-segment' => 'Dist. usuario y segmento',
    'detail-same-user-diff-segment' => 'Mismo usuario y dist. segmento',
    'detail-diff-user-same-segment' => 'Dist. usuario y mismo segmento',
    'detail-problematic' => 'Problemático',
    'detail-non-active-1day' => 'Inactivo 1+ día',
    'detail-non-active-1week' => 'Inactivo 1+ semana',
    'detail-non-active-2weeks' => 'Inactivo 2+ semanas',
    'detail-non-active-3weeks' => 'Inactivo 3+ semanas',
    'detail-non-active-4weeks' => 'Inactivo 4+ semanas',
    'detail-non-active' => 'Inactivo',
    'detail-active-after-problematic' => 'Activo tras ser problemático',
    'detail-diff-mac' => 'Dispositivo diferente',
    'detail-outboarded' => 'Usuario dado de baja',
    'detail-reason-unknown' => 'Motivo desconocido',
    'detail-network-admin-stopped' => 'Detenido por el administrador de red',
    'detail-user-new-setup' => 'El usuario inició una nueva configuración, la anterior se detuvo',

    // Status progress setup
    'status-other' => 'Otro',
];
